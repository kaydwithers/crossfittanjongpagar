<?php

/**
 * 
 *
 * @version $Id$
 * @copyright 2003 
 **/

class rhc_rhg_css_default extends module_righthere_css{
	function rhc_rhg_css_default($args=array()){
		add_filter('rhg_font_set',array(&$this,'rhg_font_set'));
		return $this->module_righthere_css($args);
	}
	
	function rhg_font_set($fonts){
		$fonts['rhcgallery']=__('Default','rhc');
		$fonts['rhcgallery-filled']='rhcgallery-filled';
		$fonts['rhcgallery-alt']='rhcgallery-alt';
		$fonts['rhcgallery-alt-filled']='rhcgallery-alt-filled';
		
		return $fonts;
	}
	
	function options($t=array()){
		$i = count($t);

		$prefix_selector = '.rhg-default ';
		
		//-- grid  --------------------------------
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhg-grid'; 
		$t[$i]->label 		= __('Grid box','rhc');
		$t[$i]->options = array(
			(object)array(//Needed because editted content is ajax loaded
				'input_type' => 'raw_html',
				'html'=> '<div id="rhg_grid" ></div>'
			)		
		);	
					
		$t[$i]->options = $this->add_padding_options( $t[$i]->options, array(
			'prefix'	=> 'rhg_grid_pad_',	
			'selector'	=> implode(',',array(
				"#rhg_grid",
				$prefix_selector." .rhg_grid figcaption"
			))					
		));		
		
		//-- grid  --------------------------------
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhg-grid-gutter'; 
		$t[$i]->label 		= __('Grid gutter','rhc');
		$t[$i]->options = array(
			(object)array(//Needed because editted content is ajax loaded
				'input_type' => 'raw_html',
				'html'=> '<div id="rhg_grid_gutter" ></div>'
			)			
		);	
				
		$t[$i]->options = $this->add_padding_options( $t[$i]->options, array(
			'prefix'	=> 'rhg_grid_gutter_pad_',
			'selector'	=> implode(',',array(
				"#rhg_grid_gutter",
				$prefix_selector.' .rhg_grid figure'
			))				
		));		
		
		//-- grid bg --------------------------------
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhg-grid-bg'; 
		$t[$i]->label 		= __('Grid box background','rhc');
		$t[$i]->options = array(
			(object)array(//Needed because editted content is ajax loaded
				'input_type' => 'raw_html',
				'html'=> '<div id="rhg_grid_bg" ></div>'
			)			
		);	
		
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Background','rhc'),
			'prefix'	=> 'rhg_grid_bg',
			'selector'	=> implode(',',array(
				"#rhg_grid_bg",
				$prefix_selector.' .rhg_grid figcaption'	
			))					
		));				
		
		//-- grid color bar --------------------------------
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhg-grid-cbar'; 
		$t[$i]->label 		= __('Grid box color bar','rhc');
		$t[$i]->options = array(
			(object)array(//Needed because editted content is ajax loaded
				'input_type' => 'raw_html',
				'html'=> '<div id="rhg_grid_cbar" ></div>'
			)			
		);	
		
		$t[$i]->options = $this->add_border_options($t[$i]->options,array(
			'prefix'	=> 'rhg_grid_cbar_',
			'selector'	=> implode(',',array(
				"#rhg_grid_cbar",
				$prefix_selector.".rhg_grid figcaption"
			)),					
			'property'	=>array(
				'color'	=> 'border-bottom-color',
				'style' => 'border-bottom-style',
				'size'	=> 'border-bottom-width'
			)
		));
						
		$prefix = 'rhg_grid_cbar_rad_';
		$selector =  implode(',',array(
				"#rhg_grid_cbar",
				$prefix_selector.'.rhg_grid figcaption'
			));
		
		$label = array(
				'tl'	=> __('Top left radius','rhcss'),
				'tr'	=> __('Top right radius','rhcss'),
				'bl'	=> __('Bottom left radius','rhcss'),
				'br'	=> __('Bottom right radius','rhcss')
			);
		$min = 0;
		$max = 100;
		$step = 1;		
		
		$t[$i]->options[]=(object)array('input_type'=>'grid_start');	
		$t[$i]->options[]=	(object)array(
				'id'				=> $prefix.'_bl_radius',
				'type'				=> 'css',
				'label'				=> $label['bl'],
				'input_type'		=> 'number',
				//'input_type'		=> 'element_size',
				'unit'				=> 'px',
				'class'				=> '',
				'holder_class'		=> 'span6',
				'class'				=> 'input-mini',
				'min'				=> $min,
				'max'				=> $max,
				'step'				=> $step,
				'selector'			=> $selector,
				'property'			=> 'border-bottom-left-radius',
				'real_time'			=> true
			);	
		$t[$i]->options[]=	(object)array(
				'id'				=> $prefix.'_br_radius',
				'type'				=> 'css',
				'label'				=> $label['br'],
				'input_type'		=> 'number',
				//'input_type'		=> 'element_size',
				'unit'				=> 'px',
				'class'				=> '',
				'holder_class'		=> 'span6',
				'class'				=> 'input-mini',
				'min'				=> $min,
				'max'				=> $max,
				'step'				=> $step,
				'selector'			=> $selector,
				'property'			=> 'border-bottom-right-radius',
				'real_time'			=> true
			);				
		$t[$i]->options[]=(object)array('input_type'=>'grid_end');				
		
					
		//-- Title font --------------------------------			
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhg-grid-title-fonts'; 
		$t[$i]->label 		= __('Grid box title','rhc');
		$t[$i]->options = array(
			(object)array(//Needed because editted content is ajax loaded
				'input_type' => 'raw_html',
				'html'=> '<div id="rhg_grid_title_fonts" ></div>'
			)			
		);		
			
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhg_grid_title_',
			'selector'	=> implode(',',array(
				'#rhg_grid_title_fonts',
				$prefix_selector.'.griditem-title'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));

		$t[$i]->options[]=	(object)array(
				'id'				=> 'rhg_grid_title_lh',
				'type'				=> 'css',
				'label'				=> __('Line height','rhc'),
				'input_type'		=> 'number',
				'unit'				=> 'px',
				'class'				=> 'input-mini',
				'min'				=> 1,
				'max'				=> 100,
				'step'				=> 1,
				'selector'	=> implode(',',array(
					'#rhg_grid_title_fonts',
					$prefix_selector.'.griditem-title'
				)),		
				'property'			=> 'line-height',
				'real_time'			=> true
			);			
		//-- desc font --------------------------------
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhg-grid-description-fonts'; 
		$t[$i]->label 		= __('Grid box description','rhc');
		$t[$i]->options = array(
			(object)array(//Needed because editted content is ajax loaded
				'input_type' => 'raw_html',
				'html'=> '<div id="rhg_grid_desc_fonts" ></div>'
			)			
		);		

		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhg_grid_desc_',
			'selector'	=> implode(',',array(
				'#rhg_grid_desc_fonts',
				$prefix_selector.' .griditem-description'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));		
		
		$t[$i]->options[]=	(object)array(
				'id'				=> 'rhg_grid_desc_lh',
				'type'				=> 'css',
				'label'				=> __('Line height','rhc'),
				'input_type'		=> 'number',
				'unit'				=> 'px',
				'class'				=> 'input-mini',
				'min'				=> 1,
				'max'				=> 100,
				'step'				=> 1,
				'selector'	=> implode(',',array(
					'#rhg_grid_desc_fonts',
					$prefix_selector.' .griditem-description'
				)),		
				'property'			=> 'line-height',
				'real_time'			=> true
			);	

		//-- GRID CUSTOM FIELDS --------------------------------
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhg-grid-custom-fields'; 
		$t[$i]->label 		= __('Grid custom fields','rhc');
		$t[$i]->options = array(
			(object)array(//Needed because editted content is ajax loaded
				'input_type' => 'raw_html',
				'html'=> '<div id="rhg_grid_custom_fields" ></div>'
			),	
			(object)array(
				'input_type' => 'raw_html',
				'html'=> '<div id="rhg_grid_custom_fields_links" ></div>'
			),	
			(object)array(
				'input_type' => 'raw_html',
				'html'=> '<div id="rhg_grid_custom_fields_icons" ></div>'
			)			
		);		
		
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhg_grid_fields_',
			'selector'	=> implode(',',array(
				'#rhg_grid_custom_fields',
				$prefix_selector.' .gridviewbox'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));		
		
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhg_grid_fields_links_',
			'selector'	=> implode(',',array(
				'#rhg_grid_custom_fields_links',
				$prefix_selector.' .gridviewbox a'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Links','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));		
				
		//-- SLIDE  --------------------------------
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhg-slide'; 
		$t[$i]->label 		= __('Slide','rhc');
		$t[$i]->options = array(
			(object)array(//Needed because editted content is ajax loaded
				'input_type' => 'raw_html',
				'html'=> '<div id="rhg_slide" ></div>'
			)		
		);	
					
		$t[$i]->options = $this->add_padding_options( $t[$i]->options, array(
			'prefix'	=> 'rhg_slide_pad_',	
			'selector'	=> implode(',',array(
				"#rhg_slide",
				$prefix_selector." .rhg_slideshow figcaption"
			))					
		));		
			
		//-- SLIDE BG --------------------------------
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhg-slide-bg'; 
		$t[$i]->label 		= __('Slide background','rhc');
		$t[$i]->options = array(
			(object)array(//Needed because editted content is ajax loaded
				'input_type' => 'raw_html',
				'html'=> '<div id="rhg_slide_bg" ></div>'
			)			
		);	
		
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Background','rhc'),
			'prefix'	=> 'rhg_slide_bg',
			'selector'	=> implode(',',array(
				"#rhg_slide_bg",
				$prefix_selector.' .rhg_slideshow figure'	
			))					
		));					

		//-- SLIDE color bar --------------------------------
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhg-slide-cbar'; 
		$t[$i]->label 		= __('Slide color bar','rhc');
		$t[$i]->options = array(
			(object)array(//Needed because editted content is ajax loaded
				'input_type' => 'raw_html',
				'html'=> '<div id="rhg_slide_cbar" ></div>'
			)			
		);	
		
		$t[$i]->options = $this->add_border_options($t[$i]->options,array(
			'prefix'	=> 'rhg_slide_cbar_',
			'selector'	=> implode(',',array(
				"#rhg_slide_cbar",
				$prefix_selector.".rhg_slideshow_items > li"
			)),					
			'property'	=>array(
				'color'	=> 'border-top-color',
				'style' => 'border-top-style',
				'size'	=> 'border-top-width'
			)
		));
			
		//-- SLIDE Title font --------------------------------			
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhg-slide-title-fonts'; 
		$t[$i]->label 		= __('Slide title','rhc');
		$t[$i]->options = array(
			(object)array(//Needed because editted content is ajax loaded
				'input_type' => 'raw_html',
				'html'=> '<div id="rhg_slide_title_fonts" ></div>'
			),	
			(object)array(//Needed because editted content is ajax loaded
				'input_type' => 'raw_html',
				'html'=> '<a id="rhg_slide_title_fonts_a"></a>'
			)			
		);		
			
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhg_slide_title_',
			'selector'	=> implode(',',array(
				'#rhg_slide_title_fonts',
				$prefix_selector.'.slideshow-title'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));

		$t[$i]->options[]=	(object)array(
				'id'				=> 'rhg_slide_title_lh',
				'type'				=> 'css',
				'label'				=> __('Line height','rhc'),
				'input_type'		=> 'number',
				'unit'				=> 'px',
				'class'				=> 'input-mini',
				'min'				=> 1,
				'max'				=> 100,
				'step'				=> 1,
				'selector'	=> implode(',',array(
					'#rhg_slide_title_fonts',
					$prefix_selector.'.slideshow-title'
				)),		
				'property'			=> 'line-height',
				'real_time'			=> true
			);					
		
		$t[$i]->options[]=	(object)array(
				'id'				=> 'rhg_slide_title_und',
				'type'				=> 'css',
				'label'				=> __('Text decoration','rhc'),
				'input_type'		=> 'select',
				'options'			=> array(
					''				=> '',
					'underline'		=> __('underline','rhc'),
					'none' 			=> __('none','rhc'),
					'overline' 		=> __('overline','rhc'),
					'line-through' 	=> __('line-through','rhc'),
					'initial'		=> __('initial','rhc')
				),
				'selector'	=> implode(',',array(
					'#rhg_slide_title_fonts_a',
					'body '.$prefix_selector.'.slideshow-title a'
				)),		
				'property'			=> 'text-decoration',
				'real_time'			=> true
			);	
			
		//-- SLIDE desc font --------------------------------
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhg-slide-description-fonts'; 
		$t[$i]->label 		= __('Slide description','rhc');
		$t[$i]->options = array(
			(object)array(//Needed because editted content is ajax loaded
				'input_type' => 'raw_html',
				'html'=> '<div id="rhg_slide_desc_fonts" ></div>'
			)			
		);		

		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhg_slide_desc_',
			'selector'	=> implode(',',array(
				'#rhg_slide_desc_fonts',
				$prefix_selector.' .slideshow-description'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));		
		
		$t[$i]->options[]=	(object)array(
				'id'				=> 'rhg_slide_desc_lh',
				'type'				=> 'css',
				'label'				=> __('Line height','rhc'),
				'input_type'		=> 'number',
				'unit'				=> 'px',
				'class'				=> 'input-mini',
				'min'				=> 1,
				'max'				=> 100,
				'step'				=> 1,
				'selector'	=> implode(',',array(
					'#rhg_slide_desc_fonts',
					$prefix_selector.' .slideshow-description'
				)),		
				'property'			=> 'line-height',
				'real_time'			=> true
			);	
						
		//-- SLIDE nav --------------------------------
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhg-slide-nav'; 
		$t[$i]->label 		= __('Slide navigation','rhc');
		$t[$i]->options = array(
			(object)array(//Needed because editted content is ajax loaded
				'input_type' => 'raw_html',
				'html'=> '<div id="rhg_slide_nav" ></div>'
			),
			(object)array(//Needed because editted content is ajax loaded
				'input_type' => 'raw_html',
				'html'=> '<div id="rhg_slide_nav_close" ></div>'
			)			
		);		


		
		$t[$i]->options[]=		(object)array(
				'id'				=> 'rhg_slide_nav_arrow_cl',
				'type'				=> 'css',
				'label'				=> __('Arrow icon color','rhc'),
				'input_type'		=> 'color_or_something_else',
				'holder_class'		=> '',
				'opacity'			=> true,
				'btn_clear'			=> true,
				'selector'	=> implode(',',array(
					'#rhg_slide_nav',
					$prefix_selector.' .rhg-nav-prev',
					$prefix_selector.' .rhg-nav-next'				
				)),	
				'property'			=> 'color',
				'other_options'		=> array(
					'transparent'	=> 'transparent'
				),				
				'real_time'			=> true
			);

		$t[$i]->options[]=		(object)array(
				'id'				=> 'rhg_slide_nav_close_cl',
				'type'				=> 'css',
				'label'				=> __('Close icon color','rhc'),
				'input_type'		=> 'color_or_something_else',
				'holder_class'		=> '',
				'opacity'			=> true,
				'btn_clear'			=> true,
				'selector'	=> implode(',',array(
					'#rhg_slide_nav_close',
					$prefix_selector.' .rhg_slideshow nav span.rhg-nav-close'					
				)),	
				'property'			=> 'color',
				'other_options'		=> array(
					'transparent'	=> 'transparent'
				),				
				'real_time'			=> true
			);

		$t[$i]->options[]=		(object)array(
				'id'				=> 'rhg_slide_nav_fonts',
				'type'				=> 'css',
				'label'				=> __('Icon set','rhc'),
				'input_type'		=> 'select',
				'options'			=> apply_filters('rhg_font_set',array(''=>__('--choose--','rhc'))),
				'holder_class'		=> '',
				'btn_clear'			=> true,
				'selector'	=> implode(',',array(
					'#rhg_slide_nav',
					'.icon:before',
					$prefix_selector.' .rhg_slideshow .icon:before'
				)),	
				'property'			=> 'font-family',
				'real_time'			=> true
			);		
					
		//-- SLIDE overlay --------------------------------
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhg-slide-overlay'; 
		$t[$i]->label 		= __('Slide overlay','rhc');
		$t[$i]->options = array(
			(object)array(//Needed because editted content is ajax loaded
				'input_type' => 'raw_html',
				'html'=> '<div id="rhg_slide_overlay" ></div>'
			)		
		);			

		$t[$i]->options[]=(object)array(
				'id'				=> 'rhg_slide_overlay2',
				'type'				=> 'css',
				'label'				=> __('Overlay color','rhc'),
				'input_type'		=> 'color_or_something_else',
				'selector'	=> implode(',',array(
					'#rhg_slide_overlay',
					'.rhg_slideshow',
					$prefix_selector.' .rhg_slideshow'
				)),	
				'property'			=> 'background-color',
				'other_options'		=> array(
					'transparent'	=> 'transparent'
				),
				'btn_clear'			=> true,
				'opacity'			=> true,
				'real_time'			=> true
			);
			
		//-- SLIDE CUSTOM FIELDS --------------------------------
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhg-slide-custom-fields'; 
		$t[$i]->label 		= __('Slide custom fields','rhc');
		$t[$i]->options = array(
			(object)array(//Needed because editted content is ajax loaded
				'input_type' => 'raw_html',
				'html'=> '<div id="rhg_slide_custom_fields" ></div>'
			),	
			(object)array(
				'input_type' => 'raw_html',
				'html'=> '<div id="rhg_slide_custom_fields_links" ></div>'
			),	
			(object)array(
				'input_type' => 'raw_html',
				'html'=> '<div id="rhg_slide_custom_fields_icons" ></div>'
			)			
		);		
		
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhg_slide_fields_',
			'selector'	=> implode(',',array(
				'#rhg_slide_custom_fields',
				$prefix_selector.' .slideviewbox'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));		
		
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhg_slide_fields_links_',
			'selector'	=> implode(',',array(
				'#rhg_slide_custom_fields_links',
				$prefix_selector.' .slideviewbox a'
			)),			
			'labels'	=> (object)array(
				'family'	=> __('Links','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));					
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
		
//----------------------------------------------------------------------
		return $t;
	}
}
?>