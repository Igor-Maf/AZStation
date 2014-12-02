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
    
    public function edit($id) {
        if (!$this->filterInt($id)) {
            $this->redirect('index');
        }
        if (!$this->_model->getGasById($this->filterInt($id))) {
            $this->redirect('index');
        }
        
        if ($this->getInt('edit_gas') == 1) {

            if (!$this->getDecimal('gas_price')) {
                $this->_view->assign('_error', 'Укажите цену');
                $this->_view->assign('data', $this->_model->getGasById($this->filterInt($id)));
                $this->_view->renderizer('edit');
                exit;
            }
            
            $this->_model->editGasPrice($this->filterInt($id), $this->getDecimal('gas_price'));
            
            $this->redirect('index');
        }
        
        $this->_view->assign('title', 'Редактировать цену на топливо');
        $this->_view->assign('data', $this->_model->getGasById($this->filterInt($id)));
        
        $this->_view->renderizer('edit');
    }
}