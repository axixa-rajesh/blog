<?php
class Model extends PDO
{
    protected $table, $keycol = 'id';
    public function __construct($tbl)
    {
        parent::__construct("mysql:host=localhost;dbname=blog", 'root', '');
        if (!$this->table) {
            $this->table = $tbl;
        }
    }
    public function insert($data)
    {
        // ['name'=>'rajesh','city'=>'bkn','mobile'=>'423423']
        $keys = array_keys($data);
        //[0=>name,1=>city,2=>mobile]
        $skeys = implode(',', $keys);
        //name,city,mobile
        $keys = array_map(fn ($k) => ":$k", $keys);
        $lkeys = implode(',', $keys);
        $sql = "insert into $this->table ($skeys) values($lkeys)";
        //insert into (name,mobile,city)values(:name,:mobile,:city)
        $obj = $this->prepare($sql);
        $obj->execute($data);
        return $this->lastInsertId();
    }
    public function update($data, $id)
    {
        $sql = "update $this->table set ";
        foreach ($data as $key => $value) {
            $sql .= " $key='$value',";
        }
        $sql = substr($sql, 0, -1) . " where $this->keycol='$id'";
        $obj = $this->prepare($sql);
        return $obj->execute();
    }
    public function all($col = "*", $order = null, $orderby = 'desc')
    {
        $order = ($order) ? $order : $this->keycol;
        $col = (is_array($col)) ? implode(',', $col) : $col;
        $sql = "select $col from $this->table order by $order $orderby";
        $obj = $this->prepare($sql);
        $obj->execute();
        return $obj->fetchAll(PDO::FETCH_ASSOC);
    }
    public function find($id, $col = "*")
    {
        $col = (is_array($col)) ? implode(',', $col) : $col;
        $sql = "select $col from $this->table where $this->keycol='$id'";
        $obj = $this->prepare($sql);
        $obj->execute();
        return $obj->fetch(PDO::FETCH_ASSOC);
    }
}
