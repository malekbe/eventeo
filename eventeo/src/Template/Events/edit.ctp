<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Akcje') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $event->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Events'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista Organizatorów'), ['controller' => 'Organizators', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nowy Organizator'), ['controller' => 'Organizators', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista Uczestników'), ['controller' => 'Participants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nowy Uczestnik'), ['controller' => 'Participants', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista Nagród'), ['controller' => 'Prizes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Dodaj nagrodę'), ['controller' => 'Prizes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista widzów'), ['controller' => 'Spectators', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nowy Widzz'), ['controller' => 'Spectators', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="events form large-9 medium-8 columns content">
    <?= $this->Form->create($event) ?>
    <fieldset>
        <legend><?= __('Edit Event') ?></legend>
        <?php
            echo $this->Form->control('nazwa');
            echo $this->Form->control('miejsce');
            echo $this->Form->control('opis');
            echo $this->Form->control('organizator_id', ['options' => $organizators]);
            echo $this->Form->control('date_start');
            echo $this->Form->control('date_stop');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
