<html>
<head>

<body>

<h1>Suhu Celcius => Reamur</h1>

<form action="<?php $_SERVER['PHP_SELF']?>" method="POST">

Masukan Suhu <input type="number" name="number">

<input type="submit" name="submit" value="Submit">

</form>


<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    

    $celcius = $_POST['number'];

    if(!empty($_POST['submit'])){

        $z = 4 / 5;
        $r = $z * $celcius;

        echo "Reamur = ".$r;


    }
}



?>


</body>

</head>

</html>