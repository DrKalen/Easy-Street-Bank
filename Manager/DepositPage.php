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
        <title> Easy Street Bank Amount Deposit Page </title>

</head>

    <div><?php include_once('Manager_sidebar.html') ?></div>

<body onLoad="document.fbal.txtaccno.select();">

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<table border="0" width="70%" align="center" class="layout">

<form name="fbal" method="post" action="Deposit.php" onsubmit="return validateDeposite();">
<td>
<table align="center">

<tr>
    <td colspan="2"><p class="heading3" align=center>Make A Deposit</p></td>
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
    <td>Amount</td>
    <td><input type="text"  name="ammount" maxlength="6" onKeyUp="validateammount();" onBlur="validateammount();"><label id="message1"></label></td>
</tr>
<tr>
<td>Description</td>
    <td><input type="text"  name="desc" maxlength="10" onKeyUp="validatedesc();" onBlur="validatedesc();"><label id="message17"></label></td>

</tr>
<tr><input type="hidden" name="formid" value="b4c18da3c8d76b8afce11242d426cb48" />
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
