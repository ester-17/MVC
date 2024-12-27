<?php 

require "src/Views/Admin/AdminView.php";

class OrdersController {

    public function main(){

        $action = $_GET['acao'] ?? null;

        switch($action){
            default:
                $this->table();
                break;
        }
    }

    private function table(){
        view("Orders/Table");
    }
}