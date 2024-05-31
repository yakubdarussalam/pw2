<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result - KHS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .table-content {
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-md-6">
                <div class="text-center mb-4">
                    <h1>Result - KHS</h1>
                </div>
                <div class="card my-3 mx-3">
                    <table class="table table-striped">
                        <tr>
                            <td>NPM</td>
                            <td>:</td>
                            <td class="table-content"><?php echo $npm; ?></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td class="table-content"><?php echo $nama; ?></td>
                        </tr>
                        <tr>
                            <td>Jurusan</td>
                            <td>:</td>
                            <td class="table-content"><?php echo $jurusan; ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td class="table-content"><?php echo $jenisKelamin; ?></td>
                        </tr>
                        <tr>
                            <td>Nilai UTS</td>
                            <td>:</td>
                            <td class="table-content"><?php echo $nilaiUTS; ?></td>
                        </tr>
                        <tr>
                            <td>Nilai UAS</td>
                            <td>:</td>
                            <td class="table-content"><?php echo $nilaiUAS; ?></td>
                        </tr>
                        <tr>
                            <td>Nilai Tugas</td>
                            <td>:</td>
                            <td class="table-content"><?php echo $nilaiTugas; ?></td>
                        </tr>
                        <tr>
                            <td>Nilai Kehadiran</td>
                            <td>:</td>
                            <td class="table-content"><?php echo $nilaiKehadiran; ?></td>
                        </tr>
                        <tr>
                            <td>Total Nilai</td>
                            <td>:</td>
                            <td class="table-content"><?php echo $rataNilai; ?></td>
                        </tr>

                    </table>
                    <div class="d-flex">
                        <a href="<?php echo base_url(); ?>index.php/forms/khs"
                            class="btn btn-primary my-2 mx-2">Back</a>
                    </div>

                </div>
                <div class="text-center mb-4">
                    <?php
                    $color = ''; // Inisialisasi variabel warna
                    // Tentukan warna berdasarkan grade
                    switch ($grade) {
                        case 'A':
                            $color = 'green'; // Hijau untuk grade A
                            break;
                        case 'B':
                            $color = 'yellow'; // Kuning untuk grade B
                            break;
                        case 'C':
                            $color = 'orange'; // Orange untuk grade C
                            break;
                        case 'D':
                            $color = 'red'; // Merah untuk grade D
                            break;
                        case 'E':
                            $color = 'black'; // Hitam untuk grade E
                            break;
                        default:
                            $color = 'black'; // Default hitam
                            break;
                    }
                    ?>
                    <h1 style="color: <?php echo $color; ?>">Grade - <?php echo $grade; ?></h1>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>

</html>