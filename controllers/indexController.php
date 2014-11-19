<?php
class indexController extends Controller {
    public function __construct() {
        parent::__construct();
        $this->_model = $this->loadModel('index');
    }
    
    public function index() {
        $this->_view->assign('title', 'Главная');
        $this->_view->assign('gas', $this->_model->getGas());
        $this->_view->renderizer('index');
    }
}