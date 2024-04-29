<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="edit.css">
    <title>kuliah</title>
</head>

<body>

    <div>
    <?php
        if (isset($_GET['message'])) {
            $message = $_GET['message'];
        
        ?>
            <div class="alert alert-success my-4 mx-4"><?= $message ?></div>
        <?php
        }
        ?>     
    </div>

    <div class="container bg-body-secondary w-50 my-3 mb-5 rounded-3" id="ok">
            <h2 class=" text-center">Selamat Datang Di Form KRS Kuliah</h2>
        </div>
    </div>

 
    <div class="card-body mb-5" id="ya">
        <form action="krs-proses.php" method="post" class=" px-5 mx-5">
            <div class="container w-50 justify-content-center border border-4 border-danger rounded-4 bg-danger-subtle">
                <div>
                    <h4 class="my-3">Data Mahasiswa</h4>
                </div>
                <div class="mb-3">
                    <label for="npm" class=" form-label ">NPM</label>
                    <input type="text" name="npm" id="npm" class=" form-control ">
                </div>
                <div class="mb-3">
                    <label for="nama" class=" form-label ">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama" class=" form-control ">
                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <select name="jurusan" id="jurusan" class="form-select">
                        <option disabled selected hidden>Pilih Jurusan</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                    </select>
                </div>
                <div class="mb-5">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea name="alamat" id="alamat"  class=" form-control "></textarea>
                </div>

                <div>
                    <h4 class="my-3">Mata Kuliah</h4>
                </div>
                <div class="mb-3">
                    <label for="kodemk" class=" form-label ">Kode Mata Kuliah</label>
                    <input type="text" name="kodemk" id="kodemk" class=" form-control ">
                </div>
                <div class="mb-3">
                    <label for="namamk" class=" form-label ">Nama Mata Kuliah</label>
                    <input type="text" name="namamk" id="namamk" class=" form-control ">
                </div>
                <div class="mb-3">
                    <label for="jumlahsks" class=" form-label ">Jumlah SKS</label>
                    <input type="number" name="jumlahsks" id="jumlahsks" class=" form-control">
                </div>
                <div class="mb-3">
                    <button type ="submit" name="add" class="btn btn-primary">Add</button>
                    <a href="krs.php" class="btn btn-primary mx-3">Cek KRS</a>
                </div> 
            </div>
        </form>
    </div>
       


</body> 
</html>