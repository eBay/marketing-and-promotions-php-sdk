# ChangeLog

## 1.0.0 (09/14/2026)

**Breaking changes**
- The following operations changed signature on `MarketingClient`:
  - `createEmailCampaign`: `(CreateEmailCampaignRequest, ?string, ?RequestOptions)` → `(CreateEmailCampaignRequest, ?string, ?string, ?RequestOptions)`
  - `suggestBudget`: `(?string, ?RequestOptions)` → `(?string, ?string, ?RequestOptions)`
- The following operations changed signature on `RecommendationClient`:
  - `findListingRecommendations`: `(FindListingRecommendationRequest, ?string, ?string, ?string, ?string, ?RequestOptions)` → `(FindListingRecommendationRequest, ?string, ?string, ?string, ?string, ?string, ?RequestOptions)`
