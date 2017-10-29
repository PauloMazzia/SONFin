<?php
/**
 * Created by PhpStorm.
 * User: paulo.mazzia
 * Date: 18/10/2017
 * Time: 20:20
 */

namespace SONFin\Models;


use Illuminate\Database\Eloquent\Model;

class BillReceive extends Model
{
    protected $fillable = [
      'date_launch',
      'name',
      'value',
      'user_id'
    ];
}
