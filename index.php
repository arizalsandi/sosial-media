<?php
echo gethostname(); // may output e.g,: sandie

// Or, an option that also works before PHP 5.3
echo php_uname('n'); // may output e.g,: sandie
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>One For All</title>

     <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">
    <header>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1>Selamat datang di One For All</h1>
                        <p>Bergabunglah bersama dengan jutaan orang lainnya :)</p>
                    </div>
                    <div class="col-md-4">
                        <a href="login.php" class="btn btn-secondary">Masuk</a>
                        <a href="register.php" class="btn btn-success">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <img class="img img-responsive" src="img/connect.png" />
                    </div>
                </div>
            </div>
    </section>

</body>
</html>
