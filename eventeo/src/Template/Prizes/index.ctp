<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prize[]|\Cake\Collection\CollectionInterface $prizes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Akcje') ?></li>
        <li><?= $this->Html->link(__('Dodaj nagrodę'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nowe Wydarzenie'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="prizes index large-9 medium-8 columns content">
    <h3><?= __('Prizes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nazwa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('wartosc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('event_id') ?></th>
                <th scope="col" class="actions"><?= __('Akcje') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($prizes as $prize): ?>
            <tr>
                <td><?= $this->Number->format($prize->id) ?></td>
                <td><?= h($prize->nazwa) ?></td>
                <td><?= h($prize->wartosc) ?></td>
                <td><?= $prize->has('event') ? $this->Html->link($prize->event->id, ['controller' => 'Events', 'action' => 'view', $prize->event->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Widok'), ['action' => 'view', $prize->id]) ?>
                    <?= $this->Html->link(__('Edytuj'), ['action' => 'edit', $prize->id]) ?>
                    <?= $this->Form->postLink(__('Usuń'), ['action' => 'delete', $prize->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prize->id)]) ?>
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
