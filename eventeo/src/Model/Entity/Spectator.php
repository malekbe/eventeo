<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Spectator Entity
 *
 * @property int $id
 * @property string $email
 * @property string $nazwa
 * @property int $event_id
 *
 * @property \App\Model\Entity\Event $event
 * @property \App\Model\Entity\Ticket[] $tickets
 */
class Spectator extends Entity
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
        'email' => true,
        'nazwa' => true,
        'event_id' => true,
        'event' => true,
        'tickets' => true
    ];
}
