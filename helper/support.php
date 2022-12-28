<?php
function setstring(string $str)
{
    return ucfirst(strtolower($str));
}
function encode_url($url)
{
    return urlencode(base64_encode($url));
}

function decode_url($url)
{
    return base64_decode(urldecode($url));
}
function redirect($path)
{
    $path = str_replace('.', '/', $path);
    header('Location:' . ROOT . $path);
}
