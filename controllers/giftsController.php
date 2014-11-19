<?php
class giftsController extends Controller {
    private $_model;
    
    public function __construct() {
        parent::__construct();
        $this->_model = $this->loadModel('gifts');
    }
    
    public function index($pagina = false) {
        if ($this->filterInt($pagina)) {
            $pagina = $pagina;
        } else {
            $pagina = false;
        }
        
        $this->loadLibrary('pagination');
        $pagination = new Paginador();
        
        $this->_view->assign('gifts', $pagination->paginar($this->_model->getGifts(), $pagina, 5));
        $this->_view->assign('pagination', $pagination->getView('pagination', 'gifts/index'));
        $this->_view->assign('title', 'Подарки');
        
        if ($this->getInt('add_gift') == 1) {
            $this->_view->assign('data', $_POST);
            $this->loadLibrary('Thumb');
            
            if (!$this->getSql('gift_name')) {
                $this->_view->assign('_error', 'Заполните "Название"');
                $this->_view->renderizer('index');
                exit;
            }
            
            /* check uploaded image file */
            $thumb = new Thumb();
            $filename = $_FILES["gift_thumb"]['name'];
            $file_tmp = $_FILES["gift_thumb"]['tmp_name'];
            
            if (!$filename) {
                $this->_view->assign('_error', 'Загрузите изображение');
                $this->_view->renderizer('index');
                exit;
            }
            if (!$thumb->checkExt($filename)) {
                $this->_view->assign('_error', 'Допустимые типы файлов: ' . implode(', ', unserialize(IMG_TYPE)));
                $this->_view->renderizer('index');
                exit;
            }
            if (!$thumb->checkSize($file_tmp)) {
                $this->_view->assign('_error', 'Допустимые размер файла: ' . MAX_IMG_SIZE . ' байт');
                $this->_view->renderizer('index');
                exit;
            }
            if ($thumb->saveFile($file_tmp, $filename)) {}
            
//            Thumb::saveFile($file_tmp, $filename);
           
//            var_dump($_FILES["gift_thumb"]);           
            
//            $this->_model->insertClient( 
//                    $this->getSql('client_fio'),
//                    $this->getSql('client_address'),
//                    $this->getSql('client_mail'), 
//                    $this->getSql('client_number'));
//            
//            $this->redirect('clients');
        }
        $this->_view->renderizer('index');
    }
    
    public function edit($id) {}
    
    
    public function delete($id) {}
}
