<?php
class Controller
{
    protected $load;
    public function __construct()
    {
        $this->load = new View();
    }
    public function loadModel($mname, $objname = null)
    {
        if (!$objname) {
            $objname = strtolower($mname);
        }
        $tbl=$mname;
        $mname = ucfirst(strtolower($mname)) . 'Model';
        $path = "apps/models/$mname.php";
        if (file_exists($path)) {
            include_once $path;
            $this->$objname=new $mname($tbl);
        }
    }
}
