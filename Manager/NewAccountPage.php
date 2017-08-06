
<html>

<!--new account page-->

<head>
      <!--link to common cascading style sheets-->
      <link rel="stylesheet" type="text/css" href="../stylesheets/easy_street.css">

      <!--link to JavaScript validation file-->
      <script language="JavaScript" src="../javascript/test.js"></script>

        <div>
            <h2 class="barone orange" >Easy Street Bank</h2>
        </div>
        <title> Easy Street Bank Add New Account </title>
</head>

    <div><?php include_once('Manager_sidebar.html') ?></div>

<body>

    <div style = "margin-top: -565px" align = "center">
        <img src="../images/sEarthAndVenus.gif">
    </div>

    <table class="layout1" border="0" align="center" style="margin-top: 25px">
    <form name="form1" method="post" action="insertAccount.php"> <!--creating form for adding new account -->
        <td>
        <table align=center cellspacing="10"> <!--creating table -->
            <tr>
            <td colspan="2"><p class="heading3" align="center">Add New Account</p></td>
            </tr>

            <tr>
            <td align="right">Customer id</td><td><input type="text" name="cusid" onKeyUp="validatecustomerid();" onBlur="validatecustomerid();"><label id="message14"></label></td></tr>
            <tr><td align="right"> Account type</td>
            <td><select name ="selaccount" style="width:175px">
            <option value="Savings">Savings</option>
            <option value="Current">Current</option>
            </select></td>
            </tr>
            <tr>
            <td align="right">
                            Initial deposit</td><td><input type="text" name="inideposit" maxlength="8" onKeyUp="validateinideposit();" onBlur="validateinideposit();"><label id="message19"></label></td>
            </tr>
            <tr>
            <td></td>
            <td><input type="submit" name="button2" value="submit" value="submit" onclick="return validateAddAccount();">
            <input type="reset" name="reset" value="reset" ></td>
            </tr>
        </table>
        </td>
    </form>
    </table>

</body>
</html>
