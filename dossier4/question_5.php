<?php 

try{
$cnx=new PDO("mysql:host=localhost;dbname=AixDB", "root","restau_pass");

$stm=$cnx->prepare("select * from restaurant ");
$stm->execute();
$data=$stm=fetchall();
$tab=array();
foreach ($data as $v) {
	$tab[]=$v;
}
echo  json_encode($tab);
}catch (PDOException $e){
	die($e->getMessage());
}
?>