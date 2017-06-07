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
    <title>Simple Responsive Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
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
                        <a href="index.php" ><i class="fa fa-desktop "></i>Dashboard <span class="badge"></span></a>
                    </li>
                   

                    <li>
                        <a href="#"><i class="fa fa-table "></i>UI Elements  <span class="badge"></span></a>
                    </li>
                    <li >
                        <a href="blank.html"><i class="fa fa-edit "></i>Trazenje studenta  <span class="badge"></span></a>
                    </li>



                 <li>
                        <a href="blank2.php"><i class="fa fa-qrcode "></i>jquery</a>
                    </li>
                   
               
                    <li class="active-link">
                        <a href="wspretraga.php"><i class="fa fa-edit "></i>wsdl</a>
                    </li>
                    <li>
                        <a href="mvc.php"><i class="fa fa-table "></i>mvc</a>
                    </li>
                    
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
              
                <?php
				$conn = mysqli_connect("localhost", "root", "", "knjiznica");


					if (!$conn) {
					die('Connect Error: '.mysqli_connect_errno());
					}

				if (isset($_REQUEST["ime"])){
					$ime=$_REQUEST["ime"];
					$params=$ime;
					echo "Ispis  podataka:  ".$ime.""; 
					try{
						ini_set('soap.wsdl_cache_enabled',0);
						ini_set('soap.wsdl_cache_ttl',0);
					
					  $sClient = new SoapClient('http://localhost/rnwa/knjiznica/ispis.wsdl',
					  array(
					  'cache_wsdl'=>WSDL_CACHE_NONE,
					  'trace'=>1,
					  'user' => 'root',
					  'pass' => '',
					  'exceptions' => 0
					));
					 
					  $response = $sClient->doHello($params);
						
					  echo "<br><br><br>ODGOVOR:<br>";
					

						
					  $risponz = $sClient->__getLastResponse();
					 
					  
					  echo '<pre>' . $risponz . '</pre>';
					  


					} catch(SoapFault $e){
						echo $e->getMessage();
					}
				}
				else {

					echo "Napravi  pretragu studenata po imenu, unijeti naziv imena ili prezimena u polje ispod<br>  ";
					echo "<p>Forma poziva web servis koji pretražuje studente s nazivom koji ste unijeli</p> ";
					echo "<form method=\"get\" action=\"".htmlspecialchars($_SERVER["PHP_SELF"])."\">";
					echo "Naziv studenta: <input type=\"text\" name=\"ime\">";
					echo " <input type=\"submit\" name=\"submit\" value=\"Pretraga\"> ";
					echo "</form>";
					
				}
				
				?>    
				<br><br>
 <form action="helloclient.php" method="post">
                     <input type="text" class="form-control" placeholder="Tražilica Bez wsdla:" name="trazi">
                     <button>Traži </button>
                </form>				
    </div>
             <!-- /. PAGE INNER  -->
            </div>
       
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
