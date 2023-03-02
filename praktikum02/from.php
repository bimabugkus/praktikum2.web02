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
        <form method="GET" action="output.php">
            <div class="form-group row">
                <label for="judul" class="col-4 col-form-label">Judul</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                    </div>
                    </div> 
                    <input id="judul" name="judul" type="text" class="form-control">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="tahun rilis" class="col-4 col-form-label">Tahun Rilis</label> 
                <div class="col-8">
                <input id="tahun rilis" name="tahun rilis" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="gener" class="col-4 col-form-label">Gener</label> 
                <div class="col-8">
                <input id="gener" name="gener" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Reting</label> 
                <div class="col-8">
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="reting" id="reting_0" type="checkbox" class="custom-control-input" value="Everyone"> 
                    <label for="reting_0" class="custom-control-label">Everyone</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="reting" id="reting_1" type="checkbox" class="custom-control-input" value="Teen"> 
                    <label for="reting_1" class="custom-control-label">Teen</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="reting" id="reting_2" type="checkbox" class="custom-control-input" value="Mature"> 
                    <label for="reting_2" class="custom-control-label">Mature</label>
                </div>
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
