<?php

/**
 * Marker Class
 *
 * @package    SVGCreator
 * @subpackage Elements
 * @author     Sérgio Diniz
 * @version    1.0
 */

namespace SVGCreator\Elements;

class Path extends \SVGCreator\Element {

	const TYPE = 'path';

	static protected $mandatoryFields = array();

	protected function validateElementValues() {
		return true;
	}
}