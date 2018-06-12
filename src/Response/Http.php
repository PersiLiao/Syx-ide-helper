<?php
/**
 * Syx\Response\Http
 *
 * HTTP response for controllers
 */

namespace Syx\Response;

use Syx\ResponseAbstract;

class Http extends ResponseAbstract
{
    protected $_sendheader = TRUE;
    protected $_responseCode = 200;

    /**
     * getResponseCode
     * @description Retrieve HTTP response code
     * @return int
     */
    public function getResponseCode()
    {

    }

    /**
     * setResponseCode
     * @description Set HTTP response code to use with headers
     * @param int $code
     * @return Http
     * @throws Exception
     */
    public function setResponseCode($code)
    {

    }

    /**
     * setRedirect
     * @description Set redirect URL
     * @param string $url
     * @return $this
     */
    public function setRedirect($url)
    {

    }

    /**
     * sendHeaders
     * @description Send all headers
     * @return Http
     */
    protected function sendHeaders()
    {

    }
}
