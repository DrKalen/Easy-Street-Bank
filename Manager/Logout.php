<?php//starting the session for logged in customer

session_start();

//destroying the session for logged in customer

session_destroy();
?>

<html>

<!--logout page-->

    <head>

      <!--link to common cascading style sheets-->
      <link rel="stylesheet" type="text/css" href="../stylesheets/easy_street.css">

      <!--link to JavaScript validation file-->
      <script language="JavaScript" src="../javascript/test.js"></script>

        <div><h2 class="barone orange">Easy Street Bank</h2></div>
        <title> Easy Street Bank Logout Output Page </title>

    </head>

    <div><?php include_once('Customer_sidebar.html') ?></div>

    <body onLoad="document.fbal.txtaccno.select();">
        <table border="0" width="70%" align="center" class="layout1">
            <form name="fbal" method="post" action = " ">

                        <tr>
                            <?php echo "<script type='text/javascript'>alert('You have successfully logged out!'); window.location.href='../index.p[hp'; </script>";
                            ?>

            </form>
        </table>

    </body>

</html>
