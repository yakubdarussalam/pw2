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
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="container">
        <div class="row justify-content-center my-2">
            <div class="col-md-6 mb-3">
                <div class="text-center mb-4 mt-4">
                    <h2>Kartu Hasil Studi</h2>
                </div>
                <form id="khsForm" method="post" action="<?php echo base_url(); ?>index.php/forms/khs/save"
                    class="bg-white p-4 shadow-sm rounded">
                    <div class="mb-3">
                        <label for="npm" class="form-label">NPM</label>
                        <input type="text" class="form-control" id="npm" name="npm">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <input type="text" class="form-control" id="jurusan" name="jurusan">
                    </div>
                    <div class="mb-3">
                        <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="jenisKelaminLaki" name="jenisKelamin" value="Laki-Laki">
                            <label class="form-check-label" for="jenisKelaminLaki">Laki-Laki</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="jenisKelaminPerempuan" name="jenisKelamin" value="Perempuan">
                            <label class="form-check-label" for="jenisKelaminPerempuan">Perempuan</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="nilaiUTS" class="form-label">Nilai UTS</label>
                        <input type="number" class="form-control" id="nilaiUTS" name="nilaiUTS">
                    </div>
                    <div class="mb-3">
                        <label for="nilaiUAS" class="form-label">Nilai UAS</label>
                        <input type="number" class="form-control" id="nilaiUAS" name="nilaiUAS">
                    </div>
                    <div class="mb-3">
                        <label for="nilaiTugas" class="form-label">Nilai Tugas</label>
                        <input type="number" class="form-control" id="nilaiTugas" name="nilaiTugas">
                    </div>
                    <div class="mb-3">
                        <label for="nilaiKehadiran" class="form-label">Nilai Kehadiran</label>
                        <input type="number" class="form-control" id="nilaiKehadiran" name="nilaiKehadiran">
                    </div>
                    <div class="d-flex">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" onclick="resetForm()" class="btn btn-secondary mx-2">Reset</button>

                    </div>
                </form>
                <?php echo validation_errors(); ?>
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
