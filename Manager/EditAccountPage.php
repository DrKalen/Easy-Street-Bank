
<html>

<!--edit account page-->

    <head>

          <!--link to common cascading style sheets-->
          <link rel="stylesheet" type="text/css" href="easy_street.css">

          <!--link to JavaScript validation file-->
          <script language="JavaScript" src="/javascript/test.js"></script>

            <div>
                <h2 class="barone orange" >Easy Street Bank</h2>
            </div>

            <title> Easy Street Edit Account Page </title>

    </head>

       <div><?php include_once('Manager_sidebar.html') ?></div>


    <body onLoad="document.fbal.txtaccno.select();">

        <div style = "margin-top: -565px" align = "center">
            <img src="/images/sEarthAndVenus.gif">
        </div>

        <table class="layout1" border="0" align="center" style="margin-top: 25px">

            <form name="fbal" method="post" action="editAccountPage.php" onSubmit="return validateone();">

                <td>

                    <table align="center">

                        <tr>

                            <td colspan="2"><p class="heading3" align=center>Edit Account</p></td>

                        </tr>

                        <!--to display account number field-->

                        <tr>

                            <td>Account No</td>

                            <td><input type="text"  name="accountno" maxlength="10" onKeyUp="validateaccountno();" onBlur="validateaccountno();" ><label id="message2"></label></td>

                        </tr>

                        <!--to display submit and reset buttons-->

                        <tr>

                            <td></td>

                            <td><input type="submit" name="AccSubmit" value="Submit" onClick="return validatebal();">

                                <input type="reset" name="res" value="Reset"></td>

                        </tr>

                    </table>

                </form>

            </td>

        </table>

    </body>

</html>
