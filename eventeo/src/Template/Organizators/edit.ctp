<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Organizator $organizator
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $organizator->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $organizator->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Organizators'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="organizators form large-9 medium-8 columns content">
    <?= $this->Form->create($organizator) ?>
    <fieldset>
        <legend><?= __('Edit Organizator') ?></legend>
        <?php
            echo $this->Form->control('adres');
            echo $this->Form->control('email');
            echo $this->Form->control('telefon');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
