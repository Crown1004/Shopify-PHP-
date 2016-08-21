<?php
/**
 * Created by PhpStorm.
 * @author Tareq Mahmood <tareqtms@yahoo.com>
 * Created at 8/19/16 11:46 AM UTC+06:00
 *
 * @see https://help.shopify.com/api/reference/customcollection Shopify API Reference for CustomCollection
 */

namespace PHPShopify;


/*
 * --------------------------------------------------------------------------
 * CustomCollection -> Child Resources
 * --------------------------------------------------------------------------
 * @property-read ShopifyAPI $Event
 *
 * @method ShopifyAPI Event(integer $id = null)
 *
 */
class CustomCollection extends ShopifyAPI
{
    /**
     * Key of the API Resource which is used to fetch data from request responses
     *
     * @var string
     */
    protected $resourceKey = 'custom_collection';

    /**
     * List of child Resource names / classes
     * If any array item has an associative key => value pair, value will be considered as the resource name
     * (by which it will be called) and key will be the associated class name.
     *
     * @var array
     */
    protected $childResource = array(
        'Event',
    );
}