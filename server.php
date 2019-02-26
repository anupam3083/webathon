<?php
	if(isset($_POST['blockn']))
	{
		$blockname = $_POST['blockn'];

		if($blockname == 'A'){
			echo "<div id='1'>
					<label>1 </label>&nbsp;&nbsp;
					<button onclick='showFlower(1)'><img src='images/red.png'></button>
				  </div>";
			echo "<div id='2'>
					<label>2 </label>&nbsp;&nbsp;
					<button onclick='showFlower(2)'><img src='images/red.png'></button>
				  </div>";
			echo "<div id='3'>
					<label>3 </label>&nbsp;&nbsp;
					<button onclick='showFlower(3)'><img src='images/red.png'></button>
				  </div>";
			echo  "<div id='4'>
					<label>1 </label>&nbsp;&nbsp;
					<button onclick='showFlower(4)'><img src='images/red.png'></button>
				  </div>";
				}

		}
		if($blockname == 'B'){
			echo  "<div id='1'>
					<label>1 </label>&nbsp;&nbsp;
					<button onclick='showFlower(1)'><img src='images/red.png'></button>
				  </div>";
			echo  "<div id='2'>
					<label>1 </label>&nbsp;&nbsp;
					<button onclick='showFlower(2)'><img src='images/red.png'></button>
				  </div>";
			echo  "<div id='3'>
					<label>1 </label>&nbsp;&nbsp;
					<button onclick='showFlower(3)'><img src='images/red.png'></button>
				  </div>";
			echo  "<div id='4'>
					<label>1 </label>&nbsp;&nbsp;
					<button onclick='showFlower(4)'><img src='images/red.png'></button>
				  </div>";
				



				}
		if($blockname == 'C'){
			echo "C";
		}
		if($blockname == 'D'){
			echo "D";
		}

	
	if(isset($_POST['floors']))
	{
		$floor = $_POST['floors'];
		if($floor == 1){
			echo "<div id='101'>
					<label>101 </label>&nbsp;&nbsp;
					<button onclick='showrooms(101)'><img src='images/red.png'></button>
				  </div>";
		}
	}


?>