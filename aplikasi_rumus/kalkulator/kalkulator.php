<html>
    <head>
    </head>
    
    <body>
    
        <h1>Aplikasi Kalkulator Sederhana</h1>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

        Masukan Angka 1 <input type="number" name = "angka1">

        <br>
        <br>

        Masukan Angka 2 <input type="number" name = "angka2">

        <br>
        <br>
        <input type="submit" value="tambah" name="tambah">
        <input type="submit" value="Kurang" name="kurang">
        <input type="submit" value="Kali" name="kali">

        <input type="submit" value="bagi" name="bagi">

        </form>

        <?php

            if($_SERVER["REQUEST_METHOD"] == "POST"){

                $nilai1 = $_POST['angka1'];
                $nilai2 = $_POST['angka2'];


                if(!empty($_POST['tambah'])){
                    $hasil = $nilai1 + $nilai2;

                    echo "Hasilnya : ". $hasil;
                }
                elseif(!empty($_POST['kurang'])){
                    $hasil = $nilai1 - $nilai2;
                    echo "Hasilnya : ". $hasil;
                }
                elseif(!empty($_POST['kali'])){
                    $hasil = $nilai1 * $nilai2;
                    echo "Hasilnya : " . $hasil;
                }
                elseif(!empty($_POST['bagi'])){
                    $hasil = $nilai1 / $nilai2;
                    echo "Hasilnya : " . $hasil;
                }


            }

        ?>

    </body>
</html>
