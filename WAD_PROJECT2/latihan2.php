<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas Latihan 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-xl">
    <h1>Selamat Datang Di konversi Panjang!</h1><br>
    </div>
    <div class="container">	
        <div class="card">
        <h2 class="card-header">Konversi Panjang (m)</h2>
        <form action="latihan3.php" method="GET">
        <div class="card-body">
            <label for="angka">Masukan Panjang dalam satuan meter:</label>
			<input type="text" class="form-control" name="angka">
            <label for="pilihan">Pilih konvert ke satuan:</label>
            <select class="form-select" aria-label="Default select example" name="pilihan">
            <option selected>Open this select menu</option>
            <option value="cm">cm</option>
            <option value="km">km</option>
            </select><br>
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>	
	    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>