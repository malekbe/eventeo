<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ticket $ticket
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
      <?= $this->element('side_menu'); ?>
      <li><?= $this->Form->postLink(
                __('Usuń'),
                ['action' => 'delete', $ticket->id],
                ['confirm' => __('Jesteś pewien ze chcesz usuąć # {0}?', $ticket->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista biletów'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tickets form large-9 medium-8 columns content">
    <?= $this->Form->create($ticket) ?>
    <fieldset>
        <legend><?= __('Edytuj bilet') ?></legend>
        <?php
            echo $this->Form->control('cena');
            echo $this->Form->control('koszt');
            echo $this->Form->control('ilosc');
            echo $this->Form->control('type', ['label' => 'Typ biletu', 'options' => $types]);
            echo $this->Form->control('spectator_id', ['label' => 'widz', 'options' => $spectators]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Zapisz')) ?>
    <?= $this->Form->end() ?>
</div>
