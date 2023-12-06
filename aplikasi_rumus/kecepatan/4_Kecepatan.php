<html>
<head>

</head>

<body>
    
<form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
Masukan Jarak : <input type="number" name="jarak" placeholder="KM">
<br>
<br>
Masukan Waktu : <input type="number" name="waktu" placeholder="Jam">
<br>
<br>

<input type="submit" name="submit">


</form>

<?php


if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    $jarak = $_POST['jarak'];
    $waktu = $_POST['waktu'];

    if(!empty($_POST['submit'])){

        $v = $jarak / $waktu;

        echo "Kecepeatan = ".$v . "KM/Jam";
    }
}






?>

</body>
</html>