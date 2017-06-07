<?php
if (isset($_COOKIE['uname'])){
$prijavljen=true;
$razina=$_COOKIE['razina'];
}
else {
$prijavljen=false;
$razina=0;
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Knjiznica</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>


</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="assets/img/logo.png" />
                    </a>
                </div>
              
                 
                <?php
if(!isset($_COOKIE['uname']))
    {
                echo' <form method="post" action="prijava.php" >
                     <ul class="nav navbar-nav" style="float: right; padding: 1%">
                    
                     <li>
                    <input type="email" class="form-control" placeholder="Korisnicko ime:" name="username">
                    </li>
                    <li>
                    <input type="password" class="form-control" placeholder="Lozinka:" name="password">
                    </li>
                    <input class="btn btn-primary" type="submit" name="Prijava " value="Prijavi se" >
                    </ul>
                    </form>';
                }
                else
                {
                    echo '
                    <form method="post" action="logout.php" >
                    <ul class="nav navbar-nav" style="float: right; padding: 1%">
                    <li>
                    <input class="btn btn-primary" type="submit" name="Prijava " value="Odjavi se" >
                    </li
                    </ul>
                    </form>
                    ';
                }
                    ?>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 

 <li >
                        <a href="index.php" ><i class="fa fa-desktop "></i>HOME <span class="badge"></span></a>
                    </li>
                   

                    <li>
                        <a href="#"><i class="fa fa-table "></i>UI Elements  <span class="badge"></span></a>
                    </li>
                    <li >
                        <a href="blank.php"><i class="fa fa-edit "></i>Pretraga studenata  <span class="badge"></span></a>
                    </li>



                 <li class="active-link">
                        <a href="blank2.php"><i class="fa fa-qrcode "></i>jquery</a>
                    </li>
                    <li>
                        <a href="wspretraga.php"><i class="fa fa-edit "></i>wsdl</a>
                    </li>
                    <li>
                        <a href="mvc.php"><i class="fa fa-table "></i>MVC</a>
                    </li>
                    
                   
               
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Traženje studenta </h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                 <div>
                
                
                
         
<!--<script>
    function showHint(str) {
        if (str.length == 0) { 
            document.getElementById("txtHint").innerHTML = "";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "student.php?q=" + str, true);
            xmlhttp.send();
        }
}
</script>
-->


<p><b>...započni pretragu...</b></p>
<div class="col-lg-4 col-md-4">
	 <div class="col-sm-10 col-xs-8 col-lg-10" style="background-color:#f5f5ef"> <h2 class="naslov">Stranica autori </h2>
													<br><p class="pass"> <?php 
	include_once("controllers/Controller.php");

	$controller = new Controller();
	$controller->invoke();

?> </p>
			<br>
					</div>
		<div id="txtHint"><b class="help-block"></b></div>
              </hr>
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    
           
    <div class="footer">
      
    
             <div class="row">
                <div class="col-lg-12" >
                    &copy;  2014 yourdomain.com | Design by: <a href="http://binarytheme.com" style="color:#fff;"  target="_blank">www.binarytheme.com</a>
                </div>
        </div>
        </div>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
