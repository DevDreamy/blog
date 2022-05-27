<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PostAuthor[]|\Cake\Collection\CollectionInterface $postAuthors
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Post Author'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Post'), ['controller' => 'Posts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="postAuthors index large-9 medium-8 columns content">
    <h3><?= __('Post Authors') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($postAuthors as $postAuthor): ?>
            <tr>
                <td><?= $this->Number->format($postAuthor->id) ?></td>
                <td><?= h($postAuthor->name) ?></td>
                <td><?= h($postAuthor->email) ?></td>
                <td><?= h($postAuthor->password) ?></td>
                <td><?= h($postAuthor->created) ?></td>
                <td><?= h($postAuthor->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $postAuthor->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $postAuthor->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $postAuthor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $postAuthor->id)]) ?>
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
