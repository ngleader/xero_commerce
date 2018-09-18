<?php

namespace Xpressengine\Plugins\XeroCommerce\Models;

use Xpressengine\Database\Eloquent\DynamicModel;

class Store extends DynamicModel
{
    const TYPE_STORE = 1;
    const TYPE_INDIVIDUAL = 2;

    const BASIC_STORE_NAME = 'basic_store';

    protected $table = 'xero_commerce_store';

    protected $fillable = ['user_id', 'store_type'];

    public $timestamps = false;

    public function deliveryCompanys()
    {
        return $this->belongsToMany(
            DeliveryCompany::class,
            'xero_commerce_store_delivery'
        )
            ->withPivot(
                ['delivery_fare', 'up_to_free']
            );
    }

    public function getDefaultDeliveryCompany()
    {
        return $this->deliveryCompanys()->where('is_default', 1)->first();
    }
}
