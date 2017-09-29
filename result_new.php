<?php
session_start();
//checking if session is initialized or not
if(isset($_SESSION['can_id']) && isset($_SESSION['can_name']))
{
	include 'connection.php';
	$can_id=$_SESSION['can_id'];
	$sql="SELECT * FROM `questions`";
	$sql1="SELECT ans FROM `user_ans` WHERE id='$can_id'";
	$res=mysqli_query($conn,$sql) or die(mysqli_error($conn));
	$res1=mysqli_query($conn,$sql1) or die(mysqli_error($conn));
	if($res1==true)
	{
		$data="";
		while($row=mysqli_fetch_assoc($res1))
		{
			$data=$row['ans'];
		}
		$can_ans=explode(",", $data);
		for($i=0;$i<=99;$i++)
		{
			if($can_ans[$i]=="")
			{
				$can_ans[$i]=0;
			}
		}
		if($res==true)
		{
			$table_data="";
			$real_data=array();
			while($row=mysqli_fetch_assoc($res))
			{
				$table_data.="<tr><td>".$row['que_id']."</td><td>".$row['que']."</td><td>".$row['ans']."</td></tr>";
				$real_data[]=$row['ans'];
			}

			//now we will compare the data
			
				$correct=0;
				$incorrect=0;
				$attempted=0;
				$unattempted=0;
			for($i=0;$i<=99;$i++)
			{
				if($can_ans[$i]==$real_data[$i])
				{
					$correct++;
					$attempted++;
					continue;
				}
				if($can_ans[$i]==0)
				{
					$unattempted++;
					continue;
				}
				if($can_ans[$i]!=$real_data[$i])
				{
					$incorrect++;
					$attempted++;
				}
			}
			$marks=0;
			$marks=$correct*2-$incorrect*0.5;
			
		}
	}
}
else
{
	header("Location:result_login.php");
}
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
	<div class="container">
		
		<div class="panel panel-success">
			<div class="panel-heading">
				<h3>Exam-Result</h3>
					<button id="logout" style="float: right; margin-top: -40px;" class="btn btn-danger">LOGOUT</button>
			</div>
			<div class="row">
				<div class="col-sm-8">
					<div class="panel-body">
				<h3>Total Questions 100</h3>
				<h4>No. of correct Anwsers <span><?php echo $correct; ?></span></h4>
				<h4>NO. of Incorrect Anwsers <span><?php echo $incorrect; ?></span></h4>
				<h4>Attempted <span><?php echo $correct+$incorrect; ?></span></h4>
				<h4>Unattempted <span><?php echo $unattempted; ?></span></h4>
			</div>
				</div>
				<div class="col-sm-4">
					<div class="row">
						<div class="col-sm-6">
							<h3 class="text">Result</h3>
							<h4>Marks Obtained </h4>
							<h4>Minimum Marks</h4>
						</div>
						<div class="col-sm-6">
							<span><?php
						if($marks>33)
						{
							echo "PASS";
						}
						else
						{
							echo "<h3 class='text-danger'>FAIL</h3>";
						}
					 ?></span>
					 <h4><span><?php echo $marks; ?></span></h4>		<h4>33</h4>
						</div>
					</div>
					
				</div>
			</div>	
			
			<div class="panel-footer"></div>
		</div>	
		
	</div>
	<div class="container">
		<table class="table table-bordered table-hover">
		<tr><th>Question No</th><th>Option</th><th>Correct Anwsers</th></tr>
			<span><?php echo $table_data; ?></span>
	</table>
	</div>
</body>
</html>
<script type="text/javascript">
	$("#logout").click(function(){
		console.log("call");
		location.href="logout.php";
	});
</script>