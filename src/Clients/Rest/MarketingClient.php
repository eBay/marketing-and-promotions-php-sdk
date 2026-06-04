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

namespace EBay\MarketingAndPromotions\Clients\Rest;

use EBay\MarketingAndPromotions\Configuration\MarketingAndPromotionsConfiguration;
use EBay\MarketingAndPromotions\Configuration\RequestOptions;
use EBay\MarketingAndPromotions\Configuration\TokenContext;
use EBay\MarketingAndPromotions\Generated\Marketing\MarketingApiClient;

// Request configurations for query parameters
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Ad_campaignRequestBuilderGetRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Ad_campaignRequestBuilderPostRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Find_campaign_by_ad_reference\Find_campaign_by_ad_referenceRequestBuilderGetRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Get_campaign_by_name\Get_campaign_by_nameRequestBuilderGetRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad\AdRequestBuilderGetRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad\AdRequestBuilderPostRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad\Item\WithAd_ItemRequestBuilderDeleteRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad\Item\WithAd_ItemRequestBuilderGetRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad\Item\Update_bid\Update_bidRequestBuilderPostRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad_group\Ad_groupRequestBuilderGetRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad_group\Ad_groupRequestBuilderPostRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad_group\Item\WithAd_group_ItemRequestBuilderGetRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad_group\Item\WithAd_group_ItemRequestBuilderPutRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad_group\Item\Suggest_bids\Suggest_bidsRequestBuilderPostRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad_group\Item\Suggest_keywords\Suggest_keywordsRequestBuilderPostRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Bulk_create_ads_by_inventory_reference\Bulk_create_ads_by_inventory_referenceRequestBuilderPostRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Bulk_create_ads_by_listing_id\Bulk_create_ads_by_listing_idRequestBuilderPostRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Bulk_create_keyword\Bulk_create_keywordRequestBuilderPostRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Bulk_delete_ads_by_inventory_reference\Bulk_delete_ads_by_inventory_referenceRequestBuilderPostRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Bulk_delete_ads_by_listing_id\Bulk_delete_ads_by_listing_idRequestBuilderPostRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Bulk_update_ads_bid_by_inventory_reference\Bulk_update_ads_bid_by_inventory_referenceRequestBuilderPostRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Bulk_update_ads_bid_by_listing_id\Bulk_update_ads_bid_by_listing_idRequestBuilderPostRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Bulk_update_ads_status\Bulk_update_ads_statusRequestBuilderPostRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Bulk_update_ads_status_by_listing_id\Bulk_update_ads_status_by_listing_idRequestBuilderPostRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Bulk_update_keyword\Bulk_update_keywordRequestBuilderPostRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Create_ads_by_inventory_reference\Create_ads_by_inventory_referenceRequestBuilderPostRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Delete_ads_by_inventory_reference\Delete_ads_by_inventory_referenceRequestBuilderPostRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\End\EndRequestBuilderPostRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\EscapedClone\CloneRequestBuilderPostRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Get_ads_by_inventory_reference\Get_ads_by_inventory_referenceRequestBuilderGetRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Keyword\KeywordRequestBuilderGetRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Keyword\KeywordRequestBuilderPostRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Keyword\Item\WithKeyword_ItemRequestBuilderGetRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Keyword\Item\WithKeyword_ItemRequestBuilderPutRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Pause\PauseRequestBuilderPostRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Resume\ResumeRequestBuilderPostRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Suggest_items\Suggest_itemsRequestBuilderGetRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Update_ad_rate_strategy\Update_ad_rate_strategyRequestBuilderPostRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Update_bidding_strategy\Update_bidding_strategyRequestBuilderPostRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Update_campaign_budget\Update_campaign_budgetRequestBuilderPostRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Update_campaign_identification\Update_campaign_identificationRequestBuilderPostRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\WithCampaign_ItemRequestBuilderDeleteRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\WithCampaign_ItemRequestBuilderGetRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Suggest_budget\Suggest_budgetRequestBuilderGetRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Suggest_max_cpc\Suggest_max_cpcRequestBuilderPostRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Negative_keyword\Negative_keywordRequestBuilderGetRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Negative_keyword\Negative_keywordRequestBuilderPostRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Negative_keyword\Item\WithNegative_keyword_ItemRequestBuilderGetRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Negative_keyword\Item\WithNegative_keyword_ItemRequestBuilderPutRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Bulk_create_negative_keyword\Bulk_create_negative_keywordRequestBuilderPostRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Bulk_update_negative_keyword\Bulk_update_negative_keywordRequestBuilderPostRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Email_campaign\Email_campaignRequestBuilderGetRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Email_campaign\Email_campaignRequestBuilderPostRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Email_campaign\Report\ReportRequestBuilderGetRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Email_campaign\Audience\AudienceRequestBuilderGetRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Email_campaign\Item\WithEmail_campaign_ItemRequestBuilderDeleteRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Email_campaign\Item\WithEmail_campaign_ItemRequestBuilderGetRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Email_campaign\Item\WithEmail_campaign_ItemRequestBuilderPutRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Email_campaign\Item\Email_preview\Email_previewRequestBuilderGetRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Promotion\PromotionRequestBuilderGetRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Promotion\Item\Get_listing_set\Get_listing_setRequestBuilderGetRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Promotion\Item\Pause\PauseRequestBuilderPostRequestConfiguration as PromotionPauseRequestBuilderPostRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Promotion\Item\Resume\ResumeRequestBuilderPostRequestConfiguration as PromotionResumeRequestBuilderPostRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Promotion_report\Promotion_reportRequestBuilderGetRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Promotion_summary_report\Promotion_summary_reportRequestBuilderGetRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Item_price_markdown\Item_price_markdownRequestBuilderPostRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Item_price_markdown\Item\WithPromotion_ItemRequestBuilderDeleteRequestConfiguration as ItemPriceMarkdownWithPromotion_ItemRequestBuilderDeleteRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Item_price_markdown\Item\WithPromotion_ItemRequestBuilderGetRequestConfiguration as ItemPriceMarkdownWithPromotion_ItemRequestBuilderGetRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Item_price_markdown\Item\WithPromotion_ItemRequestBuilderPutRequestConfiguration as ItemPriceMarkdownWithPromotion_ItemRequestBuilderPutRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Item_promotion\Item_promotionRequestBuilderPostRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Item_promotion\Item\WithPromotion_ItemRequestBuilderDeleteRequestConfiguration as ItemPromotionWithPromotion_ItemRequestBuilderDeleteRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Item_promotion\Item\WithPromotion_ItemRequestBuilderGetRequestConfiguration as ItemPromotionWithPromotion_ItemRequestBuilderGetRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Item_promotion\Item\WithPromotion_ItemRequestBuilderPutRequestConfiguration as ItemPromotionWithPromotion_ItemRequestBuilderPutRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_report_metadata\Ad_report_metadataRequestBuilderGetRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_report_metadata\Item\WithReport_typeItemRequestBuilderGetRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_report_task\Ad_report_taskRequestBuilderGetRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_report_task\Ad_report_taskRequestBuilderPostRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_report_task\Item\WithReport_task_ItemRequestBuilderDeleteRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_report_task\Item\WithReport_task_ItemRequestBuilderGetRequestConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_report\Item\WithReport_ItemRequestBuilderGetRequestConfiguration;

// Models — bulk operations
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkCreateAdsByInventoryReferenceRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkCreateAdsByInventoryReferenceResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkCreateAdRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkAdResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkCreateKeywordRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkCreateKeywordResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkCreateNegativeKeywordRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkCreateNegativeKeywordResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkDeleteAdsByInventoryReferenceRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkDeleteAdsByInventoryReferenceResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkDeleteAdRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkDeleteAdResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkUpdateAdsByInventoryReferenceResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkAdUpdateResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkAdUpdateStatusResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkUpdateAdStatusRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkAdUpdateStatusByListingIdResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkUpdateAdStatusByListingIdRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkUpdateKeywordRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkUpdateKeywordResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkUpdateNegativeKeywordRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkUpdateNegativeKeywordResponse;

// Models — campaigns
use EBay\MarketingAndPromotions\Generated\Marketing\Models\Campaign;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\Campaigns;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\CampaignPagedCollectionResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\CloneCampaignRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\CreateCampaignRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\UpdateCampaignBudgetRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\UpdateCampaignIdentificationRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\UpdateAdrateStrategyRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\UpdateBiddingStrategyRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\SuggestBudgetResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\SuggestMaxCpcRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\SuggestMaxCpcResponse;

// Models — ads
use EBay\MarketingAndPromotions\Generated\Marketing\Models\Ad;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\AdPagedCollectionResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\Ads;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\AdIds;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\AdReferences;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\CreateAdRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\CreateAdsByInventoryReferenceRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\DeleteAdsByInventoryReferenceRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\UpdateBidPercentageRequest;

// Models — ad groups
use EBay\MarketingAndPromotions\Generated\Marketing\Models\AdGroup;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\AdGroupPagedCollectionResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\CreateAdGroupRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\UpdateAdGroupRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\TargetedBidRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\TargetedBidsPagedCollection;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\TargetedKeywordRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\TargetedKeywordsPagedCollection;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\TargetedAdsPagedCollection;

// Models — keywords
use EBay\MarketingAndPromotions\Generated\Marketing\Models\Keyword;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\KeywordPagedCollectionResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\CreateKeywordRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\UpdateKeywordRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\UpdateKeywordResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\NegativeKeyword;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\NegativeKeywordPagedCollectionResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\CreateNegativeKeywordRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\UpdateNegativeKeywordRequest;

// Models — email campaigns
use EBay\MarketingAndPromotions\Generated\Marketing\Models\CreateEmailCampaignRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\CreateEmailCampaignResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\GetEmailCampaignResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\GetEmailCampaignsResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\GetEmailPreviewResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\GetEmailReportResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\GetEmailCampaignAudiencesResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\UpdateCampaignRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\UpdateEmailCampaignResponse;

// Models — promotions
use EBay\MarketingAndPromotions\Generated\Marketing\Models\ItemPriceMarkdown;
use EBay\MarketingAndPromotions\Generated\Marketing\Item_price_markdown\Item_price_markdownPostResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Item_price_markdown\Item\WithPromotion_PutResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\ItemPromotion;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\ItemPromotionResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BaseResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\PromotionsPagedCollection;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\ItemsPagedCollection;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\PromotionsReportPagedCollection;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\SummaryReportResponse;

// Models — reports
use EBay\MarketingAndPromotions\Generated\Marketing\Models\CreateReportTask;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\ReportTask;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\ReportTaskPagedCollection;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\ReportMetadata;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\ReportMetadatas;

final class MarketingClient
{
    public function __construct(
        private readonly MarketingApiClient $kiota,
        private readonly MarketingAndPromotionsConfiguration $config
    ) {}

    /** @return array<string,string> */
    private function mergedHeaders(?RequestOptions $requestOptions): array
    {
        $headers = $this->config->defaultRequestOptions->headers;
        foreach ($requestOptions?->headers ?? [] as $key => $value) {
            if (!array_key_exists($key, $headers)) {
                $headers[$key] = $value;
            }
        }
        return $headers;
    }

    // ─── Bulk Ads ───────────────────────────────────────────────────────────────

    public function bulkCreateAdsByInventoryReference(
        string $campaignId,
        BulkCreateAdsByInventoryReferenceRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?BulkCreateAdsByInventoryReferenceResponse {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->bulk_create_ads_by_inventory_reference()->post($body, new Bulk_create_ads_by_inventory_referenceRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function bulkCreateAdsByListingId(
        string $campaignId,
        BulkCreateAdRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?BulkAdResponse {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->bulk_create_ads_by_listing_id()->post($body, new Bulk_create_ads_by_listing_idRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function bulkDeleteAdsByInventoryReference(
        string $campaignId,
        BulkDeleteAdsByInventoryReferenceRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?BulkDeleteAdsByInventoryReferenceResponse {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->bulk_delete_ads_by_inventory_reference()->post($body, new Bulk_delete_ads_by_inventory_referenceRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function bulkDeleteAdsByListingId(
        string $campaignId,
        BulkDeleteAdRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?BulkDeleteAdResponse {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->bulk_delete_ads_by_listing_id()->post($body, new Bulk_delete_ads_by_listing_idRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function bulkUpdateAdsBidByInventoryReference(
        string $campaignId,
        BulkCreateAdsByInventoryReferenceRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?BulkUpdateAdsByInventoryReferenceResponse {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->bulk_update_ads_bid_by_inventory_reference()->post($body, new Bulk_update_ads_bid_by_inventory_referenceRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function bulkUpdateAdsBidByListingId(
        string $campaignId,
        BulkCreateAdRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?BulkAdUpdateResponse {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->bulk_update_ads_bid_by_listing_id()->post($body, new Bulk_update_ads_bid_by_listing_idRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function bulkUpdateAdsStatus(
        string $campaignId,
        BulkUpdateAdStatusRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?BulkAdUpdateStatusResponse {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->bulk_update_ads_status()->post($body, new Bulk_update_ads_statusRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function bulkUpdateAdsStatusByListingId(
        string $campaignId,
        BulkUpdateAdStatusByListingIdRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?BulkAdUpdateStatusByListingIdResponse {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->bulk_update_ads_status_by_listing_id()->post($body, new Bulk_update_ads_status_by_listing_idRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    // ─── Bulk Keywords ───────────────────────────────────────────────────────────

    public function bulkCreateKeyword(
        string $campaignId,
        BulkCreateKeywordRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?BulkCreateKeywordResponse {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->bulk_create_keyword()->post($body, new Bulk_create_keywordRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function bulkUpdateKeyword(
        string $campaignId,
        BulkUpdateKeywordRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?BulkUpdateKeywordResponse {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->bulk_update_keyword()->post($body, new Bulk_update_keywordRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    // ─── Bulk Negative Keywords ───────────────────────────────────────────────

    public function bulkCreateNegativeKeyword(
        BulkCreateNegativeKeywordRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?BulkCreateNegativeKeywordResponse {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->bulk_create_negative_keyword()->post($body, new Bulk_create_negative_keywordRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function bulkUpdateNegativeKeyword(
        BulkUpdateNegativeKeywordRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?BulkUpdateNegativeKeywordResponse {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->bulk_update_negative_keyword()->post($body, new Bulk_update_negative_keywordRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    // ─── Campaigns ───────────────────────────────────────────────────────────────

    public function cloneCampaign(
        string $campaignId,
        CloneCampaignRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): mixed {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->escapedClone()->post($body, new CloneRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function createCampaign(
        CreateCampaignRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): mixed {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->post($body, new Ad_campaignRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function deleteCampaign(
        string $campaignId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): void {
        TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->byCampaign_id($campaignId)->delete(new WithCampaign_ItemRequestBuilderDeleteRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function endCampaign(
        string $campaignId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): void {
        TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->byCampaign_id($campaignId)->end()->post(new EndRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function findCampaignByAdReference(
        ?string $inventoryReferenceId = null,
        ?string $inventoryReferenceType = null,
        ?string $listingId = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?Campaigns {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->find_campaign_by_ad_reference()->get(new Find_campaign_by_ad_referenceRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
            queryParameters: Find_campaign_by_ad_referenceRequestBuilderGetRequestConfiguration::createQueryParameters(
                inventory_reference_id: $inventoryReferenceId,
                inventory_reference_type: $inventoryReferenceType,
                listing_id: $listingId,
            )
        ))->wait());
    }

    public function getCampaign(
        string $campaignId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?Campaign {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->byCampaign_id($campaignId)->get(new WithCampaign_ItemRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function getCampaignByName(
        ?string $campaignName = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?Campaign {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->get_campaign_by_name()->get(new Get_campaign_by_nameRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
            queryParameters: Get_campaign_by_nameRequestBuilderGetRequestConfiguration::createQueryParameters(
                campaign_name: $campaignName,
            )
        ))->wait());
    }

    public function getCampaigns(
        ?string $campaignName = null,
        ?string $campaignStatus = null,
        ?string $campaignTargetingTypes = null,
        ?string $channels = null,
        ?string $endDateRange = null,
        ?string $fundingStrategy = null,
        ?string $limit = null,
        ?string $offset = null,
        ?string $startDateRange = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?CampaignPagedCollectionResponse {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->get(new Ad_campaignRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
            queryParameters: Ad_campaignRequestBuilderGetRequestConfiguration::createQueryParameters(
                campaign_name: $campaignName,
                campaign_status: $campaignStatus,
                campaign_targeting_types: $campaignTargetingTypes,
                channels: $channels,
                end_date_range: $endDateRange,
                funding_strategy: $fundingStrategy,
                limit: $limit,
                offset: $offset,
                start_date_range: $startDateRange,
            )
        ))->wait());
    }

    public function pauseCampaign(
        string $campaignId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): void {
        TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->byCampaign_id($campaignId)->pause()->post(new PauseRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function resumeCampaign(
        string $campaignId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): void {
        TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->byCampaign_id($campaignId)->resume()->post(new ResumeRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function updateAdRateStrategy(
        string $campaignId,
        UpdateAdrateStrategyRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): void {
        TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->update_ad_rate_strategy()->post($body, new Update_ad_rate_strategyRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function updateBiddingStrategy(
        string $campaignId,
        UpdateBiddingStrategyRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): void {
        TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->update_bidding_strategy()->post($body, new Update_bidding_strategyRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function updateCampaignBudget(
        string $campaignId,
        UpdateCampaignBudgetRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): void {
        TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->update_campaign_budget()->post($body, new Update_campaign_budgetRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function updateCampaignIdentification(
        string $campaignId,
        UpdateCampaignIdentificationRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): void {
        TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->update_campaign_identification()->post($body, new Update_campaign_identificationRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function suggestBudget(
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?SuggestBudgetResponse {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->suggest_budget()->get(new Suggest_budgetRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function suggestMaxCpc(
        SuggestMaxCpcRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?SuggestMaxCpcResponse {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->suggest_max_cpc()->post($body, new Suggest_max_cpcRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    // ─── Ads ─────────────────────────────────────────────────────────────────────

    public function createAdByListingId(
        string $campaignId,
        CreateAdRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): mixed {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->byCampaign_id($campaignId)->ad()->post($body, new AdRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function createAdsByInventoryReference(
        string $campaignId,
        CreateAdsByInventoryReferenceRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?AdReferences {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->create_ads_by_inventory_reference()->post($body, new Create_ads_by_inventory_referenceRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function deleteAd(
        string $campaignId,
        string $adId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): void {
        TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->byCampaign_id($campaignId)->ad()->byAd_id($adId)->delete(new WithAd_ItemRequestBuilderDeleteRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function deleteAdsByInventoryReference(
        string $campaignId,
        DeleteAdsByInventoryReferenceRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?AdIds {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->delete_ads_by_inventory_reference()->post($body, new Delete_ads_by_inventory_referenceRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function getAd(
        string $campaignId,
        string $adId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?Ad {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->byCampaign_id($campaignId)->ad()->byAd_id($adId)->get(new WithAd_ItemRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function getAds(
        string $campaignId,
        ?string $adGroupIds = null,
        ?string $adStatus = null,
        ?string $limit = null,
        ?string $listingIds = null,
        ?string $offset = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?AdPagedCollectionResponse {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->byCampaign_id($campaignId)->ad()->get(new AdRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
            queryParameters: AdRequestBuilderGetRequestConfiguration::createQueryParameters(
                ad_group_ids: $adGroupIds,
                ad_status: $adStatus,
                limit: $limit,
                listing_ids: $listingIds,
                offset: $offset,
            )
        ))->wait());
    }

    public function getAdsByInventoryReference(
        string $campaignId,
        ?string $inventoryReferenceId = null,
        ?string $inventoryReferenceType = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?Ads {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->get_ads_by_inventory_reference()->get(new Get_ads_by_inventory_referenceRequestBuilderGetRequestConfiguration(
                headers: $this->mergedHeaders($requestOptions),
                queryParameters: Get_ads_by_inventory_referenceRequestBuilderGetRequestConfiguration::createQueryParameters(
                    inventory_reference_id: $inventoryReferenceId,
                    inventory_reference_type: $inventoryReferenceType,
                )
            ))->wait());
    }

    public function updateBid(
        string $campaignId,
        string $adId,
        UpdateBidPercentageRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): void {
        TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->byCampaign_id($campaignId)->ad()->byAd_id($adId)
            ->update_bid()->post($body, new Update_bidRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    // ─── Ad Groups ───────────────────────────────────────────────────────────────

    public function createAdGroup(
        string $campaignId,
        CreateAdGroupRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): mixed {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->byCampaign_id($campaignId)->ad_group()->post($body, new Ad_groupRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function getAdGroup(
        string $campaignId,
        string $adGroupId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?AdGroup {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->ad_group()->byAd_group_id($adGroupId)->get(new WithAd_group_ItemRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function getAdGroups(
        string $campaignId,
        ?string $adGroupStatus = null,
        ?string $limit = null,
        ?string $offset = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?AdGroupPagedCollectionResponse {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->byCampaign_id($campaignId)->ad_group()->get(new Ad_groupRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
            queryParameters: Ad_groupRequestBuilderGetRequestConfiguration::createQueryParameters(
                ad_group_status: $adGroupStatus,
                limit: $limit,
                offset: $offset,
            )
        ))->wait());
    }

    public function updateAdGroup(
        string $campaignId,
        string $adGroupId,
        UpdateAdGroupRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): void {
        TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->ad_group()->byAd_group_id($adGroupId)->put($body, new WithAd_group_ItemRequestBuilderPutRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function suggestBids(
        string $campaignId,
        string $adGroupId,
        TargetedBidRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?TargetedBidsPagedCollection {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->ad_group()->byAd_group_id($adGroupId)->suggest_bids()->post($body, new Suggest_bidsRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function suggestItems(
        string $campaignId,
        ?string $categoryIds = null,
        ?string $limit = null,
        ?string $offset = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?TargetedAdsPagedCollection {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->byCampaign_id($campaignId)->suggest_items()->get(new Suggest_itemsRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
            queryParameters: Suggest_itemsRequestBuilderGetRequestConfiguration::createQueryParameters(
                category_ids: $categoryIds,
                limit: $limit,
                offset: $offset,
            )
        ))->wait());
    }

    public function suggestKeywords(
        string $campaignId,
        string $adGroupId,
        TargetedKeywordRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?TargetedKeywordsPagedCollection {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->ad_group()->byAd_group_id($adGroupId)->suggest_keywords()->post($body, new Suggest_keywordsRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    // ─── Keywords ────────────────────────────────────────────────────────────────

    public function createKeyword(
        string $campaignId,
        CreateKeywordRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): mixed {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->byCampaign_id($campaignId)->keyword()->post($body, new KeywordRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function getKeyword(
        string $campaignId,
        string $keywordId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?Keyword {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->keyword()->byKeyword_id($keywordId)->get(new WithKeyword_ItemRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function getKeywords(
        string $campaignId,
        ?string $adGroupIds = null,
        ?string $keywordStatus = null,
        ?string $limit = null,
        ?string $offset = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?KeywordPagedCollectionResponse {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->byCampaign_id($campaignId)->keyword()->get(new KeywordRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
            queryParameters: KeywordRequestBuilderGetRequestConfiguration::createQueryParameters(
                ad_group_ids: $adGroupIds,
                keyword_status: $keywordStatus,
                limit: $limit,
                offset: $offset,
            )
        ))->wait());
    }

    public function updateKeyword(
        string $campaignId,
        string $keywordId,
        UpdateKeywordRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?UpdateKeywordResponse {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->keyword()->byKeyword_id($keywordId)->put($body, new WithKeyword_ItemRequestBuilderPutRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    // ─── Negative Keywords ───────────────────────────────────────────────────────

    public function createNegativeKeyword(
        CreateNegativeKeywordRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): mixed {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->negative_keyword()->post($body, new Negative_keywordRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function getNegativeKeyword(
        string $negativeKeywordId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?NegativeKeyword {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->negative_keyword()->byNegative_keyword_id($negativeKeywordId)->get(new WithNegative_keyword_ItemRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function getNegativeKeywords(
        ?string $adGroupIds = null,
        ?string $campaignIds = null,
        ?string $limit = null,
        ?string $negativeKeywordStatus = null,
        ?string $offset = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?NegativeKeywordPagedCollectionResponse {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->negative_keyword()->get(new Negative_keywordRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
            queryParameters: Negative_keywordRequestBuilderGetRequestConfiguration::createQueryParameters(
                ad_group_ids: $adGroupIds,
                campaign_ids: $campaignIds,
                limit: $limit,
                negative_keyword_status: $negativeKeywordStatus,
                offset: $offset,
            )
        ))->wait());
    }

    public function updateNegativeKeyword(
        string $negativeKeywordId,
        UpdateNegativeKeywordRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): void {
        TokenContext::runWith($accessToken, fn() => $this->kiota->negative_keyword()->byNegative_keyword_id($negativeKeywordId)->put($body, new WithNegative_keyword_ItemRequestBuilderPutRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    // ─── Email Campaigns ─────────────────────────────────────────────────────────

    public function createEmailCampaign(
        CreateEmailCampaignRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?CreateEmailCampaignResponse {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->email_campaign()->post($body, new Email_campaignRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function deleteEmailCampaign(
        string $emailCampaignId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): void {
        TokenContext::runWith($accessToken, fn() => $this->kiota->email_campaign()->byEmail_campaign_id($emailCampaignId)->delete(new WithEmail_campaign_ItemRequestBuilderDeleteRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function getEmailCampaign(
        string $emailCampaignId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?GetEmailCampaignResponse {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->email_campaign()->byEmail_campaign_id($emailCampaignId)->get(new WithEmail_campaign_ItemRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function getEmailCampaigns(
        ?string $limit = null,
        ?string $offset = null,
        ?string $q = null,
        ?string $sort = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?GetEmailCampaignsResponse {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->email_campaign()->get(new Email_campaignRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
            queryParameters: Email_campaignRequestBuilderGetRequestConfiguration::createQueryParameters(
                limit: $limit,
                offset: $offset,
                q: $q,
                sort: $sort,
            )
        ))->wait());
    }

    public function getEmailPreview(
        string $emailCampaignId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?GetEmailPreviewResponse {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->email_campaign()->byEmail_campaign_id($emailCampaignId)
            ->email_preview()->get(new Email_previewRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function getEmailReport(
        ?string $startDate = null,
        ?string $endDate = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?GetEmailReportResponse {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->email_campaign()->report()->get(new ReportRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
            queryParameters: ReportRequestBuilderGetRequestConfiguration::createQueryParameters(
                endDate: $endDate,
                startDate: $startDate,
            )
        ))->wait());
    }

    public function getAudiences(
        ?string $emailCampaignType = null,
        ?string $limit = null,
        ?string $offset = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?GetEmailCampaignAudiencesResponse {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->email_campaign()->audience()->get(new AudienceRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
            queryParameters: AudienceRequestBuilderGetRequestConfiguration::createQueryParameters(
                emailCampaignType: $emailCampaignType,
                limit: $limit,
                offset: $offset,
            )
        ))->wait());
    }

    public function updateEmailCampaign(
        string $emailCampaignId,
        UpdateCampaignRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?UpdateEmailCampaignResponse {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->email_campaign()->byEmail_campaign_id($emailCampaignId)->put($body, new WithEmail_campaign_ItemRequestBuilderPutRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    // ─── Promotions ───────────────────────────────────────────────────────────────

    public function createItemPriceMarkdownPromotion(
        ItemPriceMarkdown $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?Item_price_markdownPostResponse {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->item_price_markdown()->post($body, new Item_price_markdownRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function deleteItemPriceMarkdownPromotion(
        string $promotionId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): void {
        TokenContext::runWith($accessToken, fn() => $this->kiota->item_price_markdown()->byPromotion_id($promotionId)->delete(new ItemPriceMarkdownWithPromotion_ItemRequestBuilderDeleteRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function getItemPriceMarkdownPromotion(
        string $promotionId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?ItemPriceMarkdown {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->item_price_markdown()->byPromotion_id($promotionId)->get(new ItemPriceMarkdownWithPromotion_ItemRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function updateItemPriceMarkdownPromotion(
        string $promotionId,
        ItemPriceMarkdown $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?WithPromotion_PutResponse {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->item_price_markdown()->byPromotion_id($promotionId)->put($body, new ItemPriceMarkdownWithPromotion_ItemRequestBuilderPutRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function createItemPromotion(
        ItemPromotion $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?BaseResponse {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->item_promotion()->post($body, new Item_promotionRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function deleteItemPromotion(
        string $promotionId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): void {
        TokenContext::runWith($accessToken, fn() => $this->kiota->item_promotion()->byPromotion_id($promotionId)->delete(new ItemPromotionWithPromotion_ItemRequestBuilderDeleteRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function getItemPromotion(
        string $promotionId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?ItemPromotionResponse {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->item_promotion()->byPromotion_id($promotionId)->get(new ItemPromotionWithPromotion_ItemRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function updateItemPromotion(
        string $promotionId,
        ItemPromotion $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?BaseResponse {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->item_promotion()->byPromotion_id($promotionId)->put($body, new ItemPromotionWithPromotion_ItemRequestBuilderPutRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
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
        ?RequestOptions $requestOptions = null
    ): ?PromotionsPagedCollection {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->promotion()->get(new PromotionRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
            queryParameters: PromotionRequestBuilderGetRequestConfiguration::createQueryParameters(
                limit: $limit,
                marketplace_id: $marketplaceId,
                offset: $offset,
                promotion_status: $promotionStatus,
                promotion_type: $promotionType,
                q: $q,
                sort: $sort,
            )
        ))->wait());
    }

    public function getListingSet(
        string $promotionId,
        ?string $limit = null,
        ?string $offset = null,
        ?string $q = null,
        ?string $sort = null,
        ?string $status = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?ItemsPagedCollection {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->promotion()->byPromotion_id($promotionId)->get_listing_set()->get(new Get_listing_setRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
            queryParameters: Get_listing_setRequestBuilderGetRequestConfiguration::createQueryParameters(
                limit: $limit,
                offset: $offset,
                q: $q,
                sort: $sort,
                status: $status,
            )
        ))->wait());
    }

    public function pausePromotion(
        string $promotionId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): void {
        TokenContext::runWith($accessToken, fn() => $this->kiota->promotion()->byPromotion_id($promotionId)->pause()->post(new PromotionPauseRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function resumePromotion(
        string $promotionId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): void {
        TokenContext::runWith($accessToken, fn() => $this->kiota->promotion()->byPromotion_id($promotionId)->resume()->post(new PromotionResumeRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function getPromotionReports(
        ?string $limit = null,
        ?string $marketplaceId = null,
        ?string $offset = null,
        ?string $promotionStatus = null,
        ?string $promotionType = null,
        ?string $q = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?PromotionsReportPagedCollection {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->promotion_report()->get(new Promotion_reportRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
            queryParameters: Promotion_reportRequestBuilderGetRequestConfiguration::createQueryParameters(
                limit: $limit,
                marketplace_id: $marketplaceId,
                offset: $offset,
                promotion_status: $promotionStatus,
                promotion_type: $promotionType,
                q: $q,
            )
        ))->wait());
    }

    public function getPromotionSummaryReport(
        ?string $marketplaceId = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?SummaryReportResponse {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->promotion_summary_report()->get(new Promotion_summary_reportRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
            queryParameters: Promotion_summary_reportRequestBuilderGetRequestConfiguration::createQueryParameters(
                marketplace_id: $marketplaceId,
            )
        ))->wait());
    }

    // ─── Reports ─────────────────────────────────────────────────────────────────

    public function createReportTask(
        CreateReportTask $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): void {
        TokenContext::runWith($accessToken, fn() => $this->kiota->ad_report_task()->post($body, new Ad_report_taskRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function deleteReportTask(
        string $reportTaskId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): void {
        TokenContext::runWith($accessToken, fn() => $this->kiota->ad_report_task()->byReport_task_id($reportTaskId)->delete(new WithReport_task_ItemRequestBuilderDeleteRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function getReport(
        string $reportId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): mixed {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->ad_report()->byReport_id($reportId)->get(new WithReport_ItemRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function getReportMetadata(
        ?string $channel = null,
        ?string $fundingModel = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?ReportMetadatas {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->ad_report_metadata()->get(new Ad_report_metadataRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
            queryParameters: Ad_report_metadataRequestBuilderGetRequestConfiguration::createQueryParameters(
                channel: $channel,
                funding_model: $fundingModel,
            )
        ))->wait());
    }

    public function getReportMetadataForReportType(
        string $reportType,
        ?string $channel = null,
        ?string $fundingModel = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?ReportMetadata {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->ad_report_metadata()->byReport_type($reportType)->get(new WithReport_typeItemRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
            queryParameters: WithReport_typeItemRequestBuilderGetRequestConfiguration::createQueryParameters(
                channel: $channel,
                funding_model: $fundingModel,
            )
        ))->wait());
    }

    public function getReportTask(
        string $reportTaskId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?ReportTask {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->ad_report_task()->byReport_task_id($reportTaskId)->get(new WithReport_task_ItemRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait());
    }

    public function getReportTasks(
        ?string $limit = null,
        ?string $offset = null,
        ?string $reportTaskStatuses = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?ReportTaskPagedCollection {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->ad_report_task()->get(new Ad_report_taskRequestBuilderGetRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
            queryParameters: Ad_report_taskRequestBuilderGetRequestConfiguration::createQueryParameters(
                limit: $limit,
                offset: $offset,
                report_task_statuses: $reportTaskStatuses,
            )
        ))->wait());
    }
}
