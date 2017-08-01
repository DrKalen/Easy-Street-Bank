<?php
//starting the session for logged in cusgtomer
session_start();

//include database connection file so required data
//can be fetched from respective database table
include_once 'connection.php';

//if customer is registered & logged in successfully,
if (isset($_SESSION['customer'])) {
    //@ $cid = customer ID for logged in customer
    $customer = $_SESSION['customer'];
}

//get the selected account no. in BalEnqInput.php @ $acc_no

$acc_no = $_POST['accountno'];

//retrieve the respective Customer ID who has account no = $acc_no from
//'account' table

$qc= "select CUSTOMER_ID from account where ACOUNT_NO='$acc_no'";
$rc = mysql_query($qc);
if (mysql_num_rows($rc)) {
    $cid = mysql_result($rc, 0);

    if ($customer == $cid) {
        $sql = "select * from account where ACCOUNT_No=$acc_no";
        $r = mysql_query($sql);
        if (mysql_num_rows($r == 1) {
            while ($row = mysql_fetch_array($r)) {

    //fetching the required data for customer's account in a HTML table manner
                ?>
                <html>
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

                    <body
                    <br /><br />
                        <table border="0" width="70%" align="center" class="layout1">
                            <td>
                                <table align="center" border="1" cellspacing="0" cellpadding="0">

                                <!--Display the table title showing account number whose balance was requested-->
                                    <tr>
                                        <td colspan="2"><p class="heading3" align="center">
                                        Balance Details for Account <?php echo $acc_no; ?></p></td>
                                    </tr>

                                <!--Display the account number whose balance was requested-->
                                    <tr>
                                        <td>Account No</td>
                                        <td><?php echo $row['ACCOUNT NO']; ?></td>
                                    </tr>

                                <!--display the type of account-->
                                    <tr>
                                        <td>Type of Account>/td>
                                        <td><?php echo $row['ACCOUNT_TYPE'];
                                    </tr>

                                <!--display the account balance-->
                                    <tr>
                                        <td>Balance</td>
                                        <td><?php echo $row['CURRENT_AMOUNT']; ?></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2"><a href="CustomerHomePage.php">Continue</a></td>
                                    </tr>
                                </table>

                        <?php
            }
        }
    } else {
        echo "<script type-'text/javascript'>alert('You are not authorized to get Balance details of this account!');
            .location.href='BalEnqInpugt.php'</script>";
    }
} else {
    echo '<script type="text/javascript">alert("Account does not exist");
        .location.href="BalEnqInput.php";</script>';
}
?>
                            </td>
                        </table>
                    </body>

                </html>
