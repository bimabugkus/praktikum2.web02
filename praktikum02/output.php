<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 mt-4">
            <?php
            $judul = $_GET["judul"];
            $tahun = $_GET["tahun_rilis"];
            $gener = $_GET["gener"];
            $reting = $_GET["reting"];

            echo "<br>judul: ". $judul;
            echo "<br>tahun_rilis: ". $tahun;
            echo "<br>gener: ". $gener;
            echo "<br>reting: ". $reting;

            ?>
        </div>
	</div>
</div>
</body>
</html>