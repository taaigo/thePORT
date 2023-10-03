<?php
include '../php/bootstrap.php';

if ($_SESSION['user']->id)
{
    redirect('/public/dashboard/');
}
else
{
    redirect('/public/login/');
}