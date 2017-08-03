<?

//starting the session for logged in customer

session_start();

include_once 'connection.php';
if (isset($_SESSION['customer'])) {
    $customer = $_SESSION['customer'];
}
?>

<html>

        <! -- Mini-Statement page -->

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

    <?php
    $acc_no = $_POST['accountno'];
    $qc = "select CUSTOMER_ID from account where ACCOUNT_NO='$acc_no'";
    $rc = mysql_query($qc);
    if (mysql_num_rows($rc)) {
        $cid = mysql_result($rc, 0);
        $q = "SELECT * FROM `c_mapping` WHERE `c_id`=$cid";

        $rq = mysql_query($q);
        if($cid == $customer) {
            $sq1 = "select * from transaction where ACCOUNT_NO=$acc_no order by TRANSACTION_ID DESC LIMIT 5";
            $r = mysql_query($sq1);
            ?>

            <div><?php include_once('Customer_sidebar.html') ?></div>

            <!--MiniStatement Body-->
            <body>

                <table border="0" width="70%" align="center" class="layout1">
                    <form name="fbal" method="post">
                        <tr>
                            <td> colspan="2"><p class="heading3" align="center">Last Five Transaction Details for Account No: <?php echo $acc_no; ?></p></td>
                        </tr>

                        <tr>
                            <td>
                                <table border="1" align="center" style-"Margintop:0px" cellspacing="0" cellpadding="2">
                                    <tr>
                                        <th>Transaction ID</th>
                                        <th>Amount</th>
                                        <th>Transaction Type</th>
                                        <th>Date of Transaction</th>
                                        <th>Description</th>
                                    </tr>

                <?php
                if (mysql_num_rows($r) > 0) {
                    while ($row = mysql_fetch_array($r)) {
                        ?>
                                        <tr>
                                            <td align="center"><?php echo $row['TRANSACTION_ID']; ?></td>
                                            <td align="center"><?php echo $row['AMOUNT']; ?></td>
                                            <td align="center"><?php echo $row['TRANSACTION_TYPE']; ?></td>
                                            <td align="center"><?php echo $row['DATE_OF_TRANSACTION']; ?></td>
                                            <td align="center"><?php echo $row['DESCRIPTION']; ?></td>
                                        </tr>
                        <?php
                    }
                } else {
                        ?>
                                        <script type='text/javascript'>alert('No Transaction Details found!');
                                            window.location.href = "MiniStatementInput.php"; </script>
                                            <? php
                }
                ?>
                                    <tr><td colspan="5"><a href="CustomerHomePage.php">Continue</a></td></tr>
                                </table>
                            </td>
                        </tr>
                    </form>
                </table>

    <?php
        }else{
            echo "<script type='text/javascript'>alert('You are not authorized to generate statement of this Account!'); .location.href='MiniStatementInput.php';</script>";
        }
    } else {
        echo "<script type='text/javascript'>alert('Account does not exist!'); .location.href='MiniStatementInput.php';</script>";
    }
    ?>
            </body>

</html>

