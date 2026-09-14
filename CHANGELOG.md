# ChangeLog

## 0.2.0 (09/14/2026)

### Breaking changes

#### Changed signatures

`MarketingClient`:

| Operation | Previous parameters | Current parameters |
| --- | --- | --- |
| `createEmailCampaign` | `(CreateEmailCampaignRequest, ?string, ?RequestOptions)` | `(CreateEmailCampaignRequest, ?string, ?string, ?RequestOptions)` |
| `findCampaignByAdReference` | `(?string, ?string, ?string, ?string, ?RequestOptions)` | `(?string, ?FindCampaignInventoryReferenceType, ?string, ?string, ?RequestOptions)` |
| `getAd` | `(string $adId, string $campaignId, ?string $accessToken, ?RequestOptions $requestOptions)` | `(string $adId, string $campaignId, ?AdByIdFieldgroups $fieldgroups, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getAdGroups` | `(string, ?string, ?string, ?string, ?string, ?RequestOptions)` | `(string, ?AdGroupStatus, ?string, ?string, ?string, ?RequestOptions)` |
| `getAds` | `(string $campaignId, ?string $adGroupIds, ?string $adStatus, ?string $limit, ?string $listingIds, ?string $offset, ?string $accessToken, ?RequestOptions $requestOptions)` | `(string $campaignId, ?string $adGroupIds, ?AdStatus $adStatus, ?string $limit, ?string $listingIds, ?string $offset, ?AdsFieldgroups $fieldgroups, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getAdsByInventoryReference` | `(string, ?string, ?string, ?string, ?RequestOptions)` | `(string, ?string, ?AdsInventoryReferenceType, ?string, ?RequestOptions)` |
| `getCampaigns` | `(?string $campaignName, ?string $campaignStatus, ?string $campaignTargetingTypes, ?string $channels, ?string $endDateRange, ?string $fundingStrategy, ?string $limit, ?string $offset, ?string $startDateRange, ?string $accessToken, ?RequestOptions $requestOptions)` | `(?string $campaignName, ?CampaignStatus $campaignStatus, ?CampaignTargetingTypes $campaignTargetingTypes, ?CampaignChannels $channels, ?string $endDateRange, ?CampaignFundingStrategy $fundingStrategy, ?string $limit, ?string $offset, ?string $startDateRange, ?string $marketplaceId, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getKeywords` | `(string, ?string, ?string, ?string, ?string, ?string, ?RequestOptions)` | `(string, ?string, ?KeywordStatus, ?string, ?string, ?string, ?RequestOptions)` |
| `getListingSet` | `(string, ?string, ?string, ?string, ?string, ?string, ?string, ?RequestOptions)` | `(string, ?string, ?string, ?string, ?string, ?ItemMarkdownStatus, ?string, ?RequestOptions)` |
| `getNegativeKeywords` | `(?string, ?string, ?string, ?string, ?string, ?string, ?RequestOptions)` | `(?string, ?string, ?string, ?NegativeKeywordStatus, ?string, ?string, ?RequestOptions)` |
| `suggestBudget` | `(?string, ?RequestOptions)` | `(?string, ?string, ?RequestOptions)` |

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
| `findListingRecommendations` | `(FindListingRecommendationRequest, ?string, ?string, ?string, ?string, ?RequestOptions)` | `(FindListingRecommendationRequest, ?string, ?int, ?int, ?string, ?string, ?RequestOptions)` |

### Added

#### `MarketingClient`

- `bulkUpsertVideoAdsPreferences`
- `upsertVideoAdsPreferences`
