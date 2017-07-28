<html>

        <! -- Login page -->

    <head>

      <!--link to common cascading style sheets-->
      <link rel="stylesheet" type="text/css" href="http://localhost:8888/easystreetbank/stylesheets/easy_street.css">
        <div>
            <h2 class="barone orange">Easy Street Bank</h2>
        </div>
            <title>Easy Street Bank Login</title>

    </head>

    <body>
        <br />
        <h2 class="heading2" align="center">Welcome to Easy Street Bank!</h2>
        <table class="layout1" border="0" align="center">
            <form name="login" action=" " method="post">
                <td colspan="2">
                    <table border="0" align="center">
                        <tr>
                            <td align="center" colspan="2"><p class="heading3">
                                 Please Log In</p></td>
                        </tr>

                        <tr>
                            <td>User Name</td><td><input type=""username" name="username"
                                  maxlength="25">
                                  <label id="message20"></label></td>
                        </tr>

                        <tr>
                            <td>Password</td><td><input type="password" name="password"
                                  maxlength="25">
                                  <label id="message21"></label></td>
                        </tr>

            <!--to display submit and reset buttons-->

                        <tr>
                            <td></td>
                            <td><input type="submit" name="submit" value="Submit">
                                <input type="reset" name="res" value="Reset"></td>
                        </tr>

                    </table>
                    </td>

            </form>

        </table>

    </body>

</html>
