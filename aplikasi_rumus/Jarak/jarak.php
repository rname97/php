<html>

<head>

</head>


<body>
    
<form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" >

Masukan Waktu : <input type="number" placeholder="Waktu Menit" name="waktu">
<br>
<br>
Masukan Kecepatan : <input type="number" placeholder="kecepatan Meter" name="kecepatan">
<br>
<br>

<input type="submit" name="submit" value="submit">

</form>


<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $t = $_POST['waktu'];
    $v = $_POST['kecepatan'];
    if(!empty($_POST['submit'])){
        $s = $t * $v;
        
        echo "Jarak = ". $s ." Meter";
    }


}


?>


</body>

</html>
