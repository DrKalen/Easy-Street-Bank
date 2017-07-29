<html>

        <! -- Mini-Statement Input page -->

    <head>

      <!--link to common cascading style sheets-->
      <link rel="stylesheet" type="text/css" href="http://localhost:8888/easystreetbank/stylesheets/easy_street.css">
        <div>
            <h2 class="barone orange">Easy Street Bank</h2>
            <title>Mini-Statement Page</title>
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


        <table border="0" width="70%" align="center" class="layout1">

            <form name="fbal" method="post" action=" ">
                <td>
                    <table align="center">
                        <tr>
                            <td>Account No</td>
                            <td><input type="text" name="accountno" maxlength="10" />
                            <label id="message2"></label></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td><input type="submit" name="AccSubmit" value="Submit"/>
                            <input type="reset" name="res" value="Reset"></td>
                        </tr>
                    </table>
                </td>
            </form>
        </table>
    </body>
</html>

