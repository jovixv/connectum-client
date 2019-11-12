<?php

namespace Connectum\Models;

class ResponseModel implements \IteratorAggregate
{
    /**
     * @var bool $requestStatus status of http request
     */
    private $requestStatus = false;

    /**
     * @var string $pathToMainData path for Iterator
     */
    private $pathToMainData;

    public $status_code;

    public $failure_type = '';

    public $failure_message = '';

    public $order_id = null;

    public $headers  = [];

    public $errors = null;
    /**
     * ResponseModel constructor.
     * @param bool $requestStatus
     */
    public function __construct(bool $requestStatus, string $pathToMainData)
    {
        $this->requestStatus = $requestStatus;
        $this->pathToMainData = $pathToMainData;
    }

    public function getIterator(): \Traversable
    {
        // TODO: Implement getIterator() method.
    }

    /**
     * @return bool
     */
    public function isSuccessful() : bool
    {
        return $this->requestStatus;
    }

    /**
     * @param $postID
     * @return mixed|null
     */
    public function getResultsByPostID($postID)
    {
        $pathToData = str_replace('{$postID}', $postID, $this->pathToMainData);
        $pathDataSegments = explode('->', $pathToData);

        $tempData = null;

        foreach ($pathDataSegments as $segment){

            if ($tempData !== null){
                if (is_numeric($segment))
                    $tempData = $tempData[$segment];

                if (!is_numeric($segment))
                    $tempData = $tempData->{$segment};
            }

            if ($tempData === null)
                $tempData = $this->{$segment};
        }

        return $tempData;
    }


    /**
     * @return bool
     */
    public function isSuccessfully():bool
    {
        if (!$this->requestStatus)
            return false;

        if ($this->status_code === null OR $this->status_code > 300)
            return false;

        return true;
    }


}
