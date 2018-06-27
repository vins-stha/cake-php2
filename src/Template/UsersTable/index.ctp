<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersTable[]|\Cake\Collection\CollectionInterface $usersTable
 */
?>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Users Table'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Add new entries for books'), ['controller'=>'book','action' => 'create']) ?></li>
        <li><?=$this->Html->link(__('View Books'),['controller'=>'book','action'=>'index'])?></li>
    </ul>
</nav>

<div class="usersTable index large-9 medium-8 columns content">
    <h3><?= __('Users Table') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col" width="5%"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col" width="20%"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col" width="20%"><?= $this->Paginator->sort('email') ?></th>
                <!--<th scope="col"><//?= $this->Paginator->sort('password') ?></th>-->
                <th scope="col" width ="30%" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usersTable as $usersTable): ?>
            <tr>
                <td><?= $this->Number->format($usersTable->id) ?></td>
                <td><?= h($usersTable->username) ?></td>
                <td><?= h($usersTable->email) ?></td>
              <!--  <td><//?= h($usersTable->password) ?></td>-->
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view',$usersTable->id],array('class' =>'btn btn-primary btn-xs')) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usersTable->id],array('class' =>'btn btn-primary btn-xs')) ?>
                    <?= $this->Form->postLink(__('Delete'),
                                                ['action' => 'delete', $usersTable->id],
                                                array(//['confirm' =>__('Are you sure you want to delete {0}?', $usersTable->username)],
                                                      'class' =>'btn btn-danger btn-xs')

                                                      )
                                                    ; ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
