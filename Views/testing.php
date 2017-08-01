
<html>
    <!--Application Home Page-->

    <head>

      <!--link to common cascading style sheets-->
      <link rel="stylesheet" type="text/css" href="http://localhost:8888/easystreetbank/stylesheets/easy_street.css">

      <!--Include the JavaScript validation file-->
      <script language="JavaScript" src="http://localhost:8888/easystreetbank/javascript/test.js"></script>

        <div>
            <h2 class="barone orange" >Easy Street Bank</h2>
        </div>

        <title>Easy Street Bank Home Page</title>

    </head>

    <body>

        <table class="layout" border="0" width="90%" align = "center">
            <tr>
                <td align="center">

                </td>
            </tr>
        </table>

    <div class="heading3" align="center">Welcome to the Online Banking Page of Easy Street Bank</div>

    <br><br><marquee class="heading2" loop=slide>We Strive You Thrive!!</marquee><br><br>


    <form name="frmLogin" method="POST" action="index.php">
        <table border="0" width="50%" align = "center" style-"margin-top: 270px">

            <!--Display USER ID Label and its text box-->
            <tr>
                <td align="right">UserID</td>
                <td><input type="text" name="uid" maxlength="10"
                    onKeyUp="validateuserid();" onBlur="validateuserid();">
                    <label>id="message23"</label>
                </td>
            </tr>

            <!--Display Password and its text box-->
            <tr>
                <td align="right">Password</td>
                <td> <input type="password" name="password" maxlength="10"
                    onKeyUp="validatepassword();" onBlur="validatepassword();">
                    <label>id="message18"</label>
                </td>
            </tr>

            <tr>
                <td></td>
                <td><input type = "submit" name="btnLogin" value ="Log In">
                    <input type ="reset" name ="btnReset" value="Reset">
                </td>
            </tr>

        </table>
    </form>

    </body>
</html>
