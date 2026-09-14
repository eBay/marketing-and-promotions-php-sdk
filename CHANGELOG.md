# ChangeLog

## 2.0.0 (09/14/2026)

**Breaking changes**
- The following operations changed signature on `MarketingClient`:
  - `findCampaignByAdReference`: `(?string, ?string, ?string, ?string, ?RequestOptions)` → `(?string, ?\EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Find_campaign_by_ad_reference\GetInventory_reference_typeQueryParameterType, ?string, ?string, ?RequestOptions)`
  - `getAd`: `(string adId, string campaignId, ?string accessToken, ?RequestOptions requestOptions)` → `(string adId, string campaignId, ?\EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad\Item\GetFieldgroupsQueryParameterType fieldgroups, ?string accessToken, ?RequestOptions requestOptions)`
  - `getAdGroups`: `(string, ?string, ?string, ?string, ?string, ?RequestOptions)` → `(string, ?\EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad_group\GetAd_group_statusQueryParameterType, ?string, ?string, ?string, ?RequestOptions)`
  - `getAds`: `(string campaignId, ?string adGroupIds, ?string adStatus, ?string limit, ?string listingIds, ?string offset, ?string accessToken, ?RequestOptions requestOptions)` → `(string campaignId, ?string adGroupIds, ?\EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad\GetAd_statusQueryParameterType adStatus, ?string limit, ?string listingIds, ?string offset, ?\EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad\GetFieldgroupsQueryParameterType fieldgroups, ?string accessToken, ?RequestOptions requestOptions)`
  - `getAdsByInventoryReference`: `(string, ?string, ?string, ?string, ?RequestOptions)` → `(string, ?string, ?\EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Get_ads_by_inventory_reference\GetInventory_reference_typeQueryParameterType, ?string, ?RequestOptions)`
  - `getCampaigns`: `(?string campaignName, ?string campaignStatus, ?string campaignTargetingTypes, ?string channels, ?string endDateRange, ?string fundingStrategy, ?string limit, ?string offset, ?string startDateRange, ?string accessToken, ?RequestOptions requestOptions)` → `(?string campaignName, ?\EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\GetCampaign_statusQueryParameterType campaignStatus, ?\EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\GetCampaign_targeting_typesQueryParameterType campaignTargetingTypes, ?\EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\GetChannelsQueryParameterType channels, ?string endDateRange, ?\EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\GetFunding_strategyQueryParameterType fundingStrategy, ?string limit, ?string offset, ?string startDateRange, ?string marketplaceId, ?string accessToken, ?RequestOptions requestOptions)`
  - `getKeywords`: `(string, ?string, ?string, ?string, ?string, ?string, ?RequestOptions)` → `(string, ?string, ?\EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Keyword\GetKeyword_statusQueryParameterType, ?string, ?string, ?string, ?RequestOptions)`
  - `getListingSet`: `(string, ?string, ?string, ?string, ?string, ?string, ?string, ?RequestOptions)` → `(string, ?string, ?string, ?string, ?string, ?\EBay\MarketingAndPromotions\Generated\Marketing\Models\ItemMarkdownStatusEnum, ?string, ?RequestOptions)`
  - `getNegativeKeywords`: `(?string, ?string, ?string, ?string, ?string, ?string, ?RequestOptions)` → `(?string, ?string, ?string, ?\EBay\MarketingAndPromotions\Generated\Marketing\Negative_keyword\GetNegative_keyword_statusQueryParameterType, ?string, ?string, ?RequestOptions)`
- The following operations changed signature on `RecommendationClient`:
  - `findListingRecommendations`: `(FindListingRecommendationRequest, ?string, ?string, ?string, ?string, ?string, ?RequestOptions)` → `(FindListingRecommendationRequest, ?string, ?int, ?int, ?string, ?string, ?RequestOptions)`

- The following operations were added to `MarketingClient`:
  - `bulkUpsertVideoAdsPreferences`
  - `upsertVideoAdsPreferences`

## 1.0.0 (09/14/2026)

**Breaking changes**
- The following operations changed signature on `MarketingClient`:
  - `createEmailCampaign`: `(CreateEmailCampaignRequest, ?string, ?RequestOptions)` → `(CreateEmailCampaignRequest, ?string, ?string, ?RequestOptions)`
  - `suggestBudget`: `(?string, ?RequestOptions)` → `(?string, ?string, ?RequestOptions)`
- The following operations changed signature on `RecommendationClient`:
  - `findListingRecommendations`: `(FindListingRecommendationRequest, ?string, ?string, ?string, ?string, ?RequestOptions)` → `(FindListingRecommendationRequest, ?string, ?string, ?string, ?string, ?string, ?RequestOptions)`
