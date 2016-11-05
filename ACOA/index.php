<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ACOA</title>
<link href="Style/ACOA_one.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="main">
	<div id="head">
    	<div id="headLeft">
    	 	ACOA<h6>Anti Corruption Office Automation</h6></div>
        <div id="headRight">
        	<form id="logIn" action="#" method="post">
            	<table>
                	<tr>
                    	<td colspan="2" style=" text-align:center"><span class="hLoggin" > Login....</span></td>
                    </tr>
                	<tr>
                    	<td><input type="text" id="usrId" name="usrId" placeholder="User Id" /></td>
                    </tr>
                    <tr>
                    	<td><input type="password" id="usrPass" name="usrPass" placeholder="Password" />
                    	<input type="submit" id="b_login" name="b_login" value="Log in"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <div id="menu">
    	<ul id="menu_item" class="list">
        	<li id="tfp"><a href="#">Track</a></li>
            <li id="dtails"><a href="#">Details</a></li>
            <li id="rules"><a href="php/service.php">Sevices</a></li>
            <li id="dowload"><a href="php/Downloads.php">Downloads</a></li>
            <li id="one"><a href="#">Complaint</a></li>
    	</ul>
    </div>
    <div id="main_body">
    	<div  id="trackCtnr">
        <h5>CURRENT STATUS</h5>
        <hr class="hrline"  size="5px"/>
        <form action="php/status.php" method="post"  id="frmTrack">
        	<table>
    				<tr>
      					<td><input type="text" id="trackField" name="trackField" placeholder="Enter Reference No."/></td>
    				</tr>
    				<tr>
      					<td><input  type="submit" id="b_track"  name="b_track" value="Get TFP Status" />
                        </td>
    				</tr>
			</table>
        </form>
        <p>&nbsp;</p>
        <p>To check your current reservation status enter 10 digit Reference Number in the text box given above and click 'Get TFP Status' button. 
        </p>
        </div>
    </div>
    <div id="footer">Copyright protected @ ACOA Govt. of INDIA</div>
</div>
</body>
</html>
<?php
if (isset($_POST['b_login']))
{
	$usrid=$_POST['usrId'];
	$usrpas=$_POST['usrPass'];
	$conn = mysql_connect("localhost","root");
	mysql_select_db("acoa",$conn);
	$qur="SELECT * FROM login WHERE usrid=\"".$usrid."\"";
	$result= mysql_query($qur,$conn);
	$row=mysql_fetch_row($result);
	if ($row[0]==$usrid  &&  $row[1]==$usrpas)
	{
		if($row[2]==0)
		{
			header("location:php/usrloggin.php");
		}
	}
	else
	{
?>
<script type="text/javascript">
	alert("User id and Password does not match");
</script>
<?php
		
	}
	
}
?>