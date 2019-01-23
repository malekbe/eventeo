<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Participant[]|\Cake\Collection\CollectionInterface $participants
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Akcje') ?></li>
        <li><?= $this->Html->link(__('Nowy Uczestnik'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista Wydarzeń'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nowe Wydarzenie'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="participants index large-9 medium-8 columns content">
    <h3><?= __('Uczestnicy') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefon') ?></th>
                <th scope="col"><?= $this->Paginator->sort('event_id', ['label' => 'Wydarzenie']) ?></th>
                <th scope="col" class="actions"><?= __('Akcje') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($participants as $participant): ?>
            <tr>
                <td><?= $this->Number->format($participant->id) ?></td>
                <td><?= h($participant->email) ?></td>
                <td><?= h($participant->telefon) ?></td>
                <td><?= $participant->has('event') ? $this->Html->link($participant->event->nazwa, ['controller' => 'Events', 'action' => 'view', $participant->event->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Widok'), ['action' => 'view', $participant->id]) ?>
                    <?= $this->Html->link(__('Edytuj'), ['action' => 'edit', $participant->id]) ?>
                    <?= $this->Form->postLink(__('Usuń'), ['action' => 'delete', $participant->id], ['confirm' => __('Jesteś pewien ze chcesz usuąć # {0}?', $participant->id)]) ?>
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
