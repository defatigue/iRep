<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FederalConstituency Entity.
 */
class FederalConstituency extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'state_id' => true,
        'federal_constituency' => true,
        'state' => true,
        'local_govts' => true,
    ];

}
