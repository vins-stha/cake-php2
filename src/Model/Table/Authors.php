<?php
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;



 class Authors extends Table{

  public function initialize(array $config)
  {
      parent::initialize($config);
      $this->setTable('authors');
      $this->setDisplayField('id');
      $this->setPrimaryKey('id');
  }
public function validationDefault(Validator $validator)
{
    $validator
          ->requirePresence('username','create')
          ->notEmpty('username');
    $validator
          ->requirePresence('email','create')
          ->notEmpty('email');
    $validator
          ->requirePresence('password','create')
          ->notEmpty('password');

          return $validator;
}


}


?>
