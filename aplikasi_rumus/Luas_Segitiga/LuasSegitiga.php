<html>

    <head>
        
    </head>

        <body>

        <h1>Luas Segitiga</h1>

        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">

        <input type="number" placeholder="Alas" name="alas">

        <br>
        <br>
        <input type="number" placeholder="Tinggi" name="tinggi">
        <br>
        <br>
        <!-- <input type="number" placeholder="Luas" name="luas"> -->
        <br>
        <br>

        <input type="submit" value="hitung" name=hitung>

        <!-- <input type="submit" value="Sama Sisi" name="samaSisi">

        <input type="submit" value="Sama Sembarang" name="samaSembarang"> -->

        </form>

        <?php

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $alas = $_POST['alas'];
            $tinggi = $_POST['tinggi'];

            //$luas = $_POST['luas'];
            $a = 1 / 2;

            if(!empty($_POST['hitung'])){
                $luas = $a * $alas * $tinggi;

                echo "Hasilnya L = " . $luas . "cm<sup>2</sup>";
            }
        }

        ?>

        </body>
</html>
