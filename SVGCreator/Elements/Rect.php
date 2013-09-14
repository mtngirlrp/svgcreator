<?php

/**
 * Rect Class
 *
 * @package    SVGCreator
 * @subpackage Elements
 * @author     Sérgio Diniz
 * @version    1.0
 */

namespace SVGCreator\Elements;

class Rect extends \SVGCreator\Element {

    const TYPE = 'rect';

    static protected $mandatoryFields = array(
    									'width',
    									'height',
    									'x',
    									'y'
    								);

    protected function validateElementValues() {
    	// Iterate over all fields
    	foreach ( self::$mandatoryFields as $field ) {
    		// If the field does not exist then exit with exception
    		if ( array_key_exists($field, $this->attributes) ) {
    			$value = (int) $this->attributes[$field];
    			if ( $value < 0 ) {
    				throw new \SVGCreator\SVGException("The ".$field." value is lesser than 0, in element ".self::TYPE, 1);
    			}
    		}
    	}

		return true;
	}

}