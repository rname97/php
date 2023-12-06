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
        $n = 9/5;
        $x = $n * $celcius;
        $f = $x + 32;
        echo "Fahrenheit = ".$f. " F";
    }
}



?>

</body>

</html>