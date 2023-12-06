<html>

<head>

</head>

<body>

<form action="<?php $_SERVER['PHP_SELF']?>" method="POST">


<br>
<input type="number" name="nilai" placeholder="Masukan nilai">
<br>
<br>
<select name="waktu1">
    <option value="detik">Detik</option>
    <option value="menit">Menit</option>
    <option value="jam">Jam</option>
</select>


<br>
<br>

<br>
<br>
<select name="waktu2">
    <option value="detik1">Detik</option>
    <option value="menit1">Menit</option>
    <option value="jam1">Jam</option>
</select>
<br>
<br>

<input type="submit" value="Proses" name="submit">

    
</form>
<?php
 

 if($_SERVER['REQUEST_METHOD'] == "POST"){
     
    if(!empty($_POST['submit'] )){
        $var = $_POST['waktu1'];
        $var1 = $_POST['waktu2'];
        
        $n = $_POST['nilai'];


        //if($var == "detik" && $var1 == "jam1"){

        if(!empty($var) && !empty($var1)){

            if($var == "detik" && $var1 == "detik1"){
                $d = $n;
                echo $d ."detik";

            }
            elseif($var == "detik" && $var1 == "jam1"){
                $j = $n / 3600;
                echo $j ."Jam";
            }
            elseif($var == "detik" && $var1 == "menit1"){            
                
                $m = $n/60;
                echo $m ."Menit";
               
            }
            elseif($var == "menit" && $var1 == "detik1"){
                $m = $n * 60;
                echo $m ."detik"; 
            }
            elseif($var == "menit" && $var1 == "menit1"){
                $m = $n;
                echo $m ."Menit";

            }
            elseif($var == "menit" && $var1 == "jam1"){
                $j = $n / 60;
                echo $j ."Jam";

            }
            elseif($var == "jam" && $var1 == "detik1"){
                $d = $n * 3600;
                echo $d ."Detik";

            }
            elseif($var == "jam" && $var1 == "menit1"){
                $d = $n * 60;
                echo $d ."Menit";

            }
            elseif($var == "jam" && $var1 == "jam1"){
                $d = $n;
                echo $d ."Jam";

            }

            else{
                echo "Salah Conversi, Mungkin anda salah Masukan Nilai";
            }


        }
    
        // if($var == "detik"){
    
        //     echo "Ini detik";
    
        // }
    
    }
 }
 
 
?>   

</body>

</html>
