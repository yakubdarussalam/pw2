<?php
require_once "oop/dbConnection.php";
$db = new dbConnection();

// Handle delete action
if (isset ($_GET['deleteId'])) {
    $deleteID = $_GET['deleteId'];
    $table = 'user';
    $where = array(
        "id" => $deleteID
    );
    $result = $db->delete($table, $where);
    if ($result) {
        header("Location: index.php");
        exit; // Terminate script after redirection
    } else {
        echo "<script>alert('Failed to delete!');</script>";
    }
}

// Fetch data
$list = $db->view("user");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktek Pertemuan 3 - OOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

    <div class="container-sm border my-5">
        <div class="container">
            <h1>List Personel</h1>
            <div class="row">
                <div class="col-sm-6" style="background-color:white;">
                    <p></p>
                </div>
                <div class="col-sm-6" style="background-color:white;" align="right">
                    <p><a href="input.php" class="btn btn-primary btn-sm">Add</a></p>
                </div>
            </div>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Usia</th>
                    <th>HP</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($list as $key => $value):
                    ?>
                    <tr>
                        <td>
                            <?php echo $no++; ?>
                        </td>
                        <td>
                            <?php echo $value['nama']; ?>
                        </td>

                        <td>
                            <?php echo $value['jenis_kelamin']; ?>
                        </td>
                        <td>
                            <?php echo $value['alamat']; ?>
                        </td>
                        <td>
                            <?php echo $value['usia']; ?>
                        </td>
                        <td>
                            <?php echo $value['hp']; ?>
                        </td>
                        <td>
                            <a href="edit.php?id=<?php echo $value['id']; ?>&aksi=edit"
                                class="btn btn-primary btn-sm">Edit</a>
                            <a href="index.php?deleteId=<?php echo $value['id']; ?>&aksi=hapus"
                                onclick="return confirm('Are you Sure! ')" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                    <?php
                endforeach;
                ?>
            </tbody>
        </table>
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