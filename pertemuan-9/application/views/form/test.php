<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="http://localhost/pw2/pertemuan-9/assets/js/moment.js"></script>


<body>
    <div class="container">

        <center>
            <h1>Membuat Modal dengan Bootstrap </h1>
        </center>
        <br />
        <!-- Tombol untuk menampilkan modal-->
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Buka Modal</button>
        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- konten modal-->

                <div class="modal-content">
                    <!-- heading modal -->
                    <div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Bagian heading modal</h4>

                    </div>
                    <!-- body modal -->
                    <div class="modal-body">
                        <p>bagian body modal.</p>
                    </div>
                    <!-- footer modal -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button>
                    </div>
                </div>
            </div>
        </div> <!-– End Div myModa -->

    </div>
    <!– end Container -->

<script src="<?php  echo base_url('assets/js/jquery-2.2.4.min.js'); ?>"> </script>
<script src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script src="<?php echo base_url().'assets/js/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/moment.js'?>"></script>

</body>