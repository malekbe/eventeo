<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Organizators Controller
 *
 * @property \App\Model\Table\OrganizatorsTable $Organizators
 *
 * @method \App\Model\Entity\Organizator[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrganizatorsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $organizators = $this->paginate($this->Organizators);

        $this->set(compact('organizators'));
    }

    /**
     * View method
     *
     * @param string|null $id Organizator id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $organizator = $this->Organizators->get($id, [
            'contain' => ['Events']
        ]);

        $this->set('organizator', $organizator);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $organizator = $this->Organizators->newEntity();
        if ($this->request->is('post')) {
            $organizator = $this->Organizators->patchEntity($organizator, $this->request->getData());
            if ($this->Organizators->save($organizator)) {
                $this->Flash->success(__('Zapisano.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Nie zapisano. Spróbuj ponownie.'));
        }
        $this->set(compact('organizator'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Organizator id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $organizator = $this->Organizators->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $organizator = $this->Organizators->patchEntity($organizator, $this->request->getData());
            if ($this->Organizators->save($organizator)) {
                $this->Flash->success(__('Zapisano.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Nie zapisano. Spróbuj ponownie.'));
        }
        $this->set(compact('organizator'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Organizator id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $organizator = $this->Organizators->get($id);
        if ($this->Organizators->delete($organizator)) {
            $this->Flash->success(__('Usunięto.'));
        } else {
            $this->Flash->error(__('Nie usunięto. Spróbuj ponownie.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
