<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
    if(isset($_POST['submit']))
    {
        if(!empty($_POST['user']) && !empty($_POST['pass']))
        {
          include("connection.php");
            $user=$_POST['user'];
            $pass=$_POST['pass'];
            $sql="SELECT * FROM `admin` WHERE `username`='$user'";
            $res=mysqli_query($conn,$sql);
            if($res==true)
            {
              while ($row=mysqli_fetch_assoc($res)) {
                $hash=$row['password'];
                $admin=$row['username'];
                $admin_id=$row['id'];
              }
              if(password_verify($pass,$hash))
              {
                $_SESSION['admin_name']=$admin;
                $_SESSION['admin_id']=$admin_id;
                header("Location:user_login.php");
              }
              else
              {
                echo "password did't matched";
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
            <label for="username">Admin Username</label>
            <input type="text" name="user" class="form-control" id="email">
            
        </div>
        <div style="width:200px;" class="form-group">
            <label for="Password">Password</label>
            <input type="password" class="form-control" name="pass" id="pass">
        </div>
        <div class="form-group">
            <input type="submit" value="SUBMIT" name="submit">
        </div>
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