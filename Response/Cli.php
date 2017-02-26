<?php
/**
 * Yaf_Response_Cli
 *
 * CLI response for controllers
 */

namespace Syx\Response;

use Syx\ResponseAbstract;

class Cli extends ResponseAbstract {

	/**
	 * __toString
	 * @description Magic __toString functionality
	 * @return string
	 */
	public function __toString() {
		return $this->_body;
	}
}
