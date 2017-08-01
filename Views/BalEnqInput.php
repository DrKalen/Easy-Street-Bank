<?php
//starting the session for logged in customer
session_start();
include_once 'connection.php';
if (isset($_SESSION['customer'])) {
        $cid= $_SESSION['customer'];
}
?>

<html>

<!--comments: balance enquiry page-->

<head>

      <!--link to common cascading style sheets-->
      <link rel="stylesheet" type="text/css" href="../stylesheets/easy_street.css">

      <!--link to JavaScript validation file-->
      <script language="JavaScript" src="../javascript/test.js"></script>

        <div>
            <h2 class="barone orange" >Easy Street Bank</h2>
        </div>

        <title>Easy Street Bank Balance Enquiry Page </title>

    <div><?php include_once('customer_sidebar.html') ?></div>

</head>

<body onLoad="document.fbal.txtaccno.select();">


<form name="fbal" method="post" action="BalEnquiry.php" onSubmit="return validateone();">
<td>
<table align="center">

<tr>
    <td colspan="2"><p class="heading3" align=center>Balance Enquiry</p></td>
</tr>

<tr>
</tr>

<tr>
</tr>

<tr>
</tr>

<tr>
</tr>

<!--comments: to display account number field-->

<tr>
    <td>Account No</td>
    <td><input type="text"  name="accountno" maxlength="10" onKeyUp="validateaccountno();" onBlur="validateaccountno();"><label id="message2"></label></td>
</tr>

<tr>
</tr>

<tr>
</tr>

<tr>
</tr>

<tr>
</tr>


<!--comments: to display submit and reset buttons-->

<tr>
    <td></td>
    <td><input type="submit" name="AccSubmit" value="Submit">
        <input type="reset" name="res" value="Reset"></td>
</tr>



</table>
</form>

</td>
</table>
</body>

</html>

<!--In above form:action="BalEnquiry.php". This means on submit form codes mentioned in the file BalEnquiry.php will be executed.-->
