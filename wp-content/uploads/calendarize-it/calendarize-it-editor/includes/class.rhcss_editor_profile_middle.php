<?php

/**
 * 
 *
 * @version $Id$
 * @copyright 2003 
 **/

class rhcss_editor_profile_middle extends module_righthere_css{
	function rhcss_editor_profile_middle($args=array()){
		return $this->module_righthere_css($args);
	}
	
	function options($t=array()){
		$i = count($t);
		//---------------------------------										
		
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc_profile_middle_box'; 
		$t[$i]->label 		= __('Background','rhc');
		$t[$i]->options = array();	
							
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Background','rhc'),
			'prefix'	=> 'rhc_profile_middle_bg',
			'selector'	=> implode(',',array('#cz_profile.div_czpf > div:nth-child(2)'))
		));	
		
		
		//---------------------------------									

		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc_profile_middle_box_defualt_font'; 
		$t[$i]->label 		= __('Default Font','rhc');
		$t[$i]->options = array();	
		
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhc_profile_middle_default_font',
			'selector'	=> implode(',',array(
				'#cz_profile.div_czpf > div:nth-child(2) .ob_s_c #user_show',
				'#cz_profile.div_czpf > div:nth-child(2) #user_show a'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));
			
		
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhc_profile_middle_default_hover_font',
			'selector'	=> implode(',',array(
				'#cz_profile.div_czpf > div:nth-child(2) #user_show a:hover'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Font (Hover)','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));
		
		//---------------------------------									

		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc_profile_middle_box_icons'; 
		$t[$i]->label 		= __('Icons','rhc');
		$t[$i]->options = array();	
	
		$t[$i]->options[] = (object)array(
					'id'				=> 'rhc_profile_middle_pencil_font',
					'type'				=> 'css',
					'label'				=> __('Pencil','rhc'),
					'input_type'		=> 'colorpicker',
					'holder_class'		=> '',
					'opacity'			=> true,
					'btn_clear'			=> true,	
					'selector'			=> implode(',',array('#cz_profile.div_czpf > div:nth-child(2) .editble')),
					'property'			=> 'color',
					'other_options'		=> array(
						'transparent'	=> 'transparent'
					),				
					'real_time'			=> true
				);
			
			
		$t[$i]->options[] = (object)array(
					'id'				=> 'rhc_profile_middle_icon_color',
					'type'				=> 'css',
					'label'				=> __('Icon color','rhc'),
					'input_type'		=> 'colorpicker',
					'holder_class'		=> '',
					'opacity'			=> true,
					'btn_clear'			=> true,	
					'selector'			=> '#cz_profile.div_czpf > div:nth-child(2) .icon_extra',
					'property'			=> 'color',
					'other_options'		=> array(
						'transparent'	=> 'transparent'
					),				
					'real_time'			=> true
				);
		
	
	
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