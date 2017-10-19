<?php
/**
 * Created by PhpStorm.
 * User: paulo.mazzia
 * Date: 19/10/2017
 * Time: 12:14
 */

namespace SONFin\Models;


use Illuminate\Database\Eloquent\Model;

class BillPay extends Model
{
    protected $fillable =[
      'date_launch',
      'name',
      'value',
      'user_id',
      'category_cost_id'
    ];
}