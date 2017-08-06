<html>

  <! -- Change Password page -->

    <head>

      <!--link to common cascading style sheets-->
      <link rel="stylesheet" type="text/css" href="../stylesheets/easy_street.css">

      <!--link to JavaScript validation file-->
      <script language="JavaScript" src="../javascript/test.js"></script>

      <div>
            <h2 class="barone orange">Easy Street Bank</h2>
            <title>Password Change Page</title>
        </div>

    </head>

    <div><?php include_once('Manager_sidebar.html') ?></div>

    <body>

    <div style = "margin-top: -565px" align = "center">
        <img src="../images/sEarthAndVenus.gif">
    </div>

    <table class="layout1" border="0" align="center" style="margin-top: 25px">
            <form name="addcust" action="Password.php" method="post"
                onsubmit="return validateChangePassword()">
                <td colspan="2">
                    <table border="0" align="center">
                        <tr>
                            <td align="center" colspan="2"><p class="heading3">
                                 Change Password</p></td>
                        </tr>

                        <tr>
                            <td>Old Password</td><td><input type=""password" name="oldpassword"
                                  maxlength="25" onKeyUp="validateoldpassword();" onBlur="validateoldpassword();">
                                  <label id="message20"></label></td>
                        </tr>

                        <tr>
                            <td>New Password</td><td><input type="password" name="newpassword"
                                  maxlength="25" onKeyUp="validatenewpassword();" onBlur="validatenewpassword();">
                                  <label id="message21"></label></td>
                        </tr>

                        <tr>
                            <td>Confirm Password</td><td><input type="password" name="confirmpassword"
                                  maxlength="25" onKeyUp="validateconfirmpassword();" onBlur="validateconfirmpassword();">
                                  <label id="message22"></label></td>
                        </tr>

            <!--to display submit and reset buttons-->

                        <tr>
                            <td></td>
                            <td><input type="submit" name="submit" value="Submit">
                                <input type="reset" name="res" value="Reset"></td>
                        </tr>

                    </table>
                    </td>

            </form>

        </table>

    </body>

</html>

<!--In the above form: action="Password.php". This means on submit form the code in Password.php will be executed.-->
