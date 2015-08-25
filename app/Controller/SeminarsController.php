<?php
App::uses('AppController', 'Controller');
/**
 * Seminars Controller
 *
 * @property Seminar $Seminar
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class SeminarsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

		/**
		 * suggestingSeminar method
		 *
		 * @return void
		 */
			public function suggestingSeminar() {
				$this->Seminar->recursive = 0;
				$this->set('name','SEATTLE');
			}
			/**
			 * suggestedSeminar method
			 *
			 * @return void
			 */
				public function suggestedSeminar() {
					$this->Seminar->recursive = 0;
					$this->set('name','SEATTLE');
				}

				/**
				 * suggestedSeminar method
				 *
				 * @return void
				 */
					public function createSeminar() {
						$this->Seminar->recursive = 0;
					}
					/**
					 * suggestedSeminar method
					 *
					 * @return void
					 */
						public function checkSeminar() {
							$this->Seminar->recursive = 0;
						}
						/**
						 * suggestedSeminar method
						 *
						 * @return void
						 */
							public function doSeminar() {
								$this->Seminar->recursive = 0;
							}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Seminar->exists($id)) {
			throw new NotFoundException(__('Invalid seminar'));
		}
		$options = array('conditions' => array('Seminar.' . $this->Seminar->primaryKey => $id));
		$this->set('seminar', $this->Seminar->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Seminar->create();
			if ($this->Seminar->save($this->request->data)) {
				$this->Session->setFlash(__('The seminar has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The seminar could not be saved. Please, try again.'));
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
		if (!$this->Seminar->exists($id)) {
			throw new NotFoundException(__('Invalid seminar'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Seminar->save($this->request->data)) {
				$this->Session->setFlash(__('The seminar has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The seminar could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Seminar.' . $this->Seminar->primaryKey => $id));
			$this->request->data = $this->Seminar->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Seminar->id = $id;
		if (!$this->Seminar->exists()) {
			throw new NotFoundException(__('Invalid seminar'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Seminar->delete()) {
			$this->Session->setFlash(__('The seminar has been deleted.'));
		} else {
			$this->Session->setFlash(__('The seminar could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin/controller_index method
 *
 * @return void
 */
// 	public function admin/controller_index() {
// 		$this->Seminar->recursive = 0;
// 		$this->set('seminars', $this->Paginator->paginate());
// 	}
//
// /**
//  * admin/controller_view method
//  *
//  * @throws NotFoundException
//  * @param string $id
//  * @return void
//  */
// 	public function admin/controller_view($id = null) {
// 		if (!$this->Seminar->exists($id)) {
// 			throw new NotFoundException(__('Invalid seminar'));
// 		}
// 		$options = array('conditions' => array('Seminar.' . $this->Seminar->primaryKey => $id));
// 		$this->set('seminar', $this->Seminar->find('first', $options));
// 	}
//
// /**
//  * admin/controller_add method
//  *
//  * @return void
//  */
// 	public function admin/controller_add() {
// 		if ($this->request->is('post')) {
// 			$this->Seminar->create();
// 			if ($this->Seminar->save($this->request->data)) {
// 				$this->Session->setFlash(__('The seminar has been saved.'));
// 				return $this->redirect(array('action' => 'index'));
// 			} else {
// 				$this->Session->setFlash(__('The seminar could not be saved. Please, try again.'));
// 			}
// 		}
// 	}
//
// /**
//  * admin/controller_edit method
//  *
//  * @throws NotFoundException
//  * @param string $id
//  * @return void
//  */
// 	public function admin/controller_edit($id = null) {
// 		if (!$this->Seminar->exists($id)) {
// 			throw new NotFoundException(__('Invalid seminar'));
// 		}
// 		if ($this->request->is(array('post', 'put'))) {
// 			if ($this->Seminar->save($this->request->data)) {
// 				$this->Session->setFlash(__('The seminar has been saved.'));
// 				return $this->redirect(array('action' => 'index'));
// 			} else {
// 				$this->Session->setFlash(__('The seminar could not be saved. Please, try again.'));
// 			}
// 		} else {
// 			$options = array('conditions' => array('Seminar.' . $this->Seminar->primaryKey => $id));
// 			$this->request->data = $this->Seminar->find('first', $options);
// 		}
// 	}
//
// /**
//  * admin/controller_delete method
//  *
//  * @throws NotFoundException
//  * @param string $id
//  * @return void
//  */
// 	public function admin/controller_delete($id = null) {
// 		$this->Seminar->id = $id;
// 		if (!$this->Seminar->exists()) {
// 			throw new NotFoundException(__('Invalid seminar'));
// 		}
// 		$this->request->allowMethod('post', 'delete');
// 		if ($this->Seminar->delete()) {
// 			$this->Session->setFlash(__('The seminar has been deleted.'));
// 		} else {
// 			$this->Session->setFlash(__('The seminar could not be deleted. Please, try again.'));
// 		}
// 		return $this->redirect(array('action' => 'index'));
// 	}
 }
