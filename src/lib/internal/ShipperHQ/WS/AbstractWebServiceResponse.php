<?php

namespace ShipperHQ\WS;

use \ShipperHQ\WS\Rate\Response;

/**
 * Class AbstractWebServiceResponse
 *
 * @package ShipperHQ\WS\Response
 */
abstract class AbstractWebServiceResponse implements WebServiceResponseInterface
{
    public $errors = [];
    public $responseSummary;

    /**
     * @param ResponseSummary $responseSummary
     * @param array $errors
     */
    function __construct(ResponseSummary $responseSummary = null, array $errors = [])
    {
        $this->responseSummary = $responseSummary;
        $this->errors = $errors;
    }

    /**
     * @param array $errors
     */
    public function setErrors(array $errors)
    {
        $this->errors = $errors;
    }

    /**
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param ResponseSummary $responseSummary
     */
    public function setResponseSummary(ResponseSummary $responseSummary)
    {
        $this->responseSummary = $responseSummary;
    }

    /**
     * @return ResponseSummary
     */
    public function getResponseSummary()
    {
        return $this->responseSummary;
    }


}

