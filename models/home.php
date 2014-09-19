<?php
/* 
 * Project: Keyideas MVC
 * File: /models/home.php
 * Purpose: model for the home controller.
 * Author: Keyideas
 */

class HomeModel extends BaseModel
{
    //data passed to the home index view
    public function index()
    {   
        $this->viewModel->set("pageTitle","Keyideas MVC");
        return $this->viewModel;
    }
}

?>
