<?php
class View
{
    public function view($path, $viewvariables = [], $hf = true)
    {
        if (strpos($path, '.')) {
            $path = str_replace('.', '/', $path);
        }
        $path = "apps/views/$path.php";
        if (file_exists($path)) {

            extract($viewvariables);
            include "apps/views/layout/top.php";
            if ($hf)
                include "apps/views/layout/header.php";
            include_once $path;
            if ($hf)
                include "apps/views/layout/footer.php";
            include "apps/views/layout/bottom.php";
        }
        // echo $path;

    }
}
