<?php

namespace Connectum\Models\Orders;

use Connectum\Entity\Custom\CreateOrderEntityMain;
use Connectum\Models\AbstractModel;

class CreateOrder extends AbstractModel
{
    protected $method = 'POST';
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = '/orders/create';

    /**
     * @param float $amount
     * @return $this
     */
    public function rSetAmount(float $amount)
    {
        $this->payload['amount'] = $amount;
        return $this;
    }
    /**
     * @param string $status
     * @return $this
     */
    public function setCurrency(string $currency)
    {
        $this->payload['currency'] = $currency;
        return $this;
    }

    /**
     * @param string|null $from
     * @param string|null $to
     * @return $this
     */
    public function setSegment(string $segment)
    {
        $this->payload['segment'] = $segment;
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
     * @param string $address
     * @return $this
     */
    public function setClientAddress(string $address)
    {
        $this->payload['client']['address'] = $address;
        return $this;
    }

    /**
     * @param string $city
     * @return $this
     */
    public function setClientCity(string $city)
    {
        $this->payload['client']['city'] = $city;
        return $this;
    }

    /**
     * @param string $clientCountry
     * @return $this
     */
    public function setClientCountry(string $clientCountry)
    {
        $this->payload['client']['country'] = $clientCountry;
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
    public function rSetClientEmail(string $clientEmail)
    {
        $this->payload['client']['email'] = $clientEmail;
        return $this;
    }

    /**
     * @param string $phone
     * @return $this
     */
    public function setClientPhone(string $phone)
    {
        $this->payload['client']['phone'] = $phone;
        return $this;
    }

    /**
     * @param string $state
     * @return $this
     */
    public function setClientState(string $state)
    {
        $this->payload['client']['state'] = $state;
        return $this;
    }

    /**
     * @param string $zip
     * @return $this
     */
    public function setClientZip(string $zip)
    {
        $this->payload['client']['zip'] = $zip;
        return $this;
    }

    /**
     * @param array $customFields
     * @return $this
     * @throws \Exception
     */
    public function setCustomFields(array $customFields)
    {
        if (count($customFields) > 10)
            throw new \Exception('Count of custom fields must be less 10 elements in array');

        $this->payload['custom_fields'] = $customFields;
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
     * @param string $expirationTimeout
     * @return $this
     */
    public function setOptionsExpirationTimeout(string $expirationTimeout)
    {
        $this->payload['options']['expiration_timeout'] = $expirationTimeout;
        return $this;
    }

    /**
     * @param int $force3D
     * @return $this
     */
    public function setOptionsExpirationForce3D(int $force3D)
    {
        $this->payload['options']['force3d'] = $force3D;
        return $this;
    }

    /**
     * @param int $autoCharge
     * @return $this
     */
    public function setOptionsAutoCharge(int $autoCharge)
    {
        $this->payload['options']['auto_charge'] = $autoCharge;
        return $this;
    }

    /**
     * @param string $language
     * @return $this
     */
    public function setOptionsAutoLanguage(string $language)
    {
        $this->payload['options']['language'] = $language;
        return $this;
    }

    /**
     * @param string $url
     * @return $this
     */
    public function setOptionsReturnUrl(string $url)
    {
        $this->payload['options']['return_url'] = $url;
        return $this;
    }

    /**
     * @param int $template
     * @return $this
     */
    public function setOptionsTemplate(int $template)
    {
        $this->payload['options']['template'] = $template;
        return $this;
    }

    /**
     * @param int $mobile
     * @return $this
     */
    public function setOptionsMobile(int $mobile)
    {
        $this->payload['options']['mobile'] = $mobile;
        return $this;
    }

    /**
     * @param string $terminal
     * @return $this
     */
    public function setOptionsTerminal(string $terminal)
    {
        $this->payload['options']['terminal'] = $terminal;
        return $this;
    }


    public function get(): CreateOrderEntityMain
    {
        return parent::get(); // TODO: Change the autogenerated stub
    }
}
