<!DOCTYPE html>


<?php
	# Write you comment
	// other comment

	/*
		Comment with many line

	*/

	$studentNo = "";
	$lastName = "";
	$firstName = "";
	$emailAddress = "";
	$password = "";
	$birthdate = null;

?>

<html>
	<head>
		<title>Student Registration </title>
		<link href="css/bootstrap.min.css" rel="stylesheet" />
	</head>

	<body>
		<div class="container">
			<h1 class="text-center">Student Registration</h1>
			<div class="col-lg-offset-3 col-lg-6">
					<div class="well">
						<form method="POST" action="welcome.php"
							class="form-horizontal">
							<div class="form-group">

								<label class="control-label col-lg-4">
									Student ID 

								</label>
								<div class="col-lg-8"> 

								<input type="text" name="sid"
									class="form-control" required />

								</div>
	
							</div>

							<div class="form-group">

								<label class="control-label col-lg-4">
									Last Name 

								</label>
								<div class="col-lg-8"> 

								<input type="text" name="ln"
									class="form-control" required />

								</div>
	
							</div>
							<div class="form-group">

								<label class="control-label col-lg-4">
									First Name 

								</label>
								<div class="col-lg-8"> 

								<input type="text" name="fn"
									class="form-control" required />

								</div>
	
							</div>
							<div class="form-group">

								<label class="control-label col-lg-4">
									Email Address 

								</label>
								<div class="col-lg-8"> 

								<input type="email" name="email"
									class="form-control" required />

								</div>
	
							</div>
							<div class="form-group">

								<label class="control-label col-lg-4">
									Password 

								</label>
								<div class="col-lg-8"> 

								<input type="password" name="pw"
									class="form-control" required />

								</div>
	
							</div>
							<div class="form-group">

								<label class="control-label col-lg-4">
									Birthdate 

								</label>
								<div class="col-lg-8"> 

								<input type="date" name="bday"
									class="form-control" required />

								</div>
	
							</div>
							<div class="form-group">
								<div class="col-lg-offset-4 col-lg-8">
									<button name="register" 
										class="btn btn-success">
										Register NIGGUH!
									</button>
								</div>

							</div>
						</form>
					</div>
			</div>
		</div>

	</body>

</html>