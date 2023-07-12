<?php
$page = $_GET['page'] ?? 'home';

include 'header.php';

switch ($page) {
    case 'login':
        include 'login.php';
        break;
    case 'blog':
        include 'blog.php';
        break;
    case 'about':
        include 'about.php';
        break;
    case 'gallery':
        include 'gallery.php';
        break;
    default:
        include 'home.php';
}

include 'footer.php';
?>
