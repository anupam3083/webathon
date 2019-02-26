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

}

.main{
 	margin-top: 70px;
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
 	background-color: #D0D3D4;
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
    padding: 40px 40px;

}

.login-button{
	margin-top: 5px;
}

.login-register{
	font-size: 11px;
	text-align: center;
}

	</style>
	</head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<body background="48130.jpg">
		<div class="container">
			<div class="row main">
				 
				<div class="panel-heading">
	               <div class="panel-title text-center">
						<h1 class="title">Block registration</h1>
	               		<hr />
					</div>
	            </div> 
				<div class="main-login main-center">
					<form class="form-horizontal" id="blockdata" method="post" action="">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Block Name</label><br>
							<div class="col-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="blockname" id="name"  placeholder="Enter Block Name"/>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">floors no.</label>
							<div class="col-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input autocomplete="off" type="number" class="form-control" name="floorsnumber" id="floorsnumber"  placeholder="Enter No.of floors"/>
								</div>
							</div>
						</div>
						<div id="perfloors">
						</div>
						
						
						<div class="form-group">
							<input type="submit" class="btn btn-primary btn-lg btn-block login-button" value="Submit" id="addbtn" name="submit">
						</div>		
					</form>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			$("#floorsnumber").change(function(){
				var totalfloor = $("#floorsnumber").val();
				$("#perfloors").empty();

				
				for(var i = 1 ; i<=totalfloor; i++){
					$("#perfloors").append("<div class='form-group show ' id='remove'><label for='name' class='cols-sm-2 control-label'>floors "+ i +"</label><div class='col-sm-10'><div class='input-group'><span class='input-group-addon'><i class='fa fa-user fa' aria-hidden='true'></i></span><input autocomplete='off' type='number' class='form-control' name='room"+i+"' id='floor"+i+"'  placeholder='Enter number of rooms'/></div></div></div>");
				}
			});
		</script>
	
		
	</body>
</html>
<?php
 if(isset($_POST['submit']))
 {
	
	$blockname=$_POST['blockname'];
	$floor=$_POST['floorsnumber'];
      
    $select="SELECT `blockname`, `floor`FROM `blocks` WHERE blockname='$blockname' and floor='$floor'";			
	$res_select=mysqli_query($conn,$select);
	$rc=mysqli_num_rows($res_select);
	if($rc==0)
	{
	for($i=1;$i<=$floor;$i++)
	{
		$r="room".$i;
		$room=$_POST[$r];
		$insert="insert into blocks (`blockname`,`floor`,`rooms`)
		values('$blockname','$i','$room')";
		$res_insert=mysqli_query($conn,$insert);
	}
	if($res_insert)
		{
			echo "<script>alert('inserted succesfully');</script>";
			
		}
        else{
        	echo "<script>alert(' not inserted ');</script>";
        }
    }
    else{
    	echo "<script>alert(' already inserted ');</script>";
    }
			
}
?>
