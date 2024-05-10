<!DOCTYPE html>
<html lang="en">

<head>

    <title></title>

</head>
<link rel="stylesheet" href="<?= base_url('assets/css/twit.css') ?>" />

<body>
    <div class="container">
        <div class="brand-logo"></div>
        <div class="brand-title">LOGIN</div>
        <form method="post" action="<?php echo base_url(); ?>index.php/form/login/login">

            <label>Username : </label>
            <input type="text" name="username"> <br />
            <label>Password : </label>
            <input type="password" name="pwd"> <br />

            <button type="submit" name="tombol">Save </button>
        </form>
        <?php echo validation_errors(); ?>
    </div>
</body>

</html>