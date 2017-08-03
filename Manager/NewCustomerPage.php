
<html>

<!--new customer page-->

<head>

      <!--link to common cascading style sheets-->
      <link rel="stylesheet" type="text/css" href="../stylesheets/easy_street.css">

      <!--link to JavaScript validation file-->
      <script language="JavaScript" src="../javascript/test.js"></script>

        <div>
            <h2 class="barone orange" >Easy Street Bank</h2>
        </div>
        <title> Guru99 Bank New Customer Entry Page </title>

</head>

    <div><?php include_once('Manager_sidebar.html') ?></div>

<body>

    <div style = "margin-top: -565px" align = "center">
        <img src="../images/sFox.gif">
    </div>

<form name="addcust" action="insrtCustomer.php" method="post" onSubmit="return validatenewCust();">

    <td colspan="2">

    <table border="0" align="center">



<tr>
    <td align="center" colspan="2"><p class="heading3" style = "margin-top: 25px">Add New Customer</p></td>

</tr>
<tr>
</tr>
<tr>
</tr>

<!--comments: To display customer name field-->

<tr>
    <td>Customer Name</td><td><input type="text" name="name" maxlength="25" onKeyUp="validatecustomername();" onBlur="validatecustomername();"><label id="message"></label></td>

</tr>

<!--comments: To display customer gender field-->

<tr>
    <td>Gender</td><td>
    <input type ="radio" name ="rad1" value="m" checked>male
    <input type ="radio" name ="rad1" value="f">female
    </td>
</tr>

<!--comments: To display customer date of birth field-->

<tr>
        <td>Date of Birth</td>

        <td><input type="date" name="dob" id="dob" onKeyUp="validatedob();" onBlur="validatedob();"/>
  <label id="message24"></label>
        </td>
</tr>

<!--comments: To display customer address field-->

<tr>
    <td>Address</td>
    <td>
        <textarea rows="5" cols="20" name="addr" maxlength="50" onKeyUp="validateAddress();" onBlur="validateAddress();"></textarea>
                <label id="message3"></label>

    </td>
</tr>

<tr>
    <td>City</td><td><input type="text" name="city" maxlength="25" onKeyUp="validateCity();" onBlur="validateCity();"><label id="message4"></label></td>

</tr>

<tr>
    <td>State</td><td><input type="text" name="state" maxlength="25" onKeyUp="validateState();" onBlur="validateState();"><label id="message5"></label></td>

</tr>

<tr>
    <td>PIN</td><td><input type="text" name="pinno" maxlength="6" onKeyUp="validatePIN();" onBlur="validatePIN();"><label id="message6"></label></td>
</tr>

<!--comments: To display customer telephone number field-->

<tr>
    <td>Mobile Number<span></span></td><td><input type="text" name="telephoneno" maxlength="15" onKeyUp="validateTelephone();" onBlur="validateTelephone();"><label id="message7"></label></td>
</tr>

<!--comments: To display customer email id field-->

<tr>
    <td>E-mail</td><td><input type="text" name="emailid" maxlength="30" onKeyUp="validateEmail();" onBlur="validateEmail();"><label id="message9"></label></td>
</tr>
<tr>
<td>Password</td>
<td><INPUT TYPE="password" NAME="password" onKeyUp="validatepassword();" onBlur="validatepassword();"><label id="message18"></label></td>
</tr>
<!--comments: To display submit and reset buttons-->
<tr>
        <td></td>
        <td><input type="submit" value="Submit" name="sub"/>
        <input type ="reset" value ="Reset" name ="res"></td>
</tr>

</form>

</table>
</td>
</table>

</body>

</html>
