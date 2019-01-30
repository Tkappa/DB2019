<?php

$server = "golem.cs.unibo.it";
$username = "my1902";
$password = "Eech4Ieh";

$conn = new mysqli_connect($server,$username,$password,$username);

if ($conn->connect_error){
	die("Connection failed:" . $conn->connect_error);
}

$sql = "insert into test(nome,numero) values ( '".$_POST["nome"]."','".$_POST["numero"]."')";

$conn->query($sql);
echo ("Inserito :". $_POST["nome"]. " , ". $_POST["numero"]);

echo ("La tabella è ora : ");

$sql = "SELECT * FROM test";

$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
	echo ("name: " .$row["name"].", numero:".$row["numero"].", id: ".$row["ID"]."<br>");
	}

$conn->close();
?>
