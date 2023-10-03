<?php
function redirect($path)
{
    header('Location: '.$_SERVER["REQUEST_SCHEME"].'://'.$_SERVER['HTTP_HOST'].$_ENV['DIRECTORY_ROOT'].$path);
}