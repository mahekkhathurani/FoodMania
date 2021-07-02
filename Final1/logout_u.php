<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: menu2.html"); // Redirecting To Home Page
}
?>