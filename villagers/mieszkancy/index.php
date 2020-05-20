<html>
  <head>
    <title>Michał Wojtacha</title>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
  </head>

  <body>
  <div class="cont">
    <div class="header"><a href="../../index.html"><img src="../../Logo.png" height="300px"></div></a>
    <div class="sidebar">
      <ul class="menu">
        <li class="kwadrat">
        <div class="ty">
          <a class="text2" href="../Katt/index.html">Katt</a> <br/>
          <a class="text2" href="../Antonio/index.html">Antonio</a> <br/>
          <a class="text2" href="../Sherb/index.html">Sherb</a> <br/>
          <a class="text2" href="../Chevre/index.html">Chevre</a> <br/>
          <a class="text2" href="../Apple/index.html">Apple</a> <br/>
          <a class="text2" href="../Ken/index.html">Ken</a> <br/>
          <a class="text2" href="../Hopper/index.html">Hopper</a> <br/>
          <a class="text2" href="../Admiral/index.html">Admiral</a> <br/>
          <a class="text2" href="../Boon/index.html">Boon</a> <br/>
        
        </div>
        <a class="text1" href="../mieszkancy/index.php">Mieszkańcy</a>
      </li>
        <li class="kwadrat">
          <div class="ty">
            <a class="text2" href="../../buildings/Ratusz/index.html">Ratusz</a> <br/>
            <a class="text2" href="../../buildings/Nook/index.html">Nook's Cranny</a> <br/>
            <a class="text2" href="../../buildings/Able/index.html">Able Sisters</a> <br/>
            <a class="text2" href="../../buildings/Muzeum/index.html">Muzeum</a> <br/>
          </div>
          <a class="text1" href="../../buildings/index.php">Budynki</a></li>
        <li class="kwadrat"><a class="text1" href="../../dairy/index.html">Dziennik</a></li>
        <li class="kwadrat"><a class="text1" href="../../galery/index.html">Galeria</a></li>
    </ul>
    </div>
    <div class="main">
    <?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "wojtacha";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $result = $conn->query("SELECT * FROM mieszkancy");

    echo("<table border='1'>");
    echo("<tr>
    <th>Numer</th>
    <th>Imie</th>
    <th>Gatunek</th>
    <th>Osobowosc</th>
    <th>Kolor</th>
    <th>Data</th>
    </tr>");
    while( $wiersz = $result->fetch_assoc() ) {
        echo("<tr>");
        echo("<td>".$wiersz['Numer']."</td>".
        "<td>".$wiersz['Imie']."</td>".
        "<td>".$wiersz['Gatunek']."</td>".
        "<td>".$wiersz['Osobowosc']."</td>".
        "<td>".$wiersz['Kolor']."</td>".
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
