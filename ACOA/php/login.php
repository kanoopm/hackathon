<?php
	$usrid=$_POST['usrId'];
	$usrpas=$_POST['usrPass'];
	$conn = mysql_connect("localhost","root");
	mysql_select_db("acoa",$conn);
	$qur="SELECT * FROM login WHERE usrid=\"".$t_ref."\"";
	$result= mysql_query($qur,$conn);
	$row=mysql_fetch_row($result);
	if ($row[0]==$usrid  &&  $row[1]==$usrpas)
	{
		if($row[2]==0)
		{
			header("location:usrloggin.php");
		}
	}
	else
	{
		echo "User id and Password does not match";
	}
	
?>