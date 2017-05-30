<?php # HelloServer.php
# Copyright (c) 2005 by Dr. Herong Yang, http://www.herongyang.com/
#
function hello($someone) { 
  $username = "root";
$password = "";
$hostname = "localhost"; 

$dbhandle = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");

$selected = mysql_select_db("knjiznica",$dbhandle)
  or die("Could not select knjiznica");

$result = mysql_query("SELECT ime,prezime, datum_posudbe,datum_povratka
						from posudba p
						join student s on s.id=p.id_studenta
						where ime =\"" . $someone."\" or datum_posudbe= \"" . $someone."\" or datum_povratka= \"" . $someone."\" ");
$response = array();
  
  while ($row = mysql_fetch_array($result)) {

$tmp = array();
		$tmp["ime"]= $row["ime"]; 
		$tmp["prezime"]= $row["prezime"]; 
		$tmp["datum_posudbe"]        = $row["datum_posudbe"];
		$tmp["datum_povratka"]        = $row["datum_povratka"];
		

								      

        array_push($response, $tmp);

    $privremeni = $privremeni
      ."\n ime: " . $row["ime"]
      ."\n prezime: " . $row["prezime"]
      ."\n datum_posudbe: " . $row["datum_posudbe"]
      ."\n datum_povratka: " . $row["datum_povratka"]
      

      ."\n \n";
}



    $jsonn = json_encode($response);
  
  
  //return $jsonn;
      return $privremeni;
} 
   $server = new SoapServer(null, 
      array('uri' => "urn://www.herong.home/res"));
   $server->addFunction("hello"); 
   $server->handle(); 
?>