<?php

class control {

    public function __construct(){
        $this->model = new model();
    }

    public functionindex($param){
        $data = $this->model->data($param);
        $this->view = new view();
        $this->view->render("   ",$data);
    }
}