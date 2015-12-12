<?php
session_start();
if(session_destroy()) 
{
echo"successfully logged out admin";

}
?>
<html><a href="/GH">Home</a>