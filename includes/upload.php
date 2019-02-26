<head>

	<style>
	.subhii{
		width:100%;
		height:90%;

		margin-left: 50px;

	}

</style>
</head>
<body background="48130.jpg">

	<div class="subhii">
		<form action="" method="post" enctype="multipart/form-data">
			<div class="row">

				<div class="col-md-6">
					<input type="file" name="data" class="form-control">
				</div>
				<div class="col-md-6">
					<input type="submit"  name="submit" class="btn btn-primary" class="form-control" >
				</div>
			</div>	
		</form>
	</div>

	<?php
	if(isset($_POST['submit']))
	{
	
		$move="data/";
		$filename=$_FILES["data"]["name"];
		$ext=substr($filename,strrpos($filename,"."));
		if($ext=='.csv')
		{
			$message=move_uploaded_file($_FILES['data']['tmp_name'],$move.$filename);
			$file=fopen($move.$_FILES["data"]['name'],"r");
			$i=1;
			$count = 0;
			while(($data=fgetcsv($file,","))!==FALSE)
			{
				if($i==1)
				{
					$i++;
					continue;
				}

               
		   		  $sql="INSERT into students SET roll='$data[0]',name='$data[1]',room='$data[2]',block='$data[3]',region='$data[4]',phone='$data[5]',floor=$data[6]";				
						
		   		$res_insert=mysqli_query($conn,$sql);
	       		if($res_insert)
		   		{
		 			$count++;
		 		  }
	    		 
	          }
          			
			echo "<script>alert('".$count." rows added');</script>";
			fclose($file);
			unlink($move.$filename);
        }

		
		else
		{
			echo "<script>alert('please select the data file');</script>";

		}


	}
	?>