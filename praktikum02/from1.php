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
<body><div class="container-fluid">
	<div class="row">
		<div class="col-md-12 mt-4">

      <form method="GET" action="output1.php">
        <div class="form-group row">
          <label for="nama" class="col-4 col-form-label">Nama</label> 
          <div class="col-8">
            <input id="nama" name="nama" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4">Mata kuliah</label> 
          <div class="col-8">
            <div class="custom-control custom-checkbox custom-control-inline">
              <input name="reting" id="reting_0" type="checkbox" class="custom-control-input" value="Dasar-Dasar pemrograman"> 
              <label for="reting_0" class="custom-control-label">DDP</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
              <input name="reting" id="reting_1" type="checkbox" class="custom-control-input" value="pemrograman we"> 
              <label for="reting_1" class="custom-control-label">PW</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
              <input name="reting" id="reting_2" type="checkbox" class="custom-control-input" value="Matematka kompter" checked="checked"> 
              <label for="reting_2" class="custom-control-label">MK</label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="nilai tugas" class="col-4 col-form-label">Nilai Tugas</label> 
          <div class="col-8">
            <input id="nilai_tugas" name="nilai_tugas" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="nilai uts" class="col-4 col-form-label">Nilai UTS</label> 
          <div class="col-8">
            <input id="nilai_uts" name="nilai_uts" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="nila uas" class="col-4 col-form-label">Nilai UAS</label> 
          <div class="col-8">
            <input id="nila_uas" name="nila_uas" type="text" class="form-control">
          </div>
        </div> 
        <div class="form-group row">
          <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>
      </div>
	</div>
</div>
</body>
</html>