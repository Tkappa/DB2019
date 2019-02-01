<!DOCTYPE html>
<html lang="en">

<head>
  <title>DB</title>
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/site.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.html">AlphaDB</a>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <p class="nav-link" href="index.html">Valentina Ferraioli</p>
          </li>
          <li class="nav-item">
            <p class="nav-link" href="about.html">Igor Ershov</p>
          </li>
          <li class="nav-item">
            <p class="nav-link" href="post.html">Stefano Andriolo</p>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container cbody">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-preview">
          <h2 class="post-title">
            Risultato
          </h2>
        </div>
      </div>
      <hr>
    </div>

    <div class="row">


    </div>
    <?php
      $server = "golem.cs.unibo.it";
      $username = "my1902";
      $password = "Eech4Ieh";

      $conn = mysqli_connect($server,$username,$password,$username);

      if ($conn->connect_error){
      	die("Connection failed:" . $conn->connect_error);
      }

      $sql = "insert into sede(piva,nome,indirizzo) values ( '".$_POST["piva"]."','".$_POST["nome"]."','".$_POST["indirizzo"]."')";

      echo("<p>Query inserita : ".$sql."</p>");

      $result = $conn->query($sql);

      if($result){
        if(!is_bool($result)){
          echo("<table border=1>");
        while($row = mysqli_fetch_assoc($result)){
          echo("<tr>");
          foreach($row as $value){
          	echo ("<td>".$value."</td>");
            }
            echo("</tr>");
        	}
          echo("</table>");
        }
        else{
          echo ("<p>Query eseguita con successo<p>");
        }

      }
      else{
        echo ("<p>Query non valida: ". mysqli_error($conn)."<p>");
      }

      $sql = "insert into situata(sede,paese) values ( '".$_POST["piva"]."','".$_POST["iso"]."')";

      echo("<p>Query inserita : ".$sql."</p>");

      $result = $conn->query($sql);

      if($result){
        if(!is_bool($result)){
          echo("<table border=1>");
        while($row = mysqli_fetch_assoc($result)){
          echo("<tr>");
          foreach($row as $value){
          	echo ("<td>".$value."</td>");
            }
            echo("</tr>");
        	}
          echo("</table>");
        }
        else{
          echo ("<p>Query eseguita con successo<p>");
        }

      }
      else{
        echo ("<p>Query non valida: ". mysqli_error($conn)."<p>");
      }


      $conn->close();
    ?>

  <a href="operazione2.html">Inserisci ancora </a>
  </div>
</body>
</html>
