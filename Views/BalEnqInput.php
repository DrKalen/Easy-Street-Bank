<html>
 <! -- Balance Enquiry page -->
    <head>

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

    !--link to common cascading style sheets
        <link rel="stylesheet" type="text/css" href="EasyStreetBank/Stylesheets/easy_street.css">

        <div>
            <h2 class="barone">Easy Street Bank</h2>
        </div>

        <title>Easy Street Bank Balance Enquiry Page</title>

    </head>

    <body>
        <br />
        <table border="0" width="70%" align="center" class="layout1">
          <form name="fbal" method="post" action=" ">
            <table align="center">
                <td>
                <tr>
                    <td
                        colspan="2"><p class="heading3" align=center>Balance Enquiry Form</p>
                    </td>
                </tr>

        <!-- to display account number field-->
                <tr>
                    <td>Account No</td>
                    <td><select name="accountno" style="width: 150px">
                        <option>Select Account</option></select>
                        <label id="message25"></label></td>
                </tr>

        <!-- to display submit and reset buttons-->

                <tr>
                    <td></td>
                    <td><input type="submit" name="AccSubmit" value="Submit">
                    <input type="reset" name="res" value="Reset"></td>
                </tr>

            </table>
        <!--to link to home page-->

            <p align="right"><a href="CustomerHomePage.php">Home</a></p>

            </td>
          </form>
        </table>
    </body>
</html>
