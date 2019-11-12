<?php

namespace Connectum\Entity\Custom;

use Connectum\Entity\Custom\OrderReverseEntityMainOrdersCard;
use Connectum\Entity\Custom\OrderReverseEntityMainOrdersClient;
use Connectum\Entity\Custom\OrderReverseEntityMainOrdersCustom_fields;
use Connectum\Entity\Custom\OrderReverseEntityMainOrdersIssuer;
use Connectum\Entity\Custom\OrderReverseEntityMainOrdersLocation;
use Connectum\Entity\Custom\OrderReverseEntityMainOrdersOperations;
use Connectum\Entity\Custom\OrderReverseEntityMainOrdersSecure3d;

class OrderReverseEntityMainOrders 
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
    * @var null|OrderReverseEntityMainOrdersCard card;
    */
    public $card = null;        
    
    /**
    * @var null|OrderReverseEntityMainOrdersClient client;
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
    * @var null|OrderReverseEntityMainOrdersCustom_fields custom_fields;
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
    * @var null|OrderReverseEntityMainOrdersIssuer issuer;
    */
    public $issuer = null;        
    
    /**
    * @var null|OrderReverseEntityMainOrdersLocation location;
    */
    public $location = null;        
    
    /**
    * @var null|NULL merchant_order_id;
    */
    public $merchant_order_id = null;        
    
    /**
    * @var null|OrderReverseEntityMainOrdersOperations[] operations;
    */
    public $operations = null;        
    
    /**
    * @var null|string pan;
    */
    public $pan = null;        
    
    /**
    * @var null|OrderReverseEntityMainOrdersSecure3d secure3d;
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