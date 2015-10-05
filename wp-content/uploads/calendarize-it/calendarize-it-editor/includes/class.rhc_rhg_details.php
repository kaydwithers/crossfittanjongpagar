<?php

/**
 * 
 *
 * @version $Id$
 * @copyright 2003 
 **/

class rhc_rhg_details extends module_righthere_css{
	function rhc_rhg_details($args=array()){
		add_filter('rhg_font_set',array(&$this,'rhg_font_set'));
		return $this->module_righthere_css($args);
	}
	
	function rhg_font_set($fonts){
		$fonts['rhcgallery']=__('Default','rhc');
		$fonts['rhcgallery-filled']='rhcgallery-filled';
		$fonts['rhcgallery-alt']='rhcgallery-alt';
		$fonts['rhcgallery-alt-filled']='rhcgallery-alt-filled';
		
		return $fonts;
	}
	
	function options($t=array()){
		$i = count($t);

		$prefix_selector = '.rhg-default ';
		
		//-- grid  --------------------------------
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhg-detail-grid'; 
		$t[$i]->label 		= __('Grid details','rhc');
		$t[$i]->options = array(
			(object)array(//Needed because editted content is ajax loaded
				'input_type' => 'raw_html',
				'html'=> '<div id="rhg_grid" ></div>'
			)		
		);	
					
		$t[$i]->options = $this->add_padding_options( $t[$i]->options, array(
			'prefix'	=> 'rhg_grid_pad_',	
			'selector'	=> implode(',',array(
				"#rhg_grid",
				$prefix_selector." .rhg_grid figcaption"
			))					
		));		
		
		
		//-- Saved and DC  -----------------------		
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rh-saved-list'; 
		$t[$i]->label 		= __('Templates','rhc');
		$t[$i]->options = array(
			(object)array(
				'id'				=> 'rh_saved_settings',
				'input_type'		=> 'backup_list'
			)			
		);		
		
//----------------------------------------------------------------------
		return $t;
	}
}
?>