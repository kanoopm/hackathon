<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
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
                    	<td><input type="password" id="usrPass" name="usrPass" placeholder="Password" />
                    	<input type="submit" id="b_login" name="b_login" value="Log in"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <div id="menu">
    	<ul id="menu_item" class="list">
        	<li id="tfp"><a href="../index.php">Track</a></li>
            <li id="dtails"><a href="#">Details</a></li>
            <li id="rules"><a href="service.php">Sevices</a></li>
            <li id="dowload"><a href="Downloads.php">Downloads</a></li>
            <li id="one"><a href="#">Complaint</a></li>
    	</ul>
    </div>
    <div id="main_body">
     <div id="searchService">
    	<form id="frmservice" method="post" action="#">
        	<table>
            	<tr>
                	<td>
                        <p>
                          <select id="deprt" name="deprt" onBlur="#">
                            <option value="none" selected="selected">Select Department</option>
                            <option value="GPS">GRAMA PANCHAYATH SERVICES</option>
                            <option value="KSEB">KERALA STATE ELECTRICITY BOARD AND ENERGY MANAGEMENT</option>
                            <option value="RD">REGISTRATION DEPARTMENT</option>
                            <option value="KP">KERALA POLICE</option>
                            <option value="AGRI">AGRICULTURE</option>
                            <option value="KWA">KERALA WATER AUTHORITY</option>
                            <option value="FAWL">FOREST AND WILD LIFE</option>
                            <option value="EDU">EDUCATION</option>
                            <option value="DTAKFC">DEPARTMENT OF TRESURIES AND KERALA FINANCIAL CORPORATION</option>
                            <option value="CT">COMMERCIAL TAXES</option>
                            <option value="SI">STATE INSURANCE </option>
                            <option value="SCD">SCHEDULED CASTE DEVELOPMENT</option>
                            <option value="LOT">LOTTERY</option>
                            <option value="NRKA">NON RESIDENT KERALITES AFFAIRS</option>
                            <option value="PWD">PUBLIC WORKS DEPARTMENT</option>
                            <option value="KSRTC">KERALA STATE ROAD TRANSPORT CORPORATION</option>
                            <option value="CS">CIVIL SUPPLIES</option>
                            <option value="EXI">EXCISE</option>
                          </select>
                        </p>
                        <p>&nbsp; </p>
                       </td>
                      </tr>
                      <tr>
                      	<td>
                    
                      <select id="deprt2" name="deprt2" onBlur="#">
                      <option value="none" selected="selected">Select services</option>
                      <option value="BR">BIRTH REGISTRATION</option>
                      <option value="INBR">INSERT THE NAME OF THE BIRTH REGISTER</option>
                      <option value="DR">DEATH REGISTRATION</option>
                      <option value="MR">MARRIAGE REGISTRATION</option>
                      <option value="DMR">DELAYED MARRIAGE REGISTRATON</option>
                      <option value="OAP">OLD AGE PENSION</option>
                      <option value="WP">WIDOW PENSION</option>
                      <option value="PFH">PENSION FOR THE HANDICAPPED</option>
                      <option value="AWP">AGRICULTURAL WORKERS PENSION</option>
                      <option value="UA">UNEMPLOYMENT ALLOWANCE</option>
                      <option value="BS">BUILDING CONSTRUCTION PERMISSION </option>
                      <option value="PR">PERMIT RENEWAL</option>
                      <option value="BOC">BUILDING OWNERSHIP CERTIFICATE</option>
                      <option value="TOB">TRANSFER OF OWNERSHIP OF BUILDING</option>
                      <option value="RC">RESIDENT CERTIFICATE</option>
                      <option value="TEFB">TAX EXCEPTION FOR BUILDINGS</option>
                    </select>
                    
                    <input type="button" id="b_dptsel" name="b_dptsel" value="Go" onClick="#" /></td>
                </tr>
            </table>
        </form>
     </div>
     <div id="changeservice">
      <p><h2>Building  Construction Permit (For New Building)</h2><br/>
        <strong><em>Time  required to sanction</em></strong>: 30 days.<br>
        <em><strong>Officer In-charge  </strong></em>     : Grama Panchayath  Secretary<br>
        <em><strong>Documents  Required  </strong></em>: <br>
        <ul id="serviceul">
        <li>Kerala Panchayath Building Construction Form A (with 5 rs court stamp  fee), </li>
        <li>Land Registration Document</li>
        <li>Possession Certificate</li>
        <li>Building Plan/ Site Plan</li>
        <li>Section Elevation / Terrace Plan</li>
        <li>Parking Plan (If needed)</li>
        <li>Water Harvesting Tank</li>
        <li>Liscence Copy of Building Liscencee</li>
        </ul>
        <em><strong>Fees to be  submitted :</strong></em> According to KPBR scale<br>
        <em><strong>1st Appellet  Authority:  </strong></em>Overseer/ Asst Engineer<br>
        <em><strong>2nd Apellete  Authority: </strong></em>Tribunal for LSG<br>
        <em><strong>Remarks: </strong></em><ul id="serviceul"><li>Architectural Plan is to be prepared by Approved Architect/Engineer</li>
       <li>If NOC has to be availed more  copies of the plan has to be submitted</li></ul>
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