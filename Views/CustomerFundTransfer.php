<html>

    <!-- Fund Transfer page -->
    <head>

      <!--link to common cascading style sheets-->
      <link rel="stylesheet" type="text/css" href="http://localhost:8888/easystreetbank/stylesheets/easy_street.css">
      <!--link to JavaScript validation file-->
      <script language="JavaScript" src="http://localhost:8888/easystreetbank/javascript/test.js"></script>

        <div>
            <h2 class="barone orange">Easy Street Bank</h2>
        </div>
        <title>Fund Transfer Entry Page</title>

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
            <form name="addcust" method="post" action="customerfund.php"
                onsubmit="return validateFundTransfer();">
                <td colspan="2">
                    <table border="0" align="center">
                          <tr>
                            <td align="center" colspan="2"><p class="heading3">Fund
                                Transfer</p></td>
                        </tr>

                        <tr>
                            <td>Payers account no</td>
                            <td><input type="text" name="payersaccount" value=""
                                onBlur="validatepayersaccountno();" on KeyUp="validatepayersaccountno();"/>
                            <label id="message10"></label></td>
                        </tr>

                        <tr>
                            <td>Payees account no</td>
                            <td><input type="text" name="payeeaccount" value=""
                                onBlur="validatepayeeaccountno();" on KeyUp="validatepayeeaccountno();"/>
                            <label id="message11"></label>
                            </td>
                        </tr>

                        <tr>
                            <td>Amount</td>
                            <td><input type="text" name="amount" maxlength= "8"
                                onBlur="validateamount();" on KeyUp="validateamount();"/>
                            <label id="message1"></label></td>
                        </tr>

                        <tr>
                            <td>Description</span></td>
                            <td><input type="text" name="desc" value=""
                                onBlur="validatedesc()" on KeyUp="validatedesc()"/>
                            <label id="message17"></label></td>
                        </tr>

                        <tr><input type="hidden" name="formid" value="Submit">
                            <td></td>
                            <td><input type="submit" name="AccSubmit" value="submit"
                                onclick="return validateone();">
                                <input type="reset" name="res" value="Reset"></td>
                        </tr>

                    </table>
                    </td>

            </form>

        </table>

    </body>

</html>
