<?p[php//starting the session for logged in customer

session_start();
include_once 'connection.php';
if (isset($_SESSION['customer'])) {
        $customer = $_SESSION['customer'];
}

$uid = $_SESSION['customer'];
$opass = $_POST['oldpassword'];
$npass = $_POST['newpassword'];

$que = "select * from login where USER_ID = '$uid'";
$result = mysql_query($que);

$count = mysql_num_rows($result);
$row = mysql_fetch_array($result);

if ($count == 1) {
    if ($opass == $row['PASSWORD']) {
        $que1 = "update login set password = 'npass' where USER_ID = '$uid'";
        $result1 = mysql_query($que1);
        echo "<script type='text/javascript'>alert('Password is Changed!'); window.location.href='PasswordInput.php'</script>";
    } else {
        echo "<script type='text/javascript'>alert('Old Password is incorrect'); window.location.href='PasswordInput.php'</script>";
    }
} else {
    echo "not found"
}
?>
