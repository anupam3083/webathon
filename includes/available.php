
<?php
if($_SESSION['username']=="")
{
	echo "<script>location.href='login.php'</script>";

}
include("config.php");
?>

<?php
include("config.php");
$block="SELECT DISTINCT blockname FROM `blocks` ";
$res=mysqli_query($conn,$block);
//$floor="SELECT DISTINCT floor FROM blocks WHERE blockname='A'";
//$res1=mysqli_query($conn,$floor);
?>
<head>

	<style>
	.subhii{
		width:100%;
		height:75%;	  
		margin-left: 50px;
	}

</style>
</head>
<div class="subhii">

	<table id="example" class="table table-striped table-bordered" style="width:100%">
		<thead>
			<tr>
				<th>BLOCKS</th>
				<th>FLOORS</th>
				<th>TOTAL ROOMS</th>
				<th>AVAILABLE ROOMS</th>

			</tr>
		</thead>
		<tbody>
        	<!-- <tr>
        		<td rowspan="2">A</td>
        		<td>B</td>
        		<td>C</td>
        		<td>D</td>
        	</tr>
        	<tr>
        		<td>B</td>
        		<td>C</td>
        		<td>D</td>
        	</tr> -->
        	<?php
        	$previous_block = "";
        	while($row=mysqli_fetch_array($res))
        	{

        		?>
        		<?php
        		$sel2="SELECT DISTINCT floor FROM blocks WHERE blockname='$row[0]' ";
        		
        		$res2 = mysqli_query($conn, $sel2);
        		$count = mysqli_num_rows($res2);
        		?>
        			
        		<?php
        		while ($Fet = mysqli_fetch_array($res2)) {
        		$sel3="SELECT * FROM blocks WHERE blockname='$row[0]' AND floor='$Fet[0]' ";
        		$sel4 = "SELECT * FROM students WHERE `block`='$row[0]' AND floor='$Fet[0]'";
        		$rooms_filled_count = mysqli_num_rows(mysqli_query($conn, $sel4));
        		$rooms_list = mysqli_fetch_array(mysqli_query($conn, $sel3));
        		$available=$rooms_list['rooms']-$rooms_filled_count;
        		if($available>0)
        				{
        			
        			if ($previous_block=="" || $previous_block!=$row[0]) {
        				?> 
        				<tr >

        				<td rowspan="<?php echo $count ?>"><?php echo $row[0]?></td>
        				<?php
        			}
        			?> 
        			<td><?php echo $Fet[0] ?></td>
        			<td><?php echo $rooms_list['rooms'] ?></td>
        			<td><a href="rooms.php?block=<?php echo $row[0]?>&floor=<?php echo $Fet[0] ?>&totalrooms=<?php echo $rooms_list['rooms'] ?>"><?php echo $available?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Check available rooms</a></td>
        			</tr>
                     <?php
        			 }
        			 else{
        			  ?> 
        				<tr>

        				<td rowspan="<?php echo $count ?>"><?php echo $row[0]?></td>
        				
        		
        			
        			<td><?php echo $Fet[0] ?></td>
        			<td><?php echo $rooms_list['rooms'] ?></td>
        			<td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ALL ROOMS ARE BOOKED HERE</b> </td>
        			</tr>
                    <?php
        			 }
        			 ?>

        			<?php
        			$previous_block = $row[0];
        		}
        		?> 




        		<?php

        	}

        	?>

        </tbody>        
    </table>
</div>





<script>
	$(document).ready(function() {
		$('#example').DataTable({
			"pageLength": 5
		});

	} );
</script>