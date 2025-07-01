<?php
$pages = array(
    'index.php',
    'login.php',
    'signup.php',
    'borrow.php',
    'book.php',
);

foreach ($pages as $page) {
    include($page);
}

header("Location: library/index.php");
exit;
?>