<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ticket[]|\Cake\Collection\CollectionInterface $tickets
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ticket'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Spectators'), ['controller' => 'Spectators', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Spectator'), ['controller' => 'Spectators', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tickets index large-9 medium-8 columns content">
    <h3><?= __('Tickets') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cena') ?></th>
                <th scope="col"><?= $this->Paginator->sort('koszt') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ilosc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('typ') ?></th>
                <th scope="col"><?= $this->Paginator->sort('spectator_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tickets as $ticket): ?>
            <tr>
                <td><?= $this->Number->format($ticket->id) ?></td>
                <td><?= $this->Number->format($ticket->cena) ?></td>
                <td><?= $this->Number->format($ticket->koszt) ?></td>
                <td><?= $this->Number->format($ticket->ilosc) ?></td>
                <td><?= $this->Number->format($ticket->typ) ?></td>
                <td><?= $ticket->has('spectator') ? $this->Html->link($ticket->spectator->id, ['controller' => 'Spectators', 'action' => 'view', $ticket->spectator->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ticket->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ticket->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ticket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticket->id)]) ?>
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
