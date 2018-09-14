<?php

namespace Xpressengine\Plugins\XeroStore\Models;

use Xpressengine\Database\Eloquent\DynamicModel;

class Store extends DynamicModel
{
    const TYPE_STORE = 1;
    const TYPE_INDIVIDUAL = 2;

    protected $table = 'xero_store_store';

    protected $fillable = ['user_id', 'store_type'];

    public $timestamps = false;
}
