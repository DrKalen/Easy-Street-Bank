<html>

<!--logout page-->

    <head>

      <!--link to common cascading style sheets-->
      <link rel="stylesheet" type="text/css" href="http://localhost:8888/easystreetbank/stylesheets/easy_street.css">
        <div><h2 class="barone orange">Easy Street Bank</h2></div>
        <title> Easy Street Bank Logout Output Page </title>

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
        <table class="layout1" border="0" align="center">
            <form name="fbal" method="post" action = " ">
                <td colspan="2">
                    <table border="0" align="center">
                         <tr>
                            <td colspan="2"><p class="heading3" align="center">
                                 To Log Out</p> <p align="center">Please Click Here:</p></td>
                        </tr>
                        <tr></tr><tr></tr>

                        <tr>
                            <td align="center"><input type="submit" name="logout" value="Log Out">
                                </td>
                        </tr>
                    </table>
                </td>
            </form>
        </table>

    </body>

</html>
