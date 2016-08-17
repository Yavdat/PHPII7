<?php
/**
 * Created by PhpStorm.
 * User: serb
 * Date: 4/2/16
 * Time: 1:37 AM
 */

namespace App\Models;

use App\Model;

class User extends Model
implements HasEmail
{
    const TABLE='users';

    public $email;
    public $name;

    /**
     * Method returned email
     * @deprecated
     * @return string Email address
     */

    public function getEmail()
    {
        return $this->email;
    }

}