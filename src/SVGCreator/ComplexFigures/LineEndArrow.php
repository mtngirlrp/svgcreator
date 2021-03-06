<?php

namespace SVGCreator\ComplexFigures;

class LineEndArrow {

	private $element;

	public function __construct($x1, $y1, $x2, $y2) {

		// Create marker
		$marker = new \SVGCreator\Elements\Marker();
		$marker->attr("id", "arrow")
	        ->attr("viewBox", "0 0 10 10")
	        ->attr("refX", 0)
	        ->attr("refY", 5)
	        ->attr("markerUnits", "strokeWidth")
	        ->attr("markerWidth", 4)
	        ->attr("markerHeight", 4)
	        ->attr("orient", "auto")
	        ->attr("fill", "#6aa84f")
	        ->attr("stroke", "stroke")
	        ->append(new \SVGCreator\Elements\Path())
	        ->attr("d", "M 0 0 L 10 5 L 0 10 z");

	    // Create the line element
		$this->element = new \SVGCreator\Elements\Line();
		$this->element->attr('x1', $x1)
			 ->attr('y1', $y1)
			 ->attr('x2', $x2)
			 ->attr('y2', $y2)
			 ->attr('stroke', '#6aa84f')
			 ->attr('stroke-width', '2px')
			 ->attr('marker-end', 'url(#arrow)');

		// Add the marker to the defs of this element
		$this->element->addDef($marker);
	}

	/**
	 * Returns the element
	 * @return \SVGCreator\Elements\Line
	 */
	public function getElement() {
		return $this->element;
	}
}