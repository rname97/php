<?php 

session_start();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary text-white">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                </li>
            </ul>
                <?php if(!isset($_SESSION['username']) || $_SESSION['username'] == ""){?>
                    <a href="login.php " class="btn btn-primary ">Login</a>
                <?php }else{ ?>
                    <button class="btn btn-outline-success text-white" type="submit"><?=$_SESSION['username']?></button>
                    <a href="logout.php" class="btn text-white">Logout</a>
                <?php } ?>
            
            </div>
        </div>
    </nav>
    <h1>Hello</h1>
    <br>
    <?php if(!isset($_SESSION['username']) || $_SESSION['username'] == ""){?>
        <h1>Anda Belum Login</h1>
    <?php }else{ ?>
        <h1>Selamat Datang <?=$_SESSION['username']?></h1>
    <?php } ?>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>