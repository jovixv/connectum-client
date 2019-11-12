<?php

namespace Connectum\Entity\Custom;

use Connectum\Entity\Custom\OrderRebillEntityMainOrdersCard;
use Connectum\Entity\Custom\OrderRebillEntityMainOrdersClient;
use Connectum\Entity\Custom\OrderRebillEntityMainOrdersCustom_fields;
use Connectum\Entity\Custom\OrderRebillEntityMainOrdersIssuer;
use Connectum\Entity\Custom\OrderRebillEntityMainOrdersLocation;
use Connectum\Entity\Custom\OrderRebillEntityMainOrdersOperations;
use Connectum\Entity\Custom\OrderRebillEntityMainOrdersSecure3d;

class OrderRebillEntityMainOrders 
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
    * @var null|OrderRebillEntityMainOrdersCard card;
    */
    public $card = null;        
    
    /**
    * @var null|OrderRebillEntityMainOrdersClient client;
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
    * @var null|OrderRebillEntityMainOrdersCustom_fields custom_fields;
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
    * @var null|OrderRebillEntityMainOrdersIssuer issuer;
    */
    public $issuer = null;        
    
    /**
    * @var null|OrderRebillEntityMainOrdersLocation location;
    */
    public $location = null;        
    
    /**
    * @var null|NULL merchant_order_id;
    */
    public $merchant_order_id = null;        
    
    /**
    * @var null|OrderRebillEntityMainOrdersOperations[] operations;
    */
    public $operations = null;        
    
    /**
    * @var null|string pan;
    */
    public $pan = null;        
    
    /**
    * @var null|OrderRebillEntityMainOrdersSecure3d secure3d;
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