<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/resources/billing_setup.proto

namespace Google\Ads\GoogleAds\V0\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A billing setup across Ads and Payments systems; an association between a
 * Payments account and an advertiser. A billing setup is specific to one
 * advertiser.
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.resources.BillingSetup</code>
 */
class BillingSetup extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the billing setup.
     * BillingSetup resource names have the form:
     * `customers/{customer_id}/billingSetups/{billing_setup_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    private $resource_name = '';
    /**
     * The ID of the billing setup.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     */
    private $id = null;
    /**
     * The status of the billing setup.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.BillingSetupStatusEnum.BillingSetupStatus status = 3;</code>
     */
    private $status = 0;
    /**
     * A 16 digit id used to identify the Payments account associated with the
     * billing setup.
     * This must be passed as a string with dashes, e.g. "1234-5678-9012-3456".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue payments_account_id = 4;</code>
     */
    private $payments_account_id = null;
    /**
     * The name of the Payments account associated with the billing setup.
     * This enables the user to specify a meaningful name for a Payments account
     * to aid in reconciling monthly invoices.
     * This name will be printed in the monthly invoices.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue payments_account_name = 5;</code>
     */
    private $payments_account_name = null;
    /**
     * A 12 digit id used to identify the Payments profile associated with the
     * billing setup.
     * This must be passed in as a string with dashes, e.g. "1234-5678-9012".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue payments_profile_id = 6;</code>
     */
    private $payments_profile_id = null;
    /**
     * The name of the Payments profile associated with the billing setup.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue payments_profile_name = 7;</code>
     */
    private $payments_profile_name = null;
    /**
     * A secondary payments profile id present in uncommon situations, e.g.
     * when a sequential liability agreement has been arranged.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue secondary_payments_profile_id = 8;</code>
     */
    private $secondary_payments_profile_id = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the billing setup.
     *           BillingSetup resource names have the form:
     *           `customers/{customer_id}/billingSetups/{billing_setup_id}`
     *     @type \Google\Protobuf\Int64Value $id
     *           The ID of the billing setup.
     *     @type int $status
     *           The status of the billing setup.
     *     @type \Google\Protobuf\StringValue $payments_account_id
     *           A 16 digit id used to identify the Payments account associated with the
     *           billing setup.
     *           This must be passed as a string with dashes, e.g. "1234-5678-9012-3456".
     *     @type \Google\Protobuf\StringValue $payments_account_name
     *           The name of the Payments account associated with the billing setup.
     *           This enables the user to specify a meaningful name for a Payments account
     *           to aid in reconciling monthly invoices.
     *           This name will be printed in the monthly invoices.
     *     @type \Google\Protobuf\StringValue $payments_profile_id
     *           A 12 digit id used to identify the Payments profile associated with the
     *           billing setup.
     *           This must be passed in as a string with dashes, e.g. "1234-5678-9012".
     *     @type \Google\Protobuf\StringValue $payments_profile_name
     *           The name of the Payments profile associated with the billing setup.
     *     @type \Google\Protobuf\StringValue $secondary_payments_profile_id
     *           A secondary payments profile id present in uncommon situations, e.g.
     *           when a sequential liability agreement has been arranged.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V0\Resources\BillingSetup::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the billing setup.
     * BillingSetup resource names have the form:
     * `customers/{customer_id}/billingSetups/{billing_setup_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the billing setup.
     * BillingSetup resource names have the form:
     * `customers/{customer_id}/billingSetups/{billing_setup_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * The ID of the billing setup.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The ID of the billing setup.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->id = $var;

        return $this;
    }

    /**
     * The status of the billing setup.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.BillingSetupStatusEnum.BillingSetupStatus status = 3;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the billing setup.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.BillingSetupStatusEnum.BillingSetupStatus status = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V0\Enums\BillingSetupStatusEnum_BillingSetupStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * A 16 digit id used to identify the Payments account associated with the
     * billing setup.
     * This must be passed as a string with dashes, e.g. "1234-5678-9012-3456".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue payments_account_id = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getPaymentsAccountId()
    {
        return $this->payments_account_id;
    }

    /**
     * A 16 digit id used to identify the Payments account associated with the
     * billing setup.
     * This must be passed as a string with dashes, e.g. "1234-5678-9012-3456".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue payments_account_id = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setPaymentsAccountId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->payments_account_id = $var;

        return $this;
    }

    /**
     * The name of the Payments account associated with the billing setup.
     * This enables the user to specify a meaningful name for a Payments account
     * to aid in reconciling monthly invoices.
     * This name will be printed in the monthly invoices.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue payments_account_name = 5;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getPaymentsAccountName()
    {
        return $this->payments_account_name;
    }

    /**
     * The name of the Payments account associated with the billing setup.
     * This enables the user to specify a meaningful name for a Payments account
     * to aid in reconciling monthly invoices.
     * This name will be printed in the monthly invoices.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue payments_account_name = 5;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setPaymentsAccountName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->payments_account_name = $var;

        return $this;
    }

    /**
     * A 12 digit id used to identify the Payments profile associated with the
     * billing setup.
     * This must be passed in as a string with dashes, e.g. "1234-5678-9012".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue payments_profile_id = 6;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getPaymentsProfileId()
    {
        return $this->payments_profile_id;
    }

    /**
     * A 12 digit id used to identify the Payments profile associated with the
     * billing setup.
     * This must be passed in as a string with dashes, e.g. "1234-5678-9012".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue payments_profile_id = 6;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setPaymentsProfileId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->payments_profile_id = $var;

        return $this;
    }

    /**
     * The name of the Payments profile associated with the billing setup.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue payments_profile_name = 7;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getPaymentsProfileName()
    {
        return $this->payments_profile_name;
    }

    /**
     * The name of the Payments profile associated with the billing setup.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue payments_profile_name = 7;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setPaymentsProfileName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->payments_profile_name = $var;

        return $this;
    }

    /**
     * A secondary payments profile id present in uncommon situations, e.g.
     * when a sequential liability agreement has been arranged.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue secondary_payments_profile_id = 8;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getSecondaryPaymentsProfileId()
    {
        return $this->secondary_payments_profile_id;
    }

    /**
     * A secondary payments profile id present in uncommon situations, e.g.
     * when a sequential liability agreement has been arranged.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue secondary_payments_profile_id = 8;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setSecondaryPaymentsProfileId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->secondary_payments_profile_id = $var;

        return $this;
    }

}
