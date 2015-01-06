<?php
class clientsController extends Controller {
    private $_model;
    
    public function __construct() {
        parent::__construct();
        $this->_model = $this->loadModel('clients');
        $this->_modelClientGifts = $this->loadModel('clientGifts');
    }
    
    public function index($pagina = false) {
        if ($this->filterInt($pagina)) {
            $pagina = $pagina;
        } else {
            $pagina = false;
        }
        
        $this->loadLibrary('pagination');
        $pagination = new Paginador();
        
        $this->_view->assign('clients', $pagination->paginar($this->_model->getClients(), $pagina, 8));
        $this->_view->assign('pagination', $pagination->getView('pagination', 'clients/index'));
        
        $this->_view->assign('title', 'Клиенты АЗС');
        
        if ($this->getInt('add_client') == 1) {
            $this->_view->assign('data', $_POST);
            
            if (!$this->getSql('client_fio')) {
                $this->_view->assign('_error', 'Заполните "ФИО"');
                $this->_view->renderizer('index');
                exit;
            }
            if (!$this->getSql('client_address')) {
                $this->_view->assign('_error', 'Заполните "Адресс"');
                $this->_view->renderizer('index');
                exit;
            }
            if (!$this->getSql('client_mail')) {
                $this->_view->assign('_error', 'Заполните "Почта"');
                $this->_view->renderizer('index');
                exit;
            }
            if ($this->_model->verificationClientMail($this->getSql('client_mail'))) {
                $this->_view->assign('_error', 'Пользователь с такой почтой уже зарегистрирован');
                $this->_view->renderizer('index');
                exit;
            } 
            if (!$this->getSql('client_number')) {
                $this->_view->assign('_error', 'Заполните "Телефон".');
                $this->_view->renderizer('index');
                exit;
            }
            
            
            $this->_model->insertClient( 
                    $this->getSql('client_fio'),
                    $this->getSql('client_address'),
                    $this->getSql('client_mail'), 
                    $this->getSql('client_number'));
            
            $this->redirect('clients');
        }
        $this->_view->renderizer('index');
    }
    
    public function edit($id) {
        if (!$this->filterInt($id) || !$this->_model->getClientById($this->filterInt($id))) {
            $this->redirect('clients');
        }
        
        if ($this->getInt('edit_client') == 1) {
            
            if (!$this->getSql('client_fio')) {
                $this->_view->assign('_error', 'Заполните "ФИО"');
                $this->_view->assign('data', $this->_model->getClientById($this->filterInt($id)));
                $this->_view->renderizer('edit');
                exit;
            }
            if (!$this->getSql('client_address')) {
                $this->_view->assign('_error', 'Заполните "Адресс"');
                $this->_view->assign('data', $this->_model->getClientById($this->filterInt($id)));
                $this->_view->renderizer('edit');
                exit;
            }
            if (!$this->getMail('client_mail')) {
                $this->_view->assign('_error', '"Почта" введена не верно!');
                $this->_view->assign('data', $this->_model->getClientById($this->filterInt($id)));
                $this->_view->renderizer('edit');
                exit;
            }
            if (!$this->getSql('client_number')) {
                $this->_view->assign('_error', 'Заполните "Телефон"');
                $this->_view->assign('data', $this->_model->getClientById($this->filterInt($id)));
                $this->_view->renderizer('edit');
                exit;
            }
            if (!$this->getDecimal('client_scores')) {
                $this->_view->assign('_error', 'Заполните "Баллы"');
                $this->_view->assign('data', $this->_model->getClientById($this->filterInt($id)));
                $this->_view->renderizer('edit');
                exit;
            }
            

            $this->_model->editClient(
                $this->filterInt($id),
                $this->getSql('client_fio'),
                $this->getSql('client_address'),
                $this->getMail('client_mail'),
                $this->getSql('client_number'),
                $this->getDecimal('client_scores'));
            
            $this->redirect('clients');
        }
        
        $this->_view->assign('title', 'Редактировать информацию о клиенте');
        $this->_view->assign('data', $this->_model->getClientById($this->filterInt($id)));
        
        $this->_view->renderizer('edit');
    }
    
    
    public function delete($id) {
        if (!$this->filterInt($id) || !$this->_model->getClientById($this->filterInt($id))) {
            $this->redirect('clients');
        }
        
        $this->_model->deleteClient($this->filterInt($id));
        $this->redirect('clients');
    }
    
    
    /* for user profile */
    public function view($id) {
        if (!$this->filterInt($id) || !$this->_model->getClientById($this->filterInt($id))) {
            $this->redirect('clients');
        }

        $scores = $this->_model->getScores($this->filterInt($id));
        
        $this->_view->assign('cl', $this->_model->getClientById($this->filterInt($id)));
        $this->_view->assign('gifts', $this->_modelClientGifts->getGiftsByScores($scores));
        $this->_view->assign('title', 'Клиент АЗС');
        $this->_view->renderizer('view');
    }
    
    
    public function get($id, $scores) { 
        if (!$this->filterInt($id) || !$this->_model->getClientById($this->filterInt($id)) || !$this->filterFloat($scores)) {
            $this->redirect('clients');
        }
        
        $client_scores = $this->_model->getScores($this->filterInt($id));
        $scores = $client_scores - $scores;
        
        
        $this->_modelClientGifts->editClientScores($this->filterInt($id), $scores);
        
        $this->redirect('clients/view/' . $this->filterInt($id));
    }
}