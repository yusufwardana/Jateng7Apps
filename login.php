<?php
$ur['title'] = "Login";
include 'header3.php';

/*echo '<form action="authenticate.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<input type="submit" value="Login">
			</form>';*/
?>

<div class="card mb-4">
	<div class="card-header">
	
		<h4 class="text mute mb-2">Login into your account </h4>
	</div>
	<div class="card-body">
	<form action="authenticate.php" method="post">
  <div class="form-group row">
    <label for="inlineFormInputGroup" class="col-sm-2 col-form-label">Username/NIK</label>
    <div class="col-sm-10">
      <input type="text" name="username" class="form-control" id="inlineFormInputGroup">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="inputPassword3">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
  </div>
  </form>
<?php
  if(isset($_GET['act'])) {
    $test = $_GET['act'];
    if($test==1){
    	echo '<div class="alert alert-danger" role="alert">Incorrect password..!!</div>';
    }elseif($test==2){
    	
    	echo '<div class="alert alert-danger" role="alert">Incorrect username..!!</div>';
    }
    
    
    
} 
?>

  </div>
</div>

<?php


include 'footer2.php';
?>