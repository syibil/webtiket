<?php require_once 'v_headeradmin.php' ?>

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

<?php require_once 'v_footeradmin.php' ?>