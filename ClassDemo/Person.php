<?php

class Person
{
    function __construct($_POST)
    {
        echo 'In the Constructor';
        echo $_POST['fname'];
    }
}