<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Article List</title>
    <link href="<?= base_url("assets/css/bootstrap.css"); ?>" rel="stylesheet" >
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"> </script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    

</head>
<body>
  <!-- header --> 
<?php include ('header.php'); ?>
<!-- end of header -->

<div class = "container" style = "margin-top:20px" >
<h1> Admin Form </h1>
<?php echo form_open('Admin/index')?>

<div class = "row" >
  <div class = "col-lg-6">
  <div class="form-group">
    <label for="Username">Username :</label>
    <?php echo form_input(['class'=> 'form-control','placeholder'=>'Enter username','name'=>'username']); ?>
  </div>
  </div>
</div>
<div class = "row" >
  <div class = "col-lg-6">
  <div class="form-group">
    <label for="pwd">Password:</label>
    <?php echo form_password(['class'=>'form-control','type'=> 'password','placeholder'=>'Enter password', 'name'=>'password']); ?>
    </div>
  </div>
</div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
    <?php echo form_submit(['class'=> 'btn btn-primary', 'type'=>'submit', 'value' => 'Submit']); ?>
</form>
 <?php echo validation_errors(); ?>  
 <footer>
</footer> 
</body>
</html>