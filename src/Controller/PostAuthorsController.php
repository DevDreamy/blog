<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PostAuthors Controller
 *
 * @property \App\Model\Table\PostAuthorsTable $PostAuthors
 *
 * @method \App\Model\Entity\PostAuthor[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PostAuthorsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $postAuthors = $this->paginate($this->PostAuthors);

        $this->set(compact('postAuthors'));
    }

    /**
     * View method
     *
     * @param string|null $id Post Author id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $postAuthor = $this->PostAuthors->get($id, [
            'contain' => ['Posts'],
        ]);

        $this->set('postAuthor', $postAuthor);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $postAuthor = $this->PostAuthors->newEntity();
        if ($this->request->is('post')) {
            $postAuthor = $this->PostAuthors->patchEntity($postAuthor, $this->request->getData());
            if ($this->PostAuthors->save($postAuthor)) {
                $this->Flash->success(__('The post author has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The post author could not be saved. Please, try again.'));
        }
        $this->set(compact('postAuthor'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Post Author id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $postAuthor = $this->PostAuthors->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $postAuthor = $this->PostAuthors->patchEntity($postAuthor, $this->request->getData());
            if ($this->PostAuthors->save($postAuthor)) {
                $this->Flash->success(__('The post author has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The post author could not be saved. Please, try again.'));
        }
        $this->set(compact('postAuthor'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Post Author id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $postAuthor = $this->PostAuthors->get($id);
        if ($this->PostAuthors->delete($postAuthor)) {
            $this->Flash->success(__('The post author has been deleted.'));
        } else {
            $this->Flash->error(__('The post author could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
