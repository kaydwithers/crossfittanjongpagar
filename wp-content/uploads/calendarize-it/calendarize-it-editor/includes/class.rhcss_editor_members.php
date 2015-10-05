<?php

/**
 * 
 *
 * @version $Id$
 * @copyright 2003 
 **/

class rhcss_editor_members extends module_righthere_css{
	function rhcss_editor_members($args=array()){
		return $this->module_righthere_css($args);
	}
	
	function options($t=array()){
		$i = count($t);
		//---------------------------------									
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhcmembers'; 
		$t[$i]->label 		= __('Fonts','rhc');
		$t[$i]->options = array();								

		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhcmembers_fonts_',
			'selector'	=> implode(',',array(
				'.div_czpf .nav-pills > li > a'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));

		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhcmembers_fonts_active_',
			'selector'	=> implode(',',array(
				'.div_czpf .nav-pills > li.active > a',
				'.div_czpf .nav-pills > li > a:hover',
				'.div_czpf .nav-pills > li > a:focus'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Font (Active/Hover/Focus)','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));			
				
		//---------------------------------
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhcmembers_bg'; 
		$t[$i]->label 		= __('Background','rhc');
		$t[$i]->options = array();	
							
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Background','rhc'),
			'prefix'	=> 'rhcmembers_bg',
			'selector'	=> '.div_czpf .nav-pills > li > a'	
		));		
				
		//---------------------------------
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhcmembers_bg_hover'; 
		$t[$i]->label 		= __('Background (hover)','rhc');
		$t[$i]->options = array();	
							
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Background (hover)','rhc'),
			'prefix'	=> 'rhcmembers_bg_hover',
			'selector'	=> 'body .div_czpf .nav-pills > li > a:hover'	
		));		
			
		//---------------------------------
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhcmembers_bg_active'; 
		$t[$i]->label 		= __('Background(Active)','rhc');
		$t[$i]->options = array();	
							
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Background','rhc'),
			'prefix'	=> 'rhcmembers_active_bg',
			'selector'	=> implode(',',array(
				'.div_czpf .nav-pills > li.active > a',
				'.div_czpf .nav-pills > li.active > a:hover',
				'.div_czpf .nav-pills > li.active > a:focus'
			))
		));		
		
		//---------------------------------
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhcmembers_border'; 
		$t[$i]->label 		= __('Border','rhc');
		$t[$i]->options = array();	
		
		$t[$i]->options[] = (object)array(
				'id'				=> 'rhcmembers_border_color',
				'type'				=> 'css',
				'label'				=> __('Border color','rhc'),
				'input_type'		=> 'color_or_something_else',
				'holder_class'		=> '',
				'opacity'			=> true,
				'btn_clear'			=> true,
				'selector'			=> implode(',',array(
					'body .div_czpf .nav-pills > li > a'
				)),
				'property'			=> 'border-color',			
				'real_time'			=> true
			);	

		//---------------------------------									
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhcmembers_avatar'; 
		$t[$i]->label 		= __('Avatar','rhc');
		$t[$i]->options = array();								

		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhcmembers_avatar_tooltip_fonts_',
			'selector'	=> implode(',',array(
				'.div_czpf .czpf_tooltip .czpf_tooltip_sub',
				'.div_czpf .czpf_tooltip .czpf_tooltip'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));
		
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Tooltip Background','rhc'),
			'prefix'	=> 'rhcmembers_avatar_tooltip_bg_hover',
			'selector'	=> '.div_czpf .czpf_tooltip .czpf_tooltip_sub'	
		));

		//-- Saved and DC  -----------------------		
		$i++;
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