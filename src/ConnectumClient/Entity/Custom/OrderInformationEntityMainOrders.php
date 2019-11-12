<?php

namespace Connectum\Entity\Custom;

use Connectum\Entity\Custom\OrderInformationEntityMainOrdersCard;
use Connectum\Entity\Custom\OrderInformationEntityMainOrdersClient;
use Connectum\Entity\Custom\OrderInformationEntityMainOrdersCustom_fields;
use Connectum\Entity\Custom\OrderInformationEntityMainOrdersIssuer;
use Connectum\Entity\Custom\OrderInformationEntityMainOrdersLocation;
use Connectum\Entity\Custom\OrderInformationEntityMainOrdersOperations;
use Connectum\Entity\Custom\OrderInformationEntityMainOrdersSecure3d;

class OrderInformationEntityMainOrders 
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
    * @var null|OrderInformationEntityMainOrdersCard card;
    */
    public $card = null;        
    
    /**
    * @var null|OrderInformationEntityMainOrdersClient client;
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
    * @var null|OrderInformationEntityMainOrdersCustom_fields custom_fields;
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
    * @var null|OrderInformationEntityMainOrdersIssuer issuer;
    */
    public $issuer = null;        
    
    /**
    * @var null|OrderInformationEntityMainOrdersLocation location;
    */
    public $location = null;        
    
    /**
    * @var null|string merchant_order_id;
    */
    public $merchant_order_id = null;        
    
    /**
    * @var null|OrderInformationEntityMainOrdersOperations[] operations;
    */
    public $operations = null;        
    
    /**
    * @var null|string pan;
    */
    public $pan = null;        
    
    /**
    * @var null|OrderInformationEntityMainOrdersSecure3d secure3d;
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