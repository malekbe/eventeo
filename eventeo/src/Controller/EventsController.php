<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Events Controller
 *
 * @property \App\Model\Table\EventsTable $Events
 *
 * @method \App\Model\Entity\Event[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EventsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Organizators']
        ];
        $events = $this->paginate($this->Events);

        $this->set(compact('events'));
    }

    /**
     * View method
     *
     * @param string|null $id Event id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $event = $this->Events->get($id, [
            'contain' => ['Organizators', 'Participants', 'Prizes', 'Spectators']
        ]);

        $this->set('event', $event);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $event = $this->Events->newEntity();
        if ($this->request->is('post')) {
            $event = $this->Events->patchEntity($event, $this->request->getData());
            if ($this->Events->save($event)) {
                $this->Flash->success(__('Zapisano.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Nie zapisano. Spróbuj ponownie.'));
        }
        $organizators = $this->Events->Organizators->find('list', ['limit' => 200]);
        $this->set(compact('event', 'organizators'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Event id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $event = $this->Events->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $event = $this->Events->patchEntity($event, $this->request->getData());
            if ($this->Events->save($event)) {
                $this->Flash->success(__('Zapisano.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Nie zapisano. Spróbuj ponownie.'));
        }
        $organizators = $this->Events->Organizators->find('list', ['limit' => 200]);
        $this->set(compact('event', 'organizators'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Event id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $event = $this->Events->get($id);
        if ($this->Events->delete($event)) {
            $this->Flash->success(__('Usunięto.'));
        } else {
            $this->Flash->error(__('Nie usunięto. Spróbuj ponownie.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function login($role = 1) {
        $this->autoRender = false;
        $session = $this->getRequest()->getSession();
        $session->write('role', $role);
        $this->Flash->success(__('Zalogowano.'));
        return $this->redirect(['controller' => 'events', 'action' => 'index']);
    }

    public function logout() {
        $this->autoRender = false;
        $session = $this->getRequest()->getSession();
        $session->destroy();
        $this->Flash->success(__('Wylogowano.'));
        return $this->redirect('/');
    }
}
