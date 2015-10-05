<?php

/**
 * 
 *
 * @version $Id$
 * @copyright 2003 
 **/

class rhcss_editor_groupe extends module_righthere_css{
	function rhcss_editor_groupe($args=array()){
		return $this->module_righthere_css($args);
	}
	
	function options($t=array()){
		$i = count($t);
		
		//---------------------------------									
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhcgroupstop'; 
		$t[$i]->label 		= __('Top box','rhc');
		$t[$i]->options = array();								

		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhc_top_groups_fonts1_',
			'selector'	=> implode(',',array(
				'#cz_groups.div_czpf .grouprowobject .czpf_title #user_show',
				'.div_czpf .grouprowobject .boxyclass h2'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Font H1','rhc'),
				'size'		=> __('Size H1','rhc'),
				'color'		=> __('Color H1','rhc')				
			)
		));

		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhc_top_groups_fonts2_',
			'selector'	=> '.div_czpf .grouprowobject .boxyclass h2 small',			
			'labels'	=> (object)array(
				'family'	=> __('Font H2','rhc'),
				'size'		=> __('Size H2','rhc'),
				'color'		=> __('Color H2','rhc')				
			)
		));		
			
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Background','rhc'),
			'prefix'	=> 'rhc_top_groups_bg',
			'selector'	=> '#cz_groups.div_czpf > div:first-child'	
		));	
		
		//---------------------------------									
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhcgroupsmiddle'; 
		$t[$i]->label 		= __('Middle box','rhc');
		$t[$i]->options = array();								

		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhc_middle_groups_fonts1_',
			'selector'	=> implode(',',array(
				'.div_czpf .czpf_description #user_show'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));		
				
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Background','rhc'),
			'prefix'	=> 'rhc_middle_groups_bg',
			'selector'	=> '#cz_groups.div_czpf > div'	
		));	
		
		
		//---------------------------------									
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhcgroupsbottom'; 
		$t[$i]->label 		= __('Bottom box','rhc');
		$t[$i]->options = array();								

		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Background','rhc'),
			'prefix'	=> 'rhc_bottom_groups_bg',
			'selector'	=> '#cz_groups.div_czpf > div:last-child '	
		));	
		
		//---------------------------------									
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhcgroups_avatar'; 
		$t[$i]->label 		= __('Avatar','rhc');
		$t[$i]->options = array();								

		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhcgroups_avatar_tooltip_fonts_',
			'selector'	=> implode(',',array(
				'#cz_groups.div_czpf .czpf_tooltip .czpf_tooltip_sub',
				'#cz_groups.div_czpf .czpf_tooltip .czpf_tooltip'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));
		
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Tooltip Background','rhc'),
			'prefix'	=> 'rhcgroups_avatar_tooltip_bg_hover',
			'selector'	=> '#cz_groups.div_czpf .czpf_tooltip .czpf_tooltip_sub'	
		));
		
		//---------------------------------
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhcgroups_penciel'; 
		$t[$i]->label 		= __('Pencil','rhc');
		$t[$i]->options = array();	
		
		$t[$i]->options[] =(object)array('input_type'		=> 'grid_start');

		$t[$i]->options[] =(object)array(
				'id'				=> 'rhc_top_groups_fonts3-font-color',
				'type'				=> 'css',
				'label'				=> 'Color Pencil',
				'input_type'		=> 'colorpicker',
				'holder_class'		=> 'span8 input-no-label',
				'opacity'			=> true,
				'btn_clear'			=> true,
				'selector'			=> '#cz_groups.div_czpf > div .editble',
				'property'			=> 'color',
				'real_time'			=> true
			);
			
		$t[$i]->options[] =(object)array(
				'id'				=> 'rhc_top_groups_fonts3-font-size',
				'type'				=> 'css',
				'label'				=> 'Size Pencil',
				'input_type'		=> 'number',
				//'input_type'		=> 'element_size',
				'unit'				=> 'px',
				'class'				=> 'input-font-size',
				'holder_class'		=> 'span4 input-no-label',
				//'class'				=> 'input-mini pop_rangeinput',
				'min'				=> '6',
				'max'				=> '144',
				'step'				=> '1',
				'selector'			=> '#cz_groups.div_czpf > div .editble',
				'property'			=> 'font-size',
				'real_time'			=> true
		);		
		$t[$i]->options[] =(object)array( 'input_type'		=> 'grid_end');
		
		//---------------------------------
										
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhcgroupsmenu'; 
		$t[$i]->label 		= __('Menu Font','rhc');
		$t[$i]->options = array();								

		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhcgroups_menu_bottom_fonts_',
			'selector'	=> implode(',',array(
				'#cz_groups #comdata .commentboxs .czpf_bottom h2'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));

		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhcgroups_menu_fonts_',
			'selector'	=> implode(',',array(
				'#cz_groups.div_czpf .nav.nav-pills a[data_text]',
				'#cz_groups.div_czpf .rhc_createnew a'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));

		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhcgroups_menu_fonts_active_',
			'selector'	=> implode(',',array(
				'#cz_groups.div_czpf .nav-pills > li.active > a',
				'#cz_groups.div_czpf .nav-pills > li.active > a:hover',
				'#cz_groups.div_czpf .nav-pills > li.active > a:focus',
				'#cz_groups.div_czpf .rhc_createnew a:hover'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Font (Active/Hover/Focus)','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));		 	
		
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhcgroupsmenu_button'; 
		$t[$i]->label 		= __('Button Bg','rhc');
		$t[$i]->options = array();	
							
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Button Background','rhc'),
			'prefix'	=> 'rhcgroups_menu_bg',
			'selector'	=> implode(',',array(
				'#cz_groups.div_czpf .nav-pills > li > a'
			)),				
		));		
		
		
							
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Button Background (hover)','rhc'),
			'prefix'	=> 'rhcgroups_menu_bg_hover',
				'selector'	=> implode(',',array(
				'#cz_groups.div_czpf .nav > li > a:hover', 
				'#cz_groups.div_czpf .nav > li > a:focus',
				'#cz_groups.div_czpf .nav > li.active',
				'#cz_groups.div_czpf .nav > li.active a',
				'#cz_groups.div_czpf .nav > li.active > a',
				'#cz_groups.div_czpf .nav > li.active > a:hover',
				'#cz_groups.div_czpf .nav > li.active > a:focus',
				'#cz_groups.div_czpf .nav-pills > li > a:hover',
				'#cz_groups.div_czpf .nav-pills > li > a:focus',
				'#cz_groups.div_czpf .nav-pills > li.active > a',
				'#cz_groups.div_czpf .nav-pills > li.active > a:hover',
				'#cz_groups.div_czpf .nav-pills > li.active > a:focus'
			)),				
		));		
		
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhcgroupsmenu_create_button'; 
		$t[$i]->label 		= __('Create Button Bg','rhc');
		$t[$i]->options = array();	
							
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Create Button Background','rhc'),
			'prefix'	=> 'rhcgroups_menu_create_bg',
			'selector'	=> implode(',',array(
				'#cz_groups.div_czpf .rhc_createnew a'
			))
		));	
		
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Create Button Hover','rhc'),
			'prefix'	=> 'rhcgroups_menu_create_bg_hover',
			'selector'	=> implode(',',array(
				'#cz_groups.div_czpf .rhc_createnew a:hover'
			))
		));	
		
				
		//-- Saved and DC  -----------------------		
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rh-group-saved-list'; 
		$t[$i]->label 		= __('Templates','rhc');
		$t[$i]->options = array(
			(object)array(
				'id'				=> 'rh_group_saved_settings',
				'input_type'		=> 'backup_list'
			)			
		);	
				
//----------------------------------------------------------------------
		return $t;
	}
}
?>