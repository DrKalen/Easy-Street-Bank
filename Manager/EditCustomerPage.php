
<html>

<!--edit customer page-->
    <head>

      <!--link to common cascading style sheets-->
      <link rel="stylesheet" type="text/css" href="../stylesheets/easy_street.css">

      <!--link to JavaScript validation file-->
      <script language="JavaScript" src="../javascript/test.js"></script>

        <div>
            <h2 class="barone orange" >Easy Street Bank</h2>
        </div>
        <title> Easy Street Bank Edit Customer Page </title>

    </head>

   <div><?php include_once('Manager_sidebar.html') ?></div>

<body onLoad="document.fbal.txtaccno.select();">

    <div style = "margin-top: -565px" align = "center">
        <img src="../images/sFox.gif">
    </div>

    <table class="layout1" border="0" align="center" style="margin-top: 25px">
        <form name="fbal" method="post" action="editCustomerPage.php" onsubmit="return validateone();">
            <td>    <table border="0" align="center">
                    <tr>
                        <td colspan="2">
                            <p class="heading3" align=center>Edit Customer</p>
                        </td>
                    </tr><tr>

                    </tr><tr>

                    </tr><tr>

                    </tr><tr>

                    </tr>
                    <!--comments: to display account number field-->
                    <tr>
                        <td>Customer ID</td>    <td><input type="text"  name="cusid" maxlength="10" onKeyUp="validatecustomerid();" onBlur="validatecustomerid();"><label id="message14"></label></td>
                    </tr>
                    <tr></tr><tr></tr><tr></tr><tr></tr><!--comments: to display submit and reset buttons-->
                    <tr>
                        <td></td>
                        <td><input type="submit" name="AccSubmit" value="Submit" onClick="return validatebal();">
                            <input type="reset" name="res" value="Reset">
                        </td>
                    </tr>
        </form>
    </table>
</body>
</html>
