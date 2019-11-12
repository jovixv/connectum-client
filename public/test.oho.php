<?php

include_once '../vendor/autoload.php';

use Connectum\Connectum;
use Connectum\Services\EntityCreator\EntityCreator;
use Connectum\Models\Orders\CreateOrder;
use Connectum\Models\Orders\OrderInformation;
use Connectum\Models\Orders\OrderList;
use Connectum\Models\Operations\OperationsList;
use Connectum\Models\Currency\ExchangeRates;
use Connectum\Models\Orders\OrderReverse;
use Connectum\Models\Orders\OrderCharge;


$client = new Connectum();
$client->setConfig('C:\Users\01\Desktop\Chage NoteBook\OSPanel_premium\OSPanel\domains\connectum-package\public\config.php');
$model = new OperationsList();
//$model1 = new OrderInformation();

//$res = $model->setEmail('igrolan@gmail.com')->setAmount(54.5)->get();//->setTaskId('10111513-2974-0066-0000-26927c31ec39')->setSeType('organic')->setSe('google');

//$res = $model->get();



//dd($res);


// Create tasks with range postID.
//for($i=1; $i<10; $i++)
//{
//
//    $pool[$i] = clone $model->setSe("google")
//        ->setSeType('organic')
//        ->setLanguageCode('en')
//        ->setKey('seo'.$i)
//        ->setLocationCode(2840)
//        ->setPostID($i);
//s
//}


//$res1  = $model1->setOrderID($res->orders[0]->id)->get();
//
//dd($res1);



//foreach ($res->tasks as $task)
//{
//    foreach ($task->result as $result)
//    {
//        foreach ($result->items as $item)
//        {
//            /**
//             * @var $item
//             */
//            if (is_a($item, '\Connectum\Entity\Custom\GetAdvancedSerpResultsByIdEntityItemsAnswer_box'))
//            {
//                dd($item);
//            }
//
//        }
//
//    }
//}

//
//
//$results = $res->getResultsByPostID(0);
//
//dd($results->items);
//
//foreach ($results->items as $item)
//{
//    dump($item->title);
//    dump($item->position_absolute);
//}
//
//
////$mainResults = $res->getResultsByPostID(0);
////
////foreach ($mainResults as $keywordItem)
////{
////    dump($keywordItem->key, $keywordItem->ms);
////}
////
//
//
//
//
$cr = new EntityCreator('C:\Users\01\Desktop\Chage NoteBook\OSPanel_premium\OSPanel\domains\connectum-package\src\ConnectumClient\Entity\Custom');

$cr->createEntityByJson('{
"orders" : [
{
"amount" : "9.99",
"amount_charged" : "0.00",
"amount_refunded" : "0.00",
"auth_code" : "AUTH12",
"card" : {
"holder" : "John Smith",
"subtype" : "classic",
"type" : "visa"
},
"client" : {},
"created" : "2016-08-22 15:39:44",
"currency" : "USD",
"custom_fields" : {},
"description" : null,
"descriptor" : "TESTMERCH/TERM",
"id" : "23014805692462630",
"issuer" : {
"bin" : "411111",
"country" : "UKR",
"title" : "TestBank"
},
"location" : {
"ip" : "6.6.6.6"
},
"merchant_order_id" : null,
"operations" : [
{
"amount" : "9.99",
"auth_code" : "AUTH12",
"cashflow" : {
"amount" : "0.00",
"currency" : "USD",
"fee" : "0.00",
"incoming" : "0.00",
"receivable" : "0.00",
"reserve" : "0.00"
},
"created" : "2016-08-22 15:39:45",
"currency" : "USD",
"iso_message" : "Approved",
"iso_response_code" : "00",
"status" : "success",
"type" : "authorize"
},
{
"amount" : "9.99",
"auth_code" : "AUTH12",
"cashflow" : {
"amount" : "0.00",
"currency" : "USD",
"fee" : "0.00",
"incoming" : "0.00",
"receivable" : "0.00",
"reserve" : "0.00"
},
"created" : "2016-08-22 15:39:50",
"currency" : "USD",
"iso_message" : "Approved",
"iso_response_code" : "00",
"status" : "success",
"type" : "reverse"
}
],
"pan" : "411111****1111",
"secure3d" : {},
"status" : "reversed",
"updated" : "2016-08-22 15:39:50"
}
]
}', 'OrderRebill', false);
//$json = $model->getAsJson();

//$mapper = new \Connectum\Models\DataMapper('TestModel',$json);

//$test = $mapper->paveData($json, null);
//
//dd($test);
