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
            $nama = $_GET["nama"];
            $matkul = $_GET["matkul"];
            $tugas = $_GET["tugas"];
            $uts = $_GET["uts"];
            $uas = $_GET["uas"];
             
            if(($tugas + $uts + $uas ) /3 >75){
                $status = "Lulus"

            }else{ }

            echo "Nama: ". $nama;
            echo "Mata Kuliah: ". $matkul;
            echo "Nilai Tugas: ". $tugas;
            echo "Nilai UTS: ". $uts;
            echo "Nilai UAS: ". $uas;

            ?>
        </div>
	</div>
</div>
</body>
</html>