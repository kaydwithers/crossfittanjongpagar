<?php

/**
 * 
 *
 * @version $Id$
 * @copyright 2003 
 **/

class rhcss_editor_ce_end extends module_righthere_css{
	function rhcss_editor_ce_end($args=array()){
		return $this->module_righthere_css($args);
	}
	
	function options($t=array()){

		//---------------------------------									
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhcce_end_container'; 
		$t[$i]->label 		= __('Container','rhc');
		$t[$i]->options = array();	
		
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Background','rhc'),
			'prefix'	=> 'rhcce_end_container_bg_',
			'selector'	=> '.rhc-ce-holder .rhcce-end-message.alert-danger'	
		));					

		$t[$i]->options = $this->add_border_options($t[$i]->options,array(
			'prefix'	=> 'rhcce_end_container_border_',
			'selector'	=> ".rhc-ce-holder .rhcce-end-message.alert-danger"
		));		
		
		$t[$i]->options = $this->add_border_radius_options($t[$i]->options,array(
			'prefix'	=> 'rhcce_end_container_border_rad_',
			'selector'	=> ".rhc-ce-holder .rhcce-end-message.alert-danger"
		));		
		//---------------------------------									
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhcce_end_close'; 
		$t[$i]->label 		= __('Close Icon','rhc');
		$t[$i]->options = array();		
		
		$t[$i]->options[] =(object)array(
				'id'				=> 'rhcce_end_close_color',
				'type'				=> 'css',
				'label'				=> __('Color','rhace'),
				'input_type'		=> 'color_or_something_else',
				//'selector'			=> '.rhc-ce-holder .rhcce-end-message.alert-danger .alert .close',
				'selector'			=> '.rhc-ce-holder .rhcce-end-message.alert .close',
				'property'			=> 'color',
				'other_options'		=> array(
					'transparent'	=> 'transparent'
				),
				'btn_clear'			=> true,
				'opacity'			=> true,
				'real_time'			=> true				
			);			
						
		//---------------------------------									
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhcce_end_fonts'; 
		$t[$i]->label 		= __('Message','rhc');
		$t[$i]->options = array();								

		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhcce_end_fonts_',
			'selector'	=> implode(',',array(
				'.rhc-ce-holder .rhcce-end-message.alert-danger'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));
		//-------------------------------------
		//---------------------------------		
		$i = count($t);							
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhcce_end_btn'; 
		$t[$i]->label 		= __('Button','rhc');
		$t[$i]->options = array();								
		$t[$i]->options[] =(object)array(
			'input_type'=>'raw_html',
			'html' => implode('',array(
					'<div class="rhcce_end_btn_font"></div>'		
				)
			)
		);
		
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhcce_end_btn_font_',
			'selector'	=> implode(',',array(
				'.rhc-ce-holder.rhc-ce-form .rhcce-end-message .btn'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));		
		
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhcce_end_btn_font_hover_',
			'selector'	=> implode(',',array(
				'.rhc-ce-holder.rhc-ce-form .rhcce-end-message .btn:hover',
				'rhcce_end_btn_font'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Font Hover','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));
			

		
		//---------------------------------		
		$i = count($t);							
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhcce_end_btn_bg'; 
		$t[$i]->label 		= __('Button Background','rhc');
		$t[$i]->options = array();			
		
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Background','rhc'),
			'prefix'	=> 'rhcce_end_btn_bg_',
			'selector'	=> 'body .rhc-ce-holder.rhc-ce-form .btn'	
		));		

		$t[$i]->options = $this->add_border_options($t[$i]->options,array(
			'prefix'	=> 'rhcce_end_btn_border_',
			'selector'	=> ".rhc-ce-holder.rhc-ce-form .rhcce-end-message .btn"
		));		
		
		$t[$i]->options = $this->add_border_radius_options($t[$i]->options,array(
			'prefix'	=> 'rhcce_end_btn_border_rad_',
			'selector'	=> ".rhc-ce-holder.rhc-ce-form .rhcce-end-message .btn"
		));	
		//---------------------------------		
		$i = count($t);							
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhcce_end_btn_bg_hv'; 
		$t[$i]->label 		= __('Button Background Hover','rhc');
		$t[$i]->options = array();			
		$t[$i]->options[] =(object)array(
			'input_type'=>'raw_html',
			'html' => implode('',array(
					'<div style="display:none" class="rhcce_end_btn_bg_hover"></div>'		
				)
			)
		);		
		
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Background Hover','rhc'),
			'prefix'	=> 'rhcce_end_btn_bg_hover_',
			'selector'	=> implode(',',array(
					"body .rhc-ce-holder.rhc-ce-form .btn:hover",
					".rhcce_end_btn_bg_hover"
			))
		));		
		
		$t[$i]->options = $this->add_border_options($t[$i]->options,array(
			'prefix'	=> 'rhcce_end_btn_hv_border_',
			'selector'	=> implode(',',array(
					".rhc-ce-holder.rhc-ce-form .rhcce-end-message .btn:hover",
					".rhcce_end_btn_bg_hover"
			))
		));		
		
		$t[$i]->options = $this->add_border_radius_options($t[$i]->options,array(
			'prefix'	=> 'rhcce_end_btn_hv_border_rad_',
			'selector'	=> implode(',',array(
					".rhc-ce-holder.rhc-ce-form .rhcce-end-message .btn:hover",
					".rhcce_end_btn_bg_hover"
			))
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
		
		return $t;		
		
	}
}
?>