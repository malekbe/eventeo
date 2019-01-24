<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Spectator[]|\Cake\Collection\CollectionInterface $spectators
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
      <li class="heading"><?= __('Akcje') ?></li>
      <?= $this->element('side_menu'); ?>
    </ul>
</nav>
<div class="spectators index large-9 medium-8 columns content">
    <h3><?= __('Widzowie') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nazwa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('event_id', ['label' => 'Wydarzenie']) ?></th>
                <th scope="col" class="actions"><?= __('Akcje') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($spectators as $spectator): ?>
            <tr>
                <td><?= $this->Number->format($spectator->id) ?></td>
                <td><?= h($spectator->email) ?></td>
                <td><?= h($spectator->nazwa) ?></td>
                <td><?= $spectator->has('event') ? $this->Html->link($spectator->event->nazwa, ['controller' => 'Events', 'action' => 'view', $spectator->event->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Widok'), ['action' => 'view', $spectator->id]) ?>
                    <?= $this->Html->link(__('Edytuj'), ['action' => 'edit', $spectator->id]) ?>
                    <?= $this->Form->postLink(__('Usuń'), ['action' => 'delete', $spectator->id], ['confirm' => __('Jesteś pewien ze chcesz usuąć # {0}?', $spectator->id)]) ?>
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
