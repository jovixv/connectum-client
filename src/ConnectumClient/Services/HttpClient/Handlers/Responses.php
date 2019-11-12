<?php

namespace Connectum\Services\HttpClient\Handlers;

class Responses
{
    /**
     * @var bool $status
     */
    private $status;

    /**
     * @var null|string $response
     */
    private $response;

    /**
     * @var null
     */
    private $errorMessage;

    /**
     * @var null
     */
    private $headers;

    /**
     * @var int $httpStatus
     */
    private $httpStatus;

    /**
     * @var
     */
    private $errors;

    public function __construct($status, $errorMessage = null, $errors = [], $response = null, $headers = [], $httpStatus = 0)
    {
        $this->status = $status;
        $this->errorMessage = $errorMessage;
        $this->response = $response;
        $this->headers = $headers;
        $this->httpStatus = $httpStatus;
        $this->errors = $errors;
    }

    /*
     * getters for response
     */
    public function getResponse(): string
    {
        return $this->response;
    }


    public function getErrors(): ?array
    {
        return $this->errors;
    }


    public function getHttpStatus(): int
    {
        return $this->httpStatus;
    }

    /**
     * @return bool
     */
    public function getStatus(): bool
    {
        return $this->status;
    }

    /*
     * getters for message
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /*
     * getters for headers
     */
    public function getHeaders()
    {
        return $this->headers;
    }
}
