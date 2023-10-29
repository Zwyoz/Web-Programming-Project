<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
        <div class="row">
            <div class="col-6">
                <h1>Form Registrasi</h1>
                <p>Isi Data Dibawah Ini:</p>
                <form action="tugas06b.php" method="post">
                <div class="mb-3">
                    <label for="nama" class= "form-label">Isikan Nama</label>
                    <input type="text" class="form-control bg-info-subtle" name="nama" id="nama" required>
                </div>
                <div class="mb-3">
                    <label for="alamat" class= "form-label">Alamat</label>
                    <textarea class="form-control bg-info-subtle" name="alamat" id="alamat" rows="3" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="tempat" class= "form-label">Tempat Lahir</label>
                    <input type="text" class="form-control bg-info-subtle" name="tempat" id="tempat" required>
                </div>
                <div class="mb-3">
                    <label for="tanggal" class= "form-label">Tanggal Lahir</label>
                    <input type="text" class="form-control bg-info-subtle" name="tanggal" id="tanggal" required>
                </div>
                <div class="mb-3">
                    <label for="jk" class= "form-check-label">Jenis Kelamin </label>
                    <input class="form-check-input" type="radio" name="jk" id="flexRadioDefault1" value="Laki-Laki"> Laki Laki
                    <input class="form-check-input" type="radio" name="jk" id="flexRadioDefault1" value="Perempuan"> Perempuan
                </div>
                <div class="form-group">
                    <label for="pendidikan" class= "form-select-label">Pendidikan </label>
                    <select name="pendidikan" class="form-select form-select-md bg-info-subtle" aria-label="pendidikan" >
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
                </div>
                <hr>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-default">Cancel</button>    
                </form>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>