<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Organizator Entity
 *
 * @property int $id
 * @property string $adres
 * @property string $email
 * @property string $telefon
 *
 * @property \App\Model\Entity\Event[] $events
 */
class Organizator extends Entity
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
        'adres' => true,
        'email' => true,
        'telefon' => true,
        'events' => true
    ];
}
