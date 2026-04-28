#!/usr/bin/env bash
set -euo pipefail

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"

echo "Regenerating REST clients via Kiota..."

kiota generate -l php \
  -d "$SCRIPT_DIR/specs/sell_marketing_v1_oas3.yaml" \
  -c MarketingApiClient \
  -n 'EBay\MarketingAndPromotions\Generated\Marketing' \
  -o "$SCRIPT_DIR/src/Generated/Marketing" \
  --ebc --co

kiota generate -l php \
  -d "$SCRIPT_DIR/specs/sell_recommendation_v1_oas3.yaml" \
  -c RecommendationApiClient \
  -n 'EBay\MarketingAndPromotions\Generated\Recommendation' \
  -o "$SCRIPT_DIR/src/Generated/Recommendation" \
  --ebc --co

echo "Done. Run 'composer dump-autoload' if new namespaces were added."
