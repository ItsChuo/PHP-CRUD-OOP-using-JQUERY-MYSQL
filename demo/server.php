<?php
        require 'infoModule.php';
        $db = new pdo('mysql:host=localhost;dbname=dbcrud','root','');
        $page = isset($_GET['p'])? $_GET['p']:'';
        if ($page == 'add'):
            $infoModule = new infoModule;
            $infoModule->saveData($db);
            
        elseif ($page == 'del'):
            $infoModule = new infoModule;
            $infoModule->deleteData($db);

        elseif ($page == 'edit'):
            $infoModule = new infoModule;
            $infoModule->updateData($db);

        else:
            $infoModule = new infoModule;
            $infoModule->viewAllData($db);
        endif;
?> 
