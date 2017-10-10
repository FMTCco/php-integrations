<?php

namespace FMTCco\Integrations\Apis\AffiliateWindow\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use FMTCco\Integrations\Traits\UnmappedVariables;
use jamesvweston\Utilities\ArrayUtil as AU;

class Transaction implements \JsonSerializable
{

    use SimpleSerializable, UnmappedVariables;

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $url;

    /**
     * @var int
     */
    protected $advertiserId;

    /**
     * @var int
     */
    protected $publisherId;

    /**
     * @var string
     */
    protected $siteName;


    protected $commissionSharingPublisherId;

    /**
     * @var string
     */
    protected $commissionStatus;

    /**
     * @var Amount
     */
    protected $commissionAmount;

    /**
     * @var Amount
     */
    protected $saleAmount;

    /**
     * @var array
     */
    protected $clickRefs;

    /**
     * @var string
     */
    protected $clickDate;

    /**
     * @var string
     */
    protected $transactionDate;

    /**
     * @var string|null
     */
    protected $validationDate;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string|null
     */
    protected $declineReason;

    /**
     * @var bool
     */
    protected $voucherCodeUsed;

    /**
     * @var bool|null
     */
    protected $voucherCode;

    /**
     * @var int
     */
    protected $lapseTime;

    /**
     * @var bool
     */
    protected $amended;

    /**
     * @var string|null
     */
    protected $amendReason;

    /**
     * @var float|null
     */
    protected $oldSaleAmount;

    /**
     * @var float|null
     */
    protected $oldCommissionAmount;

    /**
     * @var string
     */
    protected $clickDevice;

    /**
     * @var string
     */
    protected $transactionDevice;

    /**
     * @var string
     */
    protected $publisherUrl;

    /**
     * @var string
     */
    protected $advertiserCountry;

    /**
     * @var string
     */
    protected $orderRef;

    /**
     * @var CustomParameter []
     */
    protected $customParameters;

    /**
     * @var TransactionPart []
     */
    protected $transactionParts;

    /**
     * @var bool
     */
    protected $paidToPublisher;

    /**
     * @var int
     */
    protected $paymentId;

    /**
     * @var int
     */
    protected $transactionQueryId;

    /**
     * @var float|null
     */
    protected $originalSaleAmount;


    public function __construct($data = [])
    {
        //  print_r($data['customParameters']);die;
        $this->id                       = AU::getUnset($data, 'id');
        $this->url                      = AU::getUnset($data, 'url');
        $this->advertiserId             = AU::getUnset($data, 'advertiserId');
        $this->publisherId              = AU::getUnset($data, 'publisherId');
        $this->siteName                 = AU::getUnset($data, 'siteName');
        $this->commissionSharingPublisherId = AU::getUnset($data, 'commissionSharingPublisherId');
        $this->commissionStatus         = AU::getUnset($data, 'commissionStatus');
        $this->commissionAmount         = new Amount(AU::getUnset($data, 'commissionAmount'));
        $this->saleAmount               = new Amount(AU::getUnset($data, 'saleAmount'));

        $this->transactionParts         = [];
        $transactionParts               = AU::getUnset($data, 'transactionParts');
        foreach ($transactionParts AS $item)
            $this->transactionParts     = new TransactionPart($item);

        $this->clickRefs                = AU::getUnset($data, 'clickRefs');
        $this->clickDate                = AU::getUnset($data, 'clickDate');
        $this->transactionDate          = AU::getUnset($data, 'transactionDate');
        $this->validationDate           = AU::getUnset($data, 'validationDate');
        $this->type                     = AU::getUnset($data, 'type');
        $this->declineReason            = AU::getUnset($data, 'declineReason');
        $this->voucherCodeUsed          = AU::getUnset($data, 'voucherCodeUsed');
        $this->voucherCode              = AU::getUnset($data, 'voucherCode');
        $this->lapseTime                = AU::getUnset($data, 'lapseTime');
        $this->amended                  = AU::getUnset($data, 'amended');
        $this->amendReason              = AU::getUnset($data, 'amendReason');
        $this->oldSaleAmount            = AU::getUnset($data, 'oldSaleAmount');
        $this->oldCommissionAmount      = AU::getUnset($data, 'oldCommissionAmount');
        $this->clickDevice              = AU::getUnset($data, 'clickDevice');
        $this->transactionDevice        = AU::getUnset($data, 'transactionDevice');
        $this->publisherUrl             = AU::getUnset($data, 'publisherUrl');
        $this->advertiserCountry        = AU::getUnset($data, 'advertiserCountry');

        $this->orderRef                 = AU::getUnset($data, 'orderRef');
        $customParameters               = AU::getUnset($data, 'customParameters', []);
        $this->customParameters         = [];
        foreach ($customParameters AS $item)
            $this->customParameters     = new CustomParameter($item);

        $this->paymentId                = AU::getUnset($data, 'paymentId');
        $this->transactionQueryId       = AU::getUnset($data, 'transactionQueryId');
        $this->originalSaleAmount       = AU::getUnset($data, 'originalSaleAmount');

        $this->paidToPublisher          = AU::getUnset($data, 'paidToPublisher');

        $this->setUnmappedVariablesFromResponse($data);
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return int
     */
    public function getAdvertiserId()
    {
        return $this->advertiserId;
    }

    /**
     * @return int
     */
    public function getPublisherId()
    {
        return $this->publisherId;
    }

    /**
     * @return string
     */
    public function getSiteName()
    {
        return $this->siteName;
    }

    /**
     * @return null
     */
    public function getCommissionSharingPublisherId()
    {
        return $this->commissionSharingPublisherId;
    }

    /**
     * @return string
     */
    public function getCommissionStatus()
    {
        return $this->commissionStatus;
    }

    /**
     * @return Amount
     */
    public function getCommissionAmount()
    {
        return $this->commissionAmount;
    }

    /**
     * @return Amount
     */
    public function getSaleAmount()
    {
        return $this->saleAmount;
    }

    /**
     * @return array
     */
    public function getClickRefs()
    {
        return $this->clickRefs;
    }

    /**
     * @return string
     */
    public function getClickDate()
    {
        return $this->clickDate;
    }

    /**
     * @return string
     */
    public function getTransactionDate()
    {
        return $this->transactionDate;
    }

    /**
     * @return null|string
     */
    public function getValidationDate()
    {
        return $this->validationDate;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return null|string
     */
    public function getDeclineReason()
    {
        return $this->declineReason;
    }

    /**
     * @return bool
     */
    public function isVoucherCodeUsed()
    {
        return $this->voucherCodeUsed;
    }

    /**
     * @return bool|null
     */
    public function getVoucherCode()
    {
        return $this->voucherCode;
    }

    /**
     * @return int
     */
    public function getLapseTime()
    {
        return $this->lapseTime;
    }

    /**
     * @return bool
     */
    public function isAmended()
    {
        return $this->amended;
    }

    /**
     * @return null|string
     */
    public function getAmendReason()
    {
        return $this->amendReason;
    }

    /**
     * @return float|null
     */
    public function getOldSaleAmount()
    {
        return $this->oldSaleAmount;
    }

    /**
     * @return float|null
     */
    public function getOldCommissionAmount()
    {
        return $this->oldCommissionAmount;
    }

    /**
     * @return string
     */
    public function getClickDevice()
    {
        return $this->clickDevice;
    }

    /**
     * @return string
     */
    public function getTransactionDevice()
    {
        return $this->transactionDevice;
    }

    /**
     * @return string
     */
    public function getPublisherUrl()
    {
        return $this->publisherUrl;
    }

    /**
     * @return string
     */
    public function getAdvertiserCountry()
    {
        return $this->advertiserCountry;
    }

    /**
     * @return string
     */
    public function getOrderRef()
    {
        return $this->orderRef;
    }

    /**
     * @return CustomParameter[]
     */
    public function getCustomParameters()
    {
        return $this->customParameters;
    }

    /**
     * @return TransactionPart[]
     */
    public function getTransactionParts()
    {
        return $this->transactionParts;
    }

    /**
     * @return bool
     */
    public function isPaidToPublisher()
    {
        return $this->paidToPublisher;
    }

    /**
     * @return int
     */
    public function getPaymentId()
    {
        return $this->paymentId;
    }

    /**
     * @return int
     */
    public function getTransactionQueryId()
    {
        return $this->transactionQueryId;
    }

    /**
     * @return float|null
     */
    public function getOriginalSaleAmount()
    {
        return $this->originalSaleAmount;
    }

}