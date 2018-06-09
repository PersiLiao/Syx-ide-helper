<?php
/**
 * Syx Request Http
 */

namespace Syx\Request;

use Syx\RequestAbstract;

class Http extends \Syx\RequestAbstract
{
    /**
     * Scheme for http
     */
    const SCHEME_HTTP = 'http';

    /**
     * Scheme for https
     */
    const SCHEME_HTTPS = 'https';

    /**
     * @var string REQUEST_URI
     */
    protected $_requestUri;

    /**
     * Http constructor.
     * @param string|null $requestUri
     * @param string|null $baseUri
     * @return void
     */
    public function __construct($requestUri = NULL, $baseUri = NULL)
    {

    }

    /**
     * __get
     * @description
     * @param string $name
     * @return mixed
     */
    public function __get($name)
    {

    }

    /**
     * __set
     * @description
     * @param string $name
     * @param string $value
     * @throws Exception
     */
    public function __set($name, $value)
    {
        throw new Exception('Use setParam to set a parameter of request');
    }


    /**
     * get
     * @description Access values contained in the superglobals as public members
     * Order of precedence: 1. GET, 2. POST, 3. COOKIE, 4. SERVER, 5. ENV
     * @param string $name
     * @param mixed $default
     * @return mixed
     */
    public function get($name, $default = NULL)
    {

    }


    /**
     * __isset
     * @description Check to see if a property is set
     * @param string $name
     * @return bool
     */
    public function __isset($name)
    {

    }

    /**
     * getQuery
     * @description Retrieve a member of the $_GET superglobal If no $name is passed, returns the entire $_GET array
     * @param string|null $name
     * @param string|null $default Default value to use if key not found
     * @return mixed Returns null if key does not exist
     */
    public function getQuery($name = NULL, $default = NULL)
    {

    }


    /**
     * getPost
     * @description Retrieve a member of the $_POST superglobal If no $name is passed, returns the entire $_POST array
     * @param string|null $name
     * @param string|null $default Default value to use if key not found
     * @return mixed Returns null if key does not exist
     */
    public function getPost($name = NULL, $default = NULL)
    {

    }

    /**
     * getCookie
     * @description Retrieve a member of the $_COOKIE superglobal If no $name is passed, returns the entire $_COOKIE array
     * @param string|null $name
     * @param string|null $default Default value to use if key not found
     * @return mixed Returns null if key does not exist
     */
    public function getCookie($name = NULL, $default = NULL)
    {

    }

    /**
     * getFiles
     * @description Retrieve a member of the $_FILES superglobal If no $name is passed, returns the entire $_FILES array
     * @param string|null $name
     * @param string|null $default Default value to use if key not found
     * @return mixed Returns null if key does not exist
     */
    public function getFiles($name = NULL, $default = NULL)
    {

    }

    /**
     * getRequest
     * @description Retrieve a member of the $_REQUEST superglobal If no $name is passed, returns the entire $_REQUEST array
     * @param string|null $name
     * @param string|null $default Default value to use if key not found
     * @return mixed Returns null if key does not exist
     */
    public function getRequest($name = NULL, $default = NULL)
    {

    }

    /**
     * getRequestUri
     * @description Returns the REQUEST_URI taking into account platform differences between Apache and IIS
     * @return string
     */
    public function getRequestUri()
    {

    }

    /**
     * setRequestUri
     * @description Set the REQUEST_URI on which the instance operates
     *
     * If no request URI is passed, uses the value in $_SERVER['REQUEST_URI'],
     * $_SERVER['HTTP_X_REWRITE_URL'],
     * or $_SERVER['ORIG_PATH_INFO'] + $_SERVER['QUERY_STRING']
     *
     * @param string|null $requestUri
     * @return Http
     */
    public function setRequestUri($requestUri = NULL)
    {

    }

    /**
     * Everything in REQUEST_URI before PATH_INFO
     * <form action="<?=$baseUrl?>/news/submit" method="POST"/>
     *
     * @return string
     */
    public function getBaseUri()
    {

    }

    /**
     * Set the base URL of the request; i.e.,
     * the segment leading to the script name
     *
     * E.g.:
     * - /admin
     * - /myapp
     * - /subdir/index.php
     *
     * Do not use the full URI when providing the base. The following are
     * examples of what not to use:
     * - http://example.com/admin (should be just /admin)
     * - http://example.com/subdir/index.php (should be just /subdir/index.php)
     *
     * If no $baseUrl is provided, attempts to determine the base URL from the
     * environment, using SCRIPT_FILENAME, SCRIPT_NAME, PHP_SELF, and
     * ORIG_SCRIPT_NAME in its determination.
     *
     * @param mixed $baseUrl
     *
     * @return Http|RequestAbstract
     */
    public function setBaseUri($baseUri = NULL)
    {

    }

    /**
     * getScheme
     * @description Get the request URI scheme HTTP or HTTPS
     * @return string
     */
    public function getScheme()
    {

    }

    private function __clone()
    {

    }

}
