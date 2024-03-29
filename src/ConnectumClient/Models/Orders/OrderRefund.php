<?php

namespace Connectum\Models\Orders;

use Connectum\Entity\Custom\OrderRefundEntityMain;
use Connectum\Models\AbstractModel;

class OrderRefund extends AbstractModel
{
    protected $method = 'PUT';
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = '/orders/{id}/refund';


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
     * @param float $amount
     */
    public function rSetAmount(float $amount)
    {
        $this->payload['amount'] = $amount;
        return $this;
    }

    /**
     * @return OrderRefundEntityMain
     */
    public function get(): OrderRefundEntityMain
    {
        return parent::get(); // TODO: Change the autogenerated stub
    }
}
