<?php
session_start(); //to start the session after successful login
// include_once '/DB/connection.php'; //to include database connection

//to check if uid is set
if (isset($_POST['uid'])) {

    //if yes - get values from uid @ $uid & password @ $pass field
    $uid = $_POST['uid'];
    $pass = $_POST['password'];

    //check if $uid & $pass is already existed in `login` table

    $que = "SELECT * FROM `login` WHERE `USER_ID` = 'uid' AND `PASSWORD` = '$pass' ";
        $result = mysql_query($que);
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
                $_SESSION['staff'] = $res ['s_id'];
                $_SESSION['manager'] = $res['m_id'];
                echo "<script type='text/javascript'>window.location.href = 'CustomerHomePage.php';</script>";
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
      <link rel="stylesheet" type="text/css" href="/Stylesheets/easy_street.css">

      <!--link to JavaScript validation file-->
      <script language="JavaScript" src="/JavaScript/test.js"></script>

        <div>
            <h2 class="barone orange" >Easy Street Bank</h2>
        </div>

        <title>Easy Street Bank Home Page</title>

    </head>

<div>
   <ul class="menusubnav">
    <li><a href="/Customer/CustomerHomePage.php">Customer Home Page</a></li>
    <li><a href="/Manager/ManagerHomePage.php">Manager Home Page</a></li>
   </ul>
</div>
    <body>

    <div style = "margin-top: 10px" align = "center">
    <img src="/images/1.png">
    </div>


    <div class="heading3" align="center" style = "margin-top: 50px">Welcome to the Online Banking Page of Easy Street Bank*</div>

    <form name="frmLogin" method="POST" action="index.php">
        <table border="0" width="50%" align = "center" style="margin-top: 25px">

            <!--Display USER ID Label and its text box-->
            <tr>
                <td align="right">UserID</td>
                <td><input type="text" name="uid" maxlength="10"
                    onKeyUp="validateuserid();" onBlur="validateuserid();">
                    <label id="message23"</label>
                </td>
            </tr>

            <!--Display Password and its text box-->
            <tr>
                <td align="right">Password</td>
                <td> <input type="password" name="password"
                    onKeyUp="validatepassword();" onBlur="validatepassword();">
                    <label id="message18"</label>
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
    <div class="heading1" align="center" style = "margin-top: 50px">*(The Database is not currently connected. To explore the Customer and Manager pages, please click one of the links at the upper left.)<br>
    <i>Clicking "Log Out" will bring you back to this page.</i></div>
    </body>
</html>
