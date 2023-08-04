<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    error_reporting(E_ALL);
    ini_set("display_error", "on");

    $host = "localhost";
    $user = "root";
    $pass = "";
    $base = "ilya";

    $link = mysqli_connect($host, $user, $pass, $base);

    $query = 'SELECT * FROM workers';
    $res = mysqli_query($link, $query) or die(mysqli_error($link));
    // print_r($res);
    
    for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row)
        ;

    foreach ($data as $key => $value) { //все
        echo $value["name"] . "<br>";
    }

    print_r($data[0]["name"] . "<br>"); //первый

    echo $data[1]["name"] . " ";
    echo $data[1]["age"] . "<br>";

    ?>
</body>

</html>