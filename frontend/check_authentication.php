<!-- Redirects user to the login page if they do not have an active session and have not authenticated -->

<?php
    session_start();
    if(!isset($_SESSION['email'])) {
        header("Location: login.php");
    }
?>