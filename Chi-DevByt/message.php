<?php
if (isset($_SESSION['message']) && isset($_SESSION['message_type'])) {

    $myAppMessageType = $_SESSION['message_type'];
    $myAppMessage = $_SESSION['message'];
    // $noToast = $_SESSION['noToast'];
    unset($_SESSION['message_type']);
    unset($_SESSION['message']);
}
