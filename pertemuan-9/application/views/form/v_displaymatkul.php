<link href="<?php echo base_url().'assets/css/bootstrap.min.css'?>" rel="stylesheet">
<link href="<?php echo base_url().'assets/css/bootstrap.min.css'?>" rel="stylesheet">

<div class="container">
    <div class="row">
        <h2 class="text-center">Data Mata Kuliah</h2>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="pull-left">
                <a class="btn btn-sm btn-success btn-add" data-toggle="modal" data-target="#addModal">
                    <i class="fa fa-file" aria-hidden="true"> Add New</i>
                </a>
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="col-md-12 ">&nbsp;</div>
    </div>
    <div class="row ">
        <div class="col-md-12 ">
            <table id="mydata" class="table table-striped table-bordered mt-3" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Kode Mata Kuliah</th>
                        <th scope="col">Nama Mata Kuliah</th>
                        <th scope="col">SKS</th>
                        <th scope="col">Semester</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody id="tableBody">
                    <?php
                    $no = 1;
                    foreach ($matkul as $u) {
                        ?>
                        <tr>
                            <th scope="row"><?= $no++; ?></th>
                            <td><?php echo $u->kode_mk ?></td>
                            <td><?php echo $u->nama_mk ?></td>
                            <td><?php echo $u->sks ?></td>
                            <td><?php echo $u->semester ?></td>
                            <td style="width: 200px;">
                                <a data-id="<?php echo $u->kode_mk; ?>" class="btn btn-primary btnEdit">Edit</a>
                                <a data-id="<?php echo $u->kode_mk; ?>" class="btn btn-danger btnDelete">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="ModalAdd" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalAdd">Tambah Mata Kuliah</h5>
                <button type="button" class="btn-close-add btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
            </div>
            <form id="addMatkul" name="updateMatkul" action="<?php echo site_url('form/matkul/addMatkul'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="matkul">Kode Mata Kuliah :</label>
                        <input type="text" class="form-control" id="kode_mk" placeholder="Enter Kode Mata Kuliah" name="kode_mk">
                    </div>
                    <div class="form-group">
                        <label for="matkul">Mata Kuliah :</label>
                        <input type="text" class="form-control" id="nama_mk" placeholder="Enter Nama Mata Kuliah" name="nama_mk">
                    </div>
                    <div class="form-group">
                        <label for="smt">SKS :</label>
                        <input type="text" class="form-control" id="sks" placeholder="Enter SKS" name="sks">
                    </div>
                    <div class="form-group">
                        <label for="sks">Semester :</label>
                        <input type="text" class="form-control" id="semester" placeholder="Enter Semester" name="semester">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-close-add" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Update Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
            </div>
            <form id="updateMatkul" name="updateMatkul" action="<?php echo site_url('form/matkul/update'); ?>" method="post">
                <div class="modal-body">
                    <input type="hidden" name="hdnMatkulId" id="hdnMatkulId" />
                    <div class="form-group">
                        <label for="matkul">Mata Kuliah :</label>
                        <input type="text" class="form-control" id="nama_mk" placeholder="Enter Mata Kuliah" name="nama_mk">
                    </div>
                    <div class="form-group">
                        <label for="sks">SKS :</label>
                        <input type="text" class="form-control" id="sks_edit" placeholder="Enter SKS" name="sks_edit">
                    </div>
                    <div class="form-group">
                        <label for="smt">Semester :</label>
                        <input type="text" class="form-control" id="smt_edit" placeholder="Enter Semester" name="smt_edit">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="<?php  echo base_url('assets/js/jquery-2.2.4.min.js'); ?>"></script>
<script src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script src="<?php echo base_url().'assets/js/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/moment.js'?>"></script>
<script>
    $(document).ready(function () {
        $('#mydata').DataTable({
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            autoWidth: false
        });

        $(".btn").click(function () {
            $("#updateModal").modal('hide');
        });

        $(".btn-close").click(function () {
            $("#updateModal").modal('hide');
        });

        $(".btn-add").click(function () {
            $("#addModal").modal('show');
        });

        $(".btn-close-add").click(function () {
            $("#addModal").modal('hide');
        });
    });

    $('body').on('click', '.btnEdit', function () {
        var student_id = $(this).attr('data-id');
        $.ajax({
            url: '<?php echo site_url("form/matkul/edit/"); ?>' + student_id,
            type: "GET",
            dataType: 'json',
            success: function (res) {
                $('#updateModal').modal('show');
                const result = JSON.parse(JSON.stringify(res));
                $('#updateMatkul #hdnMatkulId').val(result.data[0]['kode_mk']);
                $('#updateMatkul #nama_mk').val(result.data[0]['nama_mk']);
                $('#updateMatkul #sks_edit').val(result.data[0]['sks']);
                $('#updateMatkul #smt_edit').val(result.data[0]['semester']);
            },
            error: function (data) {
                alert('error cuy');
            }
        });
    });

    $('body').on('click', '.btnDelete', function () {
        var id = $(this).attr('data-id');
        $.ajax({
            url: '<?php echo site_url("form/matkul/delete/"); ?>' + id,
            type: "GET",
            dataType: 'json',
            success: function (response) {
                alert('Delete data success');
                    location.reload();
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.responseText);
            }
        });
    });
</script>
