<?php 

require_once "src/Views/Admin/AdminView.php";
require_once "src/Models/Customer.php";

class CustomersController {

    public function main() {
        $action = $_GET['acao'] ?? null;

        switch($action) {
            case 'adicionar':
                $this->form();
                break;

            case 'salvar':
                $this->save();
                break;

            case 'editar':
                $this->edit();
                break;
            
            case 'excluir':
                $this->delete();
                break;

            default: 
                $this->table();
        }
    }

    private function table() {
        $model = new Customer();
        $tableData = $model->all();
        view('Customers/Table', [
            "table" => $tableData
        ]);
    }

    private function form($id = null) {
        $customer = null;
        if ($id) {
            $model = new Customer();
            $customer = $model->find($id); // Assuming you have a find method to get a customer by ID
        }
        view('Customers/AddForm', [
            "customer" => $customer
        ]);
    }

    private function save() {
        $name = $_POST['name'];
        $rg = $_POST['rg'];
        $id = $_POST['id'] ?? null; // Get the ID if it exists

        $model = new Customer();

        if ($id) {
            // Update existing customer
            $model->update($id, $name, $rg); // Assuming you have an update method
        } else {
            // Insert new customer
            $model->insert($name, $rg);
        }

        $this->table();
    }

    private function edit() {
        $id = $_GET['id'] ?? null; // Get the ID from the query string
        if ($id) {
            $this->form($id);
        } else {
            $this->table(); // Redirect to table if no ID is provided
        }
    }

    private function delete() {
        $id = $_GET['id'] ?? null; // Get the ID from the query string
        if ($id) {
            $model = new Customer();
            $model->delete($id); // Call the delete method
        }
        $this->table(); 
    }
}