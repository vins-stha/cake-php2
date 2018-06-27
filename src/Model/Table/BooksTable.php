<?php
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;



 class BooksTable extends Table{

  public function initialize(array $config)
  {
      parent::initialize($config);
      $this->setTable('books');
      $this->setDisplayField('id');
      $this->setPrimaryKey('id');
  }

  public function validationDefault(Validator $validator){
      $validator
            ->requirePresence('book_name', 'create')
            ->notEmpty('book_name');
      $validator
            ->requirePresence('author_name', 'create')
            ->notEmpty('author_name', 'You must enter a authorname', 'create')
                ->add('author_name', [
                    'length' => [
                    'rule' => ['minLength', 3],
                    'message' => 'The name of the author is too short',
                ]
            ]);
      $validator
        ->requirePresence('price', 'create')
        ->notEmpty('price','Please enter the price of the book');
      $validator
        ->requirePresence('genre','create')
        ->notEmpty('genre'.'Please enter the genre of the book');
     $validator
        ->allowEmpty('ISBN','create')
        ->add('ISBN',[
          'length' =>[
            'rule' =>array(['maxLength'=>'10']),
            'message'=>'the isbn should be between 10-13 digits'
          ]
        ]);
        return $validator;


  }


  }


?>
