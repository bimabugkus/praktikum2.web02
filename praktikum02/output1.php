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
            $matkul = $_GET["reting"];
            $tugas = $_GET["nilai_tugas"];
            $uts = $_GET["nilai_uts"];
            $uas = $_GET["nila_uas"];
            $total_nilai = ($tugas + $uts + $uas) / 3;
             
            if(($total_nilai)  >=75){
               echo $status = "Lulus";

            }else{ 
               echo $status = "Tidak Lulus";
            }

            echo "<br>Nama: ". $nama;
            echo "<br>Mata Kuliah: ". $matkul;
            echo "<br>Nilai Tugas: ". $tugas;
            echo "<br>Nilai UTS: ". $uts;
            echo "<br>Nilai UAS: ". $uas;
            echo "<br>Total nilai: ". $total_nilai;


        ?>
        </div>
	</div>
</div>
</body>
</html>