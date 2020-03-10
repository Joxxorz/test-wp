<?php

if ( ! function_exists( 'galatia_edge_get_content_bottom_area' ) ) {
	/**
	 * Loads content bottom area HTML with all needed parameters
	 */
	function galatia_edge_get_content_bottom_area() {
		$parameters = array();
		
		//Current page id
		$id = galatia_edge_get_page_id();
		
		//is content bottom area enabled for current page?
		$parameters['content_bottom_area'] = galatia_edge_get_meta_field_intersect( 'enable_content_bottom_area', $id );
		
		if ( $parameters['content_bottom_area'] === 'yes' ) {
			
			//Sidebar for content bottom area
			$parameters['content_bottom_area_sidebar'] = galatia_edge_get_meta_field_intersect( 'content_bottom_sidebar_custom_display', $id );
			//Content bottom area in grid
			$parameters['grid_class'] = ( galatia_edge_get_meta_field_intersect( 'content_bottom_in_grid', $id ) ) === 'yes' ? 'edgtf-grid' : 'edgtf-full-width';
			
			$parameters['content_bottom_style'] = array();
			
			//Content bottom area background color
			$background_color = galatia_edge_get_meta_field_intersect( 'content_bottom_background_color', $id );
			if ( $background_color !== '' ) {
				$parameters['content_bottom_style'][] = 'background-color: ' . $background_color . ';';
			}
			
			if ( is_active_sidebar( $parameters['content_bottom_area_sidebar'] ) ) {
				galatia_edge_get_module_template_part( 'templates/content-bottom-area', 'content-bottom', '', $parameters );
			}
		}
	}
	
	add_action( 'galatia_edge_action_before_footer_content', 'galatia_edge_get_content_bottom_area' );
}