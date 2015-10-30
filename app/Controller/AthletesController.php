<?php
App::uses('AppController', 'Controller');
/**
 * Athletes Controller
 *
 * @property Athlete $Athlete
 * @property PaginatorComponent $Paginator
 */
class AthletesController extends AppController {

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
		$this->Athlete->recursive = 1;
		$this->set('athletes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Athlete->exists($id)) {
			throw new NotFoundException(__('Invalid athlete'));
		}
		$options = array('conditions' => array('Athlete.' . $this->Athlete->primaryKey => $id));
		$this->set('athlete', $this->Athlete->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Athlete->create();
                        $this->request->data['Post']['user_id'] = $this->Auth->user('id');
			if ($this->Athlete->save($this->request->data)) {
				$this->Session->setFlash(__('The athlete has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The athlete could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$users = $this->Athlete->User->find('list');
		$sports = $this->Athlete->Sport->find('list');
		$events = $this->Athlete->Event->find('list');
		$this->set(compact('users', 'sports', 'events'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->Athlete->id = $id;
		if (!$this->Athlete->exists($id)) {
			throw new NotFoundException(__('Invalid athlete'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Athlete->save($this->request->data)) {
				$this->Session->setFlash(__('The athlete has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The athlete could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Athlete.' . $this->Athlete->primaryKey => $id));
			$this->request->data = $this->Athlete->find('first', $options);
		}
		$users = $this->Athlete->User->find('list');
		$sports = $this->Athlete->Sport->find('list');
		$events = $this->Athlete->Event->find('list');
		$this->set(compact('users', 'sports', 'events'));
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
		$this->Athlete->id = $id;
		if (!$this->Athlete->exists()) {
			throw new NotFoundException(__('Invalid athlete'));
		}
		if ($this->Athlete->delete()) {
			$this->Session->setFlash(__('Athlete deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Athlete was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
        public function isAuthorized($user) {
    // All registered users can add posts
    if ($this->action === 'add') {
        return true;
    }

    // The owner of a post can edit and delete it
    if (in_array($this->action, array('edit', 'delete'))) {
        $athleteId = (int) $this->request->params['pass'][0];
        if ($this->Athlete->isOwnedBy($athleteId, $user['id'])) {
            return true;
        }
    }

    return parent::isAuthorized($user);
}
  public function beforeFilter() {
        $this->Auth->allow('index','view');
    }
    
}
