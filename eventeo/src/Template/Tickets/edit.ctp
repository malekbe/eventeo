<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ticket $ticket
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ticket->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ticket->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Spectators'), ['controller' => 'Spectators', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Spectator'), ['controller' => 'Spectators', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tickets form large-9 medium-8 columns content">
    <?= $this->Form->create($ticket) ?>
    <fieldset>
        <legend><?= __('Edit Ticket') ?></legend>
        <?php
            echo $this->Form->control('cena');
            echo $this->Form->control('koszt');
            echo $this->Form->control('ilosc');
            echo $this->Form->control('typ');
            echo $this->Form->control('spectator_id', ['options' => $spectators]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
