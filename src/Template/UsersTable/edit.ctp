<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersTable $usersTable
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $usersTable->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $usersTable->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users Table'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="usersTable form large-9 medium-8 columns content">
    <?= $this->Form->create($usersTable) ?>
    <fieldset>
        <legend><?= __('Edit Users Table') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('email');
            echo $this->Form->control('password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
