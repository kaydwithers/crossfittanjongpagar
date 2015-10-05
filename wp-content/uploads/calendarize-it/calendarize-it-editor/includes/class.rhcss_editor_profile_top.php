<?php

/**
 * 
 *
 * @version $Id$
 * @copyright 2003 
 **/

class rhcss_editor_profile_top extends module_righthere_css{
	function rhcss_editor_profile_top($args=array()){
		return $this->module_righthere_css($args);
	}
	
	function options($t=array()){
		$i = count($t);
		//---------------------------------									
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc_profile_top_box_bg'; 
		$t[$i]->label 		= __('Background','rhc');
		$t[$i]->options = array();	
							
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Background','rhc'),
			'prefix'	=> 'rhc_profile_top_bg',
			'selector'	=> implode(',',array(
				'#cz_profile.div_czpf > div:first-child'
			))
		));	
		
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc_profile_top_box_social_bg'; 
		$t[$i]->label 		= __('Socail Background','rhc');
		$t[$i]->options = array();
		
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Facebook bg','rhc'),
			'prefix'	=> 'rhc_profile_top_facebook_bg',
			'selector'	=> implode(',',array(
				'.div_czpf .czpf_facebook'
			))
		));	
		
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Twitter bg','rhc'),
			'prefix'	=> 'rhc_profile_top_twitter_bg',
			'selector'	=> implode(',',array(
				'.div_czpf .czpf_twitter'
			))
		));	
		
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Google+ bg','rhc'),
			'prefix'	=> 'rhc_profile_top_googleplus_bg',
			'selector'	=> implode(',',array(
				'.div_czpf .czpf_googleplus'
			))
		));	
		
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('LinkedIn bg','rhc'),
			'prefix'	=> 'rhc_profile_top_linkedin_bg',
			'selector'	=> implode(',',array(
				'.div_czpf .czpf_linkedin'
			))
		));		
		
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Social not active bg','rhc'),
			'prefix'	=> 'rhc_profile_top_social_default_bg',
			'selector'	=> implode(',',array(
				'.div_czpf .czpf_facebook.czpf_deativate',
				'.div_czpf .czpf_twitter.czpf_deativate',
				'.div_czpf .czpf_googleplus.czpf_deativate',
				'.div_czpf .czpf_linkedin.czpf_deativate'
			))
		));	

		//---------------------------------									

		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc_profile_top_box_font'; 
		$t[$i]->label 		= __('Default Font','rhc');
		$t[$i]->options = array();	
		
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhc_profile_top_default_font',
			'selector'	=> implode(',',array(
				'#cz_profile.div_czpf > div:nth-child(1) .ob_s_c:not(.czpf_full_name) #user_show',
				'#cz_profile.div_czpf > div:nth-child(1) .ob_s_c:not(.czpf_full_name) #user_show a'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));
			
		
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhc_profile_top_default_hover_font',
			'selector'	=> implode(',',array(
				'#cz_profile.div_czpf > div:nth-child(1) .ob_s_c:not(.czpf_full_name) #user_show a:hover',
				
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
		$t[$i]->id 			= 'rhc_profile_top_box_font_fullname'; 
		$t[$i]->label 		= __('Fullname Font','rhc');
		$t[$i]->options = array();	

		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhc_profile_top_fullname_font',
			'selector'	=> implode(',',array(
				'#cz_profile.div_czpf > div:nth-child(1) .czpf_full_name.ob_s_c #user_show',
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));	
		
		//---------------------------------			
		
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc_profile_top_box_icon_bg'; 
		$t[$i]->label 		= __('Icons','rhc');
		$t[$i]->options = array();
		
		$t[$i]->options[] = (object)array(
					'id'				=> 'rhc_profile_top_pencil_font',
					'type'				=> 'css',
					'label'				=> __('Pencil','rhc'),
					'input_type'		=> 'colorpicker',
					'holder_class'		=> '',
					'opacity'			=> true,
					'btn_clear'			=> true,	
					'selector'			=> implode(',',array('#cz_profile.div_czpf > div:nth-child(1) .editble')),
					'property'			=> 'color',
					'other_options'		=> array(
						'transparent'	=> 'transparent'
					),				
					'real_time'			=> true
				);
				
				
		$t[$i]->options[] = (object)array(
					'id'				=> 'rhc_profile_top_icon_color',
					'type'				=> 'css',
					'label'				=> __('Icon color','rhc'),
					'input_type'		=> 'colorpicker',
					'holder_class'		=> '',
					'opacity'			=> true,
					'btn_clear'			=> true,	
					'selector'			=> implode(',',array(
				'#cz_profile.div_czpf > div:nth-child(1) .icon_extra',
				'#cz_profile.div_czpf > div:nth-child(1) div.col-front-8.singleobject:nth-child(2):nth-child(2) .icon_extra'
			)),
					'property'			=> 'color',
					'other_options'		=> array(
						'transparent'	=> 'transparent'
					),				
					'real_time'			=> true
				);
				
		//---------------------------------		
				
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc_profile_lightbox'; 
		$t[$i]->label 		= __('Social lightbox','rhc');
		$t[$i]->options = array();	
							
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Background','rhc'),
			'prefix'	=> 'rhc_profile_lightbox_bg',
			'selector'	=> implode(',',array(
				'.div_czpf.backscreenblack'
			))
		));	
		
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Box Background','rhc'),
			'prefix'	=> 'rhc_profile_lightbox_box_bg',
			'selector'	=> implode(',',array(
				'.div_czpf .alert-success'
			))
		));
		
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhc_profile_lightbox_box_h3',
			'selector'	=> implode(',',array(
				'.div_czpf .alert h3'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Title Font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));		
		
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhc_profile_lightbox_box_p',
			'selector'	=> implode(',',array(
				'.div_czpf .alert p'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Default Font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));	
		
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhc_profile_lightbox_box_button',
			'selector'	=> implode(',',array(
				'.div_czpf .socail_alert .removeclick',
				'.div_czpf .socail_alert .sociallink',
				'.div_czpf .socail_alert .socialseelink'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Button Font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));	
		
		$t[$i]->options[] = (object)array(
					'id'				=> 'rhc_profile_lightbox_box_button_active_bg',
					'type'				=> 'css',
					'label'				=> __('Button Active bg','rhc'),
					'input_type'		=> 'colorpicker',
					'holder_class'		=> '',
					'opacity'			=> true,
					'btn_clear'			=> true,	
					'selector'			=> '.div_czpf .socail_alert .btn.btn-primary',
					'property'			=> 'background-color',
					'other_options'		=> array(
						'transparent'	=> 'transparent'
					),				
					'real_time'			=> true
				);
		
		$t[$i]->options[] = (object)array(
					'id'				=> 'rhc_profile_lightbox_box_button_active_bg_hover',
					'type'				=> 'css',
					'label'				=> __('Button Active Hover bg','rhc'),
					'input_type'		=> 'colorpicker',
					'holder_class'		=> '',
					'opacity'			=> true,
					'btn_clear'			=> true,	
					'selector'			=> '.div_czpf .socail_alert .btn.btn-primary:hover, .div_czpf .socail_alert .btn.btn-primary:focus, .div_czpf .socail_alert .btn-group:focus .btn.btn-primary.dropdown-toggle',
					'property'			=> 'background-color',
					'other_options'		=> array(
						'transparent'	=> 'transparent'
					),				
					'real_time'			=> true
				);
		
		$t[$i]->options[] = (object)array(
					'id'				=> 'rhc_profile_lightbox_box_button_remove_bg',
					'type'				=> 'css',
					'label'				=> __('Button Remove bg','rhc'),
					'input_type'		=> 'colorpicker',
					'holder_class'		=> '',
					'opacity'			=> true,
					'btn_clear'			=> true,	
					'selector'			=> '.div_czpf .socail_alert .btn.btn-danger',
					'property'			=> 'background-color',
					'other_options'		=> array(
						'transparent'	=> 'transparent'
					),				
					'real_time'			=> true
				);
		
		$t[$i]->options[] = (object)array(
					'id'				=> 'rhc_profile_lightbox_box_button_remove_bg_hover',
					'type'				=> 'css',
					'label'				=> __('Button Remove Hover bg','rhc'),
					'input_type'		=> 'colorpicker',
					'holder_class'		=> '',
					'opacity'			=> true,
					'btn_clear'			=> true,	
					'selector'			=> '.div_czpf .socail_alert .btn.btn-danger:hover, .div_czpf .socail_alert .btn.btn-danger:focus, .div_czpf .socail_alert .btn-group:focus .btn.btn-danger.dropdown-toggle',
					'property'			=> 'background-color',
					'other_options'		=> array(
						'transparent'	=> 'transparent'
					),				
					'real_time'			=> true
				);
		
		
		
		//---------------------------------
				

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