<?php

/**
 * 
 *
 * @version $Id$
 * @copyright 2003 
 **/

class rhcss_editor_calendar_frame extends module_righthere_css{
	function rhcss_editor_calendar_frame($args=array()){
		$args['cb_init']=array(&$this,'cb_init');
		return $this->module_righthere_css($args);
	}

	function cb_init(){
		//called on the head when editor is active.
	}
	
	function options($t=array()){
		$i = count($t);
		//require RHL_PATH.'includes/admin_frontend_options.php';
		//----------------------------------------------------------------------
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc-header'; 
		$t[$i]->label 		= __('Calendar header','rhc');
		$t[$i]->options = array();
		
		$t[$i]->options[] =(object)array(
				'id'				=> 'rhc_calendar_margin_top',
				'type'				=> 'css',
				'label'				=> __('Top margin','rhc'),
				'input_type'		=> 'number',
				'unit'				=> 'px',
				'class'				=> 'input-mini',
				'min'				=> 0,
				'max'				=> 100,
				'step'				=> 1,
				'selector'			=> 'body .rhcalendar.not-widget.rhc_holder',
				'property'			=> 'margin-top',
				'real_time'			=> true
			);	
		
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhc_title',
			'selector'	=> 'body .rhcalendar .fullCalendar .fc-header-title h2',
			'labels'	=> (object)array(
				'family'	=> __('Title font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')
								
			)
		));
		
		$t[$i]->options[] =(object)array(
				'id'				=> 'rhc_title_margin_top',
				'type'				=> 'css',
				'label'				=> __('Title top margin','rhc'),
				'input_type'		=> 'number',
				'unit'				=> 'px',
				'class'				=> 'input-mini',
				'min'				=> 0,
				'max'				=> 100,
				'step'				=> 1,
				'selector'			=> 'body .rhcalendar .fullCalendar .fc-header-title',
				'property'			=> 'margin-top',
				'real_time'			=> true
			);			
		
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhc_header_btn_font',
			'selector'	=> '.rhcalendar .fc-header .fc-button, .rhcalendar .fc-footer .fc-button',
			'labels'	=> (object)array(
				'family'	=> __('Header button font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')
								
			)
		));

		$t[$i]->options[] =(object)array(
				'id'				=> 'rhc_header_btn_font_shadow',
				'type'				=> 'css',
				'label'				=> __('Header button font shadow','rhc'),
				'input_type'		=> 'textshadow',
				'opacity'			=> true,
				'selector'			=> '.rhcalendar .fc-header .fc-button:not(.fc-state-active), .rhcalendar .fc-footer .fc-button',
				'property'			=> 'text-shadow',
				'real_time'			=> true,
				'btn_clear'			=> true
			);
						
		//----------------------------------------------------------------------
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc-header-btn-all'; 
		$t[$i]->label 		= __('Header button (all states)','rhc');
		$t[$i]->options = array();
		$t[$i]->options = $this->add_border_radius_options($t[$i]->options,array(
			'prefix'	=> 'rhc_header_btn_all_rad_',
			'selector'	=> ".rhcalendar .fc-state-default,.rhcalendar .fc-footer .fc-button"
		));				
		//----------------------------------------------------------------------
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc-header-btn-def'; 
		$t[$i]->label 		= __('Header button (default state)','rhc');
		$t[$i]->options = array();
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Button background','rhc'),
			'prefix'	=> 'rhc_head_btn_bg_def',
			'selector'	=> '.rhcalendar .fc-state-default,.rhcalendar .fc-footer .fc-button.fc-state-default'	
		));	
		$t[$i]->options = $this->add_border_options($t[$i]->options,array(
			'prefix'	=> 'rhc_head_btn_border',
			'selector'	=> ".rhcalendar .fc-button.fc-state-default"
		));	
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhc_header_btn_def_font_',
			'selector'	=> implode(',',array(
				'.rhcalendar .fc-button.fc-state-default'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));			
		//----------------------------------------------------------------------
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc-header-btn-hover'; 
		$t[$i]->label 		= __('Header button (hover state)','rhc');
		$t[$i]->options = array();
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Button background','rhc'),
			'prefix'	=> 'rhc_head_btn_bg_hover',
			'selector'	=> '.rhcalendar .fc-state-default.fc-state-hover, .rhcalendar .fc-footer .fc-button.fc-state-default.fc-state-hover'	
		));	
		$t[$i]->options = $this->add_border_options($t[$i]->options,array(
			'prefix'	=> 'rhc_head_btn_hover_border_',
			'selector'	=> ".rhcalendar .fc-button.fc-state-default.fc-state-hover"
		));	
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhc_header_btn_hover_font_',
			'selector'	=> implode(',',array(
				'.rhcalendar .fc-button.fc-state-default.fc-state-hover'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));				
		//---- DISABLED ------------------------------------------------------------------
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc-header-btn-disabled'; 
		$t[$i]->label 		= __('Header button (disabled state)','rhc');
		$t[$i]->options = array();
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Button background','rhc'),
			'prefix'	=> 'rhc_head_btn_bg_disbled',
			'selector'	=> '.rhcalendar .fc-state-default.fc-state-disabled, .rhcalendar .fc-footer .fc-button.fc-state-default.fc-state-disabled'	
		));	
		$t[$i]->options = $this->add_border_options($t[$i]->options,array(
			'prefix'	=> 'rhc_head_btn_dis_border_',
			'selector'	=> ".rhcalendar .fc-button.fc-state-default.fc-state-disabled"
		));	
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhc_header_btn_dis_font_',
			'selector'	=> implode(',',array(
				'.rhcalendar .fc-button.fc-state-default.fc-state-disabled'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));				
		//---- DISABLED ------------------------------------------------------------------
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc-header-btn-disabled-h'; 
		$t[$i]->label 		= __('Header button (disabled hovered)','rhc');
		$t[$i]->options = array();
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Button background','rhc'),
			'prefix'	=> 'rhc_head_btn_bg_disbled_h',
			'selector'	=> '.rhcalendar .fc-state-default.fc-state-disabled:hover, .rhcalendar .fc-footer .fc-button.fc-state-default.fc-state-disabled:hover'	
		));	
		$t[$i]->options = $this->add_border_options($t[$i]->options,array(
			'prefix'	=> 'rhc_head_btn_dish_border_',
			'selector'	=> ".rhcalendar .fc-button.fc-state-default.fc-state-disabled:hover"
		));	
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhc_header_btn_dish_font_',
			'selector'	=> implode(',',array(
				'.rhcalendar .fc-button.fc-state-default.fc-state-disabled:hover'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));						
		//---- HEAD BUTTON ACTIVE ------------------------------------------------------------------
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc-header-btn-act'; 
		$t[$i]->label 		= __('Header button (active state)','rhc');
		$t[$i]->options = array();
		
		$t[$i]->options[] =(object)array(
				'id'				=> 'rhc_header_btn_act_color',
				'type'				=> 'css',
				'label'				=> __('Font color','rhc'),
				'input_type'		=> 'color_or_something_else',
				'selector'			=> '.rhcalendar .fc-state-default.fc-state-active',
				'property'			=> 'color',
				'real_time'			=> true,
				'btn_clear'			=> true
			);
				
		$t[$i]->options[] =(object)array(
				'id'				=> 'rhc_header_btn_act_shadow',
				'type'				=> 'css',
				'label'				=> __('Text shadow','rhc'),
				'input_type'		=> 'textshadow',
				'opacity'			=> true,
				'selector'			=> '.rhcalendar .fc-state-default.fc-state-active',
				'property'			=> 'text-shadow',
				'real_time'			=> true,
				'btn_clear'			=> true
			);	
									
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Button background','rhc'),
			'prefix'	=> 'rhc_head_btn_bg_act',
			'selector'	=> '.rhcalendar .fc-state-default.fc-state-active'			
		));		

		//---- HEAD BUTTON ACTIVE HOVERED ------------------------------------------------------------------
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc-header-btn-act-h'; 
		$t[$i]->label 		= __('Header button (active hovered)','rhc');
		$t[$i]->options = array();

		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Button background','rhc'),
			'prefix'	=> 'rhc_head_btn_bg_act_h',
			'selector'	=> '.rhcalendar .fc-state-default.fc-state-active:hover'			
		));						
		//----------------------------------------------------------------------




					
			
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