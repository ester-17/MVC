<?php

class ReportsController {

    public function main(){

        $action = $_GET['acao'] ?? null;

        switch($action){
            case 'salvar':
                $this->save();
                break;

            case 'formulario':
                $this->form();
                break;
        }
    }

    private function form(){
        require_once "src/Views/Admin/AdminView.php";
        view('Reports/Form');
    }

    private function save(){
        $nome = $_POST['nome'];
        $setor = $_POST['setor'];
        $data = $_POST['data'];

        include_once "src/Models/Report.php";
        $model = new Report();
        $model->insert($nome, $setor, $data);

        $this->form();
    }

}