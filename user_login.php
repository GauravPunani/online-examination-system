<?php
session_start();
$paper_error="";
if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_name']))
{
	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		if(isset($_POST['submit']))
		{
			if(!empty($_POST['user']) && !empty($_POST['pass']))
			{
				include("connection.php");
				$can_user=$_POST['user'];
				$can_pass=$_POST['pass'];
				$sql="SELECT * FROM `users` where `username`='$can_user'";
				$res=mysqli_query($conn,$sql);
				if($res==true)
				{
					while($row=mysqli_fetch_assoc($res))
					{
						$can_id=$row['id'];
						$real_pass=$row['password'];
						$can_name=$row['username'];
					}
					if(password_verify($can_pass,$real_pass))
					{
						$_SESSION['exam_id']=$can_id;
						$_SESSION['user_name']=$can_name;
							$check_exam="SELECT `id` FROM `user_ans` WHERE `id`='$can_id'";
							$check_num_row=mysqli_query($conn,$check_exam);
							if(mysqli_num_rows($check_num_row)>0)
							{
								$paper_error="You already had given the exam <br>Please Check your result <a href='result_new.php'> here </a> ";
							}
							else
							{
								header("Location:index.php");
							}
					}
					else{
						echo "password did't matched";
					}
				}
				else
				{
					echo mysqli_error($conn);
				}
			}
		}	
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
   <div class="container">
       <div class="row">
           <div class="col-sm-offset-4 col-sm-3 form-box">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <div style="width:200px;" class="form-group">
            <label for="username">Candidate Username</label>
            <input type="text" name="user" class="form-control" id="username">
            
        </div>
        <div style="width:200px;" class="form-group">
            <label for="Password">Candidate Password</label>
            <input type="password" class="form-control" name="pass" id="pass">
        </div>
        <div class="form-group">
            <input type="submit" value="SUBMIT" name="submit">
        </div>
        <span style="color:red;">
        	<?php echo $paper_error; ?>
        </span>
    </form>
           </div>
       </div>
    </div>
</body>
</html>
<style>
    body
    {
        background-color:aliceblue;
    }
.form-box
    {
        background-color: white;
        margin-top: 100px;
    }
</style>