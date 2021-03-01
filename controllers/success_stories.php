<?php
class Success_stories extends Controller{
    
   function __construct($model_name) {
       parent::__construct($model_name);
   }
   
    function index(){
    
        
        $this->view->render('header');
        $this->view->render('navigation');
        $this->view->render('successStories/index');
        $this->view->render('footer');
    }
     
}
