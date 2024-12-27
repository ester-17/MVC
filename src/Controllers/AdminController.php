<?php 

require "src/Views/Admin/AdminView.php";

class AdminController {
    
    public function main(){

        $action = $_GET['acao'] ?? null;

        switch($action){
            case "usuarios":
                $this->users();
                break;

            default:
                $this->dashboard();
                break;     
        }
    }

    private function dashboard(){
        view("Dashboard");
    }

    private function users(){
        view("Users");
    }
}