<?php

namespace ShopifyOauthLaravel\Traits;

use Illuminate\Support\Facades\Config;
use ShopifyOauthLaravel\Models\Store;

trait HasStores
{
    public function stores()
    {
        return $this->belongsToMany(
            Store::class,
            Config::get('shopify-oauth-laravel.tables.store_has_users', 'store_has_users')
        );
    }
}