<?php
App::uses('AppController', 'Controller');
/**
 * AthletesEvents Controller
 *
 * @property AthletesEvent $AthletesEvent
 * @property PaginatorComponent $Paginator
 */
class AthletesEventsController extends AppController {

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
		$this->AthletesEvent->recursive = 0;
		$this->set('athletesEvents', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AthletesEvent->exists($id)) {
			throw new NotFoundException(__('Invalid athletes event'));
		}
		$options = array('conditions' => array('AthletesEvent.' . $this->AthletesEvent->primaryKey => $id));
		$this->set('athletesEvent', $this->AthletesEvent->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AthletesEvent->create();
			if ($this->AthletesEvent->save($this->request->data)) {
				$this->Session->setFlash(__('The athletes event has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The athletes event could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$athletes = $this->AthletesEvent->Athlete->find('list');
		$events = $this->AthletesEvent->Event->find('list');
		$this->set(compact('athletes', 'events'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->AthletesEvent->id = $id;
		if (!$this->AthletesEvent->exists($id)) {
			throw new NotFoundException(__('Invalid athletes event'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AthletesEvent->save($this->request->data)) {
				$this->Session->setFlash(__('The athletes event has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The athletes event could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('AthletesEvent.' . $this->AthletesEvent->primaryKey => $id));
			$this->request->data = $this->AthletesEvent->find('first', $options);
		}
		$athletes = $this->AthletesEvent->Athlete->find('list');
		$events = $this->AthletesEvent->Event->find('list');
		$this->set(compact('athletes', 'events'));
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
		$this->AthletesEvent->id = $id;
		if (!$this->AthletesEvent->exists()) {
			throw new NotFoundException(__('Invalid athletes event'));
		}
		if ($this->AthletesEvent->delete()) {
			$this->Session->setFlash(__('Athletes event deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Athletes event was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
