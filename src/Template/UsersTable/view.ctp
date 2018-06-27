<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersTable $usersTable
 */
?>
<style>
.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 100%;;
    margin: auto;
    text-align: center;
}

.title {
    color: grey;
    font-size: 18px;
}


a {
    text-decoration: none;
    font-size: 22px;
    color: black;
}

button:hover, a:hover {
    opacity: 0.7;
}
</style>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Users Table'), ['action' => 'edit', $usersTable->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Users Table'), ['action' => 'delete', $usersTable->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersTable->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users Table'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Users Table'), ['action' => 'add']) ?> </li>
    </ul>
</nav>

<div class="usersTable view large-9 medium-8 columns content">
    <h3><?= h($usersTable->username) ?> Profile</h3>
    <div class="card">
      <img src="img.jpg" alt="John" style="width:100%">
      <h1><?= h($usersTable->username)?></h1>
      <p class="title">User ID: <b><?= $usersTable->id ?></b></p>
      <p class="title">E-mail: <b><?= $usersTable->email ?></b></p>
      <p class="title">Password: <b><?= $usersTable->password ?></b></p>

      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-linkedin"></i></a>
      <a href="#"><i class="fa fa-facebook"></i></a>

      <p><button type="button" class="btn btn-default">Contact</button></p>
    </div>
</div>

  <!------------------------------------------------------------------------------------------>
