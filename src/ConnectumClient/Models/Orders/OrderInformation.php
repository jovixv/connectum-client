<?php

namespace Connectum\Models\Orders;

use Connectum\Models\AbstractModel;
use Connectum\Entity\Custom\OrderInformationEntityMain;
use function GuzzleHttp\Psr7\str;

class OrderInformation extends AbstractModel
{
    protected $method = 'GET';
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = '/orders/{id}';


    /**
     * @param int $orderID
     * @return $this
     */
    public function rSetOrderID(int $orderID)
    {
        $this->requestToFunction = str_replace('{id}', $orderID, $this->requestToFunction);
        return $this;
    }

    /**
     * @param string $expand
     */
    public function setExpand(string $expand)
    {
        $this->payload['expand'] = $expand;
    }

    /**
     * @return OrderInformationEntityMain
     */
    public function get(): OrderInformationEntityMain
    {
        return parent::get(); // TODO: Change the autogenerated stub
    }
}