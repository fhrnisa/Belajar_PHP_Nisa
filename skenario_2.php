<html>
<head>
    <title>
        Skenario Kedua
    </title>
</head>
<body>
    <h1>Skenario Kedua</h1>
    <?php
    $jam = "18:30";

    if ($jam >= date("00:00") && $jam <= date("04:00")) {
        echo "$jam = Dini hari";
    } else if ($jam >= date("04:00") && $jam <= date("10:00")) {
        echo "$jam = Pagi";
    } else if ($jam >= date("10:00") && $jam <= date("15:00")) {
        echo "$jam = Siang";
    } else if ($jam >= date("15:00") && $jam <= date("17:30")) {
        echo "$jam = Sore";
    }   else if ($jam >= date("17:30") && $jam <= date("18:30")) {
        echo "$jam = Petang";
    } else if ($jam >= date("18:30") && $jam <= date("24:00")) {
        echo "$jam = Malam";
    } else {
        echo "$jam = Dunia Lain";
    }
    ?>
</body>
</html>