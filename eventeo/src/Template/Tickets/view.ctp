<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ticket $ticket
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ticket'), ['action' => 'edit', $ticket->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ticket'), ['action' => 'delete', $ticket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticket->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tickets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Spectators'), ['controller' => 'Spectators', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Spectator'), ['controller' => 'Spectators', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tickets view large-9 medium-8 columns content">
    <h3><?= h($ticket->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Spectator') ?></th>
            <td><?= $ticket->has('spectator') ? $this->Html->link($ticket->spectator->id, ['controller' => 'Spectators', 'action' => 'view', $ticket->spectator->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ticket->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cena') ?></th>
            <td><?= $this->Number->format($ticket->cena) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Koszt') ?></th>
            <td><?= $this->Number->format($ticket->koszt) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ilosc') ?></th>
            <td><?= $this->Number->format($ticket->ilosc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Typ') ?></th>
            <td><?= $this->Number->format($ticket->typ) ?></td>
        </tr>
    </table>
</div>
