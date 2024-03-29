<?php

namespace Connectum\Models\Orders;

use Connectum\Models\AbstractModel;
use Connectum\Entity\Custom\OrderListEntityMain;

class OrderList extends AbstractModel
{
    protected $method = 'GET';
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = '/orders/';


    /**
     * @param string $expand
     * @return $this
     */
    public function setExpand(string $expand)
    {
        $this->payload['expand'] = $expand;
        return $this;
    }

    /**
     * @param string $status
     * @return $this
     */
    public function setStatus(string $status)
    {
        $this->payload['status'] = $status;
        return $this;
    }

    /**
     * @param string|null $from
     * @param string|null $to
     * @return $this
     */
    public function setFilterDate(?string $from = null, ?string $to = null)
    {
        if ($from !== null)
            $this->payload['created_from'] = $from;

        if ($to !== null)
            $this->payload['created_to'] = $to;

        return $this;
    }

    /**
     * @param string $merchantOrderID
     * @return $this
     */
    public function setMerchantOrderID(string $merchantOrderID)
    {
        $this->payload['merchant_order_id'] = $merchantOrderID;

        return $this;
    }

    /**
     * @param string $cardType
     * @return $this
     */
    public function setCardType(string $cardType)
    {
        $this->payload['card']['type'] = $cardType;
        return $this;
    }

    /**
     * @param string $subtype
     * @return $this
     */
    public function setCardSubtype(string $subtype)
    {
        $this->payload['card']['subtype'] = $subtype;
        return $this;
    }

    /**
     * @param string $ip
     * @return $this
     */
    public function setLocationIP(string $ip)
    {
        $this->payload['location']['ip'] = $ip;
        return $this;
    }

    /**
     * @param string $clientName
     * @return $this
     */
    public function setClientName(string $clientName)
    {
        $this->payload['client']['name'] = $clientName;
        return $this;
    }

    /**
     * @param string $clientEmail
     * @return $this
     */
    public function setClientEmail(string $clientEmail)
    {
        $this->payload['client']['email'] = $clientEmail;
        return $this;
    }

    /**
     * @param string $country
     * @return $this
     */
    public function setIssuerCountry(string $country)
    {
        $this->payload['issuer']['country'] = $country;
        return $this;
    }

    /**
     * @param string $bin
     * @return $this
     */
    public function setIssuerBIN(string $bin)
    {
        $this->payload['issuer']['bin'] = $bin;
        return $this;
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setIssuerTitle(string $title)
    {
        $this->payload['issuer']['title'] = $title;
        return $this;
    }

    public function get(): OrderListEntityMain
    {
        return parent::get(); // TODO: Change the autogenerated stub
    }
}
