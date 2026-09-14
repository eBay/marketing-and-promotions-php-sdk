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

declare(strict_types=1);

namespace EBay\MarketingAndPromotions\Clients\Rest;

use EBay\MarketingAndPromotions\Configuration\KiotaAuthProvider;
use EBay\MarketingAndPromotions\Configuration\MarketingAndPromotionsConfiguration;
use EBay\MarketingAndPromotions\Configuration\RequestOptions;
use EBay\MarketingAndPromotions\Generated\Marketing\MarketingApiClient;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\Ad;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\AdGroup;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\AdGroupPagedCollectionResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\AdIds;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\AdPagedCollectionResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\AdReferences;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\Ads;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BaseResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkAdResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkAdUpdateResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkAdUpdateStatusByListingIdResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkAdUpdateStatusResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkCreateAdRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkCreateAdsByInventoryReferenceRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkCreateAdsByInventoryReferenceResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkCreateKeywordRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkCreateKeywordResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkCreateNegativeKeywordRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkCreateNegativeKeywordResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkDeleteAdRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkDeleteAdResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkDeleteAdsByInventoryReferenceRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkDeleteAdsByInventoryReferenceResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkUpdateAdStatusByListingIdRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkUpdateAdStatusRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkUpdateAdsByInventoryReferenceResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkUpdateKeywordRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkUpdateKeywordResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkUpdateNegativeKeywordRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkUpdateNegativeKeywordResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkUpsertVideoAdsPreferencesRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkUpsertVideoAdsPreferencesResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\Campaign;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\CampaignPagedCollectionResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\Campaigns;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\CloneCampaignRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\CreateAdGroupRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\CreateAdRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\CreateAdsByInventoryReferenceRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\CreateCampaignRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\CreateEmailCampaignRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\CreateEmailCampaignResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\CreateKeywordRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\CreateNegativeKeywordRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\CreateReportTask;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\DeleteAdsByInventoryReferenceRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\DeleteEmailCampaignResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\Error;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\GetEmailCampaignAudiencesResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\GetEmailCampaignResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\GetEmailCampaignsResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\GetEmailPreviewResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\GetEmailReportResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\ItemPriceMarkdown;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\ItemPromotion;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\ItemPromotionResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\ItemsPagedCollection;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\Keyword;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\KeywordPagedCollectionResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\NegativeKeyword;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\NegativeKeywordPagedCollectionResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\PromotionsPagedCollection;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\PromotionsReportPagedCollection;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\ReportMetadata;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\ReportMetadatas;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\ReportTask;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\ReportTaskPagedCollection;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\SuggestBudgetResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\SuggestMaxCpcRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\SuggestMaxCpcResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\SummaryReportResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\TargetedAdsPagedCollection;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\TargetedBidRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\TargetedBidsPagedCollection;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\TargetedKeywordRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\TargetedKeywordsPagedCollection;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\UpdateAdGroupRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\UpdateAdrateStrategyRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\UpdateBidPercentageRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\UpdateBiddingStrategyRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\UpdateCampaignBudgetRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\UpdateCampaignIdentificationRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\UpdateCampaignRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\UpdateEmailCampaignResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\UpdateKeywordRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\UpdateKeywordResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\UpdateNegativeKeywordRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\UpsertVideoAdsPreferencesRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\UpsertVideoAdsPreferencesResponse;
use GuzzleHttp\Client as GuzzleClient;
use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;

final class MarketingClient
{
    public function __construct(
        private readonly GuzzleClient $guzzle,
        private readonly MarketingAndPromotionsConfiguration $config,
    ) {}

    /** @return array<string, string> */
    private function mergedHeaders(?RequestOptions $requestOptions): array
    {
        return array_merge(
            $this->config->defaultRequestOptions->headers,
            $requestOptions !== null ? $requestOptions->headers : []
        );
    }

    public function bulkCreateAdsByInventoryReference(
        string $campaignId,
        BulkCreateAdsByInventoryReferenceRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?BulkCreateAdsByInventoryReferenceResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->byCampaign_id($campaignId)->bulk_create_ads_by_inventory_reference()->post(
                $body,
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Bulk_create_ads_by_inventory_reference\Bulk_create_ads_by_inventory_referenceRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function bulkCreateAdsByListingId(
        string $campaignId,
        BulkCreateAdRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?BulkAdResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->byCampaign_id($campaignId)->bulk_create_ads_by_listing_id()->post(
                $body,
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Bulk_create_ads_by_listing_id\Bulk_create_ads_by_listing_idRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function bulkDeleteAdsByInventoryReference(
        string $campaignId,
        BulkDeleteAdsByInventoryReferenceRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?BulkDeleteAdsByInventoryReferenceResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->byCampaign_id($campaignId)->bulk_delete_ads_by_inventory_reference()->post(
                $body,
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Bulk_delete_ads_by_inventory_reference\Bulk_delete_ads_by_inventory_referenceRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function bulkDeleteAdsByListingId(
        string $campaignId,
        BulkDeleteAdRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?BulkDeleteAdResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->byCampaign_id($campaignId)->bulk_delete_ads_by_listing_id()->post(
                $body,
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Bulk_delete_ads_by_listing_id\Bulk_delete_ads_by_listing_idRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function bulkUpdateAdsBidByInventoryReference(
        string $campaignId,
        BulkCreateAdsByInventoryReferenceRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?BulkUpdateAdsByInventoryReferenceResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->byCampaign_id($campaignId)->bulk_update_ads_bid_by_inventory_reference()->post(
                $body,
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Bulk_update_ads_bid_by_inventory_reference\Bulk_update_ads_bid_by_inventory_referenceRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function bulkUpdateAdsBidByListingId(
        string $campaignId,
        BulkCreateAdRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?BulkAdUpdateResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->byCampaign_id($campaignId)->bulk_update_ads_bid_by_listing_id()->post(
                $body,
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Bulk_update_ads_bid_by_listing_id\Bulk_update_ads_bid_by_listing_idRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function bulkUpdateAdsStatus(
        string $campaignId,
        BulkUpdateAdStatusRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?BulkAdUpdateStatusResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->byCampaign_id($campaignId)->bulk_update_ads_status()->post(
                $body,
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Bulk_update_ads_status\Bulk_update_ads_statusRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function bulkUpdateAdsStatusByListingId(
        string $campaignId,
        BulkUpdateAdStatusByListingIdRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?BulkAdUpdateStatusByListingIdResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->byCampaign_id($campaignId)->bulk_update_ads_status_by_listing_id()->post(
                $body,
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Bulk_update_ads_status_by_listing_id\Bulk_update_ads_status_by_listing_idRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getAds(
        string $campaignId,
        ?string $adGroupIds = null,
        ?\EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad\GetAd_statusQueryParameterType $adStatus = null,
        ?string $limit = null,
        ?string $listingIds = null,
        ?string $offset = null,
        ?\EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad\GetFieldgroupsQueryParameterType $fieldgroups = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?AdPagedCollectionResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->byCampaign_id($campaignId)->ad()->get(
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad\AdRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad\AdRequestBuilderGetRequestConfiguration::createQueryParameters(
                        ad_group_ids: $adGroupIds,
                        ad_status: $adStatus,
                        limit: $limit,
                        listing_ids: $listingIds,
                        offset: $offset,
                        fieldgroups: $fieldgroups,
                    ),
                )
            )->wait()
        );
    }

    public function createAdByListingId(
        string $campaignId,
        CreateAdRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->byCampaign_id($campaignId)->ad()->post(
                $body,
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad\AdRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function createAdsByInventoryReference(
        string $campaignId,
        CreateAdsByInventoryReferenceRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?AdReferences
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->byCampaign_id($campaignId)->create_ads_by_inventory_reference()->post(
                $body,
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Create_ads_by_inventory_reference\Create_ads_by_inventory_referenceRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getAd(
        string $adId,
        string $campaignId,
        ?\EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad\Item\GetFieldgroupsQueryParameterType $fieldgroups = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?Ad
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->byCampaign_id($campaignId)->ad()->byAd_id($adId)->get(
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad\Item\WithAd_ItemRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad\Item\WithAd_ItemRequestBuilderGetRequestConfiguration::createQueryParameters(
                        fieldgroups: $fieldgroups,
                    ),
                )
            )->wait()
        );
    }

    public function deleteAd(
        string $adId,
        string $campaignId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->byCampaign_id($campaignId)->ad()->byAd_id($adId)->delete(
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad\Item\WithAd_ItemRequestBuilderDeleteRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function deleteAdsByInventoryReference(
        string $campaignId,
        DeleteAdsByInventoryReferenceRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?AdIds
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->byCampaign_id($campaignId)->delete_ads_by_inventory_reference()->post(
                $body,
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Delete_ads_by_inventory_reference\Delete_ads_by_inventory_referenceRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getAdsByInventoryReference(
        string $campaignId,
        ?string $inventoryReferenceId = null,
        ?\EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Get_ads_by_inventory_reference\GetInventory_reference_typeQueryParameterType $inventoryReferenceType = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?Ads
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->byCampaign_id($campaignId)->get_ads_by_inventory_reference()->get(
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Get_ads_by_inventory_reference\Get_ads_by_inventory_referenceRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Get_ads_by_inventory_reference\Get_ads_by_inventory_referenceRequestBuilderGetRequestConfiguration::createQueryParameters(
                        inventory_reference_id: $inventoryReferenceId,
                        inventory_reference_type: $inventoryReferenceType,
                    ),
                )
            )->wait()
        );
    }

    public function updateBid(
        string $adId,
        string $campaignId,
        UpdateBidPercentageRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->byCampaign_id($campaignId)->ad()->byAd_id($adId)->update_bid()->post(
                $body,
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad\Item\Update_bid\Update_bidRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getAdGroups(
        string $campaignId,
        ?\EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad_group\GetAd_group_statusQueryParameterType $adGroupStatus = null,
        ?string $limit = null,
        ?string $offset = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?AdGroupPagedCollectionResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->byCampaign_id($campaignId)->ad_group()->get(
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad_group\Ad_groupRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad_group\Ad_groupRequestBuilderGetRequestConfiguration::createQueryParameters(
                        ad_group_status: $adGroupStatus,
                        limit: $limit,
                        offset: $offset,
                    ),
                )
            )->wait()
        );
    }

    public function createAdGroup(
        string $campaignId,
        CreateAdGroupRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->byCampaign_id($campaignId)->ad_group()->post(
                $body,
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad_group\Ad_groupRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getAdGroup(
        string $adGroupId,
        string $campaignId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?AdGroup
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->byCampaign_id($campaignId)->ad_group()->byAd_group_id($adGroupId)->get(
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad_group\Item\WithAd_group_ItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function updateAdGroup(
        string $adGroupId,
        string $campaignId,
        UpdateAdGroupRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->byCampaign_id($campaignId)->ad_group()->byAd_group_id($adGroupId)->put(
                $body,
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad_group\Item\WithAd_group_ItemRequestBuilderPutRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function suggestBids(
        string $adGroupId,
        string $campaignId,
        TargetedBidRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?TargetedBidsPagedCollection
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->byCampaign_id($campaignId)->ad_group()->byAd_group_id($adGroupId)->suggest_bids()->post(
                $body,
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad_group\Item\Suggest_bids\Suggest_bidsRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function suggestKeywords(
        string $adGroupId,
        string $campaignId,
        TargetedKeywordRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?TargetedKeywordsPagedCollection
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->byCampaign_id($campaignId)->ad_group()->byAd_group_id($adGroupId)->suggest_keywords()->post(
                $body,
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad_group\Item\Suggest_keywords\Suggest_keywordsRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function cloneCampaign(
        string $campaignId,
        CloneCampaignRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->byCampaign_id($campaignId)->escapedClone()->post(
                $body,
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\EscapedClone\CloneRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getCampaigns(
        ?string $campaignName = null,
        ?\EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\GetCampaign_statusQueryParameterType $campaignStatus = null,
        ?\EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\GetCampaign_targeting_typesQueryParameterType $campaignTargetingTypes = null,
        ?\EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\GetChannelsQueryParameterType $channels = null,
        ?string $endDateRange = null,
        ?\EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\GetFunding_strategyQueryParameterType $fundingStrategy = null,
        ?string $limit = null,
        ?string $offset = null,
        ?string $startDateRange = null,
        ?string $marketplaceId = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?CampaignPagedCollectionResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->get(
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Ad_campaignRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Ad_campaignRequestBuilderGetRequestConfiguration::createQueryParameters(
                        campaign_name: $campaignName,
                        campaign_status: $campaignStatus,
                        campaign_targeting_types: $campaignTargetingTypes,
                        channels: $channels,
                        end_date_range: $endDateRange,
                        funding_strategy: $fundingStrategy,
                        limit: $limit,
                        offset: $offset,
                        start_date_range: $startDateRange,
                        marketplace_id: $marketplaceId,
                    ),
                )
            )->wait()
        );
    }

    public function createCampaign(CreateCampaignRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->post(
                $body,
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Ad_campaignRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getCampaign(string $campaignId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?Campaign
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->byCampaign_id($campaignId)->get(
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\WithCampaign_ItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function deleteCampaign(string $campaignId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->byCampaign_id($campaignId)->delete(
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\WithCampaign_ItemRequestBuilderDeleteRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function endCampaign(string $campaignId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->byCampaign_id($campaignId)->end()->post(
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\End\EndRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function findCampaignByAdReference(
        ?string $inventoryReferenceId = null,
        ?\EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Find_campaign_by_ad_reference\GetInventory_reference_typeQueryParameterType $inventoryReferenceType = null,
        ?string $listingId = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?Campaigns
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->find_campaign_by_ad_reference()->get(
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Find_campaign_by_ad_reference\Find_campaign_by_ad_referenceRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Find_campaign_by_ad_reference\Find_campaign_by_ad_referenceRequestBuilderGetRequestConfiguration::createQueryParameters(
                        inventory_reference_id: $inventoryReferenceId,
                        inventory_reference_type: $inventoryReferenceType,
                        listing_id: $listingId,
                    ),
                )
            )->wait()
        );
    }

    public function getCampaignByName(?string $campaignName = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?Campaign
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->get_campaign_by_name()->get(
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Get_campaign_by_name\Get_campaign_by_nameRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Get_campaign_by_name\Get_campaign_by_nameRequestBuilderGetRequestConfiguration::createQueryParameters(
                        campaign_name: $campaignName,
                    ),
                )
            )->wait()
        );
    }

    public function pauseCampaign(string $campaignId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->byCampaign_id($campaignId)->pause()->post(
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Pause\PauseRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function resumeCampaign(string $campaignId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->byCampaign_id($campaignId)->resume()->post(
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Resume\ResumeRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function suggestBudget(?string $xEBAYCMARKETPLACEID = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?SuggestBudgetResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($xEBAYCMARKETPLACEID !== null) {
            $headers["X-EBAY-C-MARKETPLACE-ID"] = $xEBAYCMARKETPLACEID;
        }
        return $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->suggest_budget()->get(
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Suggest_budget\Suggest_budgetRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function suggestItems(
        string $campaignId,
        ?string $categoryIds = null,
        ?string $limit = null,
        ?string $offset = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?TargetedAdsPagedCollection
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->byCampaign_id($campaignId)->suggest_items()->get(
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Suggest_items\Suggest_itemsRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Suggest_items\Suggest_itemsRequestBuilderGetRequestConfiguration::createQueryParameters(
                        category_ids: $categoryIds,
                        limit: $limit,
                        offset: $offset,
                    ),
                )
            )->wait()
        );
    }

    public function suggestMaxCpc(SuggestMaxCpcRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?SuggestMaxCpcResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->suggest_max_cpc()->post(
                $body,
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Suggest_max_cpc\Suggest_max_cpcRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function updateAdRateStrategy(
        string $campaignId,
        UpdateAdrateStrategyRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->byCampaign_id($campaignId)->update_ad_rate_strategy()->post(
                $body,
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Update_ad_rate_strategy\Update_ad_rate_strategyRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function updateBiddingStrategy(
        string $campaignId,
        UpdateBiddingStrategyRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->byCampaign_id($campaignId)->update_bidding_strategy()->post(
                $body,
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Update_bidding_strategy\Update_bidding_strategyRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function updateCampaignBudget(
        string $campaignId,
        UpdateCampaignBudgetRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->byCampaign_id($campaignId)->update_campaign_budget()->post(
                $body,
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Update_campaign_budget\Update_campaign_budgetRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function updateCampaignIdentification(
        string $campaignId,
        UpdateCampaignIdentificationRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->byCampaign_id($campaignId)->update_campaign_identification()->post(
                $body,
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Update_campaign_identification\Update_campaign_identificationRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function bulkCreateKeyword(
        string $campaignId,
        BulkCreateKeywordRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?BulkCreateKeywordResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->byCampaign_id($campaignId)->bulk_create_keyword()->post(
                $body,
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Bulk_create_keyword\Bulk_create_keywordRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function bulkUpdateKeyword(
        string $campaignId,
        BulkUpdateKeywordRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?BulkUpdateKeywordResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->byCampaign_id($campaignId)->bulk_update_keyword()->post(
                $body,
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Bulk_update_keyword\Bulk_update_keywordRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getKeywords(
        string $campaignId,
        ?string $adGroupIds = null,
        ?\EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Keyword\GetKeyword_statusQueryParameterType $keywordStatus = null,
        ?string $limit = null,
        ?string $offset = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?KeywordPagedCollectionResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->byCampaign_id($campaignId)->keyword()->get(
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Keyword\KeywordRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Keyword\KeywordRequestBuilderGetRequestConfiguration::createQueryParameters(
                        ad_group_ids: $adGroupIds,
                        keyword_status: $keywordStatus,
                        limit: $limit,
                        offset: $offset,
                    ),
                )
            )->wait()
        );
    }

    public function createKeyword(
        string $campaignId,
        CreateKeywordRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->byCampaign_id($campaignId)->keyword()->post(
                $body,
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Keyword\KeywordRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getKeyword(
        string $campaignId,
        string $keywordId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?Keyword
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->byCampaign_id($campaignId)->keyword()->byKeyword_id($keywordId)->get(
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Keyword\Item\WithKeyword_ItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function updateKeyword(
        string $campaignId,
        string $keywordId,
        UpdateKeywordRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?UpdateKeywordResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->byCampaign_id($campaignId)->keyword()->byKeyword_id($keywordId)->put(
                $body,
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Keyword\Item\WithKeyword_ItemRequestBuilderPutRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function bulkCreateNegativeKeyword(BulkCreateNegativeKeywordRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?BulkCreateNegativeKeywordResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->bulk_create_negative_keyword()->post(
                $body,
                new \EBay\MarketingAndPromotions\Generated\Marketing\Bulk_create_negative_keyword\Bulk_create_negative_keywordRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function bulkUpdateNegativeKeyword(BulkUpdateNegativeKeywordRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?BulkUpdateNegativeKeywordResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->bulk_update_negative_keyword()->post(
                $body,
                new \EBay\MarketingAndPromotions\Generated\Marketing\Bulk_update_negative_keyword\Bulk_update_negative_keywordRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getNegativeKeywords(
        ?string $adGroupIds = null,
        ?string $campaignIds = null,
        ?string $limit = null,
        ?\EBay\MarketingAndPromotions\Generated\Marketing\Negative_keyword\GetNegative_keyword_statusQueryParameterType $negativeKeywordStatus = null,
        ?string $offset = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?NegativeKeywordPagedCollectionResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->negative_keyword()->get(
                new \EBay\MarketingAndPromotions\Generated\Marketing\Negative_keyword\Negative_keywordRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\MarketingAndPromotions\Generated\Marketing\Negative_keyword\Negative_keywordRequestBuilderGetRequestConfiguration::createQueryParameters(
                        ad_group_ids: $adGroupIds,
                        campaign_ids: $campaignIds,
                        limit: $limit,
                        negative_keyword_status: $negativeKeywordStatus,
                        offset: $offset,
                    ),
                )
            )->wait()
        );
    }

    public function createNegativeKeyword(CreateNegativeKeywordRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->negative_keyword()->post(
                $body,
                new \EBay\MarketingAndPromotions\Generated\Marketing\Negative_keyword\Negative_keywordRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getNegativeKeyword(string $negativeKeywordId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?NegativeKeyword
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->negative_keyword()->byNegative_keyword_id($negativeKeywordId)->get(
                new \EBay\MarketingAndPromotions\Generated\Marketing\Negative_keyword\Item\WithNegative_keyword_ItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function updateNegativeKeyword(
        string $negativeKeywordId,
        UpdateNegativeKeywordRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->negative_keyword()->byNegative_keyword_id($negativeKeywordId)->put(
                $body,
                new \EBay\MarketingAndPromotions\Generated\Marketing\Negative_keyword\Item\WithNegative_keyword_ItemRequestBuilderPutRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getReport(string $reportId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->ad_report()->byReport_id($reportId)->get(
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_report\Item\WithReport_ItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getReportMetadata(
        ?string $fundingModel = null,
        ?string $channel = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?ReportMetadatas
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->ad_report_metadata()->get(
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_report_metadata\Ad_report_metadataRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\MarketingAndPromotions\Generated\Marketing\Ad_report_metadata\Ad_report_metadataRequestBuilderGetRequestConfiguration::createQueryParameters(
                        funding_model: $fundingModel,
                        channel: $channel,
                    ),
                )
            )->wait()
        );
    }

    public function getReportMetadataForReportType(
        string $reportType,
        ?string $fundingModel = null,
        ?string $channel = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?ReportMetadata
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->ad_report_metadata()->byReport_type($reportType)->get(
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_report_metadata\Item\WithReport_typeItemRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\MarketingAndPromotions\Generated\Marketing\Ad_report_metadata\Item\WithReport_typeItemRequestBuilderGetRequestConfiguration::createQueryParameters(
                        funding_model: $fundingModel,
                        channel: $channel,
                    ),
                )
            )->wait()
        );
    }

    public function getReportTasks(
        ?string $limit = null,
        ?string $offset = null,
        ?string $reportTaskStatuses = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?ReportTaskPagedCollection
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->ad_report_task()->get(
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_report_task\Ad_report_taskRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\MarketingAndPromotions\Generated\Marketing\Ad_report_task\Ad_report_taskRequestBuilderGetRequestConfiguration::createQueryParameters(
                        limit: $limit,
                        offset: $offset,
                        report_task_statuses: $reportTaskStatuses,
                    ),
                )
            )->wait()
        );
    }

    public function createReportTask(CreateReportTask $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?Error
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->ad_report_task()->post(
                $body,
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_report_task\Ad_report_taskRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getReportTask(string $reportTaskId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?ReportTask
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->ad_report_task()->byReport_task_id($reportTaskId)->get(
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_report_task\Item\WithReport_task_ItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function deleteReportTask(string $reportTaskId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->ad_report_task()->byReport_task_id($reportTaskId)->delete(
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_report_task\Item\WithReport_task_ItemRequestBuilderDeleteRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function createItemPriceMarkdownPromotion(ItemPriceMarkdown $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->item_price_markdown()->post(
                $body,
                new \EBay\MarketingAndPromotions\Generated\Marketing\Item_price_markdown\Item_price_markdownRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getItemPriceMarkdownPromotion(string $promotionId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?ItemPriceMarkdown
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->item_price_markdown()->byPromotion_id($promotionId)->get(
                new \EBay\MarketingAndPromotions\Generated\Marketing\Item_price_markdown\Item\WithPromotion_ItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function updateItemPriceMarkdownPromotion(
        string $promotionId,
        ItemPriceMarkdown $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?BaseResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->item_price_markdown()->byPromotion_id($promotionId)->put(
                $body,
                new \EBay\MarketingAndPromotions\Generated\Marketing\Item_price_markdown\Item\WithPromotion_ItemRequestBuilderPutRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function deleteItemPriceMarkdownPromotion(string $promotionId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->item_price_markdown()->byPromotion_id($promotionId)->delete(
                new \EBay\MarketingAndPromotions\Generated\Marketing\Item_price_markdown\Item\WithPromotion_ItemRequestBuilderDeleteRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function createItemPromotion(ItemPromotion $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?BaseResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->item_promotion()->post(
                $body,
                new \EBay\MarketingAndPromotions\Generated\Marketing\Item_promotion\Item_promotionRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getItemPromotion(string $promotionId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?ItemPromotionResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->item_promotion()->byPromotion_id($promotionId)->get(
                new \EBay\MarketingAndPromotions\Generated\Marketing\Item_promotion\Item\WithPromotion_ItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function updateItemPromotion(
        string $promotionId,
        ItemPromotion $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?BaseResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->item_promotion()->byPromotion_id($promotionId)->put(
                $body,
                new \EBay\MarketingAndPromotions\Generated\Marketing\Item_promotion\Item\WithPromotion_ItemRequestBuilderPutRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function deleteItemPromotion(string $promotionId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->item_promotion()->byPromotion_id($promotionId)->delete(
                new \EBay\MarketingAndPromotions\Generated\Marketing\Item_promotion\Item\WithPromotion_ItemRequestBuilderDeleteRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getListingSet(
        string $promotionId,
        ?string $limit = null,
        ?string $offset = null,
        ?string $q = null,
        ?string $sort = null,
        ?\EBay\MarketingAndPromotions\Generated\Marketing\Models\ItemMarkdownStatusEnum $status = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?ItemsPagedCollection
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->promotion()->byPromotion_id($promotionId)->get_listing_set()->get(
                new \EBay\MarketingAndPromotions\Generated\Marketing\Promotion\Item\Get_listing_set\Get_listing_setRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\MarketingAndPromotions\Generated\Marketing\Promotion\Item\Get_listing_set\Get_listing_setRequestBuilderGetRequestConfiguration::createQueryParameters(
                        limit: $limit,
                        offset: $offset,
                        q: $q,
                        sort: $sort,
                        status: $status,
                    ),
                )
            )->wait()
        );
    }

    public function getPromotions(
        ?string $limit = null,
        ?string $marketplaceId = null,
        ?string $offset = null,
        ?string $promotionStatus = null,
        ?string $promotionType = null,
        ?string $q = null,
        ?string $sort = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?PromotionsPagedCollection
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->promotion()->get(
                new \EBay\MarketingAndPromotions\Generated\Marketing\Promotion\PromotionRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\MarketingAndPromotions\Generated\Marketing\Promotion\PromotionRequestBuilderGetRequestConfiguration::createQueryParameters(
                        limit: $limit,
                        marketplace_id: $marketplaceId,
                        offset: $offset,
                        promotion_status: $promotionStatus,
                        promotion_type: $promotionType,
                        q: $q,
                        sort: $sort,
                    ),
                )
            )->wait()
        );
    }

    public function pausePromotion(string $promotionId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->promotion()->byPromotion_id($promotionId)->pause()->post(
                new \EBay\MarketingAndPromotions\Generated\Marketing\Promotion\Item\Pause\PauseRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function resumePromotion(string $promotionId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->promotion()->byPromotion_id($promotionId)->resume()->post(
                new \EBay\MarketingAndPromotions\Generated\Marketing\Promotion\Item\Resume\ResumeRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getPromotionReports(
        ?string $limit = null,
        ?string $marketplaceId = null,
        ?string $offset = null,
        ?string $promotionStatus = null,
        ?string $promotionType = null,
        ?string $q = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?PromotionsReportPagedCollection
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->promotion_report()->get(
                new \EBay\MarketingAndPromotions\Generated\Marketing\Promotion_report\Promotion_reportRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\MarketingAndPromotions\Generated\Marketing\Promotion_report\Promotion_reportRequestBuilderGetRequestConfiguration::createQueryParameters(
                        limit: $limit,
                        marketplace_id: $marketplaceId,
                        offset: $offset,
                        promotion_status: $promotionStatus,
                        promotion_type: $promotionType,
                        q: $q,
                    ),
                )
            )->wait()
        );
    }

    public function getPromotionSummaryReport(?string $marketplaceId = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?SummaryReportResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->promotion_summary_report()->get(
                new \EBay\MarketingAndPromotions\Generated\Marketing\Promotion_summary_report\Promotion_summary_reportRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\MarketingAndPromotions\Generated\Marketing\Promotion_summary_report\Promotion_summary_reportRequestBuilderGetRequestConfiguration::createQueryParameters(
                        marketplace_id: $marketplaceId,
                    ),
                )
            )->wait()
        );
    }

    public function getEmailCampaigns(
        ?string $limit = null,
        ?string $offset = null,
        ?string $q = null,
        ?string $sort = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?GetEmailCampaignsResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->email_campaign()->get(
                new \EBay\MarketingAndPromotions\Generated\Marketing\Email_campaign\Email_campaignRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\MarketingAndPromotions\Generated\Marketing\Email_campaign\Email_campaignRequestBuilderGetRequestConfiguration::createQueryParameters(
                        limit: $limit,
                        offset: $offset,
                        q: $q,
                        sort: $sort,
                    ),
                )
            )->wait()
        );
    }

    public function createEmailCampaign(
        CreateEmailCampaignRequest $body,
        ?string $xEBAYCMARKETPLACEID = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?CreateEmailCampaignResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($xEBAYCMARKETPLACEID !== null) {
            $headers["X-EBAY-C-MARKETPLACE-ID"] = $xEBAYCMARKETPLACEID;
        }
        return $this->call($accessToken, fn($api) =>
            $api->email_campaign()->post(
                $body,
                new \EBay\MarketingAndPromotions\Generated\Marketing\Email_campaign\Email_campaignRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getEmailCampaign(string $emailCampaignId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?GetEmailCampaignResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->email_campaign()->byEmail_campaign_id($emailCampaignId)->get(
                new \EBay\MarketingAndPromotions\Generated\Marketing\Email_campaign\Item\WithEmail_campaign_ItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function updateEmailCampaign(
        string $emailCampaignId,
        UpdateCampaignRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?UpdateEmailCampaignResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->email_campaign()->byEmail_campaign_id($emailCampaignId)->put(
                $body,
                new \EBay\MarketingAndPromotions\Generated\Marketing\Email_campaign\Item\WithEmail_campaign_ItemRequestBuilderPutRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function deleteEmailCampaign(string $emailCampaignId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?DeleteEmailCampaignResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->email_campaign()->byEmail_campaign_id($emailCampaignId)->delete(
                new \EBay\MarketingAndPromotions\Generated\Marketing\Email_campaign\Item\WithEmail_campaign_ItemRequestBuilderDeleteRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getAudiences(
        ?string $emailCampaignType = null,
        ?string $limit = null,
        ?string $offset = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?GetEmailCampaignAudiencesResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->email_campaign()->audience()->get(
                new \EBay\MarketingAndPromotions\Generated\Marketing\Email_campaign\Audience\AudienceRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\MarketingAndPromotions\Generated\Marketing\Email_campaign\Audience\AudienceRequestBuilderGetRequestConfiguration::createQueryParameters(
                        emailCampaignType: $emailCampaignType,
                        limit: $limit,
                        offset: $offset,
                    ),
                )
            )->wait()
        );
    }

    public function getEmailPreview(string $emailCampaignId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?GetEmailPreviewResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->email_campaign()->byEmail_campaign_id($emailCampaignId)->email_preview()->get(
                new \EBay\MarketingAndPromotions\Generated\Marketing\Email_campaign\Item\Email_preview\Email_previewRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getEmailReport(
        ?string $endDate = null,
        ?string $startDate = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?GetEmailReportResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->email_campaign()->report()->get(
                new \EBay\MarketingAndPromotions\Generated\Marketing\Email_campaign\Report\ReportRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\MarketingAndPromotions\Generated\Marketing\Email_campaign\Report\ReportRequestBuilderGetRequestConfiguration::createQueryParameters(
                        endDate: $endDate,
                        startDate: $startDate,
                    ),
                )
            )->wait()
        );
    }

    public function upsertVideoAdsPreferences(
        string $campaignId,
        UpsertVideoAdsPreferencesRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?UpsertVideoAdsPreferencesResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->byCampaign_id($campaignId)->upsert_video_ads_preferences()->put(
                $body,
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Upsert_video_ads_preferences\Upsert_video_ads_preferencesRequestBuilderPutRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function bulkUpsertVideoAdsPreferences(
        string $campaignId,
        BulkUpsertVideoAdsPreferencesRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?BulkUpsertVideoAdsPreferencesResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->ad_campaign()->byCampaign_id($campaignId)->bulk_upsert_video_ads_preferences()->put(
                $body,
                new \EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Bulk_upsert_video_ads_preferences\Bulk_upsert_video_ads_preferencesRequestBuilderPutRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    private function call(?string $accessToken, callable $op): mixed
    {
        $token = ($accessToken ?? $this->config->accessToken)
            ?: throw new \RuntimeException('No access token. Pass $accessToken per-call or set MarketingAndPromotionsConfiguration::$accessToken.');
        return $op($this->buildApiClient($token));
    }

    private function buildApiClient(string $token): MarketingApiClient
    {
        $auth = new BaseBearerTokenAuthenticationProvider(
            new KiotaAuthProvider($token, $this->config->getAllowedHosts())
        );
        $adapter = new GuzzleRequestAdapter($auth, guzzleClient: $this->guzzle);
        $adapter->setBaseUrl($this->config->marketingBaseUrl);
        return new MarketingApiClient($adapter);
    }
}
