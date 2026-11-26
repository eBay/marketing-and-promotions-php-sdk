# ChangeLog

## 0.3.0 (11/26/2026)

### Breaking changes

- The following operations changed signature on `MarketingClient`:
| Operation | Previous signature | New signature |
| --- | --- | --- |
| `getCampaigns` | `getCampaigns(?string campaignName, ?\EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\GetCampaign_statusQueryParameterType campaignStatus, ?\EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\GetCampaign_targeting_typesQueryParameterType campaignTargetingTypes, ?\EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\GetChannelsQueryParameterType channels, ?string endDateRange, ?\EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\GetFunding_strategyQueryParameterType fundingStrategy, ?string limit, ?string offset, ?string startDateRange, ?string marketplaceId, ?string accessToken, ?RequestOptions requestOptions)` | `getCampaigns(?string campaignName, ?\EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\GetCampaign_statusQueryParameterType campaignStatus, ?\EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\GetCampaign_targeting_typesQueryParameterType campaignTargetingTypes, ?\EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\GetChannelsQueryParameterType channels, ?string endDateRange, ?\EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\GetFunding_strategyQueryParameterType fundingStrategy, ?string limit, ?string offset, ?string startDateRange, ?\EBay\MarketingAndPromotions\Generated\Marketing\Models\MarketplaceIdEnum marketplaceId, ?string accessToken, ?RequestOptions requestOptions)` |

### Security

- `KiotaAuthProvider` created with an empty `$allowedHosts` list no longer returns the access token for every host. It now requires the URL's host to be in the list.

### Added

- The following operations were added to `MarketingClient`:
  - `activatePromotion`
  - `getSellerPromotionalOffers`

- Local mock servers: a base URL may use plain `http` when its host is a loopback host (`127.0.0.1`, `::1` or `localhost`) that you also pass in `$allowedHosts`, for example `allowedHosts: ['127.0.0.1']`. Every other host still requires `https`. `MarketingAndPromotionsConfiguration::LOOPBACK_HOSTS` lists the loopback hosts.
- `MarketingAndPromotionsConfiguration::untrustedReason()` says why a URL may not receive the access token, and `MarketingAndPromotionsConfiguration::normalizeHost()` normalizes a host the same way the SDK compares hosts.

### Changed

- Updated the `marketing` OpenAPI document to the latest definitions.
- Hosts are compared lowercased and without IPv6 brackets, so `[::1]` and `::1` match.
- A rejected base URL now says whether the scheme or the host is not trusted.

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
