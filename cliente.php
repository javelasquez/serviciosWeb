<?php
// client
/*



$client=new SoapClient(NULL,$options);

*/

if(isset($_REQUEST["nombre"])){
  $nombre=$_REQUEST["nombre"];
}else{
  $nombre='Andres';
}

$options= array(
  'location' 	=>	'http://localhost:90/soap/sinwsdl/soapserver.php',
  'uri'		=>	'http://localhost:90/soap/sinwsdl/soapserver.php'
);
$client=new SoapClient(NULL,$options);

if(isset($_REQUEST["nombre"])){
  $data['respuesta']=$client->saludo($nombre.'!!');
  echo json_encode($data);
}else{
  echo $client->saludo($nombre.'!!')."</br>";
echo "resultado de la suma ".$client->suma(3,5); //  8
}


?>