<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Spectator $spectator
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Akcje') ?></li>
        <li><?= $this->Html->link(__('Lista widzów'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista Wydarzeń'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nowe Wydarzenie'), ['controller' => 'Events', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista biletów'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Dodaj bilet'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="spectators form large-9 medium-8 columns content">
    <?= $this->Form->create($spectator) ?>
    <fieldset>
        <legend><?= __('Dodaj Widza') ?></legend>
        <?php
            echo $this->Form->control('email');
            echo $this->Form->control('nazwa');
            echo $this->Form->control('event_id', ['options' => $events]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Zapisz')) ?>
    <?= $this->Form->end() ?>
</div>
