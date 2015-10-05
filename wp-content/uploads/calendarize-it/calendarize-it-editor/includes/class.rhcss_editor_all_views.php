<?php

/**
 * 
 *
 * @version $Id$
 * @copyright 2003 
 **/

class rhcss_editor_all_views extends module_righthere_css{
	function rhcss_editor_all_views($args=array()){
		return $this->module_righthere_css($args);
	}
	
	function options($t=array()){
		$i = count($t);
			
		//-- Day labels --------------------------------			
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc-all-day-labels'; 
		$t[$i]->label 		= __('Day label','rhc');
		$t[$i]->options = array();		
			
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhc_allviews_header_font',
			'selector'	=> '.rhcalendar.not-widget .fc-view .fc-first .fc-widget-header',
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
				'selector'			=> '.rhcalendar.not-widget .fc-view .fc-first .fc-widget-header',
				'property'			=> 'text-shadow',
				'real_time'			=> true,
				'btn_clear'			=> true
			);	
			
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Cell Background','rhc'),
			'prefix'	=> 'rhc_allview_day_label_bg',
			'selector'	=> '.rhcalendar.not-widget .fc-view thead .fc-first .fc-widget-header'/*,
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
			
		//-- Border
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc-all-border'; 
		$t[$i]->label 		= __('Border','rhc');
		$t[$i]->options = array(
			(object)array(
				'id'				=> 'rhc-all-border-color',
				'type'				=> 'css',
				'label'				=> __('Border color','rhc'),
				'input_type'		=> 'colorpicker',
				'holder_class'		=> '',
				'opacity'			=> true,
				'btn_clear'			=> true,
				'selector'			=> '.rhcalendar.not-widget .fc-view .fc-widget-header, .rhcalendar.not-widget .fc-view .fc-widget-content',
				'property'			=> 'border-color',
				'real_time'			=> true
			)		
		);		
		
		//-- Content dates	
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc-all-current-day'; 
		$t[$i]->label 		= __('Current day','rhc');
		$t[$i]->options = array(
			(object)array(
				'id'				=> 'rhc-all-current-day-bg',
				'type'				=> 'css',
				'label'				=> __('Highlight color','rhc'),
				'input_type'		=> 'colorpicker',
				'holder_class'		=> '',
				'opacity'			=> true,
				'btn_clear'			=> true,
				'selector'			=> '.rhcalendar.not-widget .fc-view .fc-widget-content.fc-state-highlight',
				'property'			=> 'background-color',
				'real_time'			=> true
			)			
		);	
		
		//-- EVent
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc-all-event'; 
		$t[$i]->label 		= __('Event','rhc');
		$t[$i]->options = array();	
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhc_all_event_time',
			'selector'	=> '.rhcalendar.not-widget .fc-event-time',
			'labels'	=> (object)array(
				'family'	=> __('Event time font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));			
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhc_all_event_title',
			'selector'	=> '.rhcalendar.not-widget .fc-event-title',
			'labels'	=> (object)array(
				'family'	=> __('Event title font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));			
		
		$t[$i]->options[]=	(object)array(
				'id'				=> 'rhc_all_event_line_height',
				'type'				=> 'css',
				'label'				=> __('Line height','rhc'),
				'input_type'		=> 'number',
				//'input_type'		=> 'element_size',
				'unit'				=> 'px',
				'class'				=> 'input-font-size',
				'holder_class'		=> '',
				//'class'				=> 'input-mini pop_rangeinput',
				'min'				=> '6',
				'max'				=> '144',
				'step'				=> '1',
				'selector'			=> 'body .rhcalendar .fc-event-inner',
				'property'			=> 'line-height',
				'real_time'			=> true
			);		
			
		//-- ICAL BUTTON
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc-ical-button'; 
		$t[$i]->label 		= __('Ical button','rhc');
		$t[$i]->options = array();		
		$t[$i]->options[] =(object)array(
				'id'				=> 'rhc_ical_btn',
				'type'				=> 'css',
				'label'				=> __('Background color','rhc'),
				'input_type'		=> 'color_or_something_else',
				'opacity'			=> true,
				//'selector'			=> '.rhcalendar .fc-button-icalendar',
				'selector'	=> implode(',',array(
					'.rhcalendar .fc-button-icalendar',
					'.rhcalendar .fc-button-icalendar.fc-button.fc-state-default'
				)),					
				'property'			=> 'background-color',
				'real_time'			=> true,
				'btn_clear'			=> true,
				'derived'			=> array()
		);
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhc_ical_btn_font',
			//'selector'	=> '.rhcalendar .fc-button-icalendar, .rhcalendar .fc-button-icalendar:hover',
			'selector'	=> implode(',',array(
				'.rhcalendar .fc-button-icalendar',
				'.rhcalendar .fc-button.fc-state-default.fc-button-icalendar',
				'.rhcalendar .fc-button-icalendar:hover',
				'.rhcalendar .fc-button.fc-state-default.fc-button-icalendar:hover'
			)),								
			'labels'	=> (object)array(
				'family'	=> __('Font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));		
		$t[$i]->options = $this->add_border_options($t[$i]->options,array(
			'prefix'	=> 'rhc_ical_btn_border',
			'selector'	=> implode(',',array(
				".rhcalendar .fc-button-icalendar",
				".rhcalendar .fc-button.fc-state-default.fc-button-icalendar",
				".rhcalendar .fc-button-icalendar:hover",
				".rhcalendar .fc-button.fc-state-default.fc-button-icalendar:hover"
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