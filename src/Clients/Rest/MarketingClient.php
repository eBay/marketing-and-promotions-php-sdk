<?php

namespace EBay\MarketingAndPromotions\Clients\Rest;

use EBay\MarketingAndPromotions\Configuration\TokenContext;
use EBay\MarketingAndPromotions\Generated\Marketing\MarketingApiClient;

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
    public function __construct(private readonly MarketingApiClient $kiota) {}

    // ─── Bulk Ads ───────────────────────────────────────────────────────────────

    public function bulkCreateAdsByInventoryReference(
        string $campaignId,
        BulkCreateAdsByInventoryReferenceRequest $body,
        ?string $accessToken = null
    ): ?BulkCreateAdsByInventoryReferenceResponse {
        TokenContext::set($accessToken);
        return $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->bulk_create_ads_by_inventory_reference()->post($body)->wait();
    }

    public function bulkCreateAdsByListingId(
        string $campaignId,
        BulkCreateAdRequest $body,
        ?string $accessToken = null
    ): ?BulkAdResponse {
        TokenContext::set($accessToken);
        return $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->bulk_create_ads_by_listing_id()->post($body)->wait();
    }

    public function bulkDeleteAdsByInventoryReference(
        string $campaignId,
        BulkDeleteAdsByInventoryReferenceRequest $body,
        ?string $accessToken = null
    ): ?BulkDeleteAdsByInventoryReferenceResponse {
        TokenContext::set($accessToken);
        return $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->bulk_delete_ads_by_inventory_reference()->post($body)->wait();
    }

    public function bulkDeleteAdsByListingId(
        string $campaignId,
        BulkDeleteAdRequest $body,
        ?string $accessToken = null
    ): ?BulkDeleteAdResponse {
        TokenContext::set($accessToken);
        return $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->bulk_delete_ads_by_listing_id()->post($body)->wait();
    }

    public function bulkUpdateAdsBidByInventoryReference(
        string $campaignId,
        BulkCreateAdsByInventoryReferenceRequest $body,
        ?string $accessToken = null
    ): ?BulkUpdateAdsByInventoryReferenceResponse {
        TokenContext::set($accessToken);
        return $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->bulk_update_ads_bid_by_inventory_reference()->post($body)->wait();
    }

    public function bulkUpdateAdsBidByListingId(
        string $campaignId,
        BulkCreateAdRequest $body,
        ?string $accessToken = null
    ): ?BulkAdUpdateResponse {
        TokenContext::set($accessToken);
        return $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->bulk_update_ads_bid_by_listing_id()->post($body)->wait();
    }

    public function bulkUpdateAdsStatus(
        string $campaignId,
        BulkUpdateAdStatusRequest $body,
        ?string $accessToken = null
    ): ?BulkAdUpdateStatusResponse {
        TokenContext::set($accessToken);
        return $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->bulk_update_ads_status()->post($body)->wait();
    }

    public function bulkUpdateAdsStatusByListingId(
        string $campaignId,
        BulkUpdateAdStatusByListingIdRequest $body,
        ?string $accessToken = null
    ): ?BulkAdUpdateStatusByListingIdResponse {
        TokenContext::set($accessToken);
        return $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->bulk_update_ads_status_by_listing_id()->post($body)->wait();
    }

    // ─── Bulk Keywords ───────────────────────────────────────────────────────────

    public function bulkCreateKeyword(
        string $campaignId,
        BulkCreateKeywordRequest $body,
        ?string $accessToken = null
    ): ?BulkCreateKeywordResponse {
        TokenContext::set($accessToken);
        return $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->bulk_create_keyword()->post($body)->wait();
    }

    public function bulkUpdateKeyword(
        string $campaignId,
        BulkUpdateKeywordRequest $body,
        ?string $accessToken = null
    ): ?BulkUpdateKeywordResponse {
        TokenContext::set($accessToken);
        return $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->bulk_update_keyword()->post($body)->wait();
    }

    // ─── Bulk Negative Keywords ───────────────────────────────────────────────

    public function bulkCreateNegativeKeyword(
        BulkCreateNegativeKeywordRequest $body,
        ?string $accessToken = null
    ): ?BulkCreateNegativeKeywordResponse {
        TokenContext::set($accessToken);
        return $this->kiota->bulk_create_negative_keyword()->post($body)->wait();
    }

    public function bulkUpdateNegativeKeyword(
        BulkUpdateNegativeKeywordRequest $body,
        ?string $accessToken = null
    ): ?BulkUpdateNegativeKeywordResponse {
        TokenContext::set($accessToken);
        return $this->kiota->bulk_update_negative_keyword()->post($body)->wait();
    }

    // ─── Campaigns ───────────────────────────────────────────────────────────────

    public function cloneCampaign(
        string $campaignId,
        CloneCampaignRequest $body,
        ?string $accessToken = null
    ): mixed {
        TokenContext::set($accessToken);
        return $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->escapedClone()->post($body)->wait();
    }

    public function createCampaign(
        CreateCampaignRequest $body,
        ?string $accessToken = null
    ): mixed {
        TokenContext::set($accessToken);
        return $this->kiota->ad_campaign()->post($body)->wait();
    }

    public function deleteCampaign(string $campaignId, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->ad_campaign()->byCampaign_id($campaignId)->delete()->wait();
    }

    public function endCampaign(string $campaignId, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->ad_campaign()->byCampaign_id($campaignId)->end()->post()->wait();
    }

    public function findCampaignByAdReference(?string $accessToken = null): ?Campaigns
    {
        TokenContext::set($accessToken);
        return $this->kiota->ad_campaign()->find_campaign_by_ad_reference()->get()->wait();
    }

    public function getCampaign(string $campaignId, ?string $accessToken = null): ?Campaign
    {
        TokenContext::set($accessToken);
        return $this->kiota->ad_campaign()->byCampaign_id($campaignId)->get()->wait();
    }

    public function getCampaignByName(?string $accessToken = null): ?Campaign
    {
        TokenContext::set($accessToken);
        return $this->kiota->ad_campaign()->get_campaign_by_name()->get()->wait();
    }

    public function getCampaigns(?string $accessToken = null): ?CampaignPagedCollectionResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->ad_campaign()->get()->wait();
    }

    public function pauseCampaign(string $campaignId, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->ad_campaign()->byCampaign_id($campaignId)->pause()->post()->wait();
    }

    public function resumeCampaign(string $campaignId, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->ad_campaign()->byCampaign_id($campaignId)->resume()->post()->wait();
    }

    public function updateAdRateStrategy(
        string $campaignId,
        UpdateAdrateStrategyRequest $body,
        ?string $accessToken = null
    ): void {
        TokenContext::set($accessToken);
        $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->update_ad_rate_strategy()->post($body)->wait();
    }

    public function updateBiddingStrategy(
        string $campaignId,
        UpdateBiddingStrategyRequest $body,
        ?string $accessToken = null
    ): void {
        TokenContext::set($accessToken);
        $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->update_bidding_strategy()->post($body)->wait();
    }

    public function updateCampaignBudget(
        string $campaignId,
        UpdateCampaignBudgetRequest $body,
        ?string $accessToken = null
    ): void {
        TokenContext::set($accessToken);
        $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->update_campaign_budget()->post($body)->wait();
    }

    public function updateCampaignIdentification(
        string $campaignId,
        UpdateCampaignIdentificationRequest $body,
        ?string $accessToken = null
    ): void {
        TokenContext::set($accessToken);
        $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->update_campaign_identification()->post($body)->wait();
    }

    public function suggestBudget(?string $accessToken = null): ?SuggestBudgetResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->ad_campaign()->suggest_budget()->get()->wait();
    }

    public function suggestMaxCpc(
        SuggestMaxCpcRequest $body,
        ?string $accessToken = null
    ): ?SuggestMaxCpcResponse {
        TokenContext::set($accessToken);
        return $this->kiota->ad_campaign()->suggest_max_cpc()->post($body)->wait();
    }

    // ─── Ads ─────────────────────────────────────────────────────────────────────

    public function createAdByListingId(
        string $campaignId,
        CreateAdRequest $body,
        ?string $accessToken = null
    ): mixed {
        TokenContext::set($accessToken);
        return $this->kiota->ad_campaign()->byCampaign_id($campaignId)->ad()->post($body)->wait();
    }

    public function createAdsByInventoryReference(
        string $campaignId,
        CreateAdsByInventoryReferenceRequest $body,
        ?string $accessToken = null
    ): ?AdReferences {
        TokenContext::set($accessToken);
        return $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->create_ads_by_inventory_reference()->post($body)->wait();
    }

    public function deleteAd(
        string $campaignId,
        string $adId,
        ?string $accessToken = null
    ): void {
        TokenContext::set($accessToken);
        $this->kiota->ad_campaign()->byCampaign_id($campaignId)->ad()->byAd_id($adId)->delete()->wait();
    }

    public function deleteAdsByInventoryReference(
        string $campaignId,
        DeleteAdsByInventoryReferenceRequest $body,
        ?string $accessToken = null
    ): ?AdIds {
        TokenContext::set($accessToken);
        return $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->delete_ads_by_inventory_reference()->post($body)->wait();
    }

    public function getAd(
        string $campaignId,
        string $adId,
        ?string $accessToken = null
    ): ?Ad {
        TokenContext::set($accessToken);
        return $this->kiota->ad_campaign()->byCampaign_id($campaignId)->ad()->byAd_id($adId)->get()->wait();
    }

    public function getAds(
        string $campaignId,
        ?string $accessToken = null
    ): ?AdPagedCollectionResponse {
        TokenContext::set($accessToken);
        return $this->kiota->ad_campaign()->byCampaign_id($campaignId)->ad()->get()->wait();
    }

    public function getAdsByInventoryReference(
        string $campaignId,
        ?string $accessToken = null
    ): ?Ads {
        TokenContext::set($accessToken);
        return $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->get_ads_by_inventory_reference()->get()->wait();
    }

    public function updateBid(
        string $campaignId,
        string $adId,
        UpdateBidPercentageRequest $body,
        ?string $accessToken = null
    ): void {
        TokenContext::set($accessToken);
        $this->kiota->ad_campaign()->byCampaign_id($campaignId)->ad()->byAd_id($adId)
            ->update_bid()->post($body)->wait();
    }

    // ─── Ad Groups ───────────────────────────────────────────────────────────────

    public function createAdGroup(
        string $campaignId,
        CreateAdGroupRequest $body,
        ?string $accessToken = null
    ): mixed {
        TokenContext::set($accessToken);
        return $this->kiota->ad_campaign()->byCampaign_id($campaignId)->ad_group()->post($body)->wait();
    }

    public function getAdGroup(
        string $campaignId,
        string $adGroupId,
        ?string $accessToken = null
    ): ?AdGroup {
        TokenContext::set($accessToken);
        return $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->ad_group()->byAd_group_id($adGroupId)->get()->wait();
    }

    public function getAdGroups(
        string $campaignId,
        ?string $accessToken = null
    ): ?AdGroupPagedCollectionResponse {
        TokenContext::set($accessToken);
        return $this->kiota->ad_campaign()->byCampaign_id($campaignId)->ad_group()->get()->wait();
    }

    public function updateAdGroup(
        string $campaignId,
        string $adGroupId,
        UpdateAdGroupRequest $body,
        ?string $accessToken = null
    ): void {
        TokenContext::set($accessToken);
        $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->ad_group()->byAd_group_id($adGroupId)->put($body)->wait();
    }

    public function suggestBids(
        string $campaignId,
        string $adGroupId,
        TargetedBidRequest $body,
        ?string $accessToken = null
    ): ?TargetedBidsPagedCollection {
        TokenContext::set($accessToken);
        return $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->ad_group()->byAd_group_id($adGroupId)->suggest_bids()->post($body)->wait();
    }

    public function suggestItems(
        string $campaignId,
        ?string $accessToken = null
    ): ?TargetedAdsPagedCollection {
        TokenContext::set($accessToken);
        return $this->kiota->ad_campaign()->byCampaign_id($campaignId)->suggest_items()->get()->wait();
    }

    public function suggestKeywords(
        string $campaignId,
        string $adGroupId,
        TargetedKeywordRequest $body,
        ?string $accessToken = null
    ): ?TargetedKeywordsPagedCollection {
        TokenContext::set($accessToken);
        return $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->ad_group()->byAd_group_id($adGroupId)->suggest_keywords()->post($body)->wait();
    }

    // ─── Keywords ────────────────────────────────────────────────────────────────

    public function createKeyword(
        string $campaignId,
        CreateKeywordRequest $body,
        ?string $accessToken = null
    ): mixed {
        TokenContext::set($accessToken);
        return $this->kiota->ad_campaign()->byCampaign_id($campaignId)->keyword()->post($body)->wait();
    }

    public function getKeyword(
        string $campaignId,
        string $keywordId,
        ?string $accessToken = null
    ): ?Keyword {
        TokenContext::set($accessToken);
        return $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->keyword()->byKeyword_id($keywordId)->get()->wait();
    }

    public function getKeywords(
        string $campaignId,
        ?string $accessToken = null
    ): ?KeywordPagedCollectionResponse {
        TokenContext::set($accessToken);
        return $this->kiota->ad_campaign()->byCampaign_id($campaignId)->keyword()->get()->wait();
    }

    public function updateKeyword(
        string $campaignId,
        string $keywordId,
        UpdateKeywordRequest $body,
        ?string $accessToken = null
    ): ?UpdateKeywordResponse {
        TokenContext::set($accessToken);
        return $this->kiota->ad_campaign()->byCampaign_id($campaignId)
            ->keyword()->byKeyword_id($keywordId)->put($body)->wait();
    }

    // ─── Negative Keywords ───────────────────────────────────────────────────────

    public function createNegativeKeyword(
        CreateNegativeKeywordRequest $body,
        ?string $accessToken = null
    ): mixed {
        TokenContext::set($accessToken);
        return $this->kiota->negative_keyword()->post($body)->wait();
    }

    public function getNegativeKeyword(
        string $negativeKeywordId,
        ?string $accessToken = null
    ): ?NegativeKeyword {
        TokenContext::set($accessToken);
        return $this->kiota->negative_keyword()->byNegative_keyword_id($negativeKeywordId)->get()->wait();
    }

    public function getNegativeKeywords(?string $accessToken = null): ?NegativeKeywordPagedCollectionResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->negative_keyword()->get()->wait();
    }

    public function updateNegativeKeyword(
        string $negativeKeywordId,
        UpdateNegativeKeywordRequest $body,
        ?string $accessToken = null
    ): void {
        TokenContext::set($accessToken);
        $this->kiota->negative_keyword()->byNegative_keyword_id($negativeKeywordId)->put($body)->wait();
    }

    // ─── Email Campaigns ─────────────────────────────────────────────────────────

    public function createEmailCampaign(
        CreateEmailCampaignRequest $body,
        ?string $accessToken = null
    ): ?CreateEmailCampaignResponse {
        TokenContext::set($accessToken);
        return $this->kiota->email_campaign()->post($body)->wait();
    }

    public function deleteEmailCampaign(string $emailCampaignId, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->email_campaign()->byEmail_campaign_id($emailCampaignId)->delete()->wait();
    }

    public function getEmailCampaign(
        string $emailCampaignId,
        ?string $accessToken = null
    ): ?GetEmailCampaignResponse {
        TokenContext::set($accessToken);
        return $this->kiota->email_campaign()->byEmail_campaign_id($emailCampaignId)->get()->wait();
    }

    public function getEmailCampaigns(?string $accessToken = null): ?GetEmailCampaignsResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->email_campaign()->get()->wait();
    }

    public function getEmailPreview(
        string $emailCampaignId,
        ?string $accessToken = null
    ): ?GetEmailPreviewResponse {
        TokenContext::set($accessToken);
        return $this->kiota->email_campaign()->byEmail_campaign_id($emailCampaignId)
            ->email_preview()->get()->wait();
    }

    public function getEmailReport(
        ?string $accessToken = null
    ): ?GetEmailReportResponse {
        TokenContext::set($accessToken);
        return $this->kiota->email_campaign()->report()->get()->wait();
    }

    public function getAudiences(?string $accessToken = null): ?GetEmailCampaignAudiencesResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->email_campaign()->audience()->get()->wait();
    }

    public function updateEmailCampaign(
        string $emailCampaignId,
        UpdateCampaignRequest $body,
        ?string $accessToken = null
    ): ?UpdateEmailCampaignResponse {
        TokenContext::set($accessToken);
        return $this->kiota->email_campaign()->byEmail_campaign_id($emailCampaignId)->put($body)->wait();
    }

    // ─── Promotions ───────────────────────────────────────────────────────────────

    public function createItemPriceMarkdownPromotion(
        ItemPriceMarkdown $body,
        ?string $accessToken = null
    ): ?ItemPriceMarkdown {
        TokenContext::set($accessToken);
        return $this->kiota->item_price_markdown()->post($body)->wait();
    }

    public function deleteItemPriceMarkdownPromotion(
        string $promotionId,
        ?string $accessToken = null
    ): void {
        TokenContext::set($accessToken);
        $this->kiota->item_price_markdown()->byPromotion_id($promotionId)->delete()->wait();
    }

    public function getItemPriceMarkdownPromotion(
        string $promotionId,
        ?string $accessToken = null
    ): ?ItemPriceMarkdown {
        TokenContext::set($accessToken);
        return $this->kiota->item_price_markdown()->byPromotion_id($promotionId)->get()->wait();
    }

    public function updateItemPriceMarkdownPromotion(
        string $promotionId,
        ItemPriceMarkdown $body,
        ?string $accessToken = null
    ): ?ItemPriceMarkdown {
        TokenContext::set($accessToken);
        return $this->kiota->item_price_markdown()->byPromotion_id($promotionId)->put($body)->wait();
    }

    public function createItemPromotion(
        ItemPromotion $body,
        ?string $accessToken = null
    ): ?BaseResponse {
        TokenContext::set($accessToken);
        return $this->kiota->item_promotion()->post($body)->wait();
    }

    public function deleteItemPromotion(string $promotionId, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->item_promotion()->byPromotion_id($promotionId)->delete()->wait();
    }

    public function getItemPromotion(
        string $promotionId,
        ?string $accessToken = null
    ): ?ItemPromotionResponse {
        TokenContext::set($accessToken);
        return $this->kiota->item_promotion()->byPromotion_id($promotionId)->get()->wait();
    }

    public function updateItemPromotion(
        string $promotionId,
        ItemPromotion $body,
        ?string $accessToken = null
    ): ?BaseResponse {
        TokenContext::set($accessToken);
        return $this->kiota->item_promotion()->byPromotion_id($promotionId)->put($body)->wait();
    }

    public function getPromotions(?string $accessToken = null): ?PromotionsPagedCollection
    {
        TokenContext::set($accessToken);
        return $this->kiota->promotion()->get()->wait();
    }

    public function getListingSet(string $promotionId, ?string $accessToken = null): ?ItemsPagedCollection
    {
        TokenContext::set($accessToken);
        return $this->kiota->promotion()->byPromotion_id($promotionId)->get_listing_set()->get()->wait();
    }

    public function pausePromotion(string $promotionId, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->promotion()->byPromotion_id($promotionId)->pause()->post()->wait();
    }

    public function resumePromotion(string $promotionId, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->promotion()->byPromotion_id($promotionId)->resume()->post()->wait();
    }

    public function getPromotionReports(?string $accessToken = null): ?PromotionsReportPagedCollection
    {
        TokenContext::set($accessToken);
        return $this->kiota->promotion_report()->get()->wait();
    }

    public function getPromotionSummaryReport(?string $accessToken = null): ?SummaryReportResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->promotion_summary_report()->get()->wait();
    }

    // ─── Reports ─────────────────────────────────────────────────────────────────

    public function createReportTask(
        CreateReportTask $body,
        ?string $accessToken = null
    ): void {
        TokenContext::set($accessToken);
        $this->kiota->ad_report_task()->post($body)->wait();
    }

    public function deleteReportTask(string $reportTaskId, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->ad_report_task()->byReport_task_id($reportTaskId)->delete()->wait();
    }

    public function getReport(string $reportId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->ad_report()->byReport_id($reportId)->get()->wait();
    }

    public function getReportMetadata(?string $accessToken = null): ?ReportMetadatas
    {
        TokenContext::set($accessToken);
        return $this->kiota->ad_report_metadata()->get()->wait();
    }

    public function getReportMetadataForReportType(
        string $reportType,
        ?string $accessToken = null
    ): ?ReportMetadata {
        TokenContext::set($accessToken);
        return $this->kiota->ad_report_metadata()->byReport_type($reportType)->get()->wait();
    }

    public function getReportTask(string $reportTaskId, ?string $accessToken = null): ?ReportTask
    {
        TokenContext::set($accessToken);
        return $this->kiota->ad_report_task()->byReport_task_id($reportTaskId)->get()->wait();
    }

    public function getReportTasks(?string $accessToken = null): ?ReportTaskPagedCollection
    {
        TokenContext::set($accessToken);
        return $this->kiota->ad_report_task()->get()->wait();
    }
}
