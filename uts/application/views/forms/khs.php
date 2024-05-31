<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KHS - Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
    .error {
        color: red;
    }
</style>

<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Kartu Hasil Studi</h2>
                        <form id="khsForm" method="post" action="<?php echo base_url(); ?>index.php/forms/khs/save">
                            <div class="form-group">
                                <label for="npm">NPM</label>
                                <input type="text" class="form-control" id="npm" name="npm">
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama">
                            </div>
                            <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <select class="form-control" id="jurusan" name="jurusan">
                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                    <option value="Sistem Informasi">Sistem Informasi</option>
                                    <option value="Teknik Elektro">Teknik Elektro</option>
                                    <!-- Tambahkan opsi lain sesuai dengan jurusan yang tersedia -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="jenisKelaminLaki" name="jenisKelamin" value="Laki-Laki">
                                        <label class="form-check-label" for="jenisKelaminLaki">Laki-Laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="jenisKelaminPerempuan" name="jenisKelamin" value="Perempuan">
                                        <label class="form-check-label" for="jenisKelaminPerempuan">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nilaiUTS">Nilai UTS</label>
                                <input type="number" class="form-control" id="nilaiUTS" name="nilaiUTS">
                            </div>
                            <div class="form-group">
                                <label for="nilaiUAS">Nilai UAS</label>
                                <input type="number" class="form-control" id="nilaiUAS" name="nilaiUAS">
                            </div>
                            <div class="form-group">
                                <label for="nilaiTugas">Nilai Tugas</label>
                                <input type="number" class="form-control" id="nilaiTugas" name="nilaiTugas">
                            </div>
                            <div class="form-group">
                                <label for="nilaiKehadiran">Nilai Kehadiran</label>
                                <input type="number" class="form-control" id="nilaiKehadiran" name="nilaiKehadiran">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <button type="button" onclick="resetForm()" class="btn btn-secondary mx-2">Reset</button>
                            </div>
                        </form>
                        <?php echo validation_errors(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function resetForm() {
            document.getElementById("khsForm").reset();
        }
    </script>
</body>

</html>
