<!DOCTYPE html>
<html>

<head>

    <title></title>

</head>
<link rel="stylesheet" href="http://pw2.test/pertemuan-5/assets/css/test.css" />

<body>
    <div class="container-sm border">
        <form method="post" action="<?php echo base_url(); ?>login/login/submit">

            <label>Username : </label>
            <input type="name" name="username"> <br />
            <label>Password : </label>
            <input type="password" name="password"> <br />
            
            <input type="submit" name="tombol" value="Login" />
        </form>
    </div>
</body>

</html>