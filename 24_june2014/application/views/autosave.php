<?php

if(isset($_POST))
{
    foreach($_POST as $k => $v)
    {
        $_SESSION[$k] = $v;
    } 
}
?>