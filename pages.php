<?php
@$p=$_GET['p'];


switch($p)
{    
	case 'available':include("includes/available.php");
	   break;
    case 'addblocks':include("includes/addblock.php");
	   break;
	case 'student':include("includes/table.php");
	  break;
	  case 'home':include("includes/home.php");
	  break; 

    case 'upload':include("includes/upload.php");
	  break; 
   default:include('includes/home.php');
}



?>