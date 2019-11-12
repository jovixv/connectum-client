<?php

namespace Connectum\Entity\Custom;

use Connectum\Entity\Custom\CreateOrderEntityMainOrdersCard;
use Connectum\Entity\Custom\CreateOrderEntityMainOrdersClient;
use Connectum\Entity\Custom\CreateOrderEntityMainOrdersCustom_fields;
use Connectum\Entity\Custom\CreateOrderEntityMainOrdersIssuer;
use Connectum\Entity\Custom\CreateOrderEntityMainOrdersLocation;
use Connectum\Entity\Custom\CreateOrderEntityMainOrdersSecure3d;

class CreateOrderEntityMainOrders 
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
    * @var null|CreateOrderEntityMainOrdersCard card;
    */
    public $card = null;        
    
    /**
    * @var null|CreateOrderEntityMainOrdersClient client;
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
    * @var null|CreateOrderEntityMainOrdersCustom_fields custom_fields;
    */
    public $custom_fields = null;        
    
    /**
    * @var null|string description;
    */
    public $description = null;        
    
    /**
    * @var null|string id;
    */
    public $id = null;        
    
    /**
    * @var null|CreateOrderEntityMainOrdersIssuer issuer;
    */
    public $issuer = null;        
    
    /**
    * @var null|CreateOrderEntityMainOrdersLocation location;
    */
    public $location = null;        
    
    /**
    * @var null|string merchant_order_id;
    */
    public $merchant_order_id = null;        
    
    /**
    * @var null|array operations;
    */
    public $operations = null;        
    
    /**
    * @var null|CreateOrderEntityMainOrdersSecure3d secure3d;
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