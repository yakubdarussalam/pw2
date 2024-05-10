<!DOCTYPE html>
<html>

<head>

    <title></title>

</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<body>
    <div class="container-sm border mt-5">
        <form method="post" action="<?php echo base_url(); ?>form/pegawai/save">

            <label>Nama : </label>
            <input type="text" name="nama"> <br />
            <label>Email : </label>
            <input type="email" name="email"> <br />
            <label>Jenis Kelamin : </label>
            <input type='radio' name='jenis_kelamin' value='pria' />Pria

            <input type='radio' name='jenis_kelamin' value='perempuan' />Perempuan<br />
            <label>Agama : </label>
            <select name="agama">
                <option value="islam">Islam</option>
                <option value="kristen">Kristen</option>
                <option value="katholik">Katholik</option>
                <option value="hindu">Hindu</option>
                <option value="budha">Budha</option>
            </select><br />
            <label>Alamat : </label>
            <textarea name="alamat"></textarea><br /><br />
            <input type="submit" name="tombol" value="Simpan" />
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>

</html>