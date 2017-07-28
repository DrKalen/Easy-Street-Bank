<html>

        <! -- Fund Transfer page -->
    <head>
        <div>
            <h2 class="barone">Easy Street Bank</h2>
        </div>

        <div>
           <ul class="menusubnav">
            <li class="orange"><a href="CustomerHomePage.php">Customer</a></li>
            <li><a href="BalEnqInput.php">Balance Enquiry</a></li>
            <li><a href="CustomerFundTransfer.php">Fund Transfer</a></li>
            <li><a href="PasswordInput.php">Change Password</a></li>
            <li><a href="MiniStatementInput.php">Mini-Statement</a></li>
            <li><a href="Logout.php">Log Out</a></li>
           </ul>
        </div>

        <title>Fund Transfer Entry Page</title>
    </head>

    <body>
        <br /><br /><br /><br />

        <table class="layout 1" border="0" align="center">
            <form name="addcust" method ="Post action =" " >

                <tr>
                    <td align="center" colspan="2"><p class="heading3">Fund
                        Transfer</p></td>
                </tr>

                <tr>
                    <td>Payers account no</td>
                    <td><input type="text" name="payersaccount" value="" />
                    <label id="message10"></label></td>
                </tr>

                <tr>
                    <td>Payees account no</td>
                    <td><input tyupe="text" name="payeesaccount" value="" />
                    <label id="message11"></label>
                    </td>
                </tr>

                <tr>
                    <td>Amount</td>
                    <td><input type="text" name="amount" maxlength= "8"/>
                    <label id="message1"></label></td>
                </tr>

                <tr>
                    <td>Description</span></td>
                    <td><input type="text" name="desc" value="" />
                    <label id="message17"></label></td>
                </tr>

                <tr><input type="hidden" name="formid" value="Submit">
                    <td></td>
                    <td><input type="submit" name="AccSubmit" value="submit">
                        <input type="reset" name="res" value="Reset"></td>
                </tr>

            </form>

        </table>

        <p align="right"><a href="CustomerHomePage.php">Home</a></p>

    </body>

</html>
