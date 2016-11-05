<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ACOA | TFP</title>
<link href="../Style/ACOA_one.css" rel="stylesheet" type="text/css">
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
                    	<td><input type="text" id="usrPass" name="usrPass" placeholder="Password" />
                    	<input type="button" id="b_login" name="b_login" value="Log in"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <div id="menu">
    	<ul id="menu_item" class="list">
        	<li id="tfp"><a href="../index.php">Track</a></li>
            <li id="dtails"><a href="#">Details</a></li>
            <li id="rules"><a href="#">Sevices</a></li>
            <li id="dowload"><a href="#">Downloads</a></li>
            <li id="one"><a href="#">Complaint</a></li>
    	</ul>
    </div>
    <div id="main_body">
    	<div id="trackCtnr" >
    		<h5 style="text-decoration:underline">Current status</h5>
            <div id="statusAr">
            	<?php
					$conn = mysql_connect("localhost","root");
					mysql_select_db("acoa",$conn);
					$t_ref=$_POST['trackField'];
					$qur="SELECT * FROM filerecord WHERE refno=\"".$t_ref."\"";
					$result= mysql_query($qur,$conn);
					$row=mysql_fetch_row($result);
					#echo ("<b>Reference ID: </b>".$row[0]."<br />");
					#echo ("Your File Has raeched:".$row[1]."<br />")
					echo ("<table id=\"tblStatus\"><tr><td>Reference Id:</td><td>$row[0]</td></tr> <tr><td>File Reached:</td><td>$row[1]</td></tr> <tr><td>Percetage of Completion:</td><td></td></tr> <tr><td>Estimated time for approval:</td><td></td></tr> <tr><td></td><td></td></tr> <tr><td></td><td></td></tr></table>");
					
				?>
            </div>
        </div>
    </div>
    <div id="footer">Copyright protected @ ACOA Govt. of INDIA</div>
</div>
</body>
</html>