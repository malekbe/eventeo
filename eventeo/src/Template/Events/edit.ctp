<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
      <li class="heading"><?= __('Akcje') ?></li>
      <?= $this->element('side_menu'); ?>
      <li><?= $this->Form->postLink(
              __('Usuń'),
              ['action' => 'delete', $event->id],
              ['confirm' => __('Jesteś pewien ze chcesz usuąć # {0}?', $event->id)]
          )
      ?></li>
    </ul>
</nav>
<div class="events form large-9 medium-8 columns content">
    <?= $this->Form->create($event) ?>
    <fieldset>
        <legend><?= __('Edytuj Wydarzenie') ?></legend>
        <?php
            echo $this->Form->control('nazwa');
            echo $this->Form->control('miejsce');
            echo $this->Form->control('opis');
            echo $this->Form->control('organizator_id', ['options' => $organizators]);
            echo $this->Form->control('date_start', ['label' => 'Data rozpoczęcia']);
            echo $this->Form->control('date_stop', ['label' => 'Data zakończenia']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Zapisz')) ?>
    <?= $this->Form->end() ?>
</div>
