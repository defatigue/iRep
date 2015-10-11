<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity.
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'firstname' => true,
        'lastname' => true,
        'email' => true,
        'phone' => true,
        'username' => true,
        'password' => true,
        'federal_constituency' => true,
    ];

    
    public function _setPassword($originalPassword)
    {
        $hasherObject = new DefaultPasswordHasher();
        return $hasherObject->hash($originalPassword);
    }
}
