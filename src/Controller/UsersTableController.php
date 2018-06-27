<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;
use Cake\Event\Event;


/**
 * UsersTable Controller
 *
 * @property \App\Model\Table\UsersTableTable $UsersTable
 *
 * @method \App\Model\Entity\UsersTable[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersTableController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */


     public function initialize(){
       parent :: initialize();

   }
   public function beforeFilter(Event $event){

     $this->Auth->allow(['action'=>'signup']);
      return parent::beforeFilter($event);
   }


    public function index()
    {

        $usersTable = $this->paginate($this->UsersTable);
        $this->set(compact('usersTable'));
    }

    /**
     * View method
     *
     * @param string|null $id Users Table id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usersTable = $this->UsersTable->get($id, [
            'contain' => []
        ]);

        $this->set('usersTable', $usersTable);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usersTable = $this->UsersTable->newEntity();
        if ($this->request->is('post')) {
            $usersTable = $this->UsersTable->patchEntity($usersTable, $this->request->getData());
            if ($this->UsersTable->save($usersTable)) {
                $this->Flash->success(__('The users table has be  en saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users  could not be saved. Please, try again.'));
        }
        $this->set(compact('usersTable'));
    }

    public function signup(){
      //  pr($this->request->getData());
        $usersTable = $this->UsersTable->newEntity();
        if ($this->request->is('post')) {
            $usersTable = $this->UsersTable->patchEntity($usersTable, $this->request->getData());
            if ($this->UsersTable->save($usersTable)) {
                $this->Flash->success(__('The users  has be  en saved.'));
                  pr($this->request->getData());
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users  could not be saved. Please, try again.'));
        }

    }
    /****Lpgin****/


    public function login(){
      if($this->request->is('post')){

        $user = $this->request->getData();
        $formname = $user['username'];
        $query = $this->UsersTable
        ->find()
        ->select(['id', 'username','password'])
        ->where(['email'=>$user['username'],
        'AND'   =>['password' => $user['password']],]);
      //  debug($query);
        $number = $query->count();
      if($number==1){
        $this->Flash->success('Greato!!');
        $this->Auth->setUser($user);
      //  debug($this->Auth->setUser($user));
        return $this->redirect($this->Auth->redirectUrl());
        //$this->redirect(['action' =>'index']);
      }else{
        $this->Flash->error('Sorry Bro!!');
        $this->redirect(['action' =>'login']);

      }

      }

}


/*
    if($this->Auth->user('id')){
              $this->Flash->flash_link('Your are logged in already','flash_link',array([
              'link_text' =>'Do you want to logout ?',
              'link_url' =>array([
                  'action' =>'logout'
                ])
            ]));
          return $this->redirect(['action' =>'index']);

    }*/
  /*  if($this->request->is('post')){
      $user = $this->request->data['usernmae'];
        $this->Flash->error(" got ".print_r($user));
        $user = $this->Auth->identify();
        $this->Flash->error("you got ".$this->Auth->identify());
        if($user){
            $this->Auth->setUser($user);
            return $this->redirect(['action'=>'index']);
            $this->Flash->success('Successfully logged in');

        }else{
              $this->Flash->error('Not Successfully logged in');
              return $this->redirect(['action'=>'signup']);
        }*/
          //print_r($user);
      //  }


    /*******/
    public function logout(){

      $this->Auth->logout();
      return $this->redirect(['action'=>'login']);
    }
    /**
     * Edit method
     *
     * @param string|null $id Users Table id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usersTable = $this->UsersTable->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usersTable = $this->UsersTable->patchEntity($usersTable, $this->request->getData());
            if ($this->UsersTable->save($usersTable)) {
                $this->Flash->success(__('The users table has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users table could not be saved. Please, try again.'));
        }
        $this->set(compact('usersTable'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Users Table id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usersTable = $this->UsersTable->get($id);
        if ($this->UsersTable->delete($usersTable)) {
            $this->Flash->success(__('The users table has been deleted.'));
        } else {
            $this->Flash->error(__('The users table could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function alterTable(){

    $con = new ConnectionManager;
    $cn = $con->getDataSource('default');
    $cn->query("ALTER TABLE posts
    ADD category_id int");

    if($cn){
      $this->Flash->success("altered");
    }else{

        $this->Flash->error("not altered");

    }


}




}
