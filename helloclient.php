<?php # HelloClient.php
# Copyright (c) 2005 by Dr. Herong Yang
#  
	$naziv=$_POST['trazi'];
   $client = new SoapClient(null, array(
      'location' => "http://localhost/rnwa/knjiznica/helloserver.php",
      'uri'      => "urn://neretva.fsr.ba/hello",
      'trace'    => 1 ));

   $return = $client->__soapCall("hello",array("$naziv"));
   	echo("\n<pre>".$return)."</pre>";

   

 


?>