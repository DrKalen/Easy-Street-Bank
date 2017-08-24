<html>
<!--withdrawal page-->

    <head>

          <!--link to common cascading style sheets-->
          <link rel="stylesheet" type="text/css" href="easy_street.css">

          <!--link to JavaScript validation file-->
          <script language="JavaScript" src="/javascript/test.js"></script>

            <div>
                <h2 class="barone orange" >Easy Street Bank</h2>
            </div>

            <title> Easy Street Bank Withdrawal Page </title>

    </head>

        <div><?php include_once('Manager_sidebar.html') ?></div>

    <body onLoad="document.fbal.txtaccno.select();">

        <div style = "margin-top: -565px" align = "center">
            <img src="/images/sEarthAndVenus.gif">
        </div>

        <table class="layout1" border="0" align="center" style="margin-top: 25px">

            <form name="fbal" method="post" action="Withdrawal.php" onsubmit="return validateDeposite();">
                <td>
                    <table align="center">

                        <tr>
                            <td colspan="2"><p class="heading3" align=center>Withdrawal Form</p></td>
                        </tr>

                        <!--to display account number field-->

                        <tr>
                            <td>Account No</td>
                            <td><input type="text"  name="accountno" maxlength="10" onKeyUp="validateaccountno();" onBlur="validateaccountno();"><label id="message2"></label></td>
                        </tr>

                        <tr>
                            <td>Amount</td>
                            <td><input type="text"  name="ammount" maxlength="8" onKeyUp="validateammount();" onBlur="validateammount();"><label id="message1"></label></td>
                        </tr>

                        <tr>
                        <td>Description</td>
                            <td><input type="text"  name="desc" maxlength="10" onKeyUp="validatedesc();" onBlur="validatedesc();"><label id="message17"></label></td>
                        </tr>

                        <tr><input type="hidden" name="formid" value="4379b5b772fe345819d7f98c8d364cb7" />
                        </tr>

                        <!--to display submit and reset buttons-->

                        <tr>
                            <td></td>
                            <td><input type="submit" name="AccSubmit" value="Submit">
                                <input type="reset" name="res" value="Reset"></td>
                        </tr>

                    </table>

                </td>

            </form>

        </table>
    </body>

</html>
