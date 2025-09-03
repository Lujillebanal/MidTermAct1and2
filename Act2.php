<?php

$dash_username = "user_lujille";
$dash_role = "member";
$dash_isActive = true;
$dash_isPremium = true;
$dash_lastLoginDays = 3;

$dash_welcomeMsg = ($dash_role === "administrator") 
    ? "Welcome back, Admin $dash_username!" 
    : "Welcome, $dash_username!";
echo "<p>$dash_welcomeMsg</p>";

$dash_loginMsg = ($dash_lastLoginDays <= 1) 
    ? "You logged in recently." 
    : "It has been $dash_lastLoginDays days since your last login.";
echo "<p>$dash_loginMsg</p><br>";

if (!$dash_isActive) {
    echo "Your account is inactive. Please contact support.<br><br>";
} elseif ($dash_role === "administrator") {
    echo "Full access to all admin features.<br><br>";
} elseif ($dash_role === "moderator") {
    echo "Access to Forum Management and User Reports.<br>";
    if ($dash_isPremium) {
        echo "Premium moderation tools unlocked!<br><br>";
    }
} elseif ($dash_role === "member") {
    echo "Access to Forum Posts and Profile Editor.<br>";
    if ($dash_isPremium) {
        echo "Premium content library unlocked!<br><br>";
    }
} else {
    echo "Limited guest access. Please register for more features.<br><br>";
}

$dash_notificationPref = "email";

switch ($dash_notificationPref) {
    case "email":
        echo "Email notifications are enabled.<br>";
        break;
    case "sms":
        echo "SMS notifications are enabled.<br>";
        break;
    case "both":
        echo "Email and SMS notifications are enabled.<br>";
        break;
    case "none":
        echo "Notifications are turned off.<br>";
        break;
    default:
        echo "Unknown notification preference.<br>";
        break;
}
?>