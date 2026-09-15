# ChangeLog

## 0.2.0 (09/14/2026)

### Breaking changes

#### Changed signatures

`MarketingClient`:

| Operation | Previous parameters | Current parameters |
| --- | --- | --- |
| `createEmailCampaign` | `(CreateEmailCampaignRequest $body, ?string $accessToken, ?RequestOptions $requestOptions)` | `(CreateEmailCampaignRequest $body, ?string $xEBAYCMARKETPLACEID, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `findCampaignByAdReference` | `(?string $inventoryReferenceId, ?string $inventoryReferenceType, ?string $listingId, ?string $accessToken, ?RequestOptions $requestOptions)` | `(?string $inventoryReferenceId, ?FindCampaignInventoryReferenceType $inventoryReferenceType, ?string $listingId, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getAd` | `(string $campaignId, string $adId, ?string $accessToken, ?RequestOptions $requestOptions)` | `(string $adId, string $campaignId, ?AdByIdFieldgroups $fieldgroups, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getAdGroups` | `(string $campaignId, ?string $adGroupStatus, ?string $limit, ?string $offset, ?string $accessToken, ?RequestOptions $requestOptions)` | `(string $campaignId, ?AdGroupStatus $adGroupStatus, ?string $limit, ?string $offset, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getAds` | `(string $campaignId, ?string $adGroupIds, ?string $adStatus, ?string $limit, ?string $listingIds, ?string $offset, ?string $accessToken, ?RequestOptions $requestOptions)` | `(string $campaignId, ?string $adGroupIds, ?AdStatus $adStatus, ?string $limit, ?string $listingIds, ?string $offset, ?AdsFieldgroups $fieldgroups, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getAdsByInventoryReference` | `(string $campaignId, ?string $inventoryReferenceId, ?string $inventoryReferenceType, ?string $accessToken, ?RequestOptions $requestOptions)` | `(string $campaignId, ?string $inventoryReferenceId, ?AdsInventoryReferenceType $inventoryReferenceType, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getCampaigns` | `(?string $campaignName, ?string $campaignStatus, ?string $campaignTargetingTypes, ?string $channels, ?string $endDateRange, ?string $fundingStrategy, ?string $limit, ?string $offset, ?string $startDateRange, ?string $accessToken, ?RequestOptions $requestOptions)` | `(?string $campaignName, ?CampaignStatus $campaignStatus, ?CampaignTargetingTypes $campaignTargetingTypes, ?CampaignChannels $channels, ?string $endDateRange, ?CampaignFundingStrategy $fundingStrategy, ?string $limit, ?string $offset, ?string $startDateRange, ?string $marketplaceId, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getKeywords` | `(string $campaignId, ?string $adGroupIds, ?string $keywordStatus, ?string $limit, ?string $offset, ?string $accessToken, ?RequestOptions $requestOptions)` | `(string $campaignId, ?string $adGroupIds, ?KeywordStatus $keywordStatus, ?string $limit, ?string $offset, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getListingSet` | `(string $promotionId, ?string $limit, ?string $offset, ?string $q, ?string $sort, ?string $status, ?string $accessToken, ?RequestOptions $requestOptions)` | `(string $promotionId, ?string $limit, ?string $offset, ?string $q, ?string $sort, ?ItemMarkdownStatus $status, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getNegativeKeywords` | `(?string $adGroupIds, ?string $campaignIds, ?string $limit, ?string $negativeKeywordStatus, ?string $offset, ?string $accessToken, ?RequestOptions $requestOptions)` | `(?string $adGroupIds, ?string $campaignIds, ?string $limit, ?NegativeKeywordStatus $negativeKeywordStatus, ?string $offset, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `suggestBudget` | `(?string $accessToken, ?RequestOptions $requestOptions)` | `(?string $xEBAYCMARKETPLACEID, ?string $accessToken, ?RequestOptions $requestOptions)` |

Generated type aliases used above:

| Alias | Fully qualified class |
| --- | --- |
| `FindCampaignInventoryReferenceType` | `\EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Find_campaign_by_ad_reference\GetInventory_reference_typeQueryParameterType` |
| `AdByIdFieldgroups` | `\EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad\Item\GetFieldgroupsQueryParameterType` |
| `AdGroupStatus` | `\EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad_group\GetAd_group_statusQueryParameterType` |
| `AdStatus` | `\EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad\GetAd_statusQueryParameterType` |
| `AdsFieldgroups` | `\EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad\GetFieldgroupsQueryParameterType` |
| `AdsInventoryReferenceType` | `\EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Get_ads_by_inventory_reference\GetInventory_reference_typeQueryParameterType` |
| `CampaignStatus` | `\EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\GetCampaign_statusQueryParameterType` |
| `CampaignTargetingTypes` | `\EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\GetCampaign_targeting_typesQueryParameterType` |
| `CampaignChannels` | `\EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\GetChannelsQueryParameterType` |
| `CampaignFundingStrategy` | `\EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\GetFunding_strategyQueryParameterType` |
| `KeywordStatus` | `\EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Keyword\GetKeyword_statusQueryParameterType` |
| `ItemMarkdownStatus` | `\EBay\MarketingAndPromotions\Generated\Marketing\Models\ItemMarkdownStatusEnum` |
| `NegativeKeywordStatus` | `\EBay\MarketingAndPromotions\Generated\Marketing\Negative_keyword\GetNegative_keyword_statusQueryParameterType` |

`RecommendationClient`:

| Operation | Previous parameters | Current parameters |
| --- | --- | --- |
| `findListingRecommendations` | `(FindListingRecommendationRequest $body, ?string $filter, ?string $limit, ?string $offset, ?string $accessToken, ?RequestOptions $requestOptions)` | `(FindListingRecommendationRequest $body, ?string $filter, ?int $limit, ?int $offset, ?string $xEBAYCMARKETPLACEID, ?string $accessToken, ?RequestOptions $requestOptions)` |

### Added

#### `MarketingClient`

- `bulkUpsertVideoAdsPreferences`
- `upsertVideoAdsPreferences`
