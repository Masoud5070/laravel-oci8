<?php

namespace Masoud5070\Oci8\Tests;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int id
 * @property string name
 * @property string email
 */
class User extends Model
{
    protected $guarded = [];
}
