<?php
session_start(); //to start the session after successful login
include_once 'connection.php'; //to include database connection

//to check if uid is set
if (isset($_POST['uid'])) {

    //if yes - get values from uid @ $uid & password @ $pass field
    $uid = $_POST['uid'];
    $pass = $_POST['password'];

    //check if $uid & $pass is already existed in `login` table

    $que = "SELECT * FROM `login` WHERE `USER_ID` = 'uid' AND `PASSWORD` = '$pass' ";
        $result= mysql_query($que);
        echo "<script type='text/javascript'>alert($result);</script>";

    //count the fetched rows from `login` with above query @ $count
    //if $count = 1, then user with $uid & $pass is registered

        $count = mysql_num_rows($result);
        $row = mysql_fetch_array($result);

    //if $count = 1, then user with $uid & $pass is registered & start the session
        if ($count == 1) {

        //check if entered user is registered as Customer C or Manager M
            if ($row['ROLE'] == 'C' || $row['ROLE'] == 'c') {
                $_SESSION['customer'] = $uid;
                $sq = "select * from c_mapping where c_id='$uid'";
                $sr = mysql_query($sq);
                $res = mysql_fetch_assoc($sr);
                $_SESSION['staff'] = $res 's_id'];
                $_SESSION['manager'] = $res['m_id'];
                echo "<script type='text/javascript'>window.location.href = 'customer/CustomerHomePage.php';</script>";
            } elseif ($row['ROLE'] == 'M' || $row['ROLE'] == 'm') {
                $S_SESSION['manager'] = $uid;

                $sq = "select s_id from c_mapping where m_id='$uid' and c_id=0";
                $sr = mysql_query($sq);
                $res = mysql_fetch_assoc($sr);
                $_SESSION['staff'] = $res['s_id'];
                echo "<script type='text/javascript'> window.location.href =
                    'manager/ManagerHomePage.php';</script>";
            } else {
                $_SESSION['staff'] = $uid;
                $sq = "select m_id from c_mapping where s_id='uid' and c_id=0";
                $sr = mysql_query($sq);
                $res = mysql_fetch_assoc($sr);
                $_SESSION['manager'] = $res['m_id'];
                echo "<script type='text/javascript'>window.location.href = 'staff/StaffHomePage.php';</script>";
            }
        } else {
            //if count = 0, it means no user registered with entered $uid and $pass
            echo "<script type='text/javascript'> alert('User or Password is not valid'); window.location.href = 'index.php';</script>";
        }
}
?>

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
                    <img src="../images/1.png">
                    <img src="../images/3.png">
                    <img src="../images/2.png">
                </td>
            </tr>
        </table>

    <div class="heading3" align="center">Welcome to the Online Banking Page of Easy Street Bank</div>

    <br><br><marquee class="heading2" loop=slide>We Strive You Thrive!!</marquee><br><br>
    <br><br>

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
