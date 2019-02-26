
<?php
session_start();
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
$floor="SELECT DISTINCT floor FROM blocks WHERE blockname='$block'";
$res1=mysqli_query($conn,$floor);
$blockname1 = $_GET['block'];
$floor1 = $_GET['floor'];
$totalrooms = $_GET['totalrooms'];

?>
<head>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <title>Dashboard</title>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

   <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&lang=en">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css">
  <link rel="stylesheet" href="styles.css">
  <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">


    <style>
    .subhii{
        width:95%;
        height:75%;   
        margin-left: 50px;
        
    }

</style>
</head>
    <body background="">
<div class="subhii">

    <table id="example" class="table table-striped table-bordered" style="width:50%">
        <thead>
            <tr>
                
                <th>AVAILBLE ROOMS</th>
                <th>BOOK</th>

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
            $query = "SELECT * FROM `students` WHERE block='$blockname1' and floor='$floor1'";

            $fetch = mysqli_query($conn, $query);
            $totalSelect = mysqli_num_rows($fetch);
            $i = 0;
            $j = 0;
            $roomstart = ((string)$floor1.'0'.(string)$i);
            
            if($fetch && $totalSelect >=0){
                $numofroom = array();
                $k = 0;
                while ($row = mysqli_fetch_array($fetch)) 
                {
                # code...
                    $k = $k+1;
                    // echo "1";
                    array_push($numofroom, $row['room']);   
                    
                }
                
                while($i<=$totalrooms)
            {
                // echo ;
                
                // echo $roomstart;exit();
                if(!array_search($roomstart,$numofroom))
                    { 
                     $roomstart;

                        ?>
                        <?php $select="select *from students where room='$roomstart'";         
                           $res_select=mysqli_query($conn,$select);
                           $rc=mysqli_num_rows($res_select);
                           if($rc==0)
                           {
                            ?>
                        <tr>
                            <td><?php echo $roomstart;?></td>
                            
                            <td><a href="register.php?blockname=<?php echo $blockname1 ?>&floor=<?php echo $floor1?>&roomnumber=<?php echo $roomstart?>">BOOK NOW</a></td>
                        
                        </tr>
                        <?php
                        
                        }
                    } 
                    $i = $i+1;
                    $j = $j + 1;

                    if($j == $k){
                         $j."  ";
                        $j = 0;
                    }
                    if($i>9){

                      $roomstart = (int)((string)$floor1.(string)$i);
                  }
                  else{


                    $roomstart = (int)((string)$floor1.'0'.(string)$i);
                    }             
               }
            }
            else{
                echo "Data is not available";
            }
            ?>
                      
        </tbody>        
    </table>
</div>
</body>




<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "pageLength": 10
        });

    } );
</script>