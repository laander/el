<?php
App::uses('AppController', 'Controller');
/**
 * Sections Controller
 *
 * @property Section $Section
 */
class SectionsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Section->recursive = 0;
		$this->set('sections', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Section->id = $id;
		if (!$this->Section->exists()) {
			throw new NotFoundException(__('Invalid section'));
		}
		$this->set('section', $this->Section->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Section->create();
			if ($this->Section->save($this->request->data)) {
				$this->Session->setFlash(__('The section has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The section could not be saved. Please, try again.'));
			}
		}
		$users = $this->Section->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Section->id = $id;
		if (!$this->Section->exists()) {
			throw new NotFoundException(__('Invalid section'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Section->save($this->request->data)) {
				$this->Session->setFlash(__('The section has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The section could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Section->read(null, $id);
		}
		$users = $this->Section->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Section->id = $id;
		if (!$this->Section->exists()) {
			throw new NotFoundException(__('Invalid section'));
		}
		if ($this->Section->delete()) {
			$this->Session->setFlash(__('Section deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Section was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
