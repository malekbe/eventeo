<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Participant $participant
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Akcje') ?></li>
        <li><?= $this->Html->link(__('Edytuj uczestnika'), ['action' => 'edit', $participant->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Usuń uczestnika'), ['action' => 'delete', $participant->id], ['confirm' => __('Jesteś pewien ze chcesz usuąć # {0}?', $participant->id)]) ?> </li>
        <li><?= $this->Html->link(__('Lista Uczestników'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nowy Uczestnik'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista Wydarzeń'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nowe Wydarzenie'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="participants view large-9 medium-8 columns content">
    <h3><?= h($participant->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($participant->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefon') ?></th>
            <td><?= h($participant->telefon) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Event') ?></th>
            <td><?= $participant->has('event') ? $this->Html->link($participant->event->id, ['controller' => 'Events', 'action' => 'view', $participant->event->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($participant->id) ?></td>
        </tr>
    </table>
</div>
