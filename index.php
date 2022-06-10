<?php
	

	if(isset($_GET['hash'])) {
		$input = $_GET['inputPass'];

		if(empty($input)) {
			$error = "Input Your Password!";
		} else {
			// Create Hash
			$hashed = password_hash($input, PASSWORD_DEFAULT);
		}
		
	}
	
	
	?>

	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>Password Hash Maker</title>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">	
	</head>
	<body>
		<main class="mt-sm-5">
	        <div class="container">
	            <div class="row">
	            	<div class="col-sm-6 offset-sm-3">
	            		<h1 class="text-center mb-5">Password Hash Maker</h1>
	            		<div class="form-main">
							<form action="" method="get">
	                            <div class="mb-3">
	                            	<?php if(!empty($error)) {
	                            	 echo "<h5 class='text-center text-danger'>{$error}</h5>"; } ?>
	                                <label for="inputPass" class="form-label"><span class="text-muted">Type Your Password:</span></label>
	                                <textarea class="form-control" name="inputPass" id="inputPass" rows="2"></textarea>
	                            </div>
	                            <div class="form-floating mt-3">
	                                <button class="btn btn-success" name="hash">Create Hash</button>
	                            </div>
	                        </form>
	                        <div class="mt-3">
	                                <label for="hashedPass" class="form-label"><span class="text-muted">Your Hashed Password:</span></label>
	                                <textarea class="form-control" id="hashedPass" rows="2"><?php if(!empty($hashed)) { echo $hashed; } ?></textarea>
	                            </div>
						</div>
	            	</div>
				</div>
			</div>
		</main>
		<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
	</body>
	</html>
	
	