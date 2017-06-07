<?php
if(!extension_loaded("soap")){
  dl("php_soap.dll");
}

ini_set("soap.wsdl_cache_enabled",0);
$server = new SoapServer("http://localhost/rnwa/knjiznica/ispis.wsdl");

function doHello($yourName){
 
$username = "root";
$password = "";
$hostname = "localhost"; 

$dbhandle = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");

$selected = mysql_select_db("knjiznica",$dbhandle)
  or die("Could not select knjiznica");


$result = mysql_query("SELECT student.ime,student.prezime, knjiga.naziv_knjige,autor.naziv_autora
            FROM student 
            JOIN posudba  ON posudba.id_studenta= student.id
            JOIN knjiga  ON posudba.id_knjige= knjiga.id
            JOIN autor  ON autor.id=knjiga.id_autora
            WHERE student.ime  LIKE '%{$yourName}%' OR student.prezime LIKE '%{$yourName}%'");
$response = array();
  
  while ($row = mysql_fetch_array($result)) {

$tmp   = array();
		$tmp["ime"]= $row["ime"]; 
		$tmp["prezime"] = $row["prezime"];
		$tmp["naziv_knjige"]= $row["naziv_knjige"];
		$tmp["naziv_autora"]= $row["naziv_autora"];
		

								      

        array_push($response, $tmp);

    $privremeni = $privremeni
     ."\n ime: " . $row["ime"] 
      ."\n prezime: " . $row["prezime"] 
      ."\n naziv_knjige: " . $row["naziv_knjige"]
      ."\n naziv_autora: " . $row["naziv_autora"]
      ."\n \n";
	 
}



    $jsonn = json_encode($response);
  
  
  return $jsonn;
      return $privremeni;
	  
	  

}

$server->AddFunction("doHello");
$server->handle();
?>




