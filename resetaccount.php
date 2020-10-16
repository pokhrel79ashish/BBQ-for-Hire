
<?php
include_once('header.php');
include_once('link.php');
?>

<div id="frmRegistration">
<form class="form-horizontal" action="verification.php" method="POST">
	<h1>Reset Password </h1>
	<h2> Please enter your email   </h2>
	<div class="form-group">
    <
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-6">
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="sec"> Date of Birth</label>
    <div class="col-sm-6">
      <input type="text" name="sec" class="form-control" id="sec" placeholder="Enter DOB" required>
    </div>
  </div>
 
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="create" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</div>
