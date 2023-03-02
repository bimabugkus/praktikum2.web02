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
        <form method="GET" action="output2.php">
            <div class="form-group row">
                <label for="nama pelangan" class="col-4 col-form-label">Nama Pelangan</label> 
                <div class="col-8">
                <input id="nama pelangan" name="nama pelangan" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Pilih produk</label> 
                <div class="col-8">
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="pilih produk" id="pilih produk_0" type="checkbox" class="custom-control-input" value="tv"> 
                    <label for="pilih produk_0" class="custom-control-label">TV</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="pilih produk" id="pilih produk_1" type="checkbox" class="custom-control-input" value="kulkas"> 
                    <label for="pilih produk_1" class="custom-control-label">KULKAS</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="pilih produk" id="pilih produk_2" type="checkbox" class="custom-control-input" value="mesin cucui"> 
                    <label for="pilih produk_2" class="custom-control-label">MESIN CUCI</label>
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                <div class="col-8">
                <input id="jumlah" name="jumlah" type="text" class="form-control">
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