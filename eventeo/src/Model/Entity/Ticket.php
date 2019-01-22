<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ticket Entity
 *
 * @property int $id
 * @property float $cena
 * @property float $koszt
 * @property int $ilosc
 * @property int $typ
 * @property int $spectator_id
 *
 * @property \App\Model\Entity\Spectator $spectator
 */
class Ticket extends Entity
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
        'cena' => true,
        'koszt' => true,
        'ilosc' => true,
        'typ' => true,
        'spectator_id' => true,
        'spectator' => true
    ];
}
