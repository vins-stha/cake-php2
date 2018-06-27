<?php

namespace App\Controller;
use App\Controller\AppController;




class authorController extends AppController {

  public function initialize(){
    parent :: initialize();
    $this->layout = "authorlayout";
    $this->loadModel("Authors");
  }
  public function index(){
    $authors = $this->Authors->find('all',[
      'order'=>'id'
    ]);

    $this->set("title", "The author Lists");
    $this->set("authors",$authors);
  }

  public function create(){
    $this->set("title","Insert New author");
    print_r($this->request->getData());
    $author = $this->authors->newEntity();
    if($this->request->is('post')){
      $author = $this->authors->patchEntity($author, $this->request->getData());
        if ($this->authors->save($author)){
        $this->Flash->book_error('The author has been saved');
        return $this->redirect(['action'=>'index']);
      }else{
          $this->Flash->book_error($author->errors());
          return $this->redirect(['action'=>'create']);
      }
    }
    $this->set(compact('author'));
  }



}
