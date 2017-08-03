<html>

<!--customized statement page-->

<head>

      <!--link to common cascading style sheets-->
      <link rel="stylesheet" type="text/css" href="../stylesheets/easy_street.css">

      <!--link to JavaScript validation file-->
      <script language="JavaScript" src="../javascript/test.js"></script>

        <div>
            <h2 class="barone orange" >Easy Street Bank</h2>
        </div>

        <title>Easy Street Bank Customized Statement Page </title>

    <div><?php include_once('Manager_sidebar.html') ?></div>

</head>


<body onLoad="document.fbal.txtaccno.select();">

    <div style = "margin-top: -550px" align = "center">
        <img src="../images/sFireworks.gif">
    </div>

    <table class="layout1" border="0" align="center" style="margin-top: 25px">


        <form name="fbal" method="post" action="CustomisedStatement.php" onSubmit="return validateone();">

            <td>

                <table align="center">

                    <tr>

                        <td colspan="2"><p class="heading3" align=center>Customized Statement Form</p></td>

                    </tr>


                    <tr>

                    </tr>



                    <tr>

                    </tr>



                    <tr>

                    </tr>

                    <tr>

                    </tr>

                    <tr>

                    <tr>

                        <td>Account No</td>

                        <td> <input type="text" name="accountno" maxlength="10"onKeyUp="validateaccountno();" onBlur="validateaccountno();"/><label id="message2"></label>

                        </td>

                    </tr>

                        <td>From Date </td>

                            <td><input type="date" name="fdate" onKeyUp="fromdate();" onBlur="fromdate();" onClick="fromdate();"><label id="message26"></label>

                            </td>

                    </tr>

                    <tr>

                        <td>To Date </td>

                            <td> <input type="date" name="tdate" onKeyUp="todate();" onBlur="todate();" onClick="todate();"><label id="message27"></label>

                            </td>

                    </tr>

                    <tr>

                        <td>Minimum Transaction Value</td>

                        <td><input type="text"  name="amountlowerlimit" maxlength="10" onKeyUp="validateamount_lowerlimit()" onBlur="validateamount_lowerlimit()"/><label id="message12"></label></td>

                    </tr>

                        <td>Number of Transaction</td>

                        <td><input type="text"  name="numtransaction" maxlength="10" onKeyUp="validatenum_transaction();" onBlur="validatenum_transaction();"/><label id="message13"></label></td>

                    <tr>

                    </tr>


                    <tr>

                    </tr>


                    <!--comments: to display submit and reset buttons-->



                    <tr>

                        <td></td>

                        <td><input type="submit" name="AccSubmit" value="Submit" onClick="return validatebal();">

                            <input type="reset" name="res" value="Reset"></td>

                    </tr>



                </form>

            </table>

        </td>

    </table>

</body>

</html>
