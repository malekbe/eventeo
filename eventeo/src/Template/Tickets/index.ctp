<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ticket[]|\Cake\Collection\CollectionInterface $tickets
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Akcje') ?></li>
        <li><?= $this->Html->link(__('Dodaj bilet'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista widzów'), ['controller' => 'Spectators', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nowy Widz'), ['controller' => 'Spectators', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tickets index large-9 medium-8 columns content">
    <h3><?= __('Bilety') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cena') ?></th>
                <th scope="col"><?= $this->Paginator->sort('koszt') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ilosc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('typ') ?></th>
                <th scope="col"><?= $this->Paginator->sort('spectator_id') ?></th>
                <th scope="col" class="actions"><?= __('Akcje') ?></th>
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
                    <?= $this->Html->link(__('Widok'), ['action' => 'view', $ticket->id]) ?>
                    <?= $this->Html->link(__('Edytuj'), ['action' => 'edit', $ticket->id]) ?>
                    <?= $this->Form->postLink(__('Usuń'), ['action' => 'delete', $ticket->id], ['confirm' => __('Jesteś pewien ze chcesz usuąć # {0}?', $ticket->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('pierwsza')) ?>
            <?= $this->Paginator->prev('< ' . __('poprzednia')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('następna') . ' >') ?>
            <?= $this->Paginator->last(__('ostatnia') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Strona {{page}} z {{pages}}, pokazuje {{current}} wpisów ze wszystkich {{count}}')]) ?></p>
    </div>
</div>
