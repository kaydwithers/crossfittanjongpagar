<?php

/**
 * 
 *
 * @version $Id$
 * @copyright 2003 
 **/

 
class rhcss_dropdown_filters extends module_righthere_css{
	function rhcss_dropdown_filters($args=array()){
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
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhcmap-header'; 
		$t[$i]->label 		= __('Filter bar','rhcmap');
		$t[$i]->options = array();		
		
		$t[$i]->options[] =(object)array(
				'id'				=> 'rhcmap_bar_btn_color',
				'type'				=> 'css',
				'label'				=> __('Button color','rhc'),
				'input_type'		=> 'color_or_something_else',
				'selector'			=> 'body .rhcalendar .tax_filter_holder .tax_filter_item_holder button.dropdown-toggle,body .rhcalendar .tax_filter_holder button.dropdown-toggle,body .rhcalendar .fc-head-control .tax_filter_previous.btn.btn-small.btn-taxfilter.fui-arrow-left',
				'property'			=> 'background-color',
				'other_options'		=> array(
					'transparent'	=> 'transparent'
				),
				'btn_clear'			=> true,
				'opacity'			=> true,
				'real_time'			=> true
			);		
		
		$t[$i]->options[] =(object)array(
				'id'				=> 'rhcmap_bar_btn_color_hover',
				'type'				=> 'css',
				'label'				=> __('Button color hover','rhc'),
				'input_type'		=> 'color_or_something_else',
				'selector'			=> 'body .rhcalendar .fullCalendar .tax_filter_holder .btn.dropdown-toggle.btn-taxfilter:hover, body .rhcalendar .fullCalendar .tax_filter_holder .open .btn.dropdown-toggle.btn-taxfilter',
				'property'			=> 'background-color',
				'other_options'		=> array(
					'transparent'	=> 'transparent'
				),
				'btn_clear'			=> true,
				'opacity'			=> true,
				'real_time'			=> true
			);	
			
		$t[$i]->options[] =(object)array(
				'id'				=> 'rhcmap_bar_btn_color_open',
				'type'				=> 'css',
				'label'				=> __('Button color open','rhc'),
				'input_type'		=> 'color_or_something_else',
				'selector'			=> 'body .tax_filter_holder .tax_filter_item_holder .btn-group.open .btn.btn-taxfilter.dropdown-toggle',
				'property'			=> 'background-color',
				'other_options'		=> array(
					'transparent'	=> 'transparent'
				),
				'btn_clear'			=> true,
				'opacity'			=> true,
				'real_time'			=> true
			);	
			
		$t[$i]->options[] =(object)array(
				'id'				=> 'rhcmap_bar_btn_caret',
				'type'				=> 'css',
				'label'				=> __('Icon color','rhc'),
				'input_type'		=> 'color_or_something_else',
				'selector'			=> 'body .rhcalendar .fc-head-control .select .caret',
				'property'			=> 'border-top-color',
				'other_options'		=> array(
					'transparent'	=> 'transparent'
				),
				'btn_clear'			=> true,
				'opacity'			=> true,
				'real_time'			=> true,
				'derived'			=> array(
						array(
							'type'	=> 'same',
							'val'	=> '',
							'sel'	=> "body .rhcalendar .fc-head-control .select .caret",
							'arg'	=> array(
								(object)array(
									'name' => 'border-color',
									'tpl'	=>'__value__ transparent __value__ transparent;'
								)
							)
						),	
						array(
							'type'	=> 'same',
							'val'	=> '',
							'sel'	=> "body .rhcalendar .fc-head-control a.btn.tax_filter_previous",
							'arg'	=> array(
								(object)array(
									'name' => 'color',
									'tpl'	=>'__value__;'
								)
							)
						)		
					)	
				
			);		

		$t[$i]->options[] =(object)array(
				'id'				=> 'rhcmap_bar_bg',
				'type'				=> 'css',
				'label'				=> __('Background','rhc'),
				'input_type'		=> 'color_or_something_else',
				'selector'			=> 'body .rhc_holder.gmap-fullscreen .fc-head-control, body .tax_filter_nav',
				'property'			=> 'background-color',
				'other_options'		=> array(
					'transparent'	=> 'transparent'
				),
				'btn_clear'			=> true,
				'opacity'			=> true,
				'real_time'			=> true
			);	
			
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhcmap_bar_font',
			'selector'	=> '.rhcalendar .fc-head-control .btn span, .rhcalendar .fc-head-control .btn:hover span, .rhcalendar .fc-head-control .btn:focus span',
			'labels'	=> (object)array(
				'family'	=> __('Font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));	
		
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhcmap_bar_font_hover',
			'selector'	=> '.rhcalendar.rhc_holder .fc-head-control .btn:hover span, .rhcalendar.rhc_holder .fc-head-control .btn:focus span',
			'labels'	=> (object)array(
				'family'	=> __('Font Hover','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));	
		
		$t[$i]->options[] =(object)array(
				'id'				=> 'rhcmap_bar_font_shadow',
				'type'				=> 'css',
				'label'				=> __('Font shadow','rhc'),
				'input_type'		=> 'textshadow',
				'opacity'			=> true,
				'selector'			=> '.rhcalendar .fc-head-control .btn, .rhcalendar .fc-head-control .btn:hover, .rhcalendar .fc-head-control .btn:focus',
				'property'			=> 'text-shadow',
				'real_time'			=> true,
				'btn_clear'			=> true
			);	
			
		//--- Filter Dropdown
		//-- FILTER BAR --------------------------------			
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhcmap-filter-dropdown'; 
		$t[$i]->label 		= __('Filter dropdown','rhcmap');
		$t[$i]->options = array();				

		$prefix = 'rhcmap_filter_dropdown_';
		$selector = '.fullCalendar .tax_filter_holder .tax_filter_item_holder ul.dropdown-menu,.rhcalendar.rhc_holder .rh-flat-ui.tax_filter_holder .dropdown-menu';
		$selector_font = '.fullCalendar .tax_filter_holder .tax_filter_item_holder ul.dropdown-menu span,.rhcalendar.rhc_holder .rh-flat-ui.tax_filter_holder .dropdown-menu span'; 

		$t[$i]->options[] =(object)array(
				'id'				=> $prefix.'bg',
				'type'				=> 'css',
				'label'				=> __('Background','rhc'),
				'input_type'		=> 'color_or_something_else',
				'selector'			=> $selector,
				'property'			=> 'background-color',
				'other_options'		=> array(
					'transparent'	=> 'transparent'
				),
				'btn_clear'			=> true,
				'opacity'			=> true,
				'real_time'			=> true,
				'derived'			=> array(
						array(
							'type'	=> 'same',
							'val'	=> '',
							'sel'	=> ".rhcalendar .btn-group.select.tax_filter_field .dropdown-arrow,.rhcalendar .tax_filter_holder .btn-group i.dropdown-arrow",
							'arg'	=> array(
								(object)array(
									'name' => 'border-color',
									'tpl'	=>'transparent transparent __value__;'
								)
							)
						)
				)					
			);	

			
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> $prefix.'font',
			'selector'	=> $selector_font,
			'labels'	=> (object)array(
				'family'	=> __('Font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));	
		
		$t[$i]->options[] =(object)array(
				'id'				=> $prefix.'shadow',
				'type'				=> 'css',
				'label'				=> __('Font shadow','rhc'),
				'input_type'		=> 'textshadow',
				'opacity'			=> true,
				'selector'			=> $selector,
				'property'			=> 'text-shadow',
				'real_time'			=> true,
				'btn_clear'			=> true
			);		
			
		//--- Filter Dropdown Hover
		//-- FILTER BAR --------------------------------			
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhcmap-filter-dropdown-hover'; 
		$t[$i]->label 		= __('Filter dropdown hover','rhcmap');
		$t[$i]->options = array();				

		$prefix = 'rhcmap_filter_dropdown_hover_';
		$selector = 'body .rhcalendar .fullCalendar .fc-head-control .tax_filter_holder .tax_filter_item_holder ul.dropdown-menu li > a:hover, body .rhcalendar .tax_filter_holder .dropdown-menu li a:hover';
		$selector_font = 'body .rhcalendar .fullCalendar .fc-head-control .tax_filter_holder .tax_filter_item_holder ul.dropdown-menu li > a:hover span, body .rhcalendar .tax_filter_holder .dropdown-menu li a:hover span'; 
		$t[$i]->options[] =(object)array(
				'id'				=> $prefix.'bg',
				'type'				=> 'css',
				'label'				=> __('Background','rhc'),
				'input_type'		=> 'color_or_something_else',
				'selector'			=> $selector,
				'property'			=> 'background-color',
				'other_options'		=> array(
					'transparent'	=> 'transparent'
				),
				'btn_clear'			=> true,
				'opacity'			=> true,
				'real_time'			=> true
			);	
			
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> $prefix.'font',
			'selector'	=> $selector_font,
			'labels'	=> (object)array(
				'family'	=> __('Font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));	
		
		$t[$i]->options[] =(object)array(
				'id'				=> $prefix.'shadow',
				'type'				=> 'css',
				'label'				=> __('Font shadow','rhc'),
				'input_type'		=> 'textshadow',
				'opacity'			=> true,
				'selector'			=> $selector,
				'property'			=> 'text-shadow',
				'real_time'			=> true,
				'btn_clear'			=> true
			);	
		//-- FILTER dropdown SELECTED --------------------------------			
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhcmap-filter-dropdown-selected'; 
		$t[$i]->label 		= __('Filter dropdown selected','rhcmap');
		$t[$i]->options = array();				

		$prefix = 'rhcmap_filter_dropdown_selected_';
		$selector = implode(',',array(
			'.fullCalendar .tax_filter_holder .tax_filter_item_holder ul.dropdown-menu li.active > a',
			'.fullCalendar .tax_filter_holder .tax_filter_item_holder ul.dropdown-menu li.selected > a',
			'.rhcalendar.rhc_holder .tax_filter_holder .dropdown-menu.rhc-with-tax-color li.selected a',
			'.rhcalendar.rhc_holder .tax_filter_holder .dropdown-menu li.selected a'
		));
		$selector_font = implode(',',array(
			'.fullCalendar .tax_filter_holder .tax_filter_item_holder ul.dropdown-menu li.active > a span',
			'.fullCalendar .tax_filter_holder .tax_filter_item_holder ul.dropdown-menu li.selected > a span',
			'.rhcalendar.rhc_holder .tax_filter_holder .dropdown-menu.rhc-with-tax-color li.selected a span',
			'.rhcalendar.rhc_holder .tax_filter_holder .dropdown-menu li.selected a span'
		));
 	

		
		$t[$i]->options[] =(object)array(
				'id'				=> $prefix.'bg',
				'type'				=> 'css',
				'label'				=> __('Background','rhc'),
				'input_type'		=> 'color_or_something_else',
				'selector'			=> $selector,
				'property'			=> 'background-color',
				'other_options'		=> array(
					'transparent'	=> 'transparent'
				),
				'btn_clear'			=> true,
				'opacity'			=> true,
				'real_time'			=> true
			);	
			
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> $prefix.'font',
			'selector'	=> $selector_font,
			'labels'	=> (object)array(
				'family'	=> __('Font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));	
		
		$t[$i]->options[] =(object)array(
				'id'				=> $prefix.'shadow',
				'type'				=> 'css',
				'label'				=> __('Font shadow','rhc'),
				'input_type'		=> 'textshadow',
				'opacity'			=> true,
				'selector'			=> $selector,
				'property'			=> 'text-shadow',
				'real_time'			=> true,
				'btn_clear'			=> true
			);	
										
//-- fullscreen button 
					
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