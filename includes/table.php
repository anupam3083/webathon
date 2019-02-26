
<?php
if($_SESSION['username']=="")
{
	echo "<script>location.href='login.php'</script>";

}
include("config.php");
?>

<?php
include("config.php");
$select="select *from students";
$res=mysqli_query($conn,$select);

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
                <th>Roll</th>
                <th>Name</th>
                <th>room no.</th>
                <th>block</th>
                <th>region</th>
                <th>floor</th>
                <th>phno</th>
            </tr>
        </thead>
        <tbody>
		<?php

		while($row=mysqli_fetch_array($res))
		{
        
			?>
            <tr>
                <td><?php echo $row[1]?></td>
                <td><?php echo $row[2]?></td>
                <td><?php echo $row[3]?></td>
                <td><?php echo $row[4]?></td>
                <td><?php echo $row[6]?></td>
                <td><?php echo $row[7]?></td>
                <td><?php echo $row[5]?></td>
            </tr>
        <?php
		
		}
		?>  

      
    </tbody>        
</table>
</div>





<script>
$(document).ready(function() {
    $('#example').DataTable({
		"pageLength": 10
	});
	
} );
</script>