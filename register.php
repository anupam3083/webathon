<?php
include("config.php");
?>

<!------ Include the above in your HEDER.......!>
<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Website CSS style -->
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>Admin.</title>
		<style>
		/*
/* Created by Filipe Pina
 * Specific styles of signin, register, component
 */
/*
 * General styles
 */

body, html{
     height: 100%;
 	background-repeat: no-repeat;
 	background-color:none;
 	font-family: 'Oxygen', sans-serif;
 	opacity: 1;

}

.main{
 	margin-top: 70px;
 	opacity: 0.8;
}

h1.title { 
	font-size: 50px;
	font-family: 'Passion One', cursive; 
	font-weight: 400; 
}

hr{
	width: 10%;
	color: #fff;
}

.form-group{
	margin-bottom: 15px;
}

label{
	margin-bottom: 15px;
}

input,
input::-webkit-input-placeholder {
    font-size: 11px;
    padding-top: 3px;
}

.main-login{
 	background-color: none;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);




}

.main-center{
 	margin-top: 30px;
 	margin: 0 auto;
 	max-width: 400px;
    padding: 40px 30px;
    border: 0.5px solid #9C9C9C;
    background: #46464699;
    color: #fff;

}

.login-button{
	margin-top: 8px;

}

.login-register{
	font-size: 11px;
	text-align: center;
}

		</style>
	</head>
	<body background="48130.jpg">
		<div class="container">
			<div class="row main">
				 
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		
						<h1 class="title">ROOM ALLOCATION</h1>
	               		<hr />
	               	

					</div>
	            </div> 
				<div class="main-login main-center">
					<form class="form-horizontal" method="post" action="">
						
						<div class="form-group">
							<label for="name" class="cols-md-2 control-label">STUDENT NAME</label><br>
							<div class="col-md-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="student" id="
									name"  placeholder="name"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="name" class="cols-md-2 control-label">ROLL NUMBER</label>
							<div class="col-md-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="rollno" id="rollno"  placeholder="student roll no.">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">mobile no.</label>
							<div class="col-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="number" class="form-control" name="mobile" id="mobile"  placeholder="student mob no.">
								</div>
							</div>
						</div>
                        <div class="form-group">
							<label for="name" class="cols-sm-2 control-label">REGION</label><br>
							<div class="col-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="region" id="
									region"  placeholder="north/south"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-primary btn-lg btn-block login-button" value="Submit" name="submit">
						</div>		
					</form>
				</div>
			</div>
		</div>	
	</body>
</html>
<?php
 if(isset($_POST['submit']))
 {
	
	$block_name = $_GET['blockname'];
	$floor = $_GET['floor'];
	$roomnumber = $_GET['roomnumber'];
	$rollno=$_POST['rollno'];
	$name=$_POST['student'];
	$phone=$_POST['mobile'];
    $region=$_POST['region'];
	
	$select="select *from students where roll='$rollno'";			
	$res_select=mysqli_query($conn,$select);
	$rc=mysqli_num_rows($res_select);
	if($rc==0)
	{

	$insert="INSERT INTO `students`( `name`, `roll`, `room`, `block`, `phone`, `region`, `floor`, `status`) VALUES ('$name','$rollno','$roomnumber','$block_name','$phone','$region','$floor','1')";
	$query = mysqli_query($conn, $insert);
	if($query){
		?>
		<script type="text/javascript">
			alert("Room booked successfully");
			location.href='homepage.php';
		</script>
		<?php
	}
	
}
     else
	{
		echo "<script>alert('your room is already booked');</script>";
	}
	echo "<script>location.href='homepage.php'</script>";
   
}
?>
