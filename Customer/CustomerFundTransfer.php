<?php

//starting the session for logged in customer

session_start();
$_SESSION['formid'] = md5(rand(0, 10000000));
?>

<html>

    <!-- Fund Transfer page -->
    <head>

      <!--link to common cascading style sheets-->
      <link rel="stylesheet" type="text/css" href="/stylesheets/easy_street.css">

      <!--link to JavaScript validation file-->
      <script language="JavaScript" src="/javascript/test.js"></script>

        <div>
            <h2 class="barone orange">Easy Street Bank</h2>
        </div>
        <title>Fund Transfer Entry Page</title>

    </head>

    <div><?php include_once('Customer_sidebar.html') ?></div>

    <body>
      <div style = "margin-top: -200px" align = "center">
        <img src="/images/SCowabunga.gif">
      </div>

        <table class="layout1" border="0" align="center" style="margin-top: 25px">
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

<!--In above form: action="customerfund.php". This means on submit form the code in customerfund.php will be executed.-->
