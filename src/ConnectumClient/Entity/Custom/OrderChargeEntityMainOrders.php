<?php

namespace Connectum\Entity\Custom;

use Connectum\Entity\Custom\OrderChargeEntityMainOrdersCard;
use Connectum\Entity\Custom\OrderChargeEntityMainOrdersClient;
use Connectum\Entity\Custom\OrderChargeEntityMainOrdersCustom_fields;
use Connectum\Entity\Custom\OrderChargeEntityMainOrdersIssuer;
use Connectum\Entity\Custom\OrderChargeEntityMainOrdersLocation;
use Connectum\Entity\Custom\OrderChargeEntityMainOrdersOperations;
use Connectum\Entity\Custom\OrderChargeEntityMainOrdersSecure3d;

class OrderChargeEntityMainOrders 
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
    * @var null|OrderChargeEntityMainOrdersCard card;
    */
    public $card = null;        
    
    /**
    * @var null|OrderChargeEntityMainOrdersClient client;
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
    * @var null|OrderChargeEntityMainOrdersCustom_fields custom_fields;
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
    * @var null|OrderChargeEntityMainOrdersIssuer issuer;
    */
    public $issuer = null;        
    
    /**
    * @var null|OrderChargeEntityMainOrdersLocation location;
    */
    public $location = null;        
    
    /**
    * @var null|NULL merchant_order_id;
    */
    public $merchant_order_id = null;        
    
    /**
    * @var null|OrderChargeEntityMainOrdersOperations[] operations;
    */
    public $operations = null;        
    
    /**
    * @var null|string pan;
    */
    public $pan = null;        
    
    /**
    * @var null|OrderChargeEntityMainOrdersSecure3d secure3d;
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