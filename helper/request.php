<?php
function request($key = '')
{
    $obj = (object)['controller' => 'Login', 'method' => 'index', 'para' => '', 'get' => $_GET, 'post' => $_POST];
    if (isset($_GET['url'])) {
        $url = $_GET['url'];
        $url = explode('/', rtrim($url, '/'));
        $obj->controller = setstring($url[0]);
        $obj->method = isset($url[1]) ? strtolower($url[1]) : $obj->method;
        $obj->para = isset($url[2]) ? $url[2] : $obj->para;
        unset($obj->get['url']);
    }
    if ($key) {
        if (array_key_exists($key, $_POST)) {
            return $_POST[$key];
        }
        if (array_key_exists($key, $_GET)) {
            return $_GET[$key];
        }
        return null;
    }
    return $obj;
}
function dd($data)
{
    $str = "<div style=\"background:black;color:white;font-weight:bold\">";
    if (is_array($data) or is_object($data)) {
        $str .= "<pre>";
        $str .= print_r($data, 1);
        $str .= "</pre>";
    } elseif (is_bool($data)) {
        $str .= ($data) ? "TRUE" : "FALSE";
    } elseif (is_null($data)) {
        $str .= "NULL";
    } else {
        $str .= $data;
    }
    $str .= "</div>";
    echo $str;
    exit();
}
