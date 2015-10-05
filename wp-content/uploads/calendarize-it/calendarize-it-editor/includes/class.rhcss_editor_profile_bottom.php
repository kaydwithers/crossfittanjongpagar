<?php

/**
 * 
 *
 * @version $Id$
 * @copyright 2003 
 **/

class rhcss_editor_profile_bottom extends module_righthere_css{
	function rhcss_editor_profile($args=array()){
		return $this->module_righthere_css($args);
	}
	
	function options($t=array()){
		$i = count($t);
		//---------------------------------									

		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc_profile_bottom_box'; 
		$t[$i]->label 		= __('Background','rhc');
		$t[$i]->options = array();	
							
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Background','rhc'),
			'prefix'	=> 'rhc_profile_bottom_bg',
			'selector'	=> implode(',',array(
				'#cz_profile.div_czpf > div:last-child'
			))
		));	
		
		//---------------------------------	

		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc_profile_bottom_box_font_button_main2'; 
		$t[$i]->label 		= __('Font','rhc');
		$t[$i]->options = array();
		
		
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhc_profile_bottom_h1_font',
			'selector'	=> implode(',',array(
				'#cz_profile.div_czpf .bottomcontainer .extrainfo h1'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('H1 Font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));
		
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhc_profile_bottom_default_font',
			'selector'	=> implode(',',array(
				'#cz_profile.div_czpf .rowobject.bottomcontainer'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Default Font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));

		//---------------------------------	
		
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc_profile_bottom_box_font_button_main'; 
		$t[$i]->label 		= __('Button Font','rhc');
		$t[$i]->options = array();
		
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhc_profile_bottom_buttons_font',
			'selector'	=> implode(',',array(
				'#cz_profile.div_czpf .buttombutton div'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));
		
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhc_profile_bottom_buttons_bobble_font',
			'selector'	=> implode(',',array(
				'#cz_profile.div_czpf .iconbar-unread'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Bobble Font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));
		
		
		//---------------------------------	
		
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc_profile_bottom_box_font_button_main4'; 
		$t[$i]->label 		= __('Item Font','rhc');
		$t[$i]->options = array();
		
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhc_profile_bottom_title_font',
			'selector'	=> implode(',',array(
				'.div_czpf .bottomcontainer .extrainfo.show_postevents .czpf_rsvp_title', 
				'.div_czpf .bottomcontainer .extrainfo.show_upcoming .czpf_rsvp_title', 
				'.div_czpf .bottomcontainer .extrainfo.show_pastevents .czpf_rsvp_title', 
				'.div_czpf .bottomcontainer .extrainfo.show_rating .commentheadtext',
				'.div_czpf .bottomcontainer .extrainfo.show_postevents .czpf_rsvp_title a', 
				'.div_czpf .bottomcontainer .extrainfo.show_upcoming .czpf_rsvp_title a', 
				'.div_czpf .bottomcontainer .extrainfo.show_pastevents .czpf_rsvp_title a', 
				'.div_czpf .bottomcontainer .extrainfo.show_rating .commentheadtext a'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Title Font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));	
		
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhc_profile_bottom_date_font',
			'selector'	=> implode(',',array(
				'.div_czpf .bottomcontainer .extrainfo.show_postevents .czpf_rsvp_date', 
				'.div_czpf .bottomcontainer .extrainfo.show_upcoming .czpf_rsvp_date', 
				'.div_czpf .bottomcontainer .extrainfo.show_pastevents .czpf_rsvp_date'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Date Font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));	
		
		

		//---------------------------------	
		
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc_profile_bottom_friends_buttons'; 
		$t[$i]->label 		= __('Friends Button','rhc');
		$t[$i]->options = array();	
							
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Background','rhc'),
			'prefix'	=> 'rhc_profile_bottom_friends_buttons_bg',
			'selector'	=> implode(',',array(
				'.div_czpf .button_show_friends'
			))
		));	
		
		$t[$i]->options[] = (object)array(
					'id'				=> 'rhc_profile_bottom_friends_buttons_border',
					'type'				=> 'css',
					'label'				=> __('Arrow color','rhc'),
					'input_type'		=> 'colorpicker',
					'holder_class'		=> '',
					'opacity'			=> true,
					'btn_clear'			=> true,	
					'selector'			=> '.div_czpf .buttombuttontop .button_show_friends.active:before',
					'property'			=> 'border-top-color',
					'other_options'		=> array(
						'transparent'	=> 'transparent'
					),				
					'real_time'			=> true
				);
				
		$t[$i]->options[] = (object)array(
					'id'				=> 'rhc_profile_bottom_friends_buttons_bobble_bg',
					'type'				=> 'css',
					'label'				=> __('Bobble color','rhc'),
					'input_type'		=> 'colorpicker',
					'holder_class'		=> '',
					'opacity'			=> true,
					'btn_clear'			=> true,	
					'selector'			=> '.div_czpf .buttombutton .iconbar-unread.show_friends_icon',
					'property'			=> 'background-color',
					'other_options'		=> array(
						'transparent'	=> 'transparent'
					),				
					'real_time'			=> true
				);
		

		//---------------------------------	
			
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc_profile_bottom_pastevent_buttons'; 
		$t[$i]->label 		= __('Past Event Button','rhc');
		$t[$i]->options = array();	
							
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Background','rhc'),
			'prefix'	=> 'rhc_profile_bottom_pastevent_buttons_bg',
			'selector'	=> implode(',',array(
				'.div_czpf .button_show_pastevents'
			))
		));	
		
		$t[$i]->options[] = (object)array(
					'id'				=> 'rhc_profile_bottom_pastevent_buttons_border',
					'type'				=> 'css',
					'label'				=> __('Arrow Icon color','rhc'),
					'input_type'		=> 'colorpicker',
					'holder_class'		=> '',
					'opacity'			=> true,
					'btn_clear'			=> true,	
					'selector'			=> '.div_czpf .buttombuttontop .button_show_pastevents.active:before',
					'property'			=> 'border-top-color',
					'other_options'		=> array(
						'transparent'	=> 'transparent'
					),				
					'real_time'			=> true
				);
				
		$t[$i]->options[] = (object)array(
					'id'				=> 'rhc_profile_bottom_pastevent_buttons_bobble_bg',
					'type'				=> 'css',
					'label'				=> __('Bobble color','rhc'),
					'input_type'		=> 'colorpicker',
					'holder_class'		=> '',
					'opacity'			=> true,
					'btn_clear'			=> true,	
					'selector'			=> '.div_czpf .buttombutton .iconbar-unread.show_pastevents_icon',
					'property'			=> 'background-color',
					'other_options'		=> array(
						'transparent'	=> 'transparent'
					),				
					'real_time'			=> true
				);
		
		//---------------------------------	
			
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc_profile_bottom_upcoming_buttons'; 
		$t[$i]->label 		= __('Upcomming Event Button','rhc');
		$t[$i]->options = array();	
							
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Background','rhc'),
			'prefix'	=> 'rhc_profile_bottom_upcoming_buttons_bg',
			'selector'	=> implode(',',array(
				'.div_czpf .button_show_upcoming'
			))
		));	
		
		$t[$i]->options[] = (object)array(
					'id'				=> 'rhc_profile_bottom_upcoming_buttons_border',
					'type'				=> 'css',
					'label'				=> __('Arrow Icon color','rhc'),
					'input_type'		=> 'colorpicker',
					'holder_class'		=> '',
					'opacity'			=> true,
					'btn_clear'			=> true,	
					'selector'			=> '.div_czpf .buttombuttontop .button_show_upcoming.active:before',
					'property'			=> 'border-top-color',
					'other_options'		=> array(
						'transparent'	=> 'transparent'
					),				
					'real_time'			=> true
				);
				
		$t[$i]->options[] = (object)array(
					'id'				=> 'rhc_profile_bottom_upcoming_buttons_bobble_bg',
					'type'				=> 'css',
					'label'				=> __('Bobble color','rhc'),
					'input_type'		=> 'colorpicker',
					'holder_class'		=> '',
					'opacity'			=> true,
					'btn_clear'			=> true,	
					'selector'			=> '.div_czpf .buttombutton .iconbar-unread.show_upcoming_icon',
					'property'			=> 'background-color',
					'other_options'		=> array(
						'transparent'	=> 'transparent'
					),				
					'real_time'			=> true
				);

		//---------------------------------	
		
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc_profile_bottom_rating_buttons'; 
		$t[$i]->label 		= __('Rating & Reviews Button','rhc');
		$t[$i]->options = array();	
							
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Background','rhc'),
			'prefix'	=> 'rhc_profile_bottom_rating_buttons_bg',
			'selector'	=> implode(',',array(
				'.div_czpf .button_show_rating'
			))
		));	
		
		$t[$i]->options[] = (object)array(
					'id'				=> 'rhc_profile_bottom_rating_buttons_border',
					'type'				=> 'css',
					'label'				=> __('Arrow Icon color','rhc'),
					'input_type'		=> 'colorpicker',
					'holder_class'		=> '',
					'opacity'			=> true,
					'btn_clear'			=> true,	
					'selector'			=> '.div_czpf .buttombuttontop .button_show_rating.active:before',
					'property'			=> 'border-top-color',
					'other_options'		=> array(
						'transparent'	=> 'transparent'
					),				
					'real_time'			=> true
				);
				
		$t[$i]->options[] = (object)array(
					'id'				=> 'rhc_profile_bottom_rating_buttons_bobble_bg',
					'type'				=> 'css',
					'label'				=> __('Bobble color','rhc'),
					'input_type'		=> 'colorpicker',
					'holder_class'		=> '',
					'opacity'			=> true,
					'btn_clear'			=> true,	
					'selector'			=> '.div_czpf .buttombutton .iconbar-unread.show_rating_icon',
					'property'			=> 'background-color',
					'other_options'		=> array(
						'transparent'	=> 'transparent'
					),				
					'real_time'			=> true
				);

		//---------------------------------	
		
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc_profile_bottom_postevents_buttons'; 
		$t[$i]->label 		= __('Posts & Comments Button','rhc');
		$t[$i]->options = array();	
							
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Background','rhc'),
			'prefix'	=> 'rhc_profile_bottom_postevents_buttons_bg',
			'selector'	=> implode(',',array(
				'.div_czpf .button_show_postevents'
			))
		));	
		
		$t[$i]->options[] = (object)array(
					'id'				=> 'rhc_profile_bottom_postevents_buttons_border',
					'type'				=> 'css',
					'label'				=> __('Arrow Icon color','rhc'),
					'input_type'		=> 'colorpicker',
					'holder_class'		=> '',
					'opacity'			=> true,
					'btn_clear'			=> true,	
					'selector'			=> '.div_czpf .buttombuttontop .button_show_postevents.active:before',
					'property'			=> 'border-top-color',
					'other_options'		=> array(
						'transparent'	=> 'transparent'
					),				
					'real_time'			=> true
				);
				
		$t[$i]->options[] = (object)array(
					'id'				=> 'rhc_profile_bottom_postevents_buttons_bobble_bg',
					'type'				=> 'css',
					'label'				=> __('Bobble color','rhc'),
					'input_type'		=> 'colorpicker',
					'holder_class'		=> '',
					'opacity'			=> true,
					'btn_clear'			=> true,	
					'selector'			=> '.div_czpf .buttombutton .iconbar-unread.show_postevents_icon',
					'property'			=> 'background-color',
					'other_options'		=> array(
						'transparent'	=> 'transparent'
					),				
					'real_time'			=> true
				);

		//---------------------------------	

		
		
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc_profile_bottom_box_loader_bottom'; 
		$t[$i]->label 		= __('Loader','rhc');
		$t[$i]->options = array();

		$t[$i]->options[] = (object)array(
					'id'				=> 'rhc_profile_bottom_loader_color',
					'type'				=> 'css',
					'label'				=> __('Load more color','rhc'),
					'input_type'		=> 'colorpicker',
					'holder_class'		=> '',
					'opacity'			=> true,
					'btn_clear'			=> true,	
					'selector'			=> '#cz_profile.div_czpf .bottomcontainer .more_items',
					'property'			=> 'color',
					'other_options'		=> array(
						'transparent'	=> 'transparent'
					),				
					'real_time'			=> true
				);

		$t[$i]->options[] = (object)array(
					'id'				=> 'rhc_profile_bottom_loadering_color',
					'type'				=> 'css',
					'label'				=> __('Loading color','rhc'),
					'input_type'		=> 'colorpicker',
					'holder_class'		=> '',
					'opacity'			=> true,
					'btn_clear'			=> true,	
					'selector'			=> '#cz_profile.div_czpf .bottomcontainer .bigsize.loading',
					'property'			=> 'color',
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
//----------------------------------------------------------------------
		return $t;
	}
}
?>