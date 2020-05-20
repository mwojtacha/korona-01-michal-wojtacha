<html>
  <head>
    <title>Michał Wojtacha</title>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
  </head>

  <body>
  <div class="cont">
    <div class="header"><a href="../index.html"><img src="../Logo.png" height="300px"></div></a>
    <div class="sidebar">
      <ul class="menu">
        <li class="kwadrat">
        <div class="ty">
          <a class="text2" href="../villgers/Katt/index.html">Katt</a> <br/>
          <a class="text2" href="../villgers/Antonio/index.html">Antonio</a> <br/>
          <a class="text2" href="../villgers/Sherb/index.html">Sherb</a> <br/>
          <a class="text2" href="../villgers/Chevre/index.html">Chevre</a> <br/>
          <a class="text2" href="../villgers/Apple/index.html">Apple</a> <br/>
          <a class="text2" href="../villgers/Ken/index.html">Ken</a> <br/>
          <a class="text2" href="../villgers/Hopper/index.html">Hopper</a> <br/>
          <a class="text2" href="../villgers/Admiral/index.html">Admiral</a> <br/>
          <a class="text2" href="../villgers/Boon/index.html">Boon</a> <br/>
        
        </div>
        <a class="text1" href="../villagers/mieszkancy/index.php">Mieszkańcy</a>
      </li>
        <li class="kwadrat">
          <div class="ty">
            <a class="text2" href="../buildings/Ratusz/index.html">Ratusz</a> <br/>
            <a class="text2" href="../buildings/Nook/index.html">Nook's Cranny</a> <br/>
            <a class="text2" href="../buildings/Able/index.html">Able Sisters</a> <br/>
            <a class="text2" href="../buildings/Muzeum/index.html">Muzeum</a> <br/>
          </div>
          <a class="text1">Budynki</a></li>
        <li class="kwadrat"><a class="text1" href="../dairy/index.html">Dziennik</a></li>
        <li class="kwadrat"><a class="text1" href="../galery/index.html">Galeria</a></li>
    </ul>
    </div>
    <div class="main">
    <?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "wojtacha";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $result = $conn->query("SELECT * FROM budynki");

    echo("<table border='1'>");
    echo("<tr>
    <th>Numer</th>
    <th>Nazwa</th>
    <th>Typ</th>
    <th>Data</th>
    </tr>");
    while( $wiersz = $result->fetch_assoc() ) {
        echo("<tr>");
        echo("<td>".$wiersz['Numer']."</td>".
        "<td>".$wiersz['Nazwa']."</td>".
        "<td>".$wiersz['Typ']."</td>".
        "<td>".$wiersz['Data']."</td>"
    );
        echo("</tr>");
    }
    echo("</table>");
    ?>

    </div>
    <div class="footer">
      <audio controls>
        <source src="../../theme.mp3" type="audio/mpeg">
      </audio>
    </div>
  </div>

  </body>
</html>
