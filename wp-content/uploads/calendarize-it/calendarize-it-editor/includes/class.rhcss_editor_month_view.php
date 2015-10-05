<?php

/**
 * 
 *
 * @version $Id$
 * @copyright 2003 
 **/

class rhcss_editor_month_view extends module_righthere_css{
	function rhcss_editor_month_view($args=array()){
		return $this->module_righthere_css($args);
	}
	
	function options($t=array()){
		$i = count($t);
		//-- Container --------------------------------			
		/*
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc-month-container'; 
		$t[$i]->label 		= __('Container','rhc');
		$t[$i]->options = array();		
		*/	
		//-- Background
		//.rhcalendar.not-widget
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc-month-background'; 
		$t[$i]->label 		= __('View background','rhc');
		$t[$i]->options = array();	
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('View Background','rhc'),
			'prefix'	=> 'rhc_monthview_bg',
			'selector'	=> '.rhcalendar.not-widget .fc-view-month'	
		));		
		
		//-- Top cell --------------------------------			
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc-month-top'; 
		$t[$i]->label 		= __('Day label','rhc');
		$t[$i]->options = array();		
		
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhc_month_header_font',
			'selector'	=> '.rhcalendar.not-widget .fc-view-month.fc-view .fc-first .fc-widget-header',
			'labels'	=> (object)array(
				'family'	=> __('Day font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));	
		
		$t[$i]->options[] =(object)array(
				'id'				=> 'rhc_allviews_header_font_shadow',
				'type'				=> 'css',
				'label'				=> __('Day font shadow','rhc'),
				'input_type'		=> 'textshadow',
				'opacity'			=> true,
				'selector'			=> '.rhcalendar.not-widget .fc-view-month.fc-view .fc-first .fc-widget-header',
				'property'			=> 'text-shadow',
				'real_time'			=> true,
				'btn_clear'			=> true
			);	
			
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Cell Background','rhc'),
			'prefix'	=> 'rhc_allview_day_label_bg',
			'selector'	=> '.rhcalendar.not-widget .fc-view-month.fc-view thead .fc-first .fc-widget-header'/*,
			'derived_color'=> array(
						array(
							'type'	=> 'color_darken',
							'val'	=> '10',
							'sel'	=> ".rhcalendar .fc-state-default, .rhcalendar .fc-state-default .fc-button-inner",
							'arg'	=> array(
								(object)array(
									'name' => 'border-color',
									'tpl'	=>'__value__'
								)
							)
						)
					)	
			*/		
		));				
		//-- Day number
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc-month-day-number'; 
		$t[$i]->label 		= __('Day number','rhc');
		$t[$i]->options = array();		
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhc_month_dnum_font',
			'selector'	=> '.rhcalendar.not-widget .fc-view-month.fc-grid .fc-day-number',
			'labels'	=> (object)array(
				'family'	=> __('Day font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));	
		
		$t[$i]->options[] =(object)array(
				'id'				=> 'rhc_month_dnum_font_shadow',
				'type'				=> 'css',
				'label'				=> __('Text shadow','rhc'),
				'input_type'		=> 'textshadow',
				'opacity'			=> true,
				'selector'			=> '.rhcalendar.not-widget .fc-view-month.fc-grid .fc-day-number',
				'property'			=> 'text-shadow',
				'real_time'			=> true,
				'btn_clear'			=> true
			);	
		//-- Week number
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc-month-week-number'; 
		$t[$i]->label 		= __('Week number','rhc');
		$t[$i]->options = array();		
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhc_month_wnum_font',
			'selector'	=> '.rhcalendar.not-widget .fc-view-month.fc-grid tbody .fc-week-number',
			'labels'	=> (object)array(
				'family'	=> __('Day font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));	
		$t[$i]->options[] = (object)array(
				'id'				=> 'rhc_month_wnum_bg',
				'type'				=> 'css',
				'label'				=> __('Background color','rhc'),
				'input_type'		=> 'color_or_something_else',
				'holder_class'		=> '',
				'opacity'			=> true,
				'btn_clear'			=> true,
				'selector'			=> '.rhcalendar.not-widget .fc-view-month.fc-grid tbody .fc-week-number',
				'property'			=> 'background-color',
				'other_options'		=> array(
					'transparent'	=> 'transparent'
				),				
				'real_time'			=> true
			);
		$t[$i]->options = $this->add_padding_options($t[$i]->options,array(
			'prefix'	=> 'rhc_month_wnum_pad',
			'selector'	=> '.rhcalendar.not-widget .fc-view-month.fc-grid tbody .fc-week-number'
		));		
		
		//-- Event color
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc-month-default-event'; 
		$t[$i]->label 		= __('Default event','rhc');
		$t[$i]->options = array();	
		$t[$i]->options[] = (object)array(
				'id'				=> 'rhc_month_default_event_color',
				'type'				=> 'css',
				'label'				=> __('Event color','rhc'),
				'input_type'		=> 'color_or_something_else',
				'holder_class'		=> '',
				'opacity'			=> true,
				'btn_clear'			=> true,
				'selector'			=> ".rhcalendar .fc-event",
				'property'			=> 'background-color',
				'real_time'			=> true,
				'derived'			=> array(
						array(
							'type'	=> 'same',
							'val'	=> '5',
							'sel'	=> "body .fct-tooltip",
							'arg'	=> array(
								(object)array(
									'name' => 'border-color',
									'tpl'	=>'__value__;'
								)
							)
						)
					)	
			);	
		$t[$i]->options = $this->add_border_options($t[$i]->options,array(
			'prefix'	=> 'rhc_month_default_event_border',
			'selector'	=> ".rhcalendar .fc-event"
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