<?php
class AZ_Slip_Menu_Walker extends Walker_Nav_Menu {
	private $item_counter = 0;

	function start_lvl( &$output, $depth = 0, $args = null ) {
		// Don't do anything here
	}

	function end_lvl( &$output, $depth = 0, $args = null ) {
		// Don't do anything here
	}

	function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		if ( $depth === 0 ) {
			// Count the menu items and add the first 3 items to the left and the last 3 items to the right
			$this->item_counter++;
			if ( $this->item_counter <= 3 ) {
					$output .= '<li class="left-menu-item">' . $args->before;
					$output .= '<a href="' . $item->url . '">' . $item->title . '</a>';
					$output .= $args->after . '</li>';
			} else {
					$output .= '<li class="right-menu-item">' . $args->before;
					$output .= '<a href="' . $item->url . '">' . $item->title . '</a>';
					$output .= $args->after . '</li>';
			}
		}
	}

	function end_el( &$output, $item, $depth = 0, $args = null)  {
		if ($depth === 0) {
			// Do nothing here, handled in start_el
		}
	}
}