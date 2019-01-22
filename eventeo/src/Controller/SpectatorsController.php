<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Spectators Controller
 *
 * @property \App\Model\Table\SpectatorsTable $Spectators
 *
 * @method \App\Model\Entity\Spectator[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SpectatorsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Events']
        ];
        $spectators = $this->paginate($this->Spectators);

        $this->set(compact('spectators'));
    }

    /**
     * View method
     *
     * @param string|null $id Spectator id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $spectator = $this->Spectators->get($id, [
            'contain' => ['Events', 'Tickets']
        ]);

        $this->set('spectator', $spectator);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $spectator = $this->Spectators->newEntity();
        if ($this->request->is('post')) {
            $spectator = $this->Spectators->patchEntity($spectator, $this->request->getData());
            if ($this->Spectators->save($spectator)) {
                $this->Flash->success(__('The spectator has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The spectator could not be saved. Please, try again.'));
        }
        $events = $this->Spectators->Events->find('list', ['limit' => 200]);
        $this->set(compact('spectator', 'events'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Spectator id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $spectator = $this->Spectators->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $spectator = $this->Spectators->patchEntity($spectator, $this->request->getData());
            if ($this->Spectators->save($spectator)) {
                $this->Flash->success(__('The spectator has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The spectator could not be saved. Please, try again.'));
        }
        $events = $this->Spectators->Events->find('list', ['limit' => 200]);
        $this->set(compact('spectator', 'events'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Spectator id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $spectator = $this->Spectators->get($id);
        if ($this->Spectators->delete($spectator)) {
            $this->Flash->success(__('The spectator has been deleted.'));
        } else {
            $this->Flash->error(__('The spectator could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
