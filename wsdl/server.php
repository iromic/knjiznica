<?php
if(!extension_loaded("soap")){
  dl("php_soap.dll");
}

ini_set("soap.wsdl_cache_enabled","0");
$server = new SoapServer("hello.wsdl");

function imeStudenta($ime){


  return "Hello, ".$ime;
}

$server->AddFunction("ImeStudenta");
$server->handle();
?>