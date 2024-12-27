<?php 

require "src/Views/Admin/AdminView.php";

class ProdutosController {

    public function main(){

        $action = $_GET['acao'] ?? null;

        switch($action) {
            // case 'insert':
            //     $this->insert();
            //     break;
            // case 'edit':
            //     $this->edit();
            //     break;
            // case 'delete':
            //     $this->delete();
            //     break;
            default:
                $this->produtos();
                break;
        }
    }

    private function produtos() {
        view("Products/Produtos");
    }

//     private function insert() {
//         if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//             $title = $_POST['title'];
//             $price = $_POST['price'];
//             $description = $_POST['description'];

//             $stmt = $this->conn->prepare("INSERT INTO products (title, price, description) VALUES (?, ?, ?)");
//             $stmt->bind_param("sds", $title, $price, $description);

//             if ($stmt->execute()) {
//                 echo "New product added successfully";
//             } else {
//                 echo "Error: " . $stmt->error;
//             }

//             $stmt->close();
//         }
//         // Redirect or render a view after insertion
//         header("Location: /path/to/your/products/page"); // Change to your products page
//         exit();
//     }

//     private function edit() {
//         if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//             $id = $_POST['id'];
//             $title = $_POST['title'];
//             $price = $_POST['price'];
//             $description = $_POST['description'];

//             $stmt = $this->conn->prepare("UPDATE products SET title = ?, price = ?, description = ? WHERE id = ?");
//             $stmt->bind_param("sdsi", $title, $price, $description, $id);

//             if ($stmt->execute()) {
//                 echo "Product updated successfully";
//             } else {
//                 echo "Error: " . $stmt->error;
//             }

//             $stmt->close();
//         }
//         // Redirect or render a view after editing
//         header("Location: /path/to/your/products/page"); // Change to your products page
//         exit();
//     }

//     private function delete() {
//         if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//             $id = $_POST['id'];

//             $stmt = $this->conn->prepare("DELETE FROM products WHERE id = ?");
//             $stmt->bind_param("i", $id);

//             if ($stmt->execute()) {
//                 echo "Product deleted successfully";
//             } else {
//                 echo "Error: " . $stmt->error;
//             }

//             $stmt->close();
//         }
//         // Redirect or render a view after deletion
//         header("Location: /path/to/your/products/page"); // Change to your products page
//         exit();
//     }

//     public function __destruct() {
//         $this->conn->close();
//     }
}