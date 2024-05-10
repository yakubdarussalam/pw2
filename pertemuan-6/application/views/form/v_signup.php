<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/signup.css') ?>" />
</head>

<body>

    <div id="login">
        <!--form id="login_form"-->
        <form id="login_form" method="post" action="<?php echo base_url(); ?>form/login/signup">
            <div class="field_container">
                <input type="text" placeholder="Name" name="name">
            </div>
            <div class="field_container">
                <input type="email" placeholder="Email" name="email">
            </div>
            <div class="field_container">
                <input type="text" placeholder="Phone" name="phone">
            </div>
            <div class="field_container">
                <select name="" placeholder="Sex">
                    <option value="">Male</option>
                    <option value="">Female</option>
                </select>
            </div>
            <div class="field_container">
                <textarea placeholder="Alamat" cols="20" rows="5"></textarea>
            </div>
            <div class="field_container">
                <!--input type="Password" placeholder="Password"-->
                <button id="sign_in_button">
                    <span class="button_text">Sign Up</span>
                </button>
            </div>
            <?php echo validation_errors(); ?>
    </div>
</body>

</html>