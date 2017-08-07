<?php
//starting the session for logged in customer
session_start();
// include_once '/DB/connection.php';
if (isset($_SESSION['customer'])) {
        $cid= $_SESSION['customer'];
}
?>

<html>

<!--comments: balance enquiry page-->

<head>

      <!--link to common cascading style sheets-->
      <link rel="stylesheet" type="text/css" href="/stylesheets/easy_street.css">

      <!--link to JavaScript validation file-->
      <script language="JavaScript" src="/javascript/test.js"></script>

        <div>
            <h2 class="barone orange" >Easy Street Bank</h2>
        </div>

        <title>Easy Street Bank Balance Enquiry Page </title>

    <div><?php include_once('customer_sidebar.html') ?></div>

</head>

<body onLoad="document.fbal.txtaccno.select();">

    <div style = "margin-top: -200px" align = "center">
        <img src="/images/SCowabunga.gif">
    </div>

    <table class="layout1" border="0" align="center" style="margin-top: 25px">

      <form name="fbal" method="post" action="BalEnquiry.php" onSubmit="return validateone();">
        <td>
          <table align="center">

            <tr>
              <td colspan="2"><p class="heading3" align=center>Balance Enquiry</p></td>
            </tr>


    <!--comments: to display account number field-->

            <tr>
                <td>Account No</td>

                <td><select name="accountno" style="width: 150px" onKeyUp="validateaccount();" onBlur="validateaccount();">
                  <option>Select Account</option>
                  <?php
                  $que = "select * from account where CUSTOMER_ID = $cid ";
                  $result = mysql_query($que);
                  while($row = mysql_fetch_array($result)) {
                    ?>
                    <option><?php echo $row['ACCOUNT_NO'];
                    ?>
                    </option>
                  <?php } ?>
            </select><label id="message2"></label></td>
            </tr>


    <!--comments: to display submit and reset buttons-->


            <tr>
                <td></td>
                <td><input type="submit" name="AccSubmit" value="Submit">
                    <input type="reset" name="res" value="Reset"></td>
            </tr>



        </table>
      </form>

    </td>
  </table>
</body>

</html>

<!--In above form:action="BalEnquiry.php". This means on submit form codes mentioned in the file BalEnquiry.php will be executed.-->
