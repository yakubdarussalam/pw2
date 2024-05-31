<style>
.msg{
  font-color:'red';
}
</style>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>



<form method="post" action="<?php echo base_url(); ?>index.php/form/matkul/savematkul">
<div class="container">
  <div class="row justify-content-md-center">
  <div class="col col-sm-12">
    <div class="form-group">
      <h1>Mata Kuliah</h1><hr>
    </div>
  </div>
  </div>
<div class="row justify-content-md-center">
    <div class="col col-sm-6">
      <div class="form-group">
        <label for="exampleInputNPM">Kode Mata Kuliah</label>
        <input type="text" class="form-control" name="kode_mk" aria-describedby="emailHelp" placeholder="Enter Kode MK">
      </div>
    </div>
    <div class="col col-sm-6">
      <div class="form-group">
        <label for="exampleInputNama">Nama Mata Kuliah</label>
        <input type="text" class="form-control" name="nama_mk" aria-describedby="emailHelp" placeholder="Enter Nama MK">
      </div>
    </div>
</div>
<div class="row justify-content-md-center">
  <div class="col col-sm-6">
      <div class="form-group">
        <label for="exampleInputEmail1">SKS</label>
        <input type="text" class="form-control" name="sks" aria-describedby="emailHelp" placeholder="Enter SKS">
        
      </div>
  </div>
  <div class="col col-sm-6">
      <div class="form-group">
        &nbsp;
      </div>
    </div>
</div>
<div class="row justify-content-md-center">
    <div class="col col-sm-6">
      <div class="form-group">
        <label for="exampleInputEmail1">Semester</label>
        <input type="text" class="form-control" name="semester" aria-describedby="emailHelp" placeholder="Enter Semester">
        
      </div>
    </div>
    <div class="col col-sm-6">
      <div class="form-group">
        &nbsp;
      </div>
    </div>
</div>
<div class="row justify-content-md-center">
    <div class="col col-sm-12"> &nbsp;
    </div>
</div>
<div class="row justify-content-md-center">
    <div class="col col-sm-12">
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-primary">Reset</button>
      </div>
      <div class="col col-sm-8 msg">
        <?php echo "<h2>".validation_errors('<div class="error">', '</div>')."</h2>"; ?>
      </div> 
  </div>
</div>

</div>
</form>
<!-- ALERT -->
 <div class="container" id="alert">
    <?php
      if($msg = $this->session->flashdata('msg')){
        $msg_class = $this->session->flashdata('msg_class');
    ?>
      <div class="alert <?php echo $msg_class; ?>">
        <strong class="hide-it"><?php echo $msg; ?></strong>
          
      </div> 
    <?php 
        }
    ?>     
    
  </div>
<!-- TABLE -->
<div class="containter">
<div class="row">
	  <div class="col-md-12">
<table class="table" id="mydata" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">NPM</th>
      <th scope="col">Name</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Telp</th>
      <th scope="col">Alamat</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php 
		$no = 1;
		foreach($matkul as $u){ 
		?>
    <tr>
      <th scope="row"><?=$no++;?></th>
      <td><?php echo $u->kode_mk ?></td>
      <td><?php echo $u->nama_mk ?></td>
      <td><?php echo $u->sks ?></td>
      <td><?php echo $u->semester ?></td>
      <td>
        <?php echo anchor('form/matkul/edit/'.$u->kode_mk,'Edit');?> |
        <?php echo anchor('form/matkul/hapus/'.$u->kode_mk,'Hapus');?>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<div>
    </div>
    </div>

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous">
</script> -->
<script src="<?php  echo base_url('assets/js/jquery-2.2.4.min.js'); ?>"> </script>
<script src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script src="<?php echo base_url().'assets/js/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/moment.js'?>"></script>

<script>
       // $(".alert").fadeIn(1000).fadeOut(5000);
$(document).ready(function(){  
        //$("#alert").hide(3000);
        $("#alert").fadeIn(1000).fadeOut(3000);
        $('#mydata').DataTable( {
          "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
          autoWidth: false
        });
});
</script>