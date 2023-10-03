<?php
include '../php/bootstrap.php';

if (!empty($_SESSION['user']->id))
{
    redirect('/public/dashboard/');
}
else
{
    redirect('/public/login/');
}