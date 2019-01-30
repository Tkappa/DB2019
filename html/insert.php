<?php

$server = "golem";
$username = "my1902";
$password = "Eech4Ieh";

$conn = new mysqli($server,$username,$password);

if ($conn->connect_error){
	die("Conn failed:" . $conn->connect_error);
}

$sql = "INSERT INTO TEST(nome,numero) VALUES ( '".$_POST["nome"]."','".$_POST["numero"]."')";

$conn->query($sql);
echo "Inserito :". $_POST["nome"]. " , ". $_POST["numero"].";

echo "La tabella è ora : ";

$sql = "SELECT * FROM test";

$result = $conn->query($sql); 

while($row = $result->fetch_assoc()){
	echo "name: " .$row["name"].", numero:".$row["numero"].", id: ".$row["ID"]."<br>";
	}

$conn->close();
?>
