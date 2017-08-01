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
      <link rel="stylesheet" type="text/css" href="http://localhost:8888/easystreetbank/stylesheets/easy_street.css">
      <!--link to JavaScript validation file-->
      <script language="JavaScript" src="http://localhost:8888/easystreetbank/javascript/test.js"></script>

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


    }
    }

