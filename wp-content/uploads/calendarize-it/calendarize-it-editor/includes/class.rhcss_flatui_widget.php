<?php

/**
 * 
 *
 * @version $Id$
 * @copyright 2003 
 **/

 
class rhcss_flatui_widget extends module_righthere_css{
	function rhcss_flatui_widget($args=array()){
		$args['cb_init']=array(&$this,'cb_init');
		return $this->module_righthere_css($args);
	}
	
	function cb_init(){
		//called on the head when editor is active.
		//adjust the height to accomodate more tabs on this screen.
?>
<style>
body .rh-css-edit .accordion-heading .accordion-toggle {
	padding-top:6px;
	padding-bottom:6px;
}
</style>
<?php		
	}
	
	function options($t=array()){
		$i = count($t);

		//-- FILTER BAR --------------------------------			
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhcfui_header_fonts'; 
		$t[$i]->label 		= __('Header fonts','rhcfui');
		$t[$i]->options = array();		
		
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhcfui_header_default_font',
			'selector'	=> implode(',',array(
				'body .widget_flat_events_calendar_widget .rhcalendar.for-widget.flat-ui-cal .fc-header',
				'body .widget_flat_events_calendar_widget .rhcalendar.for-widget.flat-ui-cal .fc-header-cell .fuiw-month',
				'body .widget_flat_events_calendar_widget .rhcalendar.for-widget.flat-ui-cal .fc-header-cell .fuiw-year',
				'body .widget_flat_events_calendar_widget .rhcalendar.for-widget.flat-ui-cal .fc-header-title h2'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Default font','rhcfui'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));			

		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhcfui_header_daynum_font',
			'selector'	=> implode(',',array(
				'body .widget_flat_events_calendar_widget .rhcalendar.for-widget.flat-ui-cal .fc-header-cell .fuiw-day'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Day number font','rhcfui'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));		

		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhcfui_header_dayname_font',
			'selector'	=> implode(',',array(
				'body .widget_flat_events_calendar_widget .rhcalendar.for-widget.flat-ui-cal .fc-header-cell .fuiw-dayname'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Day name font','rhcfui'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));	

		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhcfui_header_month_font',
			'selector'	=> implode(',',array(
				'body .widget_flat_events_calendar_widget .rhcalendar.for-widget.flat-ui-cal .fc-header-cell .fuiw-month'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Month font','rhcfui'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));

		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhcfui_header_year_font',
			'selector'	=> implode(',',array(
				'body .widget_flat_events_calendar_widget .rhcalendar.for-widget.flat-ui-cal .fc-header-cell .fuiw-year'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Year font','rhcfui'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));		

		//-- HEADER Month Changed --------------------------------			
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhcfui_headerc'; 
		$t[$i]->label 		= __('Header(Month changed)','rhcfui');
		$t[$i]->options = array();	
		/*
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhcfui_headerc_date_font',
			'selector'	=> implode(',',array(
				'body .widget_flat_events_calendar_widget .rhcalendar.for-widget.flat-ui-cal .fc-header-cell .fuiw-month',
				'body .widget_flat_events_calendar_widget .rhcalendar.for-widget.flat-ui-cal .fc-header-cell .fuiw-year'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Month font','rhcfui'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));			
		*/
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhcfui_headerc_month_font',
			'selector'	=> implode(',',array(
				'body .widget_flat_events_calendar_widget .rhcalendar.for-widget.flat-ui-cal .fc-header-cell span.fuiw-month'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Month font','rhcfui'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));	

		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhcfui_headerc_year_font',
			'selector'	=> implode(',',array(
				'body .widget_flat_events_calendar_widget .rhcalendar.for-widget.flat-ui-cal .fc-header-cell span.fuiw-year'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Year font','rhcfui'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));		

		//-- HEADER Month Changed --------------------------------			
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhcfui_header'; 
		$t[$i]->label 		= __('Header','rhcfui');
		$t[$i]->options = array();			

		$t[$i]->options[] =(object)array(
				'id'				=> 'rhcfui_header_h',
				'type'				=> 'css',
				'label'				=> __('Header height','rhc'),
				'input_type'		=> 'number',
				'unit'				=> 'px',
				'class'				=> 'input-mini',
				'min'				=> 0,
				'max'				=> 250,
				'step'				=> 1,
				'selector'			=> 'body .widget_flat_events_calendar_widget .rhcalendar.for-widget.flat-ui-cal .fc-header',
				'property'			=> 'height',
				'real_time'			=> true
			);	
		
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Header background','rhc'),
			'prefix'	=> 'rhcfui_header_bg',
			'selector'	=> 'body .widget_flat_events_calendar_widget .rhcalendar.for-widget.flat-ui-cal .fc-header'	
		));	

		
		//-- FILTER BAR --------------------------------			
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhcfui_header_border'; 
		$t[$i]->label 		= __('Header border','rhcfui');
		$t[$i]->options = array();	

		$t[$i]->options = $this->add_border_options($t[$i]->options,array(
			'prefix'	=> 'rhcfui_header_border_',
			'selector'	=> "body .widget_flat_events_calendar_widget .rhcalendar.for-widget.flat-ui-cal .fc-header"
		));	
		
		$t[$i]->options = $this->add_border_radius_options($t[$i]->options,array(
			'prefix'	=> 'rhcfui_header_border_rad_',
			'selector'	=> "body .widget_flat_events_calendar_widget .rhcalendar.for-widget.flat-ui-cal .fc-header"
		));	
				
		//-- BODY Fonts --------------------------------			
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhcfui_body_fonts'; 
		$t[$i]->label 		= __('Body fonts','rhcfui');
		$t[$i]->options = array();		

		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhcfui_view_header_',
			'selector'	=> implode(',',array(
				'body .widget_flat_events_calendar_widget .fullCalendar .fc-view .fc-day-header'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Column Title font','rhcfui'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));	

		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhcfui_view_date1_',
			'selector'	=> implode(',',array(
				'body .widget_flat_events_calendar_widget .rhcalendar.for-widget.flat-ui-cal .fc-day-number'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Date font','rhcfui'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));
		
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhcfui_view_date2_',
			'selector'	=> implode(',',array(
				'body .widget_flat_events_calendar_widget .rhcalendar.for-widget.flat-ui-cal .fc-have-event .fc-day-number'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Date font (with event)','rhcfui'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));			
		
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhcfui_view_date3_',
			'selector'	=> implode(',',array(
				'body .widget_flat_events_calendar_widget .rhcalendar.for-widget.flat-ui-cal .fc-have-event.fc-today .fc-day-number',
				'body .widget_flat_events_calendar_widget .rhcalendar.for-widget.flat-ui-cal .fc-today .fc-day-number'
			)),			
			
			'labels'	=> (object)array(
				'family'	=> __('Current day font(with event)','rhcfui'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));		
		
		//-- BODY Bg --------------------------------			
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhcfui_body_bg'; 
		$t[$i]->label 		= __('Body backgkground','rhcfui');
		$t[$i]->options = array();	

		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Body background','rhc'),
			'prefix'	=> 'rhcfui_body_bg',
			'selector'	=> 'body .widget_flat_events_calendar_widget .fc-view'	
		));			
		
		
		//-- BODY Bg --------------------------------			
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhcfui_body_border'; 
		$t[$i]->label 		= __('Body border','rhcfui');
		$t[$i]->options = array();	
		
		$t[$i]->options = $this->add_border_options($t[$i]->options,array(
			'prefix'	=> 'rhcfui_body_border_',
			'selector'	=> "body .widget_flat_events_calendar_widget .rhcalendar.for-widget.flat-ui-cal .fc-border-separate"
		));	
		
		$t[$i]->options = $this->add_border_radius_options($t[$i]->options,array(
			'prefix'	=> 'rhcfui_body_border_rad_',
			'selector'	=> "body .widget_flat_events_calendar_widget .rhcalendar.for-widget.flat-ui-cal .fc-border-separate"
		));			
		
		//-- BODY Bg --------------------------------			
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhcfui_event_bg'; 
		$t[$i]->label 		= __('Event Background','rhcfui');
		$t[$i]->options = array();		
		
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Day with event','rhc'),
			'prefix'	=> 'rhcfui_event_bg',
			'selector'	=> 'body .widget_flat_events_calendar_widget .rhcalendar.for-widget.flat-ui-cal .fc-have-event .fc-day-number'	
		));	
		
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Current day','rhc'),
			'prefix'	=> 'rhcfui_event_current_bg',
			'selector'	=> 'body .widget_flat_events_calendar_widget .rhcalendar.for-widget.flat-ui-cal .fc-today .fc-day-number'	
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