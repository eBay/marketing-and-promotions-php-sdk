<?php

// Copyright 2026 eBay Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

namespace EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Get_ads_by_inventory_reference;

/**
 * This method retrieves Promoted Listings ads associated with listings that are managed with the <a href="/api-docs/sell/inventory/resources/methods" title="Inventory API Reference">Inventory API</a> from the specified campaign.<br /><br />Supply the <b>campaign_id</b> as a path parameter and use query parameters to specify the <b>inventory_reference_id</b> and <b>inventory_reference_type</b> pairs.<br /><br />In the Inventory API, an <i>inventory reference ID</i> is either a seller-defined <b>SKU</b> value or an <b>inventoryItemGroupKey</b> (a seller-defined ID for an inventory item group, which is an entity that's used in the Inventory API to create a multiple-variation listing). To indicate a listing managed by the Inventory API, you must always specify both an <b>inventory_reference_id</b> and the associated <b>inventory_reference_type</b>.<br /><br />Call <a href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns">getCampaigns</a> to retrieve all of the seller's the current campaign IDs.<br /><br /><span class="tablenote"><b>Note:</b> This method only applies to the Cost Per Sale (CPS) funding model; it does not apply to the Cost Per Click (CPC) funding model. See <a href="/api-docs/sell/static/marketing/pl-overview.html#funding-model">Funding Models</a> in the <i>Promoted Listings Playbook</i> for more information.</span>
*/
class Get_ads_by_inventory_referenceRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("inventory_reference_id")
     * @var string|null $inventoryReferenceId This query parameter specifies the unique identifier of a single-item listing or a multi-variation listing.<br><br>To retrieve an ad for a single-item listing, set the <b>inventoryReferenceType</b> value to <code>INVENTORY_ITEM</code> and specify an item ID or a SKU (if the SKU is defined in the listing).<br><br>To retrieve an ad for a multi-variation listing, set the <b>inventoryReferenceType</b> value to <code>INVENTORY_ITEM_GROUP</code> and specify the item ID for the multi-variation listing or the <b>inventoryitemGroupKey</b> value as defined in the Inventory API.
    */
    public ?string $inventoryReferenceId = null;
    
    /**
     * @QueryParameter("inventory_reference_type")
     * @var string|null $inventoryReferenceType This query parameter specifies the type of the item the <b>inventory_reference_id</b> references.<br><br>See <a href="/api-docs/sell/marketing/types/pls:InventoryReferenceTypeEnum" target="_blank">InventoryReferenceType</a> for supported values.
    */
    public ?string $inventoryReferenceType = null;
    
    /**
     * Instantiates a new Get_ads_by_inventory_referenceRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $inventory_reference_id This query parameter specifies the unique identifier of a single-item listing or a multi-variation listing.<br><br>To retrieve an ad for a single-item listing, set the <b>inventoryReferenceType</b> value to <code>INVENTORY_ITEM</code> and specify an item ID or a SKU (if the SKU is defined in the listing).<br><br>To retrieve an ad for a multi-variation listing, set the <b>inventoryReferenceType</b> value to <code>INVENTORY_ITEM_GROUP</code> and specify the item ID for the multi-variation listing or the <b>inventoryitemGroupKey</b> value as defined in the Inventory API.
     * @param string|null $inventory_reference_type This query parameter specifies the type of the item the <b>inventory_reference_id</b> references.<br><br>See <a href="/api-docs/sell/marketing/types/pls:InventoryReferenceTypeEnum" target="_blank">InventoryReferenceType</a> for supported values.
    */
    public function __construct(?string $inventory_reference_id = null, ?string $inventory_reference_type = null) {
        $this->inventoryReferenceId = $inventory_reference_id;
        $this->inventoryReferenceType = $inventory_reference_type;
    }

}
