<?php 

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

//banco de dados https://auth-db186.hostinger.com/index.php?db=u835826360_ac&target=db_structure.php
$host = "sql186.main-hosting.eu";
$banco = "u835826360_ac";
$user = "u835826360_ac";
$password = "KxzsePL&w1N";


$mysqli = mysqli_connect($host, $user, $password, "u835826360_ac");

if (mysqli_connect_errno())
{
    printf("Cone&ccedil;&atilde;o falhou: %s\n", mysqli_connect_error());
    
    exit();
}


$queryT = ("SELECT * FROM dados_inventario ORDER BY id");
$resultT = mysqli_query($mysqli, $queryT) or die("Algum problema na query".mysql_Error());
$num_rowsT = mysqli_num_rows($resultT);


while($rowT = mysqli_fetch_assoc($resultT))
{
    
    $clienteT = $rowT["dados"];
    $dadosT = explode("--",$clienteT);
    
    // print_r($dadosT);
    
    
    $volume1 = preg_replace('/[^0-9]/', '', $dadosT[33]);
    $temperatura1 = str_replace("-", "", $dadosT[44]);
    
}
//echo json_encode($countries = array($tipo));
 echo json_encode($countries = array($volume1.$temperatura1));
?>

