<?php
//creating the session
session_start();
//checking if session is initialized or not
if(isset($_SESSION['admin_name']) && isset($_SESSION['admin_id']) && isset($_SESSION['can_id']) && isset($_SESSION['can_name']))
{
	//check wether data has been recieved or not
	
if(isset($_REQUEST['data']))
	{
		$data = json_decode(stripslashes($_REQUEST['data']));
		echo count($data);
		$ab=array();
		foreach ($data as $id) 
			{
				echo $id;
				$ab[]=$id;
			}
	}
	else
	{
		die("data not set");
	}

//create connection with database
$conn=new mysqli("localhost","root","","online_exam");
if($conn->connect_error)
{
	die("Error".$conn->connect_error);
}
else
{
	$stmt=$conn->prepare("INSERT INTO `user_ans` VALUES(?,?,?,?)");
	$stmt->bind_param("isis",$_SESSION['can_id'],$_SESSION['can_name'],$_SESSION['admin_id'],$can_ans);
	//setting up user anwsers
	$can_ans=implode(",",$ab);
	//executing the query
		$stmt->execute() or die("error");
		echo "data inserted";
}
}

else
{
	echo "session variables not initialized";
	//header("Location:administrator.php");
}
?>