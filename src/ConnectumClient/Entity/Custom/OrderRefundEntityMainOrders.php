<?php

namespace Connectum\Entity\Custom;

use Connectum\Entity\Custom\OrderRefundEntityMainOrdersCard;
use Connectum\Entity\Custom\OrderRefundEntityMainOrdersClient;
use Connectum\Entity\Custom\OrderRefundEntityMainOrdersCustom_fields;
use Connectum\Entity\Custom\OrderRefundEntityMainOrdersIssuer;
use Connectum\Entity\Custom\OrderRefundEntityMainOrdersLocation;
use Connectum\Entity\Custom\OrderRefundEntityMainOrdersOperations;
use Connectum\Entity\Custom\OrderRefundEntityMainOrdersSecure3d;

class OrderRefundEntityMainOrders 
{    
    /**
    * @var null|string amount;
    */
    public $amount = null;        
    
    /**
    * @var null|string amount_charged;
    */
    public $amount_charged = null;        
    
    /**
    * @var null|string amount_refunded;
    */
    public $amount_refunded = null;        
    
    /**
    * @var null|string auth_code;
    */
    public $auth_code = null;        
    
    /**
    * @var null|OrderRefundEntityMainOrdersCard card;
    */
    public $card = null;        
    
    /**
    * @var null|OrderRefundEntityMainOrdersClient client;
    */
    public $client = null;        
    
    /**
    * @var null|string created;
    */
    public $created = null;        
    
    /**
    * @var null|string currency;
    */
    public $currency = null;        
    
    /**
    * @var null|OrderRefundEntityMainOrdersCustom_fields custom_fields;
    */
    public $custom_fields = null;        
    
    /**
    * @var null|NULL description;
    */
    public $description = null;        
    
    /**
    * @var null|string descriptor;
    */
    public $descriptor = null;        
    
    /**
    * @var null|string id;
    */
    public $id = null;        
    
    /**
    * @var null|OrderRefundEntityMainOrdersIssuer issuer;
    */
    public $issuer = null;        
    
    /**
    * @var null|OrderRefundEntityMainOrdersLocation location;
    */
    public $location = null;        
    
    /**
    * @var null|NULL merchant_order_id;
    */
    public $merchant_order_id = null;        
    
    /**
    * @var null|OrderRefundEntityMainOrdersOperations[] operations;
    */
    public $operations = null;        
    
    /**
    * @var null|string pan;
    */
    public $pan = null;        
    
    /**
    * @var null|OrderRefundEntityMainOrdersSecure3d secure3d;
    */
    public $secure3d = null;        
    
    /**
    * @var null|string status;
    */
    public $status = null;        
    
    /**
    * @var null|string updated;
    */
    public $updated = null;        
     
}