<?php
//starting the session for logged in customer

session_start();
if (iset($_SESSIOO['customer'])) {
    $customer = $_SESSION['customer'];
} else {
    echo "<script type='text/javascript'>alert('You are not authorized to do a fund transfer!');
        .location.href='customerfundinput.php'</script>";
}
if ($_POST['formid'] == $_Session['formid']) {
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

    <?php$payer_no = $_POST['payersaccount'];
    $payee_no = $_POST['payeeaccount'];

    if ($payer_no == $payee_no) {
        ?>
        <script type='text/javascript'> alert('Payer's account number and Payee's account number must not be the same!'); window.location.href = "CustomerFundTransfer.php";</script>script>
        <?php
    }

    $qc = "SELECT `CURRENT_AMOUNT`, `CUSTOMER_ID` FROM `account` WHERE `ACCOUNT_NO`='$payer_no'";
    $rc = mysql_query($qc);
    $c = "select CURRENT_AMOUNT from account where account_no='$payee_no'";
    $ac = mysql_query($c);
    ?>
    <body>

        <br><br>
        <table border="0" align="center" class="layout1">
            <tr>
                <td colspan="2"><p class="heading3" align=center>FUND TRANSFER DETAILS FOR ACCOUNT NO:
                    <?php echo $payer_no; ?></p></td>
            </tr>

            <?php
            $row = mysql_fetch_array($rc);
            $row1 = mysql_fetch_array($ac);

            if (mysql_num_rows($rc) == 1) {
                if (mysql_num_rows($ac) == 1) {
                    $c_id = $row['CUSTOMER_ID'];
                    if ($c_id ==$customer) {
                        if ($row["CURRENT_AMOUNT"] <= $_POST['amount']) {
                            ?>
                            <script type='text/javascript'>alert('Transfer Failed. Account Balance low!'); window.location.href ="CustomerFundTransfer.php";</script>
                            <?php
                        } else {
                            $fundminus = $row["CURRENT_AMOUNT"] - $_POST['amount'];
                            $fundplus = $row1["CURRENT_AMOUNT"] + $_POST['amount'];
                            $sql1 = "UPDATE `account` SET `CURRENT_AMOUNT`='$fundminus' WHERE `ACCOUNT_NO`='$payer_no'";
                            $sql11 = mysql_query($sql1);

                            $sql2 = "UPDATE `account` SET `CURRENT_AMOUNT`='$fundplus' WHERE `ACCOUNT_NO`='payee_no'";
                            $sql22 = mysql_query($sql12)

                            $sql3 = "INSERT INTO transaction (ACCOUNT_NO, DATE_OF_TRANSACTION, AMOUNT, TRANSACTION_TYPE, DESCRIPTION) VALUES (". $POST['payersaccount'] . ",CURDATE()," . $_POST['amount'] . ",'t','" . $_POST['desc'] . "Transfer To" . $_POST['payeeaccount'] . "')";
                            $sql33 = mysql_query($sql3);

                            $tid = mysql_insert_id();
                            $sql4 = "INSERT INTO transaction (ACCOUNT_NO, DATE_OF_TRANSACTION, AMOUNT, TRANSACTION_TYPE, DESCRIPTION) VALUES (". $POST['payeeaccount'] . ",CURDATE()," . $_POST['amount'] . ",'t','" . $_POST['desc'] . "Transfer From" . $_POST['payersaccount'] . "')";
                            $sql44 = mysql_query($sql4);
                            ?>

                            <td>
                                <table border="1" align="center" syle="margin=top:0px" cellspacing="0" cellpadding="2">

                                    <tr>
                                        <td>Transaction ID</td>
                                        <td><?php echo $tid; ?></td>
                                    </tr>

                                    <tr>
                                        <td>Amount</td>
                                        <td><?php echo $_POST['amount']; ?></td>
                                    </tr>

                                    <tr>
                                        <td>From Account Number</td>
                                        <td><?php echo $_POST['payersaccount']; ?></td>
                                    </tr>

                                    <tr>
                                        <td>To Account Number</td>
                                        <td><?php echo $_POST['payeeaccount']; ?></td>
                                    </tr>

                                    <tr>
                                        <td>Description</td>
                                        <td><?php echo $_POST['desc']; ?></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2"><p class="heading3"><a href="CustomerHomePage.php">Continue</a></p></td>
                                    </tr>
                                </table>
                            </td>
                        </table>

                        <?php
                        }
                    } else {
                        echo "<script type='text/javascript'>alert('You are not authorized to Transfer Funds from this account!'); window.location.href='CustomerFundTransfer.php'</script>";
                    }
                } else {
                    ?>
                    <script type="text/javascript">alert('Account <?php echo $payee_no ?> does not exist!'); window.location.href = "CustomerFundTransfer.php";</script>

                     <?php
                }

            } else {
                ?>
                <script type='text/javascript'>alert('Account <?php echo $payer_no ?> does not exist!'); window.location.href = "CustomerFundTransfer.php";</script>
                <?php
            }
            $_SESSION["formid"] = '';
        } else {
            echo '<script type="text.javascript">window.location.href="CustomerFundTransfer.php";</script?';
        }
        ?>
    </body>
</html>
