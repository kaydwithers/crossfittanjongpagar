<?php

/**
 * 
 *
 * @version $Id$
 * @copyright 2003 
 **/

class rhcss_editor_calendar_filter_box extends module_righthere_css{
	function rhcss_editor_calendar_filter_box($args=array()){
		$args['cb_init']=array(&$this,'cb_init');
		return $this->module_righthere_css($args);
	}

	function cb_init(){
		//called on the head when editor is active.
	}
	
	function options($t=array()){
		
		//--- FILTER BOX-------------------------------
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc-filter-head'; 
		$t[$i]->label 		= __('Filter box','rhc');
		$t[$i]->options = array();
		$t[$i]->options[] =(object)array(
				'id'				=> 'rhc_filter_head_shadow',
				'type'				=> 'css',
				'label'				=> __('Box shadow','rhc'),
				'input_type'		=> 'textshadow',
				'opacity'			=> true,
				'selector'			=> 'body .rhcalendar .fbd-main-holder',//make sure this is more specific than the background derived one.
				'property'			=> 'box-shadow',
				'real_time'			=> true,
				'btn_clear'			=> true
			);			
					
		//--- FILTER HEAD BG-------------------------------
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc-filter-head-bg'; 
		$t[$i]->label 		= __('Filter head background','rhc');
		$t[$i]->options = array();
		
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Background','rhc'),
			'label_bg'	=> __('Tip and background color','rhc'),
			'prefix'	=> 'rhc_filter_head_bg',
			'selector'	=> '.rhcalendar .fbd-head',
			'queue'		=> 'calendar_frame',
			'derived_color'=> array(
						array(
							'type'	=> 'color_darken',
							'val'	=> '1',
							'sel'	=> ".rhcalendar .fbd-main-holder",
							'arg'	=> array(
								(object)array(
									'name' => 'box-shadow',
									'tpl'	=>'0 1px 12px __value__;'
								)
							)
						),			
						array(
							'type'	=> 'color_darken',
							'val'	=> '1',
							'sel'	=> ".rhcalendar .fbd-arrow",
							'arg'	=> array(
								(object)array(
									'name' => 'border-color',
									'tpl'	=>'transparent transparent __value__ transparent'
								)
							)
						),
						array(
							'type'	=> 'color_darken',
							'val'	=> '20',
							'sel'	=> ".rhcalendar .fbd-arrow-border",
							'arg'	=> array(
								(object)array(
									'name' => 'border-color',
									'tpl'	=>'transparent transparent __value__ transparent'
								)
							)
						)
					)		
		));		

		//--- FILTER BOX BG-------------------------------
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc-filter-body-bg'; 
		$t[$i]->label 		= __('Filter body background','rhc');
		$t[$i]->options = array();
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Background','rhc'),
			'prefix'	=> 'rhc_filter_body_bg',
			'selector'	=> '.rhcalendar .fbd-main-holder',
			'queue'		=> 'calendar_frame',
			'derived_color'=> array(		
						array(
							'type'	=> 'same',
							'val'	=> '1',
							'sel'	=> ".rhcalendar .ical-tooltip .fbd-arrow",
							'arg'	=> array(
								(object)array(
									'name' => 'border-color',
									'tpl'	=>'__value__ transparent transparent transparent'
								)
							)
						),
						array(
							'type'	=> 'color_darken',
							'val'	=> '20',
							'sel'	=> ".rhcalendar .ical-tooltip .fbd-arrow-border",
							'arg'	=> array(
								(object)array(
									'name' => 'border-color',
									'tpl'	=>'__value__ transparent transparent transparent'
								)
							)
						)
					)						
			)
		);		
		
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc-filter-tab'; 
		$t[$i]->label 		= __('Filter tab','rhc');
		$t[$i]->options = array();			
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhc_filter_tab_font',
			'selector'	=> '.rhcalendar .fbd-ul li.fbd-tabs a, .rhcalendar .fbd-ul li.fbd-tabs a:hover',
			'labels'	=> (object)array(
				'family'	=> __('Tab font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));	
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhc_filter_tab_body_font',
			'selector'	=> '.rhcalendar .fbd-term-label',
			'labels'	=> (object)array(
				'family'	=> __('Content font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));
		$t[$i]->options[] =(object)array(
				'id'				=> 'rhc_filter_tab_bgcolor',
				'type'				=> 'css',
				'label'				=> __('Content bg color','rhc'),
				'input_type'		=> 'color_or_something_else',
				'opacity'			=> true,
				'selector'			=> '.rhcalendar .fbd-tabs-panel',
				'property'			=> 'background-color',
				'real_time'			=> true,
				'btn_clear'			=> true,
				'derived'=> array(
							array(
								'type'	=> 'color_darken',
								'val'	=> '5',
								'sel'	=> ".rhcalendar .fbd-tabs-panel",
								'arg'	=> array(
									(object)array(
										'name' => 'border-color',
										'tpl'	=>'__value__;'
									)
								)
							),
							array(
								'type'	=> 'color_darken',
								'val'	=> '5',
								'sel'	=> ".rhcalendar .fbd-ul li.fbd-tabs.fbd-active-tab",
								'arg'	=> array(
									(object)array(
										'name' => 'border-color',
										'tpl'	=>'__value__;'
									)
								)
							),
							array(
								'type'	=> 'same',
								'val'	=> '5',
								'sel'	=> ".fbd-ul li.fbd-tabs.fbd-active-tab",
								'arg'	=> array(
									(object)array(
										'name' => 'background-color',
										'tpl'	=>'__value__;'
									),
									(object)array(
										'name' => 'border-bottom',
										'tpl'	=>'1px solid __value__;'
									)
								)
							)
						)					
			);		
			
		//-- FILTER TAB ACTIVE
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc-filter-tab-active'; 
		$t[$i]->label 		= __('Filter tab (active)','rhc');
		$t[$i]->options = array();		
		$t[$i]->options[] =(object)array(
				'id'				=> 'rhc_filter_tab_active_bgcolor',
				'type'				=> 'css',
				'label'				=> __('Background color','rhc'),
				'input_type'		=> 'color_or_something_else',
				'opacity'			=> true,
				'selector'			=> '.fbd-dialog-content .fbd-ul li.fbd-tabs.fbd-active-tab',
				'property'			=> 'background-color',
				'real_time'			=> true,
				'btn_clear'			=> true,
				'derived'			=> array()
		);
		//-- FILTER TAB INACTIVE
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc-filter-tab-inactive'; 
		$t[$i]->label 		= __('Filter tab (inactive)','rhc');
		$t[$i]->options = array();		
		$t[$i]->options[] =(object)array(
				'id'				=> 'rhc_filter_tab_inactive_bgcolor',
				'type'				=> 'css',
				'label'				=> __('Background color','rhc'),
				'input_type'		=> 'color_or_something_else',
				'opacity'			=> true,
				'selector'			=> '.fbd-dialog-content .fbd-ul li.fbd-tabs',
				'property'			=> 'background-color',
				'real_time'			=> true,
				'btn_clear'			=> true,
				'derived'			=> array()
		);	
		//-- FILTER TAB PRIMARY button--------------------------------			
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc-filter-tab-primary'; 
		$t[$i]->label 		= __('Filter primary button','rhc');
		$t[$i]->options = array();							
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhc_filter_tab_primary_font',
			'selector'	=> '.rhcalendar .fbd-button-primary, .rhcalendar .fbd-button-primary:hover, .ical-tooltip .fbd-buttons a, .ical-tooltip .fbd-buttons a:hover',
			'labels'	=> (object)array(
				'family'	=> __('Font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));
		
		$t[$i]->options[] =(object)array(
				'id'				=> 'rhc_filter_tab_primary_font_shadow',
				'type'				=> 'css',
				'label'				=> __('Text shadow','rhc'),
				'input_type'		=> 'textshadow',
				'opacity'			=> true,
				'selector'			=> '.rhcalendar .fbd-button-primary',
				'property'			=> 'text-shadow',
				'real_time'			=> true,
				'btn_clear'			=> true
			);			
			
		$t[$i]->options[] =(object)array(
				'id'				=> 'rhc_filter_primary_bg',
				'type'				=> 'css',
				'label'				=> __('Background color','rhc'),
				'input_type'		=> 'color_gradient',
				'opacity'			=> true,
				'selector'			=> '.rhcalendar .fbd-button-primary',
				'property'			=> 'background-image',
				'real_time'			=> true,
				'btn_clear'			=> true,
				'derived'			=> array(
						array(
							'type'	=> 'gradient_darken',
							'val'	=> '5',
							'sel'	=> ".rhcalendar .fbd-button-primary",
							'arg'	=> array(
								(object)array(
									'name' => 'border-color',
									'tpl'	=>'__value__'
								)
							)
						),
						array(
							'type'	=> 'same2',
							'val'	=> '',
							'sel'	=> ".rhcalendar .fbd-button-primary:hover",
							'arg'	=> array(
								(object)array(
									'name' => 'background-image',
									'tpl'	=>'__value__'
								)
							)
						),
						array(
							'type'	=> 'same2',
							'val'	=> '',
							'sel'	=> ".rhcalendar .fbd-button-primary:active",
							'arg'	=> array(
								(object)array(
									'name' => 'background-image',
									'tpl'	=>'__value__'
								)
							)
						)
					)
		);
		$t[$i]->options = $this->add_border_options($t[$i]->options,array(
			'prefix'	=> 'rhc_filter_primary_border',
			'selector'	=> ".rhcalendar .fbd-button-primary, .rhcalendar .fbd-dialog-controls .fbd-button-primary:hover"
		));	
		//-- FILTER TAB SECONDARY button--------------------------------			
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc-filter-tab-secondary'; 
		$t[$i]->label 		= __('Filter secondary button','rhc');
		$t[$i]->options = array();							
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhc_filter_tab_secondary_font',
			'selector'	=> '.rhcalendar .fbd-button-secondary, .rhcalendar .fbd-button-secondary:hover',
			'labels'	=> (object)array(
				'family'	=> __('Font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));	
								
		$t[$i]->options[] =(object)array(
				'id'				=> 'rhc_filter_tab_secondary_font_shadow',
				'type'				=> 'css',
				'label'				=> __('Text shadow','rhc'),
				'input_type'		=> 'textshadow',
				//'class'				=> 'input-small',
				'opacity'			=> true,
				'selector'			=> '.rhcalendar .fbd-button-secondary',
				'property'			=> 'text-shadow',
				'real_time'			=> true,
				'btn_clear'			=> true
			);	
			
		$t[$i]->options[] =(object)array(
				'id'				=> 'rhc_filter_secondary_bg',
				'type'				=> 'css',
				'label'				=> __('Background color','rhc'),
				'input_type'		=> 'color_gradient',
				'opacity'			=> true,
				'selector'			=> '.rhcalendar .fbd-button-secondary',
				'property'			=> 'background-image',
				'real_time'			=> true,
				'btn_clear'			=> true,
				'derived'			=> array(
						array(
							'type'	=> 'gradient_darken',
							'val'	=> '5',
							'sel'	=> ".rhcalendar .fbd-button-secondary",
							'arg'	=> array(
								(object)array(
									'name' => 'border-color',
									'tpl'	=>'__value__'
								)
							)
						),
						array(
							'type'	=> 'same2',
							'val'	=> '',
							'sel'	=> ".rhcalendar .fbd-button-secondary:hover",
							'arg'	=> array(
								(object)array(
									'name' => 'background-image',
									'tpl'	=>'__value__'
								)
							)
						),
						array(
							'type'	=> 'same2',
							'val'	=> '',
							'sel'	=> ".rhcalendar .fbd-button-secondary:active",
							'arg'	=> array(
								(object)array(
									'name' => 'background-image',
									'tpl'	=>'__value__'
								)
							)
						)
					)
		);
		$t[$i]->options = $this->add_border_options($t[$i]->options,array(
			'prefix'	=> 'rhc_filter_secondary_border',
			'selector'	=> ".rhcalendar .fbd-button-secondary, .rhcalendar .fbd-dialog-controls .fbd-button-secondary:hover"
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
//endif;		
//----------------------------------------------------------------------
		return $t;
	}
}
?>