<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Posts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Post Categories'), ['controller' => 'PostCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Post Category'), ['controller' => 'PostCategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Post Authors'), ['controller' => 'PostAuthors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Post Author'), ['controller' => 'PostAuthors', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="posts form large-9 medium-8 columns content">
    <?= $this->Form->create($post) ?>
    <fieldset>
        <legend><?= __('Add Post') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('body');
            echo $this->Form->control('post_category_id', ['options' => $postCategories]);
            echo $this->Form->control('post_author_id', ['options' => $postAuthors]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
