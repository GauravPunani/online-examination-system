<?php
//connection file
include("connection.php");
//selecting candidate record
$sql="SELECT que1,que2,que3,que4,que5,que6,que7,que8,que9,que10,que11,que12,que13,que14,que15,que16,que17,que18,que19,que20 FROM `user_ans` WHERE id=1";
$res=mysqli_query($conn,$sql) or die(mysqli_error($conn));
if($res==true)
{
	$true_ans=0;
	$false_ans=0;
	$row=mysqli_fetch_assoc($res);
	for($i=1;$i<=count($row); $i++)
	{
		if($row["que".$i]=="t" || $row['que'.$i]=="T")
		{
			$true_ans++;
		}
		else
		{
			$false_ans++;
		}
	}
	echo "<br>"."No of Correct Ans =".$true_ans."<br>";
	echo "No. of Incorrect Ans =".$false_ans."<br>";
}
?>