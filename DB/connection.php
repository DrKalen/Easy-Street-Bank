<?php
$link = mysql_connect('localhost', 'root', 'root');

if (!$link) {
    die('could not conect ' . mysql_error());
} else {
    $db_selected = mysql_select_db('easy_street', $link);
    if(!$db_selected) {
        die('could not connect ' . mysql_error());
    }
}
?>
