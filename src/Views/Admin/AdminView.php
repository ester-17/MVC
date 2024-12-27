<?php 

    function view($page, $data = []){
        extract($data);
        $page = "src/Views/Admin/$page.phtml";
        require "src/Views/Admin/Templates/App.phtml";
    }