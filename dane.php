<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
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
</body>
</html>