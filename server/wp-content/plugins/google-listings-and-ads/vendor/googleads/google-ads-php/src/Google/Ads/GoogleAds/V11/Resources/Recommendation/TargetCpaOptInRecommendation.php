<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/resources/recommendation.proto

namespace Google\Ads\GoogleAds\V11\Resources\Recommendation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The Target CPA opt-in recommendation.
 *
 * Generated from protobuf message <code>google.ads.googleads.v11.resources.Recommendation.TargetCpaOptInRecommendation</code>
 */
class TargetCpaOptInRecommendation extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The available goals and corresponding options for Target CPA strategy.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v11.resources.Recommendation.TargetCpaOptInRecommendation.TargetCpaOptInRecommendationOption options = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $options;
    /**
     * Output only. The recommended average CPA target. See required budget amount and impact
     * of using this recommendation in options list.
     *
     * Generated from protobuf field <code>optional int64 recommended_target_cpa_micros = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $recommended_target_cpa_micros = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V11\Resources\Recommendation\TargetCpaOptInRecommendation\TargetCpaOptInRecommendationOption[]|\Google\Protobuf\Internal\RepeatedField $options
     *           Output only. The available goals and corresponding options for Target CPA strategy.
     *     @type int|string $recommended_target_cpa_micros
     *           Output only. The recommended average CPA target. See required budget amount and impact
     *           of using this recommendation in options list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V11\Resources\Recommendation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The available goals and corresponding options for Target CPA strategy.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v11.resources.Recommendation.TargetCpaOptInRecommendation.TargetCpaOptInRecommendationOption options = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Output only. The available goals and corresponding options for Target CPA strategy.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v11.resources.Recommendation.TargetCpaOptInRecommendation.TargetCpaOptInRecommendationOption options = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V11\Resources\Recommendation\TargetCpaOptInRecommendation\TargetCpaOptInRecommendationOption[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOptions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V11\Resources\Recommendation\TargetCpaOptInRecommendation\TargetCpaOptInRecommendationOption::class);
        $this->options = $arr;

        return $this;
    }

    /**
     * Output only. The recommended average CPA target. See required budget amount and impact
     * of using this recommendation in options list.
     *
     * Generated from protobuf field <code>optional int64 recommended_target_cpa_micros = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getRecommendedTargetCpaMicros()
    {
        return isset($this->recommended_target_cpa_micros) ? $this->recommended_target_cpa_micros : 0;
    }

    public function hasRecommendedTargetCpaMicros()
    {
        return isset($this->recommended_target_cpa_micros);
    }

    public function clearRecommendedTargetCpaMicros()
    {
        unset($this->recommended_target_cpa_micros);
    }

    /**
     * Output only. The recommended average CPA target. See required budget amount and impact
     * of using this recommendation in options list.
     *
     * Generated from protobuf field <code>optional int64 recommended_target_cpa_micros = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setRecommendedTargetCpaMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->recommended_target_cpa_micros = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TargetCpaOptInRecommendation::class, \Google\Ads\GoogleAds\V11\Resources\Recommendation_TargetCpaOptInRecommendation::class);
