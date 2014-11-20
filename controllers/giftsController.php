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
            $this->loadLibrary('ThumbClass');
            
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
            
            $path = ROOT . 'public' . DS . 'img' . DS . 'gifts' . DS;
            $thumb_url = BASE_URL . 'public/img/gifts/' . $filename;
            
            if (!$thumb->saveFile($file_tmp, $filename, $path)) {
                $this->_view->assign('_error', 'Ошибка загрузки файла. Проверьте наличие папки. ');
                $this->_view->renderizer('index');
                exit;
            }
            
            if (!$this->getDecimal('gift_scores')) {
                $this->_view->assign('_error', 'Заполните "Баллы"');
                $this->_view->renderizer('index');
                exit;
            }
            
            
            $this->_model->insertGift( 
                    $thumb_url,
                    $this->getSql('gift_name'),
                    $path . $filename,
                    $this->getDecimal('gift_scores'));
            
            $this->redirect('gifts');
        }
        $this->_view->renderizer('index');
    }
    
    public function delete($id) {
        if (!$this->filterInt($id)) {
            $this->redirect('gifts');
        }
        if (!$this->_model->getGiftById($this->filterInt($id))) {
            $this->redirect('gifts');
        }
        
        $gift_arr = $this->_model->getGiftById($this->filterInt($id));
        $thumb_path = $gift_arr['gift_thumb_path'];
        
        if (file_exists($thumb_path)) {
            @unlink($thumb_path);
        }    
        
        $this->_model->deleteGift($this->filterInt($id));
        $this->redirect('gifts');
    }
}