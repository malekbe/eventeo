<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event[]|\Cake\Collection\CollectionInterface $events
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <?= $this->element('side_menu'); ?>
</nav>
<div class="events index large-9 medium-8 columns content">
    <h3><?= __('Wydarzenia') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nazwa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('miejsce') ?></th>
                <th scope="col"><?= $this->Paginator->sort('organizator_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_start', ['label' => 'Data rozpoczęcia']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_stop', ['label' => 'Data zakończenia']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('created', ['label' => 'Utworzono']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified', ['label' => 'Edytowano']) ?></th>
                <th scope="col" class="actions"><?= __('Akcje') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($events as $event): ?>
            <tr>
                <td><?= $this->Number->format($event->id) ?></td>
                <td><?= h($event->nazwa) ?></td>
                <td><?= h($event->miejsce) ?></td>
                <td><?= $event->has('organizator') ? $this->Html->link($event->organizator->email, ['controller' => 'Organizators', 'action' => 'view', $event->organizator->id]) : '' ?></td>
                <td><?= h($event->date_start) ?></td>
                <td><?= h($event->date_stop) ?></td>
                <td><?= h($event->created) ?></td>
                <td><?= h($event->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Widok'), ['action' => 'view', $event->id]) ?>
                    <?= $this->Html->link(__('Edytuj'), ['action' => 'edit', $event->id]) ?>
                    <?= $this->Form->postLink(__('Usuń'), ['action' => 'delete', $event->id], ['confirm' => __('Jesteś pewien ze chcesz usuąć # {0}?', $event->id)]) ?>
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
