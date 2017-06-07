<?php

include_once($_SERVER['DOCUMENT_ROOT']."/rnwa/knjiznica/models/autor.php");


class Model {
	public function getAutorList()
	{
		// here goes some hardcoded values to simulate the database
		
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "knjiznica";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM autor";
//mysql_query("SET NAMES 'utf8'", $connection);
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	$arej = array();
    // output data of each row
	
    while($row = $result->fetch_assoc()) {
    //    echo "naziv_tvrtke: " . $row["NAZIV_TVRTKE"]. " - Naziv tvrke: " . $row["NAZIV_TVRTKE"]." Adresa: " . $row["ADRESA"]. " Vlasnik: " . $row["VLASNIK"]. "<br>";
    array_push($arej, new Autor($row["ID"], $row["naziv_autora"]));

	}
} else { 
$arej = array();
    //echo "0 results";
}
$conn->close();
		return $arej;
	}
	
	public function getAutor($naziv)
	{

		
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "knjiznica";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM autor WHERE id = ". $naziv;
//mysql_query("SET NAMES 'utf8'", $connection);
$result = $conn->query($sql);
$test = new Autor("a", "b");
if ($result->num_rows > 0) {
	$arej = array();
    // output data of each row
	
    while($row = $result->fetch_assoc()) {

	    array_push($arej, new Autor($row["id"], $row["naziv_autora"]));

	$test = new Autor($row["ID"], $row["naziv_autora"]);
	}
} else { 
$arej = array();

    //echo "0 results";
}
$conn->close();
		return $test;
	}
	
	}
	

?>