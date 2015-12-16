<?php
App::uses('AppController', 'Controller');
/**
 * Sports Controller
 *
 * @property Sport $Sport
 * @property PaginatorComponent $Paginator
 */
class SportsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session','RequestHandler');
  
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Sport->recursive = 0;
		$this->set('sports', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Sport->exists($id)) {
			throw new NotFoundException(__('Invalid sport'));
		}
		$options = array('conditions' => array('Sport.' . $this->Sport->primaryKey => $id));
		$this->set('sport', $this->Sport->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Sport->create();
			if ($this->Sport->save($this->request->data)) {
				$this->Session->setFlash(__('The sport has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sport could not be saved. Please, try again.'), 'flash/error');
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->Sport->id = $id;
		if (!$this->Sport->exists($id)) {
			throw new NotFoundException(__('Invalid sport'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Sport->save($this->request->data)) {
				$this->Session->setFlash(__('The sport has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sport could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Sport.' . $this->Sport->primaryKey => $id));
			$this->request->data = $this->Sport->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Sport->id = $id;
		if (!$this->Sport->exists()) {
			throw new NotFoundException(__('Invalid sport'));
		}
		if ($this->Sport->delete()) {
			$this->Session->setFlash(__('Sport deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sport was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
        
        public function beforeFilter() {
        $this->Auth->allow('index','view');
    }
}
