<?php

namespace Connectum\Entity\Custom;

use Connectum\Entity\Custom\OrderCancelEntityMainOrdersCard;
use Connectum\Entity\Custom\OrderCancelEntityMainOrdersClient;
use Connectum\Entity\Custom\OrderCancelEntityMainOrdersCustom_fields;
use Connectum\Entity\Custom\OrderCancelEntityMainOrdersIssuer;
use Connectum\Entity\Custom\OrderCancelEntityMainOrdersLocation;
use Connectum\Entity\Custom\OrderCancelEntityMainOrdersOperations;
use Connectum\Entity\Custom\OrderCancelEntityMainOrdersSecure3d;

class OrderCancelEntityMainOrders 
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
    * @var null|OrderCancelEntityMainOrdersCard card;
    */
    public $card = null;        
    
    /**
    * @var null|OrderCancelEntityMainOrdersClient client;
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
    * @var null|OrderCancelEntityMainOrdersCustom_fields custom_fields;
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
    * @var null|OrderCancelEntityMainOrdersIssuer issuer;
    */
    public $issuer = null;        
    
    /**
    * @var null|OrderCancelEntityMainOrdersLocation location;
    */
    public $location = null;        
    
    /**
    * @var null|NULL merchant_order_id;
    */
    public $merchant_order_id = null;        
    
    /**
    * @var null|OrderCancelEntityMainOrdersOperations[] operations;
    */
    public $operations = null;        
    
    /**
    * @var null|string pan;
    */
    public $pan = null;        
    
    /**
    * @var null|OrderCancelEntityMainOrdersSecure3d secure3d;
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