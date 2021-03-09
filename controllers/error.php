<?php
class Error extends Controller{
    
   function __construct($model_name) {
       parent::__construct($model_name);
   }
   
    function index(){
    
        
        $this->view->render('header');
        $this->view->render('navigation');
        $this->view->render('course/index');
        $this->view->render('footer');
    }
    function details(){
    
        
        $this->view->render('header');
        $this->view->render('navigation');
        $this->view->render('course/details');
        $this->view->render('footer');
    }
     
}
