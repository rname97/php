<html>

<head>

</head>

<body>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
Masukan Suhu  <input type="number" name="number">
<input type="submit" name="submit" value="Submit"> 


</form>

<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $celcius = $_POST['number'];

    if(!empty($_POST['submit'])){
        $k = $celcius + 273;
        echo "Kelvin = ".$k. " K";
    }
}



?>

</body>

</html>