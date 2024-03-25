<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

    <?php
    require_once "oop/dbConnection.php";
    $db = new dbConnection();
    ?>
    <?php
    if (isset ($_GET['id'])) {
        $id = $_GET['id'];
        $where = array(
            'id' => $id
        );
        $userData = $db->selectWhere("user", $where);
        foreach ($userData as $key => $value) {
            ?>
            <div class="container-sm border pt-3">
                <h1>Edit Personel</h1>
                <div class="dataForm">
                    <form action="edit.php" method="post">
                        <input type="hidden" name="editId" value="<?php echo $_GET['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama :</label>
                            <input type="text" class="form-control" placeholder="Enter Nama" name="nama" id="nama"
                                value="<?php echo $value['nama'] ?>">

                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat:</label>
                            <input type="text" class="form-control" placeholder="Enter Alamat" name="alamat" id="alamat"
                                value="<?php echo $value['alamat'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="usia">Usia:</label>
                            <input type="text" class="form-control" placeholder="Enter Usia" name="usia" id="usia" value="<?php
                            echo $value['usia'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin:</label><br>
                            <input type="radio" name="jenis_kelamin" value="Laki-Laki" <?php echo ($value['jenis_kelamin'] === 'Laki-Laki') ? 'checked' : ''; ?>> Laki-laki<br>
                            <input type="radio" name="jenis_kelamin" value="Perempuan" <?php echo ($value['jenis_kelamin'] === 'Perempuan') ? 'checked' : ''; ?>> Perempuan<br>
                        </div>
                        <div class="form-group">
                            <label for="hp">HP:</label>
                            <input type="text" class="form-control" placeholder="Enter No HP" name="hp" id="hp" value="<?php
                            echo $value['hp'] ?>">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary btn-sm" value="save" name="update">Update</button>
                        <a href="index.php" class="btn btn-warning btn-sm">Cancel</a>
                        <?php
        }
    }

    ?>
            </form>
        </div>
    </div>

    <?php
    if (isset ($_POST['update'])) {
        $table = 'user';
        $field = array(
            'nama' => $_POST['nama'],
            'alamat' => $_POST['alamat'],
            'usia' => $_POST['usia'],
            'jenis_kelamin' => $_POST['jenis_kelamin'] ,
            'hp' => $_POST['hp']
        );
        $where = array(
            'id' => $_POST['editId']
        );
        $updateData = $db->update($table, $field, $where);
        if ($updateData) {
            echo "<script> alert ('Sucessfuly Updated..'); window.open('index.php','_self');</script>";
        } else {
            echo "Failed!";
        }
    }
    ?>

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