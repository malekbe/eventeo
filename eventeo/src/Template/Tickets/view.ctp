<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ticket $ticket
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <?= $this->element('side_menu'); ?>
        <li><?= $this->Html->link(__('Edytuj bilet'), ['action' => 'edit', $ticket->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Usuń bilet'), ['action' => 'delete', $ticket->id], ['confirm' => __('Jesteś pewien ze chcesz usuąć # {0}?', $ticket->id)]) ?> </li>
        <li><?= $this->Html->link(__('Lista biletów'), ['action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="tickets view large-9 medium-8 columns content">
    <h3>Bilet nr <?= h($ticket->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Widz') ?></th>
            <td><?= $ticket->has('spectator') ? $this->Html->link($ticket->spectator->email, ['controller' => 'Spectators', 'action' => 'view', $ticket->spectator->id]) : '' ?></td>
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
            <td><?= $types[$ticket->typ] ?></td>
        </tr>
    </table>
</div>
