<?php
/**
 * Created by PhpStorm.
 * User: Yavdat
 * Date: 09.08.2016
 * Time: 16:42
 */

namespace App\Models;


use App\Model;

class Author
    extends Model 
{
    const TABLE='authors';
    
    public $name;
}