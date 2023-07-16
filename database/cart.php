<?php

namespace database;

class cart
{
    public  $db =null;
    public function __construct(DBcontoller $db)
    {
        if(!isset($db->con_awam)) return null;
        $this->db=$db;
    }
//insert into card table
    public function insertintoCart($params = null, $table = "cart") {
        if ($this->db->con_awam != null) {
            if ($params != null) {
                // get table columns
                $columns = implode(',', array_keys($params));
                $values = implode(',', array_map(function($value) {
                    return "'" . mysqli_real_escape_string($this->db->con_awam, $value) . "'";
                }, array_values($params)));

                // create SQL query
                $query_string = sprintf("INSERT INTO %s (%s) VALUES (%s)", $table, $columns, $values);

                // execute query
                $result_awam = $this->db->con_awam->query($query_string);
                return $result_awam;
            }
        }
    }
    //to get user and item id and insert into card table
    public  function addToCart($userid,$itemid){

        if(isset($userid)&&isset($itemid)){
            $params=array(
                "user_id"=>$userid,
                "item_id"=>$itemid

            );
            //insert data into cart
            $result_awam=$this->insertintoCart($params);
            if($result_awam){
                //RELOWD PAGE
                header("Location:".$_SERVER['PHP_SELF']);

            }


        }
    }

}