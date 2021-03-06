<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Tickets Controller
 *
 * @property \App\Model\Table\TicketsTable $Tickets
 *
 * @method \App\Model\Entity\Ticket[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TicketsController extends AppController
{
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $types = [
            1 => 'Zwykły',
            2 => 'Ulgowy'
        ];
        $this->set('types', $types);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Spectators']
        ];
        $tickets = $this->paginate($this->Tickets);

        $this->set(compact('tickets'));
    }

    /**
     * View method
     *
     * @param string|null $id Ticket id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ticket = $this->Tickets->get($id, [
            'contain' => ['Spectators']
        ]);

        $this->set('ticket', $ticket);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ticket = $this->Tickets->newEntity();
        if ($this->request->is('post')) {
            $ticket = $this->Tickets->patchEntity($ticket, $this->request->getData());
            if ($this->Tickets->save($ticket)) {
                $this->Flash->success(__('Zapisano.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Nie zapisano. Spróbuj ponownie.'));
        }
        $spectators = $this->Tickets->Spectators->find('list', ['limit' => 200]);
        $this->set(compact('ticket', 'spectators'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ticket id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ticket = $this->Tickets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ticket = $this->Tickets->patchEntity($ticket, $this->request->getData());
            if ($this->Tickets->save($ticket)) {
                $this->Flash->success(__('Zapisano.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Nie zapisano. Spróbuj ponownie.'));
        }
        $spectators = $this->Tickets->Spectators->find('list', ['limit' => 200]);
        $this->set(compact('ticket', 'spectators'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ticket id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ticket = $this->Tickets->get($id);
        if ($this->Tickets->delete($ticket)) {
            $this->Flash->success(__('Usunięto.'));
        } else {
            $this->Flash->error(__('Nie usunięto. Spróbuj ponownie.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
