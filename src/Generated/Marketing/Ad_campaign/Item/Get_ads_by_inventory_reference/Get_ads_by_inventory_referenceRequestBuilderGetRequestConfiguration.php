<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Get_ads_by_inventory_reference;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Get_ads_by_inventory_referenceRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Get_ads_by_inventory_referenceRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Get_ads_by_inventory_referenceRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Get_ads_by_inventory_referenceRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Get_ads_by_inventory_referenceRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Get_ads_by_inventory_referenceRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Get_ads_by_inventory_referenceRequestBuilderGetQueryParameters.
     * @param string|null $inventory_reference_id This query parameter specifies the unique identifier of a single-item listing or a multi-variation listing.<br><br>To retrieve an ad for a single-item listing, set the <b>inventoryReferenceType</b> value to <code>INVENTORY_ITEM</code> and specify an item ID or a SKU (if the SKU is defined in the listing).<br><br>To retrieve an ad for a multi-variation listing, set the <b>inventoryReferenceType</b> value to <code>INVENTORY_ITEM_GROUP</code> and specify the item ID for the multi-variation listing or the <b>inventoryitemGroupKey</b> value as defined in the Inventory API.
     * @param string|null $inventory_reference_type This query parameter specifies the type of the item the <b>inventory_reference_id</b> references.<br><br>See <a href="/api-docs/sell/marketing/types/pls:InventoryReferenceTypeEnum" target="_blank">InventoryReferenceType</a> for supported values.
     * @return Get_ads_by_inventory_referenceRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $inventory_reference_id = null, ?string $inventory_reference_type = null): Get_ads_by_inventory_referenceRequestBuilderGetQueryParameters {
        return new Get_ads_by_inventory_referenceRequestBuilderGetQueryParameters($inventory_reference_id, $inventory_reference_type);
    }

}
