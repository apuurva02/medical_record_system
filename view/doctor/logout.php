<?php
session_start();
if(session_destroy()) 
{
echo"successfully logged out doc";

}
?>
<html><a href="/GH">Home</a>