<?php
require_once ROOT . 'libs' . DS . 'smarty' . DS . 'libs' . DS . 'Smarty.class.php';

class View extends Smarty {
    private $_controller;
    private $_js;
    
    public function __construct(Request $r) {
        parent::__construct();
        $this->_controller = $r->getController();
        $this->_js = array();
    }
    
    public function renderizer($view, $item = false) {
        $this->template_dir = ROOT . 'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS;
        $this->config_dir = ROOT . 'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS . 'configs' . DS;
        $this->compile_dir = ROOT . 'temp' . DS . 'compile' . DS;
        $this->cache_dir = ROOT . 'temp' . DS . 'cache' . DS;
        
        $menu = array (
            array (
                'id' => 'home',
                'title' => 'Главная',
                'link' => BASE_URL
            ),  
            array (
                'id' => 'clients',
                'title' => 'Клиенты',
                'link' => BASE_URL . 'clients'
            ),  
            array (
                'id' => 'gifts',
                'title' => 'Подарки',
                'link' => BASE_URL . 'gifts'
            )
        );
        
        
        $js = array();
        
        if (count($this->_js)) {
            $js = $this->_js;
        }
        
        $_params = array(
            'root_css' => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/css/',
            'root_img' => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/img/',
            'root_js' => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/js/',
            'root' => BASE_URL,
            'menu' => $menu,
            'js' => $js,
            'app_name' => APP_NAME,
            'app_create' => APP_COPY
        );
        
        $rootView = ROOT . 'views' . DS . $this->_controller . DS . $view . '.tpl';
        if (is_readable($rootView)) {
            $this->assign('_content', $rootView);
        } else {
            throw new Exception('View is not readable. Check it, please.');
        }
        
        $this->assign('_layoutParams', $_params);
        $this->display('template.tpl');
    }
    
    public function setJs(array $js) {
        if (is_array($js) && count($js)) {
            for ($i = 0; $i < count($js); $i++) {
                $this->_js[] = BASE_URL . 'views/' . $this->_controller . '/js/' . $js[$i] . '.js';
            }
        } else {
            throw new Exception('Error with include JS files.');
        }
    }
}