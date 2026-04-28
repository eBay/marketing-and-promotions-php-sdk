<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing;

use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Ad_campaignRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_report_metadata\Ad_report_metadataRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_report_task\Ad_report_taskRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_report\Ad_reportRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Bulk_create_negative_keyword\Bulk_create_negative_keywordRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Bulk_update_negative_keyword\Bulk_update_negative_keywordRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Email_campaign\Email_campaignRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Item_price_markdown\Item_price_markdownRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Item_promotion\Item_promotionRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Negative_keyword\Negative_keywordRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Promotion_report\Promotion_reportRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Promotion_summary_report\Promotion_summary_reportRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Promotion\PromotionRequestBuilder;
use Microsoft\Kiota\Abstractions\ApiClientBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Serialization\Form\FormParseNodeFactory;
use Microsoft\Kiota\Serialization\Form\FormSerializationWriterFactory;
use Microsoft\Kiota\Serialization\Json\JsonParseNodeFactory;
use Microsoft\Kiota\Serialization\Json\JsonSerializationWriterFactory;
use Microsoft\Kiota\Serialization\Multipart\MultipartSerializationWriterFactory;
use Microsoft\Kiota\Serialization\Text\TextParseNodeFactory;
use Microsoft\Kiota\Serialization\Text\TextSerializationWriterFactory;

/**
 * The main entry point of the SDK, exposes the configuration and the fluent API.
*/
class MarketingApiClient extends BaseRequestBuilder 
{
    /**
     * The ad_campaign property
    */
    public function ad_campaign(): Ad_campaignRequestBuilder {
        return new Ad_campaignRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The ad_report property
    */
    public function ad_report(): Ad_reportRequestBuilder {
        return new Ad_reportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The ad_report_metadata property
    */
    public function ad_report_metadata(): Ad_report_metadataRequestBuilder {
        return new Ad_report_metadataRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The ad_report_task property
    */
    public function ad_report_task(): Ad_report_taskRequestBuilder {
        return new Ad_report_taskRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The bulk_create_negative_keyword property
    */
    public function bulk_create_negative_keyword(): Bulk_create_negative_keywordRequestBuilder {
        return new Bulk_create_negative_keywordRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The bulk_update_negative_keyword property
    */
    public function bulk_update_negative_keyword(): Bulk_update_negative_keywordRequestBuilder {
        return new Bulk_update_negative_keywordRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The email_campaign property
    */
    public function email_campaign(): Email_campaignRequestBuilder {
        return new Email_campaignRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The item_price_markdown property
    */
    public function item_price_markdown(): Item_price_markdownRequestBuilder {
        return new Item_price_markdownRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The item_promotion property
    */
    public function item_promotion(): Item_promotionRequestBuilder {
        return new Item_promotionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The negative_keyword property
    */
    public function negative_keyword(): Negative_keywordRequestBuilder {
        return new Negative_keywordRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The promotion property
    */
    public function promotion(): PromotionRequestBuilder {
        return new PromotionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The promotion_report property
    */
    public function promotion_report(): Promotion_reportRequestBuilder {
        return new Promotion_reportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The promotion_summary_report property
    */
    public function promotion_summary_report(): Promotion_summary_reportRequestBuilder {
        return new Promotion_summary_reportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new MarketingApiClient and sets the default values.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}');
        ApiClientBuilder::registerDefaultSerializer(JsonSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultSerializer(TextSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultSerializer(FormSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultSerializer(MultipartSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultDeserializer(JsonParseNodeFactory::class);
        ApiClientBuilder::registerDefaultDeserializer(TextParseNodeFactory::class);
        ApiClientBuilder::registerDefaultDeserializer(FormParseNodeFactory::class);
        if (empty($this->requestAdapter->getBaseUrl())) {
            $this->requestAdapter->setBaseUrl('https://api.ebay.com{basePath}');
        }
        $this->pathParameters['baseurl'] = $this->requestAdapter->getBaseUrl();
    }

}
