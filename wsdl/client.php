<?php
try{
	ini_set('soap.wsdl_cache_enabled',0);
	ini_set('soap.wsdl_cache_ttl',0);
  //$sClient = new SoapClient('http://localhost/test/wsdl/hello.xml,);
  
  //last know config
  //$sClient = new SoapClient('http://localhost:50001/fsr/2017/rnwa/web-services/primjer_1/hello.wsdl',array('cache_wsdl'=>WSDL_CACHE_NONE));
    
	$sClient = new SoapClient('http://localhost/rnwa/knjiznica/wsdl/hello.wsdl',array('cache_wsdl'=>WSDL_CACHE_NONE, 'trace'=> 1,'exception'=> 1 ));
  //$sClient = new SoapClient('hello.wsdl');
  
  
  //last know config
  //$response = $sClient->doHello($params);
  //$params = "Aqila";
  
  $params = array("Aqila");
  $response = $sClient->__soapCall(imeStudenta,$params);
  
  var_dump($response);
  
  
} catch(SoapFault $e){
  print_r($e);
}
