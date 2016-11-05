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
                      <option value="BS">BUILDING PERMISSION </option>
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
          <table id="dowloadlist">
            <thead>
              <tr>
                <th width="41">Sr.No.</th>
                <th width="117">Department Name</th>
                <th width="658">Title</th>
                <th width="206">View/Download</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Local Self Government</td>
                <td>Panchayat Empowerment and Accountability Incentive Scheme 2011-12 PEAIS- Application Form for Grama Panchayats- To be submitted by Grama Panchayat Secretary (Malayalam)</td>
                <td><a href="javascript:viewDocUrl('/documents/10180/a4946c70-f926-485a-9c53-14db988ad856')"><img src="https://kerala.gov.in/ssdg-portlet/images/pdficon.gif" alt="View/Download" title="View/Download" height="20" width="20">(274 KB)</a></td>
              </tr>
              <tr>
                <td>2</td>
                <td>Local Self Government</td>
                <td>Panchayat Empowerment and Accountability Incentive Scheme 2011-12 PEAIS- Application Form for Block Panchayats- To be submitted by Block Panchayat Secretary (Malayalam)</td>
                <td><a href="javascript:viewDocUrl('/documents/10180/42d026d1-e0b3-4e46-9800-b92fdf333696')"><img src="https://kerala.gov.in/ssdg-portlet/images/pdficon.gif" alt="View/Download" title="View/Download" height="20" width="20">(117 KB)</a></td>
              </tr>
              <tr>
                <td>3</td>
                <td>Local Self Government</td>
                <td>Panchayat Empowerment and Accountability Incentive Scheme 2011-12 PEAIS- Application Form for District Panchayats- To be submitted by District Panchayat Secretary (Malayalam)</td>
                <td><a href="javascript:viewDocUrl('/documents/10180/cba56fa3-a38a-4a64-a482-d1df685d5b56')"><img src="https://kerala.gov.in/ssdg-portlet/images/pdficon.gif" alt="View/Download" title="View/Download" height="20" width="20">(113 KB)</a></td>
              </tr>
              <tr>
                <td>4</td>
                <td>Local Self Government</td>
                <td>LICENCE TO KEEP PIGS- DOGS (Malayalam)</td>
                <td><a href="javascript:viewDocUrl('/documents/10180/5303bff5-973c-43fd-8d45-889e7fcd456f')"><img src="https://kerala.gov.in/ssdg-portlet/images/pdficon.gif" alt="View/Download" title="View/Download" height="20" width="20">(32 KB)</a></td>
              </tr>
              <tr>
                <td>5</td>
                <td>Local Self Government</td>
                <td>APPENDIX AAPPLICATION FOR PERMIT- REGULARISATION</td>
                <td><a href="javascript:viewDocUrl('/documents/10180/86f38ea8-7f11-436c-8259-9846e30b2b8e')"><img src="https://kerala.gov.in/ssdg-portlet/images/pdficon.gif" alt="View/Download" title="View/Download" height="20" width="20">(17 KB)</a></td>
              </tr>
            </tbody>
          </table>
      </div>
    </div>
    <div id="footer">Copyright protected @ ACOA Govt. of INDIA</div>
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