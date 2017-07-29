<html>

  <! -- Change Password page -->

    <head>

      <!--link to common cascading style sheets-->
      <link rel="stylesheet" type="text/css" href="http://localhost:8888/easystreetbank/stylesheets/easy_street.css">  <div>
            <h2 class="barone orange">Easy Street Bank</h2>
            <title>Password Change Page</title>
        </div>

        <div>
           <ul class="menusubnav">
            <li class="orange"><a href="CustomerHomePage.php">Customer Home Page</a></li>
            <li><a href="BalEnqInput.php">Balance Enquiry</a></li>
            <li><a href="CustomerFundTransfer.php">Fund Transfer</a></li>
            <li><a href="PasswordInput.php">Change Password</a></li>
            <li><a href="MiniStatementInput.php">Mini-Statement</a></li>
            <li><a href="Logout.php">Log Out</a></li>
           </ul>
        </div>

    </head>

    <body>
        <br />
        <table class="layout1" border="0" align="center">
            <form name="addcust" action=" " method="post">
                <td colspan="2">
                    <table border="0" align="center">
                        <tr>
                            <td align="center" colspan="2"><p class="heading3">
                                 Change Password</p></td>
                        </tr>

                        <tr>
                            <td>Old Password</td><td><input type=""password" name="oldpassword"
                                  maxlength="25">
                                  <label id="message20"></label></td>
                        </tr>

                        <tr>
                            <td>New Password</td><td><input type="password" name="newpassword"
                                  maxlength="25">
                                  <label id="message21"></label></td>
                        </tr>

                        <tr>
                            <td>Confirm Password</td><td><input type="password" name"confirmpassword"
                                  maxlength="25" >
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
