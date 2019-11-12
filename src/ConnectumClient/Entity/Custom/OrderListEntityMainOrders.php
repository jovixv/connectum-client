<?php

namespace Connectum\Entity\Custom;

use Connectum\Entity\Custom\OrderListEntityMainOrdersCard;
use Connectum\Entity\Custom\OrderListEntityMainOrdersClient;
use Connectum\Entity\Custom\OrderListEntityMainOrdersCustom_fields;
use Connectum\Entity\Custom\OrderListEntityMainOrdersIssuer;
use Connectum\Entity\Custom\OrderListEntityMainOrdersLocation;
use Connectum\Entity\Custom\OrderListEntityMainOrdersOperations;
use Connectum\Entity\Custom\OrderListEntityMainOrdersSecure3d;

class OrderListEntityMainOrders 
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
    * @var null|OrderListEntityMainOrdersCard card;
    */
    public $card = null;        
    
    /**
    * @var null|OrderListEntityMainOrdersClient client;
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
    * @var null|OrderListEntityMainOrdersCustom_fields custom_fields;
    */
    public $custom_fields = null;        
    
    /**
    * @var null|string description;
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
    * @var null|OrderListEntityMainOrdersIssuer issuer;
    */
    public $issuer = null;        
    
    /**
    * @var null|OrderListEntityMainOrdersLocation location;
    */
    public $location = null;        
    
    /**
    * @var null|string merchant_order_id;
    */
    public $merchant_order_id = null;        
    
    /**
    * @var null|OrderListEntityMainOrdersOperations[] operations;
    */
    public $operations = null;        
    
    /**
    * @var null|string pan;
    */
    public $pan = null;        
    
    /**
    * @var null|OrderListEntityMainOrdersSecure3d secure3d;
    */
    public $secure3d = null;        
    
    /**
    * @var null|string segment;
    */
    public $segment = null;        
    
    /**
    * @var null|string status;
    */
    public $status = null;        
    
    /**
    * @var null|string updated;
    */
    public $updated = null;        
     
}