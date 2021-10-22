<?php
session_start();

if (isset($_GET['beli']) && is_numeric($_GET['beli'])) {
    if (isset($_SESSION['chart'][$_GET['beli']])) {
        $_SESSION['chart'][$_GET['beli']]++;
    } else {
        $_SESSION['chart'][$_GET['beli']] = 1;
    }
}
echo '<pre>';
print_r($_SESSION['chart']);
echo '</pre>';
?>
<p><a href="?beli=1">Beli 1</a><br/>
<a href="?beli=2">Beli 2</a><br/>
<a href="?beli=3">Beli 3</a><br/>
<a href="?beli=4">Beli 4</a><br/><p>