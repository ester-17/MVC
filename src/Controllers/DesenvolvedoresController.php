<?php 

require "src/Views/Admin/AdminView.php";

class DesenvolvedoresController {

    public function main(){

        $action = $_GET['acao'] ?? null;

        switch($action){
            default:
                $this->devs();
                break;
        }
    }

    private function devs(){
        view("Devs/Desenvolvedores");
    }
}