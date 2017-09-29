<?php
session_start();
$login_error="";
if($_SERVER['REQUEST_METHOD']=='POST')
{
  if(isset($_POST['submit']))
    {
      if(!empty($_POST['user']) && !empty($_POST['pass']))
      {
        //connection to the database
          include 'connection.php';

          //setting up user data
          $can_user=$_POST['user'];
          $can_pass=$_POST['pass'];

          //query to the database for user record
          $sql="SELECT * FROM `users` where `username`='$can_user'";
          $res=mysqli_query($conn,$sql);

          //if query is right then fetching the record
          if($res==true)
          {
          while($row=mysqli_fetch_assoc($res))
          {

            //setting up real user id & password
            $can_id=$row['id'];
            $real_pass=$row['password'];
            $can_name=$row['username'];
          }

          //verifying passoword with database of hash type
          //if password matched set the session variable 
          // and redirect to the result page
            if(password_verify($can_pass,$real_pass))
            {
              //checking wether user have given any exam or not?
              $new_sql="SELECT `id` FROM `user_ans` WHERE `id`='$can_id'";
              //query to the database for checing exam data
              $new_res=mysqli_query($conn,$new_sql) or die(mysqli_error($conn));
              if($new_res==true)
              {

                //if user had not given any exam
                if(mysqli_num_rows($new_res)<=0)
                {
                  $login_error="You have not given any exam before please give exam first";
                }
                //else set the session and show the result
              else
              {
              $_SESSION['can_id']=$can_id;
              $_SESSION['can_name']=$can_name;
                header("Location:result_new.php");  
              }
              }
              
            }
            else
            {
              $login_error="username & password did't matched";
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
        	<?php echo $login_error; ?>
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