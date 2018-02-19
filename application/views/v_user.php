<?php
$id = "";
$username = "";
$fullname = "";
$password = "";

if($op=="edit"){
	foreach ($sql->result() as $obj) {
		$op = "edit";
		$id = $obj->id;
		$username = obj->username;
		$fullname = obj->fullname;
		$password = obj->password;
	}
}
?>

<?php require_once 'v_headeradmin.php' ?>

<!-- Content Wrapper. Contains page content -->
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>

<form action="<?php echo base_url(); ?>admin/tambah" method="post">
<div class="box-body">
<div class="form-group">

<input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control">
<input type="hidden" name="op" value="<?php echo $op; ?>" class="form-control">

<div class="form-group">
	<label>Username</label>
	<input name="username" type="text" class="form-control" placeholder="Masukkan Username" value="<?php echo $username; ?>">
</div>

<div class="form-group">
	<label>Password</label>
	<input name="password" type="text" class="form-control" placeholder="Masukkan Password" value="<?php echo $password; ?>">
</div>

<div class="form-group">
	<label>Fullname</label>	
	<input name="fullname" type="text" class="form-control" placeholder="Masukkan Fullname" value="<?php echo $fullname; ?>">
</div>

<div class="box-footer">
	<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>

</section>

      <!-- /.row -->

   		 <div class="col-xs-12">
    		<div class="box">
    			<!-- /.box-header -->
    			<div class="box-body table-responsive no-padding">

    			</div>
    			<!-- /.box-body -->
    			</div>
    			<!-- /.box -->
    	<!-- /.content -->
    </div>
 	 </div>
 <!-- /.wrapper -->
<?php require_once 'v_footeradmin.php' ?>