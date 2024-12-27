<?php 

require "src/Views/Admin/AdminView.php";

class ContatoController {

    public function main(){

        $action = $_GET['acao'] ?? null;

        switch($action){
            default:
                $this->contact();
                break;
        }
    }

    private function contact(){
        view("Contact/ContatoForm");
    }
}