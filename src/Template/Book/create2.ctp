<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersTable $usersTable
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Ensert book Table'), ['controller'=>'book','action'=>'save']) ?></li>
    </ul>
</nav>
<div class="usersTable form large-9 medium-8 columns content">
    <?= $this->Form->create($usersTable) ?>
    <fieldset>
        <legend><?= __('Add Users Table') ?></legend>
        <?php
            echo $this->Form->control('book_name');
          //  echo $this->Form->control('email');
            echo $this->Form->control('author_name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
