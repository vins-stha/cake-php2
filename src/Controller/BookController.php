<?php

namespace App\Controller;
use App\Controller\AppController;




class BookController extends AppController {
  public function initialize(){
    parent :: initialize();
    $this->layout = "booklayout";
    $this->loadModel("Books");
  }

  public function index(){
    $books = $this->Books->find('all',[
      'order'=>'id'
    ]);

    $this->set("title", "The Book Lists");
    $this->set("books",$books);
  }


  public function create(){
    $this->set("title","Insert New Book");
////    print_r($this->request->getData());
    $book = $this->Books->newEntity();
    if($this->request->is('post')){
      $book = $this->Books->patchEntity($book, $this->request->getData());
        if ($this->Books->save($book)){
        $this->Flash->book_error('The book has been saved');
        return $this->redirect(['action'=>'index']);
      }else{
          $this->Flash->book_error($book->errors());
          return $this->redirect(['action'=>'create']);
      }
    }
    $this->set(compact('book'));
  }
  public function save(){
    $data = $this->request->getData();
    pr($data);

}
  public function edit($id){
    $this->set("title", "Edit your book");
    $book = $this->Books->get($id);
    $this->set('book',$book);
  }
  public function update(){
  //print_r($this->request->getData());
  if($this->request->is('post')){
    $newData = $this->request->getData();

    $id = $newData['bookId'];
    $book = $this->Books->get($id);
    $book->book_name = $newData['book_name'];
    $book->author_name=$newData['author_name'];
    $book->price = $newData['price'];
    $book->published_date = $newData['published_date'];
    $book->genre=$newData['genre'];
    $book->isbn = $newData['isbn'];
   //print_r($book);
    if($this->Books->save($book)){
      $this->redirect(['action'=>'index']);
      $this->Flash->success('The entry has been updated successfully');
    }else{
        $this->Flash->success('The entry could NOT BE updated successfully');
    }

  }

}
  public function delete($id){
  //  $this->request->allowMethod(['post', 'delete']);
    $book = $this->Books->get($id);
    if ($this->Books->delete($book)) {
        $this->Flash->success(__('The book has been deleted.'));
    } else {
        $this->Flash->error(__('The users table could not be deleted. Please, try again.'));
    }

    return $this->redirect(['action' => 'index']);
  }

}

?>
