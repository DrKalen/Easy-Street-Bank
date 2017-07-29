<?php
//starting the session for logged in customer
session_start();
include_once 'connection.php';
if (isset($_SESSION['customer'])) {
        $cid= $_SESSION['customer'];
}
?>

<html>
  <!-- Balance Enquiry page -->
    <head>

      <!--link to common cascading style sheets-->
      <link rel="stylesheet" type="text/css" href="http://localhost:8888/easystreetbank/stylesheets/easy_street.css">

      <!--link to JavaScript validation file-->
      <script language="JavaScript" src="http://localhost:8888/easystreetbank/javascript/test.js"></script>

        <div>
            <h2 class="barone orange" >Easy Street Bank</h2>
        </div>

        <title>Easy Street Bank Balance Enquiry Page</title>

    </head>

    <div><?php include_once('Customer_sidebar.html') ?></div>

    <body onLoad="document.fbal.txtaccno.select();">
        <br />
        <table border="0" width="70%" align="center" class="layout1">
          <form name="fbal" method="post" action="BalEnquiry.php" onsubmit="return validateone();">
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
                    <td><select name="accountno" style="width: 150px"
                        onKeyUp="validateaccount();" onBlur="validateaccount();">
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

            </td>
          </form>
        </table>
    </body>
</html>
