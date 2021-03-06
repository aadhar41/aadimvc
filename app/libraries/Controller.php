<?php

/**
 * Base controller
 * loads the models and views
 */

class Controller {
    // Load Model
    public function model($model) 
    {
        // Require model file
        require_once '../app/models/'. $model . '.php';

        // Instantiate model
        return new $model();
        

    }

    // load view
    public function view($view, $data = [])
    {
        // check for the view file
        if (file_exists('../app/views/'.$view.'.php')) {
            require_once '../app/views/'.$view.'.php';
        } else {
            // view does not exists
            die('view not exists');
        }
    }


}
