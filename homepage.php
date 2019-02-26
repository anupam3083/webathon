<?php
session_start();

if($_SESSION['username']=="")
{
	echo "<script>location.href='login.php'</script>";

}
include("config.php");
?>





<!doctype html>
<html lang="en">
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
  .main123{
    width: 100%;
    background: red;

  }
  .sub1123{
    width: 10%;
    background: yellow;
    height: 100px;
  }
  

  html, body {
    font-family: 'Roboto', 'Helvetica', sans-serif;
  }
  .demo-avatar {
    width: 100px;
    height: 60px;

    
  }
  .demo-layout .mdl-layout__header .mdl-layout__drawer-button {
    color: rgba(0, 0, 0, 0.54);
  }
  .mdl-layout__drawer .avatar {
    margin-bottom: 16px;
  }
  .demo-drawer {
    border: none;
  }
  /* iOS Safari specific workaround */
  .demo-drawer .mdl-menu__container {
    z-index: -1;
  }
  .demo-drawer .demo-navigation {
    z-index: -2;
  }
  /* END iOS Safari specific workaround */
  .demo-drawer .mdl-menu .mdl-menu__item {
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
  }
  .demo-drawer-header {
    box-sizing: border-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    padding: 16px;



  }
  .demo-avatar-dropdown {
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    position: relative;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    width: 100%;
  }

  .demo-navigation {
    -webkit-flex-grow: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
  }
  .demo-layout .demo-navigation .mdl-navigation__link {
    display: -webkit-flex !important;
    display: -ms-flexbox !important;
    display: flex !important;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    color: rgba(255, 255, 255, 0.56);
    font-weight: 500;
  }
  .demo-layout .demo-navigation .mdl-navigation__link:hover {
    background-color: #00BCD4;
    color: #37474F;
  }
  .demo-navigation .mdl-navigation__link .material-icons {
    font-size: 24px;
    color: rgba(255, 255, 255, 0.56);
    margin-right: 32px;
  }

  .demo-content {
    max-width: 1080px;
  }

  .demo-charts {
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
  }
  .demo-chart:nth-child(1) {
    color: #ACEC00;
  }
  .demo-chart:nth-child(2) {
    color: #00BBD6;
  }
  .demo-chart:nth-child(3) {
    color: #BA65C9;
  }
  .demo-chart:nth-child(4) {
    color: #EF3C79;
  }
  .demo-graphs {
    padding: 16px 32px;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-align-items: stretch;
    -ms-flex-align: stretch;
    align-items: stretch;
  }
/* TODO: Find a proper solution to have the graphs
 * not float around outside their container in IE10/11.
 * Using a browserhacks.com solution for now.
 */
 _:-ms-input-placeholder, :root .demo-graphs {
  min-height: 664px;
}
_:-ms-input-placeholder, :root .demo-graph {
  max-height: 300px;
}
/* TODO end */
.demo-graph:nth-child(1) {
  color: #00b9d8;
}
.demo-graph:nth-child(2) {
  color: #d9006e;
}

.demo-cards {
  -webkit-align-items: flex-start;
  -ms-flex-align: start;
  align-items: flex-start;
  -webkit-align-content: flex-start;
  -ms-flex-line-pack: start;
  align-content: flex-start;
}
.demo-cards .demo-separator {
  height: 32px;
}
.demo-cards .mdl-card__title.mdl-card__title {
  color: white;
  font-size: 24px;
  font-weight: 400;
}
.demo-cards ul {
  padding: 0;
}
.demo-cards h3 {
  font-size: 1em;
}
.demo-updates .mdl-card__title {
  min-height: 200px;
  background-image: url('images/dog.png');
  background-position: 90% 100%;
  background-repeat: no-repeat;
}
.demo-cards .mdl-card__actions a {
  color: #00BCD4;
  text-decoration: none;
}

.demo-options h3 {
  margin: 0;
}
.demo-options .mdl-checkbox__box-outline {
  border-color: rgba(255, 255, 255, 0.89);
}
.demo-options ul {
  margin: 0;
  list-style-type: none;
}
.demo-options li {
  margin: 4px 0;
}
.demo-options .material-icons {
  color: rgba(255, 255, 255, 0.89);
}
.demo-options .mdl-card__actions {
  height: 64px;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  box-sizing: border-box;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center
  }
.r1{
  text-align:center;
  font-family:"Times New Roman",Times,sans-serif 

}
</style>
</head>
<body>

  
  <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
    <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
      <div class="row r1">

    <h1><b>ADITYA'S HOSTEL</b></h1>
  </div>
    </h1>
    </header>
    <div class="demo-drawer mdl-layout__drawer mdl-color-- mdl-color-text--blue-grey-50">
      <header class="demo-drawer-header" style="background: #4585 !important;">
        <img src="aditya.jpg" class="demo-avatar" style="margin:0 auto;">
        <div class="demo-avatar-dropdown">
          <span style="margin:0 auto;"> <?php echo $_SESSION['username'] ?></span>

        </div>

      </header>
       <nav class="demo-navigation mdl-navigation mdl-color--orange">
          <a class="mdl-navigation__link" href="?p=available"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">forum</i>Available room</a>
      
        <a class="mdl-navigation__link" href="?p=addblocks"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">forum</i>ADD BLOCKS</a>
        
        <a class="mdl-navigation__link" href="?p=student"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">inbox</i>Students</a>
         <a class="mdl-navigation__link" href="?p=upload"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">report</i>upload</a>
       
        
      

                 
        <a class="mdl-navigation__link" href="logout.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">people</i>Logout</a>
        <div class="mdl-layout-spacer"></div>
        

      </nav>
    </div>

    
    <div class="col-md-9 col-md-offset-2"><br>
      <!-- content starts-->
       <?php 
  include("pages.php");
  ?>

       <!-- content ends-->
   

    </div>



  </div>

</body>
</html>




