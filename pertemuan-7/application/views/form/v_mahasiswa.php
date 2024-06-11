<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" />
<div class="containter">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NPM</th>
                <th scope="col">Nama</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Telepon</th>
                <th scope="col">Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($mahasiswa as $u) {
                ?>
                <tr>
                    <th scope="row"><?= $no++; ?></th>
                    <td><?php echo $u->npm ?></td>
                    <td><?php echo $u->nama ?></td>
                    <td><?php echo $u->jurusan ?></td>
                    <td><?php echo $u->telp ?></td>
                    <td><?php echo $u->alamat ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div>
        <button onclick="location.href='<?php echo base_url(); ?>index.php/login_member'">Back to
Login</button>
</div>
</div>