<?php
App::uses('AppController', 'Controller');
/**
 * Reviews Controller
 *
 * @property Review $Review
 * @property PaginatorComponent $Paginator
 */
class ReviewsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Review->recursive = 0;
		$this->set('reviews', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Review->exists($id)) {
			throw new NotFoundException(__('Invalid review'));
		}
		$options = array('conditions' => array('Review.' . $this->Review->primaryKey => $id));
		$this->set('review', $this->Review->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Review->create();
			if ($this->Review->save($this->request->data)) {
				$this->Session->setFlash(__('The review has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The review could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$athletes = $this->Review->Athlete->find('list');
		$this->set(compact('athletes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->Review->id = $id;
		if (!$this->Review->exists($id)) {
			throw new NotFoundException(__('Invalid review'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Review->save($this->request->data)) {
				$this->Session->setFlash(__('The review has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The review could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Review.' . $this->Review->primaryKey => $id));
			$this->request->data = $this->Review->find('first', $options);
		}
		$athletes = $this->Review->Athlete->find('list');
		$this->set(compact('athletes'));
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
		$this->Review->id = $id;
		if (!$this->Review->exists()) {
			throw new NotFoundException(__('Invalid review'));
		}
		if ($this->Review->delete()) {
			$this->Session->setFlash(__('Review deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Review was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
        
        public function beforeFilter() {
        $this->Auth->allow('index','view');
    }
}
