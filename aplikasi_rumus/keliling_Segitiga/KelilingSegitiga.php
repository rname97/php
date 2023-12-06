<html>

<head>

</head>

<body>

        <form method="POST" action="<?php $_SERVER['PHP_SELF']?>">

        <input type="number" name="sisiA" placeholder="Sisi A">
        <br>
        <br>
        <input type="number" name="sisiB" placeholder="sisi B">
        <br>
        <br>
        <input type="number" name="sisiC" placeholder="sisi C">
        <br>
        <br>
        <input type="submit" name="hitung" value="Hitug">

        </form>
        <?php

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $sisi1 = $_POST['sisiA'];
            $sisi2 = $_POST['sisiB'];
            $sisi3 = $_POST['sisiC'];

            if(!empty($_POST['hitung'])){
                $k = $sisi1 + $sisi2 + $sisi3;

                echo "K = " .$k . " cm";
            }
        }


        ?>    

</body>

</html>
