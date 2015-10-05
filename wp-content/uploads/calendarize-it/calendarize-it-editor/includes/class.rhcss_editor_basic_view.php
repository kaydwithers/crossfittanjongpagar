<?php

/**
 * 
 *
 * @version $Id$
 * @copyright 2003 
 **/

class rhcss_editor_basic_view extends module_righthere_css{
	function rhcss_editor_basic_view($args=array()){
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
		$t[$i]->id 			= 'rhc-basic-background'; 
		$t[$i]->label 		= __('View background','rhc');
		$t[$i]->options = array();	
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('View Background','rhc'),
			'prefix'	=> 'rhc_basicview_bg',
			'selector'	=> implode(',',array(
				'.rhcalendar.not-widget .fc-view-basicWeek',
				'.rhcalendar.not-widget .fc-view-basicDay'
			))			
		));
		
		$t[$i]->options = $this->add_border_options($t[$i]->options,array(
			'prefix'	=> 'rhc_basicview_border',
			'selector'	=> implode(',',array(
				'.rhcalendar.not-widget .fc-widget-header',
				'.rhcalendar.not-widget .fc-widget-content'
			))	
		));			
	
		//-----------------------		
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc-basic-background-head'; 
		$t[$i]->label 		= __('Header background','rhc');
		$t[$i]->options = array();	
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Header Background','rhc'),
			'prefix'	=> 'rhc_basicview_bg_h',
			'selector'	=> implode(',',array(
				'.rhcalendar.not-widget .fc-view-basicWeek thead',
				'.rhcalendar.not-widget .fc-view-basicDay thead'
			))				
		));		
		//----------------
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc-basic-head_font'; 
		$t[$i]->label 		= __('Header fonts','rhc');
		$t[$i]->options = array();	
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhc_basic_hf',
			'selector'	=> implode(',',array(
				'.rhcalendar.not-widget .fc-view-basicWeek thead .fc-day-header',
				'.rhcalendar.not-widget .fc-view-basicDay thead .fc-day-header'
			)),	
			'labels'	=> (object)array(
				'family'	=> __('Header font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')
								
			)
		));		
			
		//----------------
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc-basic-current'; 
		$t[$i]->label 		= __('Current day background','rhc');
		$t[$i]->options = array();	
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Current Day Background','rhc'),
			'prefix'	=> 'rhc_basicview_current',
			'selector'	=> implode(',',array(
				'.rhcalendar.not-widget .fullCalendar .fc-view-basicWeek .fc-state-highlight',
				'.rhcalendar.not-widget .fullCalendar .fc-view-basicWeek table tr:hover td.fc-state-highlight',
				'.rhcalendar.not-widget .fullCalendar .fc-view-basicDay .fc-state-highlight',
				'.rhcalendar.not-widget .fullCalendar .fc-view-basicDay table tr:hover td.fc-state-highlight'
			))	
		));					
		
					
return $t;
		//-- Top cell --------------------------------			
		$i++;
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
		
			
		//-- Day number
		$i++;
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
		$i++;
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
		$i++;
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