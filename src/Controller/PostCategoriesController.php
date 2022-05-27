<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PostCategories Controller
 *
 * @property \App\Model\Table\PostCategoriesTable $PostCategories
 *
 * @method \App\Model\Entity\PostCategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PostCategoriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $postCategories = $this->paginate($this->PostCategories);

        $this->set(compact('postCategories'));
    }

    /**
     * View method
     *
     * @param string|null $id Post Category id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $postCategory = $this->PostCategories->get($id, [
            'contain' => ['Posts'],
        ]);

        $this->set('postCategory', $postCategory);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $postCategory = $this->PostCategories->newEntity();
        if ($this->request->is('post')) {
            $postCategory = $this->PostCategories->patchEntity($postCategory, $this->request->getData());
            if ($this->PostCategories->save($postCategory)) {
                $this->Flash->success(__('The post category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The post category could not be saved. Please, try again.'));
        }
        $this->set(compact('postCategory'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Post Category id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $postCategory = $this->PostCategories->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $postCategory = $this->PostCategories->patchEntity($postCategory, $this->request->getData());
            if ($this->PostCategories->save($postCategory)) {
                $this->Flash->success(__('The post category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The post category could not be saved. Please, try again.'));
        }
        $this->set(compact('postCategory'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Post Category id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $postCategory = $this->PostCategories->get($id);
        if ($this->PostCategories->delete($postCategory)) {
            $this->Flash->success(__('The post category has been deleted.'));
        } else {
            $this->Flash->error(__('The post category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
