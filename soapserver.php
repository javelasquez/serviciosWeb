<?php

// server
class MiPrimerSoap
{
  public function saludo($name)
  {
    return 'Hola, '.$name.'!';
  }
  
  public function suma($num1,$num2)
  {
    return $num1+$num2;
  }
}

$options= array('uri'=>'http://localhost:90/soap');
$server=new SoapServer(NULL,$options);
$server->setClass('MiPrimerSoap');
$server->handle();



?>