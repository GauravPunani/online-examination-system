<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       
</head>
<body>
	<div class="container col-sm-offset-2 col-sm-6">
	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		<div class="form-group form-box">
			<label for="email">FULL NAME</label>
			<input type="text" class="form-control" name="name">
			<div class="form-group">
			<label for="user name">USERNAME</label>
			<input type="text" name="username" class="form-control">
			</div>
			<div class="form-group">
			<label for="password">PASSWORD</label>
				<input class="form-control" type="pass" name="passowrd">
			</div>
			<div class="form-group">
			<label for="password">RE-ENTER PASSWORD</label>
				<input type="password" class="form-control" name="repass">
			</div>
			
				<input class="form-control" type="submit" name="submit" VALUE="SUBMIT">
			
		</div>	
	</form>
</div>
</body>
</html>
<style type="text/css">
body
{
	background-color: lightgrey;
}
	.form-box
	{
		
		background-color: white;
		margin-top: 80px;
		margin-left: 200px;
	}
</style>