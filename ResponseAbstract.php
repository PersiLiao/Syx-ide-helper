<?php
/**
 * Syx\ResponseAbstract
 *
 * Base class for Syx_Controller responses
 *
 */

namespace Syx;

use Syx\Response\Http;

abstract class ResponseAbstract
{
    /**
     * @var string Body content
     */
    protected $_body = '';

    /**
     * @var array Array of headers. Each header is an array with keys 'name' and 'value'
     */
    protected $_headers = array();

    /**
     * @var bool Determine to send the headers or not
     */
    protected $_sendheader = FALSE;

    public function __construct()
    {

    }

    /**
     * Append content to the body content
     *
     * @param string $content
     *
     * @return Http|ResponseAbstract
     */
    public function appendBody($body)
    {

    }

    /**
     * clearBody
     * @description Clear the entire body
     * @return bool|Http|ResponseAbstract
     */
    public function clearBody()
    {

    }

    /**
     * clearHeaders
     * @description Clear headers
     * @return Http|ResponseAbstract
     */
    public function clearHeaders()
    {

    }

    public function __destruct()
    {

    }

    /**
     * getBody
     * @description Return the body content
     * @return string
     */
    public function getBody()
    {

    }

    /**
     * setBody
     * @description Set body content
     * @param string $body
     * @return Http|ResponseAbstract
     */
    public function setBody($body)
    {

    }

    /**
     * getHeader
     * @description Return array of headers; see {@link $_headers} for format
     * @return array
     */
    public function getHeader()
    {

    }

    /**
     * prependBody
     * @description Prepend content the body
     * @param string $body
     * @return Http|ResponseAbstract
     */
    public function prependBody($body)
    {

    }

    /**
     * response
     * @description Send the response, including all headers
     */
    public function response()
    {

    }


    /**
     * setHeader
     * @description Set a header
     * @param string $name
     * @param string $value
     * @param bool $replace If $replace is true, replaces any headers already defined with that $name
     * @return Http|ResponseAbstract
     */
    public function setHeader($name, $value, $replace = FALSE)
    {

    }

    /**
     * setRedirect
     * @description Set redirect URL, Sets Location header. Forces replacement of any prior redirects
     * @param string $url
     * @return Http|ResponseAbstract
     */
    public function setRedirect($url)
    {

    }


    /**
     * __toString
     * @description Magic __toString functionality, Returns response value as string using output buffering
     * @return string
     */
    public function __toString()
    {

    }


    private function __clone()
    {

    }

    protected function setAllHeaders()
    {

    }

}
