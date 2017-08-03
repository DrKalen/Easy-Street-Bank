<html>

        <! -- Mini-Statement Input page -->

    <head>

      <!--link to common cascading style sheets-->
      <link rel="stylesheet" type="text/css" href="../stylesheets/easy_street.css">

      <!--link to JavaScript validation file-->
      <script language="JavaScript" src="../javascript/test.js"></script>

        <div>
            <h2 class="barone orange">Easy Street Bank</h2>
            <title>Mini-Statement Page</title>
        </div>

    </head>

    <div><?php include_once('Manager_sidebar.html') ?></div>

    <body>

    <div style = "margin-top: -550px" align = "center">
        <img src="../images/sEarthAndVenus.gif">
    </div>

    <table class="layout1" border="0" align="center" style="margin-top: 25px">


            <form name="fbal" method="post" action="MiniStatement.php"
                onsubmit="return validateone();">
                <td>
                    <table align="center">
                        <tr>
                            <td colspan="2"><p class="heading3" align=center>Mini-Statement</p></td>
                        </tr>
                        <tr>
                            <td>Account No</td>
                            <td><input type="text" name="accountno" maxlength="10"
                                onKeyUp="validateaccountno();" onBlur="validateaccountno();"/>
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

<!--In above Form :action="MiniStatement.php". This means on submit form code in MiniStatement.php will be executed.-->
