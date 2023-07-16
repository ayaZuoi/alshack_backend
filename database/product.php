<?php

namespace database;

// use to fetch product data
class product
{
    public $db_awam = null;

    public function __construct(DBcontoller $db_awam)
    {
        if (!isset($db_awam->con_awam)) return null;
        $this->db_awam = $db_awam;
    }

    // public function using getdata
    public function getData($table = 'product')
    {
        $result_awam = $this->db_awam->con_awam->query("SELECT * FROM {$table}");
        $resultArray_awam = array();
        while ($item = mysqli_fetch_array($result_awam, MYSQLI_ASSOC)) {
            $resultArray_awam[] = $item;
        }
        return $resultArray_awam;
    }
}