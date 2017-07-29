<html>

<!--logout page-->

    <head>

      <!--link to common cascading style sheets-->
      <link rel="stylesheet" type="text/css" href="http://localhost:8888/easystreetbank/stylesheets/easy_street.css">
      <!--link to JavaScript validation file-->
      <script language="JavaScript" src="http://localhost:8888/easystreetbank/javascript/test.js"></script>

        <div><h2 class="barone orange">Easy Street Bank</h2></div>
        <title> Easy Street Bank Logout Output Page </title>

    </head>

    <div><?php include_once('Customer_sidebar.html') ?></div>

    <body onLoad="document.fbal.txtaccno.select();">
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
