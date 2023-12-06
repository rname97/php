<html>

<head>

</head>

<body>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">

<input type="number" name="jarak" placeholder="Jarak">
<br>
<br>
<input type="number" name="kecepatan" placeholder="kecepatan">
<br>
<br>
<input type="submit" name="submit">
</form>

<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $s = $_POST['jarak'];
    $v = $_POST['kecepatan'];

    if(!empty($_POST['submit'])){

        $t = $s / $v;

        echo "Waktu yang di tempuh = ". $t . "jam";
    }
}




?>

</body>

</html>
