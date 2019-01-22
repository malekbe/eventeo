<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Event Entity
 *
 * @property int $id
 * @property string $nazwa
 * @property string $miejsce
 * @property string $opis
 * @property int $organizator_id
 * @property \Cake\I18n\FrozenTime $date_start
 * @property \Cake\I18n\FrozenTime $date_stop
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Organizator $organizator
 * @property \App\Model\Entity\Participant[] $participants
 * @property \App\Model\Entity\Prize[] $prizes
 * @property \App\Model\Entity\Spectator[] $spectators
 */
class Event extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nazwa' => true,
        'miejsce' => true,
        'opis' => true,
        'organizator_id' => true,
        'date_start' => true,
        'date_stop' => true,
        'created' => true,
        'modified' => true,
        'organizator' => true,
        'participants' => true,
        'prizes' => true,
        'spectators' => true
    ];
}
