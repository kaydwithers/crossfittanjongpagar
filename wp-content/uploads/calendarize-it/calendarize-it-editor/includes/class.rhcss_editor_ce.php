<?php

/**
 * 
 *
 * @version $Id$
 * @copyright 2003 
 **/

class rhcss_editor_ce extends module_righthere_css{
	function rhcss_editor_ce($args=array()){
		return $this->module_righthere_css($args);
	}
	
	function options($t=array()){
		$i = count($t);
		//---------------------------------									
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhcce_default_fonts'; 
		$t[$i]->label 		= __('Default fonts','rhc');
		$t[$i]->options = array();								

		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhcce_default_fonts_',
			'selector'	=> implode(',',array(
				'body .rhc-ce-holder.rhc-ce-form'
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
		$t[$i]->id 			= 'rhcce_bg'; 
		$t[$i]->label 		= __('Main container','rhc');
		$t[$i]->options = array();	
							
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Background','rhc'),
			'prefix'	=> 'rhcce_container_bg',
			'selector'	=> 'body .rhc-ce-holder.rhc-ce-form .rh-communityevents-container2'	
		));		
		
		$t[$i]->options = $this->add_border_options($t[$i]->options,array(
			'prefix'	=> 'rhcce_container_border',
			'selector'	=> "body .rhc-ce-holder.rhc-ce-form .rh-communityevents-container2"
		));			

		$t[$i]->options = $this->add_border_radius_options($t[$i]->options,array(
			'prefix'	=> 'rhcce_container_border_rad',
			'selector'	=> "body .rhc-ce-holder.rhc-ce-form .rh-communityevents-container2"
		));	
			
		$t[$i]->options = $this->add_padding_options( $t[$i]->options, array(
			'prefix'	=> 'rhcce_container_pad',
			'selector'	=> 'body .rhc-ce-holder.rhc-ce-form .rh-communityevents-container2'	
		));				
		
		//---------------------------------					
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhcce_bg1'; 
		$t[$i]->label 		= __('Secondary container(back)','rhc');
		$t[$i]->options = array();	
							
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Background','rhc'),
			'prefix'	=> 'rhcce_container1_bg',
			'selector'	=> 'body .rhc-ce-holder.rhc-ce-form .rh-communityevents-container1'	
		));		
		
		$t[$i]->options = $this->add_border_options($t[$i]->options,array(
			'prefix'	=> 'rhcce_container1_border',
			'selector'	=> "body .rhc-ce-holder.rhc-ce-form .rh-communityevents-container1"
		));			

		$t[$i]->options = $this->add_border_radius_options($t[$i]->options,array(
			'prefix'	=> 'rhcce_container1_border_rad',
			'selector'	=> "body .rhc-ce-holder.rhc-ce-form .rh-communityevents-container1"
		));	
			
		$t[$i]->options = $this->add_padding_options( $t[$i]->options, array(
			'prefix'	=> 'rhcce_container1_pad',
			'selector'	=> 'body .rhc-ce-holder.rhc-ce-form .rh-communityevents-container1'	
		));				


		//---------------------------------				
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhcce_title'; 
		$t[$i]->label 		= __('Default title','rhc');
		$t[$i]->options = array();	
			
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhcce_subtitle_',
			'selector'	=> implode(',',array(
				'body .rhc-ce-holder.rhc-ce-form .rh-community-row h2',
				'body .rhc-ce-holder.rhc-ce-form .rh-community-row h2.rh-community-title',
				'body .rhc-ce-holder.rhc-ce-form .rh-community-row .rh-col.tax-dropdown h2',
				'body .rhc-ce-holder.rhc-ce-form .rh-community-row .rh-col.tax-dropdown h2.rh-community-title'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Subtitle font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));							
		//---------------------------------									
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhcce_main_title'; 
		$t[$i]->label 		= __('Main Title','rhc');
		$t[$i]->options = array();	

		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhcce_main_title_',
			'selector'	=> implode(',',array(
				'body #rh-main-title'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Title font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));									
	
		//---------------------------------									
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhcce_input'; 
		$t[$i]->label 		= __('Input fields','rhc');
		$t[$i]->options = array();			

		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhcce_input_',
			'selector'	=> implode(',',array(
				'body .rhc-ce-holder.rhc-ce-form input',
				'body .rhc-ce-holder.rhc-ce-form textarea'
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
		$t[$i]->id 			= 'rhcce_dropdown'; 
		$t[$i]->label 		= __('Taxonomy dropdown','rhc');
		$t[$i]->options = array();			

		$t[$i]->options[] = (object)array(
				'id'				=> 'rhcce_dropdown_btn',
				'type'				=> 'css',
				'label'				=> __('Button color','rhc'),
				'input_type'		=> 'color_or_something_else',
				'holder_class'		=> '',
				'opacity'			=> true,
				'btn_clear'			=> true,
				'selector'			=> implode(',',array(
					'body .rhc-ce-holder.rhc-ce-form .rh-communityevents-container2 button.btn.btn-primary',
					'body .rhc-ce-holder.rhc-ce-form .rh-communityevents-container2 a.btn.btn-primary',
					'body .rhc-ce-holder.rhc-ce-form .rh-communityevents-container2 .btn-group.open .btn.btn-primary.dropdown-toggle'
				)),
				'property'			=> 'background-color',			
				'real_time'			=> true
			);	

		$t[$i]->options[] = (object)array(
				'id'				=> 'rhcce_dropdown_btnbox',
				'type'				=> 'css',
				'label'				=> __('Box color','rhc'),
				'input_type'		=> 'color_or_something_else',
				'holder_class'		=> '',
				'opacity'			=> true,
				'btn_clear'			=> true,
				'selector'			=> implode(',',array(
					'body .rhc-ce-holder .dropdown-inverse'
				)),
				'property'			=> 'background-color',			
				'real_time'			=> true,
				'derived'			=> array(
						array(
							'type'	=> 'same',
							'val'	=> '5',
							'sel'	=> "body .rhc-ce-holder .dropdown-arrow-inverse",
							'arg'	=> array(
								(object)array(
									'name' => 'border-top-color',
									'tpl'	=>'__value__ !important;'
								),
								(object)array(
									'name' => 'border-bottom-color',
									'tpl'	=>'__value__ !important;'
								),
								(object)array(
									'name' => 'color',
									'tpl'	=>'__value__;'
								)
							)
						)
					)					
			);	
	
		//---------------------------------									
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhcce_btn_add_tax'; 
		$t[$i]->label 		= __('Add taxonomy button','rhc');
		$t[$i]->options = array();	
		
		$t[$i]->options[] = (object)array(
				'id'				=> 'rhcce_drop_add_btn',
				'type'				=> 'css',
				'label'				=> __('Button color','rhc'),
				'input_type'		=> 'color_or_something_else',
				'holder_class'		=> '',
				'opacity'			=> true,
				'btn_clear'			=> true,
				'selector'			=> implode(',',array(
					'body .rhc-ce-holder.rhc-ce-form .btn.btn-add-taxonomy'
				)),
				'property'			=> 'background-color',			
				'real_time'			=> true
			);			

		$t[$i]->options[] = (object)array(
				'id'				=> 'rhcce_drop_add_btn_icon',
				'type'				=> 'css',
				'label'				=> __('Icon color','rhc'),
				'input_type'		=> 'color_or_something_else',
				'holder_class'		=> '',
				'opacity'			=> true,
				'btn_clear'			=> true,
				'selector'			=> implode(',',array(
					'body .rhc-ce-holder.rhc-ce-form .btn.btn-add-taxonomy'
				)),
				'property'			=> 'color',			
				'real_time'			=> true
			);				
			
		$t[$i]->options[] = (object)array(
				'id'				=> 'rhcce_drop_add_btn_h',
				'type'				=> 'css',
				'label'				=> __('Button color (hover)','rhc'),
				'input_type'		=> 'color_or_something_else',
				'holder_class'		=> '',
				'opacity'			=> true,
				'btn_clear'			=> true,
				'selector'			=> implode(',',array(
					'body .rhc-ce-holder.rhc-ce-form .btn.btn-add-taxonomy:hover'
				)),
				'property'			=> 'background-color',			
				'real_time'			=> true
			);		

		$t[$i]->options[] = (object)array(
				'id'				=> 'rhcce_drop_add_btn_icon_h',
				'type'				=> 'css',
				'label'				=> __('Icon color (hover)','rhc'),
				'input_type'		=> 'color_or_something_else',
				'holder_class'		=> '',
				'opacity'			=> true,
				'btn_clear'			=> true,
				'selector'			=> implode(',',array(
					'body .rhc-ce-holder.rhc-ce-form .btn.btn-add-taxonomy:hover'
				)),
				'property'			=> 'color',			
				'real_time'			=> true
			);							

		//---------------------------------									
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhcce_btn_tax_submit'; 
		$t[$i]->label 		= __('Submit taxonomy button','rhc');
		$t[$i]->options = array();	

		$t[$i]->options[] = (object)array(
				'id'				=> 'rhcce_btn_tax_submit',
				'type'				=> 'css',
				'label'				=> __('Button color','rhc'),
				'input_type'		=> 'color_or_something_else',
				'holder_class'		=> '',
				'opacity'			=> true,
				'btn_clear'			=> true,
				'selector'			=> implode(',',array(
					'body .rhc-ce-holder.rhc-ce-form .btn.submit-tax'
				)),
				'property'			=> 'background-color',			
				'real_time'			=> true
			);		

		$t[$i]->options[] = (object)array(
				'id'				=> 'rhcce_btn_tax_submit_icon',
				'type'				=> 'css',
				'label'				=> __('Icon color','rhc'),
				'input_type'		=> 'color_or_something_else',
				'holder_class'		=> '',
				'opacity'			=> true,
				'btn_clear'			=> true,
				'selector'			=> implode(',',array(
					'body .rhc-ce-holder.rhc-ce-form .btn.submit-tax'
				)),
				'property'			=> 'color',			
				'real_time'			=> true
			);	

		$t[$i]->options[] = (object)array(
				'id'				=> 'rhcce_btn_tax_submit',
				'type'				=> 'css',
				'label'				=> __('Button color (hover)','rhc'),
				'input_type'		=> 'color_or_something_else',
				'holder_class'		=> '',
				'opacity'			=> true,
				'btn_clear'			=> true,
				'selector'			=> implode(',',array(
					'body .rhc-ce-holder.rhc-ce-form .btn.submit-tax:hover'
				)),
				'property'			=> 'background-color',			
				'real_time'			=> true
			);		

		$t[$i]->options[] = (object)array(
				'id'				=> 'rhcce_btn_tax_submit_icon',
				'type'				=> 'css',
				'label'				=> __('Icon color (hover)','rhc'),
				'input_type'		=> 'color_or_something_else',
				'holder_class'		=> '',
				'opacity'			=> true,
				'btn_clear'			=> true,
				'selector'			=> implode(',',array(
					'body .rhc-ce-holder.rhc-ce-form .btn.submit-tax:hover'
				)),
				'property'			=> 'color',			
				'real_time'			=> true
			);							
		//---------------------------------									
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhcce_field_label'; 
		$t[$i]->label 		= __('Field labels','rhc');
		$t[$i]->options = array();								

		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhcce_field_label_',
			'selector'	=> implode(',',array(
				'body .rhc-ce-holder.rhc-ce-form .rh-community-row h3.rh-community-title'
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
		$t[$i]->id 			= 'rhcce_btn_submit'; 
		$t[$i]->label 		= __('Submit button','rhc');
		$t[$i]->options = array();	

		$t[$i]->options[] = (object)array(
				'id'				=> 'rhcce_btn_submit',
				'type'				=> 'css',
				'label'				=> __('Button color','rhc'),
				'input_type'		=> 'color_or_something_else',
				'holder_class'		=> '',
				'opacity'			=> true,
				'btn_clear'			=> true,
				'selector'			=> implode(',',array(
					'body .rhc-ce-holder.rhc-ce-form .rh-communityevents-container2 .rh-community-row button.btn.btn-primary.btn-submit-event'
				)),
				'property'			=> 'background-color',			
				'real_time'			=> true
			);		

		$t[$i]->options[] = (object)array(
				'id'				=> 'rhcce_btn_submit_icon',
				'type'				=> 'css',
				'label'				=> __('Icon color','rhc'),
				'input_type'		=> 'color_or_something_else',
				'holder_class'		=> '',
				'opacity'			=> true,
				'btn_clear'			=> true,
				'selector'			=> implode(',',array(
					'body .rhc-ce-holder.rhc-ce-form .rh-communityevents-container2 .rh-community-row button.btn.btn-primary.btn-submit-event'
				)),
				'property'			=> 'color',			
				'real_time'			=> true
			);	
				
		$t[$i]->options[] = (object)array(
				'id'				=> 'rhcce_btn_submit_h',
				'type'				=> 'css',
				'label'				=> __('Button color (hover)','rhc'),
				'input_type'		=> 'color_or_something_else',
				'holder_class'		=> '',
				'opacity'			=> true,
				'btn_clear'			=> true,
				'selector'			=> implode(',',array(
					'body .rhc-ce-holder.rhc-ce-form .rh-communityevents-container2 .rh-community-row button.btn.btn-primary.btn-submit-event:hover'
				)),
				'property'			=> 'background-color',			
				'real_time'			=> true
			);		

		$t[$i]->options[] = (object)array(
				'id'				=> 'rhcce_btn_submit_icon_h',
				'type'				=> 'css',
				'label'				=> __('Icon color (hover)','rhc'),
				'input_type'		=> 'color_or_something_else',
				'holder_class'		=> '',
				'opacity'			=> true,
				'btn_clear'			=> true,
				'selector'			=> implode(',',array(
					'body .rhc-ce-holder.rhc-ce-form .rh-communityevents-container2 .rh-community-row button.btn.btn-primary.btn-submit-event:hover'
				)),
				'property'			=> 'color',			
				'real_time'			=> true
			);			
		//---------------------------------									
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhcce_btn_clear'; 
		$t[$i]->label 		= __('Clear button','rhc');
		$t[$i]->options = array();	
		
		$t[$i]->options[] = (object)array(
				'id'				=> 'rhcce_btn_clear',
				'type'				=> 'css',
				'label'				=> __('Button color','rhc'),
				'input_type'		=> 'color_or_something_else',
				'holder_class'		=> '',
				'opacity'			=> true,
				'btn_clear'			=> true,
				'selector'			=> implode(',',array(
					'body .rhc-ce-holder.rhc-ce-form .rh-communityevents-container2 .rh-community-row button.btn.btn-primary.btn-clear-form'
				)),
				'property'			=> 'background-color',			
				'real_time'			=> true
			);		

		$t[$i]->options[] = (object)array(
				'id'				=> 'rhcce_btn_clear_icon',
				'type'				=> 'css',
				'label'				=> __('Icon color','rhc'),
				'input_type'		=> 'color_or_something_else',
				'holder_class'		=> '',
				'opacity'			=> true,
				'btn_clear'			=> true,
				'selector'			=> implode(',',array(
					'body .rhc-ce-holder.rhc-ce-form .rh-communityevents-container2 .rh-community-row button.btn.btn-primary.btn-clear-form'
				)),
				'property'			=> 'color',			
				'real_time'			=> true
			);	
				
		$t[$i]->options[] = (object)array(
				'id'				=> 'rhcce_btn_clear_h',
				'type'				=> 'css',
				'label'				=> __('Button color (hover)','rhc'),
				'input_type'		=> 'color_or_something_else',
				'holder_class'		=> '',
				'opacity'			=> true,
				'btn_clear'			=> true,
				'selector'			=> implode(',',array(
					'body .rhc-ce-holder.rhc-ce-form .rh-communityevents-container2 .rh-community-row button.btn.btn-primary.btn-clear-form:hover'
				)),
				'property'			=> 'background-color',			
				'real_time'			=> true
			);		

		$t[$i]->options[] = (object)array(
				'id'				=> 'rhcce_btn_clear_icon_h',
				'type'				=> 'css',
				'label'				=> __('Icon color (hover)','rhc'),
				'input_type'		=> 'color_or_something_else',
				'holder_class'		=> '',
				'opacity'			=> true,
				'btn_clear'			=> true,
				'selector'			=> implode(',',array(
					'body .rhc-ce-holder.rhc-ce-form .rh-communityevents-container2 .rh-community-row button.btn.btn-primary.btn-clear-form:hover'
				)),
				'property'			=> 'color',			
				'real_time'			=> true
			);			
		//---------------------------------									
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhcce_btn_add'; 
		$t[$i]->label 		= __('Add files button','rhc');
		$t[$i]->options = array();	

		$t[$i]->options[] = (object)array(
				'id'				=> 'rhcce_btn_add',
				'type'				=> 'css',
				'label'				=> __('Button color','rhc'),
				'input_type'		=> 'color_or_something_else',
				'holder_class'		=> '',
				'opacity'			=> true,
				'btn_clear'			=> true,
				'selector'			=> implode(',',array(
					'body .rhc-ce-holder.rhc-ce-form .rh-communityevents-container2 a.btn.btn-primary.rh-image-btn'
				)),
				'property'			=> 'background-color',			
				'real_time'			=> true
			);		

		$t[$i]->options[] = (object)array(
				'id'				=> 'rhcce_btn_add_icon',
				'type'				=> 'css',
				'label'				=> __('Icon color','rhc'),
				'input_type'		=> 'color_or_something_else',
				'holder_class'		=> '',
				'opacity'			=> true,
				'btn_clear'			=> true,
				'selector'			=> implode(',',array(
					'body .rhc-ce-holder.rhc-ce-form .rh-communityevents-container2 a.btn.btn-primary.rh-image-btn'
				)),
				'property'			=> 'color',			
				'real_time'			=> true
			);	
				
		$t[$i]->options[] = (object)array(
				'id'				=> 'rhcce_btn_add_h',
				'type'				=> 'css',
				'label'				=> __('Button color (hover)','rhc'),
				'input_type'		=> 'color_or_something_else',
				'holder_class'		=> '',
				'opacity'			=> true,
				'btn_clear'			=> true,
				'selector'			=> implode(',',array(
					'body .rhc-ce-holder.rhc-ce-form .rh-communityevents-container2 a.btn.btn-primary.rh-image-btn:hover'
				)),
				'property'			=> 'background-color',			
				'real_time'			=> true
			);		

		$t[$i]->options[] = (object)array(
				'id'				=> 'rhcce_btn_add_icon_h',
				'type'				=> 'css',
				'label'				=> __('Icon color (hover)','rhc'),
				'input_type'		=> 'color_or_something_else',
				'holder_class'		=> '',
				'opacity'			=> true,
				'btn_clear'			=> true,
				'selector'			=> implode(',',array(
					'body .rhc-ce-holder.rhc-ce-form .rh-communityevents-container2 a.btn.btn-primary.rh-image-btn:hover'
				)),
				'property'			=> 'color',			
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