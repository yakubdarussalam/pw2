<!DOCTYPE html>
<html lang="en">

<head>

    <title>Login - CI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<link rel="stylesheet" href="<?= base_url('assets/css/twit.css') ?>" />

<body>
    <div class="container">
        <?php if (isset($message)): ?>
            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                    <use xlink:href="#exclamation-triangle-fill" />
                </svg>
                <div>
                    <?php echo $message; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        <?php endif; ?>

        <div class="brand-logo"></div>
        <div class="brand-title">LOGIN</div>
        <form class="mb-5" method="post" action="<?php echo base_url(); ?>index.php/forms/login/login">

            <label>Username : </label>
            <input type="text" name="username"> <br />
            <label>Password : </label>
            <input type="password" name="pwd"> <br />

            <button type="submit" name="tombol">Login </button>
        </form>
        <?php echo validation_errors(); ?>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</html>