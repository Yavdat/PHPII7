<?php
/**
 * Created by PhpStorm.
 * User: Yavdat
 * Date: 12.08.2016
 * Time: 14:47
 */

namespace App;


class MultiException
    extends \Exception
    implements \ArrayAccess, \Iterator
{
    use TCollection;
}