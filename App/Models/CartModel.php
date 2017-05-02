<?php
namespace App\Models;

class CartModel{

    public function publish(){
        $app = \Yee\Yee::getInstance();
        $cols = Array("id" , "name", "image" ,"price");

        $data = $app->db['default']->get("tbl_product", null, $cols);
        return $data;

    }
    public function publishById($Id){
        $app = \Yee\Yee::getInstance();

        $data = $app->db['default']->where("id", $Id)->get("tbl_product");
        return $data;

    }

    public function selectId(){
        $app = \Yee\Yee::getInstance();
        $data = $app->db['default']->getOne("tbl_product");

        return $data['id'];
    }
}
