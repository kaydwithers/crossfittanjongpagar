<?php

/**
 * 
 *
 * @version $Id$
 * @copyright 2003 
 **/

class rhcss_tooltip extends module_righthere_css{
	function rhcss_tooltip($args=array()){
		$args['cb_init']=array(&$this,'cb_init');
		return $this->module_righthere_css($args);
	}

	function cb_init(){
		//called on the head when editor is active.
	}
	
	function options($t=array()){
		$i = count($t);
		//require RHL_PATH.'includes/admin_frontend_options.php';

		//-- TOOLTIP --------------------------------			
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc-tooltip'; 
		$t[$i]->label 		= __('Tooltip','rhc');
		$t[$i]->options = array();	
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Background','rhc'),
			'label_bg'	=> __('Bg, border and tip color','rhc'),
			'prefix'	=> 'rhc_tooltip',
			'selector'	=> '.fct-tooltip',
			'derived_color'=> array(
						array(
							'type'	=> 'color_darken',
							'val'	=> '5',
							'sel'	=> ".fct-tooltip",
							'arg'	=> array(
								(object)array(
									'name' => 'border-color',
									'tpl'	=>'__value__;'
								),
								(object)array(
									'name' => 'box-shadow',
									'tpl'	=>'0 1px 12px __value__;'
								)
							)
						),
						array(
							'type'	=> 'same',
							'val'	=> '',
							'sel'	=> ".fc-tip-left .fct-arrow",
							'arg'	=> array(
								(object)array(
									'name' => 'border-color',
									'tpl'	=>'transparent __value__ transparent transparent;'
								)
							)
						),
						array(
							'type'	=> 'same',
							'val'	=> '',
							'sel'	=> ".fc-tip-right .fct-arrow",
							'arg'	=> array(
								(object)array(
									'name' => 'border-color',
									'tpl'	=>'transparent transparent transparent __value__;'
								)
							)
						)
					)				
			)			
		);

		//-- TOOLTIP fonts--------------------------------			
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc-tooltip-fonts'; 
		$t[$i]->label 		= __('Tooltip fonts','rhc');
		$t[$i]->options = array();		
		
		$t[$i]->options[] =(object)array(
				'id'				=> 'rhc_tooltip_title_line_h',
				'type'				=> 'css',
				'label'				=> __('Title line height','rhc'),
				'input_type'		=> 'number',
				'min'				=> 0,
				'max'				=> 200,
				'step'				=> 1,
				'unit'				=> 'px',
				'class'				=> 'input-small',
				'selector'			=> '.fct-header .fc-title, .fct-header .fc-title a',
				'property'			=> 'line-height',
				'real_time'			=> true,
				'btn_clear'			=> true
			);	
			
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhc_tooltip_title_font',
			'selector'	=> '.fct-header .fc-title, .fct-header .fc-title a',
			'labels'	=> (object)array(
				'family'	=> __('Title font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));	
			
		$t[$i]->options[] =(object)array(
				'id'				=> 'rhc_fct_default_font',
				'type'				=> 'css',
				'label'				=> __('Default font family','rhc'),
				'input_type'		=> 'font',
				'class'				=> '',
				'holder_class'		=> '',
				//'class'				=> 'input-mini pop_rangeinput',
				'selector'			=> '.fct-tooltip',
				'property'			=> 'font-family',
				'real_time'			=> true
			);

		//-- TOOLTIP fonts--------------------------------			
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc-tooltip-fonts-cfields'; 
		$t[$i]->label 		= __('Tooltip custom fields','rhc');
		$t[$i]->options = array();		

		$t[$i]->options[] =(object)array(
				'id'				=> 'rhc_tooltip_cfields_lh',
				'type'				=> 'css',
				'label'				=> __('Line height','rhc'),
				'input_type'		=> 'number',
				'min'				=> 0,
				'max'				=> 200,
				'step'				=> 1,
				'unit'				=> 'px',
				'class'				=> 'input-small',
				'selector'			=> '.fct-tooltip .fe-extrainfo-holder .rhc-info-cell:not(.fe-cell-label) label.fe-extrainfo-label',
				'property'			=> 'line-height',
				'real_time'			=> true,
				'btn_clear'			=> true
			);			
		
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhc_tooltip_fonts_cfields',
			'selector'	=> '.fct-tooltip .fe-extrainfo-holder .rhc-info-cell:not(.fe-cell-label) label.fe-extrainfo-label',
			'labels'	=> (object)array(
				'family'	=> __('Label font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));			
		
		$t[$i]->options[] =(object)array(
				'id'				=> 'rhc_tooltip_fonts_cfields_shadow',
				'type'				=> 'css',
				'label'				=> __('Label font shadow','rhc'),
				'input_type'		=> 'textshadow',
				'opacity'			=> true,
				'selector'			=> '.fct-tooltip .fe-extrainfo-holder .rhc-info-cell:not(.fe-cell-label) label.fe-extrainfo-label',
				'property'			=> 'text-shadow',
				'real_time'			=> true,
				'btn_clear'			=> true
			);	
		//------	
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhc_tooltip_fonts_cfields_val',
			'selector'	=> '.fct-tooltip .fe-extrainfo-holder .rhc-info-cell:not(.fe-cell-label) .fe-extrainfo-value',
			'labels'	=> (object)array(
				'family'	=> __('Value font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));			
		
		$t[$i]->options[] =(object)array(
				'id'				=> 'rhc_tooltip_fonts_cfields_val_shadow',
				'type'				=> 'css',
				'label'				=> __('Value font shadow','rhc'),
				'input_type'		=> 'textshadow',
				'opacity'			=> true,
				'selector'			=> '.fct-tooltip .fe-extrainfo-holder .rhc-info-cell:not(.fe-cell-label) .fe-extrainfo-value',
				'property'			=> 'text-shadow',
				'real_time'			=> true,
				'btn_clear'			=> true
			);				
		//------	
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhc_tooltip_fonts_cfields_link',
			'selector'	=> '.fct-tooltip .fe-extrainfo-holder .rhc-info-cell:not(.fe-cell-label) .fe-extrainfo-value a',
			'labels'	=> (object)array(
				'family'	=> __('Link font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));			
		
		$t[$i]->options[] =(object)array(
				'id'				=> 'rhc_tooltip_fonts_cfields_link_shadow',
				'type'				=> 'css',
				'label'				=> __('Link font shadow','rhc'),
				'input_type'		=> 'textshadow',
				'opacity'			=> true,
				'selector'			=> '.fct-tooltip .fe-extrainfo-holder .rhc-info-cell:not(.fe-cell-label) .fe-extrainfo-value a',
				'property'			=> 'text-shadow',
				'real_time'			=> true,
				'btn_clear'			=> true
			);				 
		//------	
		$t[$i]->options[] =(object)array(
				'id'				=> 'rhc_tooltip_cfields_desc_lh',
				'type'				=> 'css',
				'label'				=> __('Description Line height','rhc'),
				'input_type'		=> 'number',
				'min'				=> 0,
				'max'				=> 200,
				'step'				=> 1,
				'unit'				=> 'px',
				'class'				=> 'input-small',
				'selector'			=> '.fct-tooltip .fc-description',
				'property'			=> 'line-height',
				'real_time'			=> true,
				'btn_clear'			=> true
			);	
					
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhc_tooltip_fc_desc',
			'selector'	=> '.fct-tooltip .fc-description',
			'labels'	=> (object)array(
				'family'	=> __('Description font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));			
		
		$t[$i]->options[] =(object)array(
				'id'				=> 'rhc_tooltip_fc_desc_shadow',
				'type'				=> 'css',
				'label'				=> __('Description font shadow','rhc'),
				'input_type'		=> 'textshadow',
				'opacity'			=> true,
				'selector'			=> '.fct-tooltip .fc-description',
				'property'			=> 'text-shadow',
				'real_time'			=> true,
				'btn_clear'			=> true
			);						

			
		//-- TOOLTIP shadow --------------------------------			
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc-tooltip-shadow'; 
		$t[$i]->label 		= __('Tooltip shadow','rhc');
		$t[$i]->options = array();				
		$t[$i]->options[] =(object)array(
				'id'				=> 'tooltip_shadow',
				'type'				=> 'css',
				'label'				=> __('Box shadow','rhc'),
				'input_type'		=> 'textshadow',
				'opacity'			=> true,
				'selector'			=> "div.fct-tooltip",
				'property'			=> 'box-shadow',
				'real_time'			=> true,
				'btn_clear'			=> true
			);


		
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