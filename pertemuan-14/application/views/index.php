<link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">


<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Upload</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse"> <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove"> <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <form id="form-upload-user" method="post" autocomplete="off">
                <div class="sub-result"></div>
                <div class="form-group">
                    <label class="control-label">Choose File <small class="text-danger">*</small></label>
                    <input type="file" class="form-control form-control-sm" id="file" name="file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" required>
                    <small class="text-danger">Upload excel or csv file only.</small>
                    </div>
                <div class="form-group">
                    <div class="text-center">
                        <div class="user-loader" style="display: none; ">
                            <i class="fa fa-spinner fa-spin"></i> <small>Please wait ...</small>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light" id="btnUpload">Upload</button>
                </div>
            </form>
        </div>
    </div>
    <div class="result"></div>
</section>
<!-- /.content -->
<script src="<?php echo base_url('assets/js/jquery-2.2.4.min.js') ?>"></script>

<script>
    $(document).ready(function() {
        $("body").on("submit", "#form-upload-user", function(e) {
            e.preventDefault();
            var data = new FormData(this);
            //alert(var);
            $.ajax({
                type: 'POST',
                url: "<?php echo base_url('index.php/upload/import') ?>",
                data: data,
                dataType: 'json',
                contentType: false,
                cache: false,
                processData:false,
                beforeSend: function() {
                    $("#btnUpload").prop('disabled', true);
                    $(".user-loader").show();
                }, 
                success: function(result) {
                    alert(result.success_message);
                    $("#btnUpload").prop('disabled', false);
                    if($.isEmptyObject(result.error_message)) {
                        $(".result").html(result.success_message);
                    } else {
                        $(".sub-result").html(result.error_message);
                    }
                    $(".user-loader").hide();
                }
            });
        });
    });


</script>