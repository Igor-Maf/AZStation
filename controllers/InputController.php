<?php
class InputController extends Controller {
    public function __construct() {
        parent::__construct();
        $this->_model = $this->loadModel('index');
    }
    
    public function index() {
        $this->_view->assign('title', 'Ввод');
        $this->_view->renderizer('index');  
    }
}
