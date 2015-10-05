<?php

/**
 * 
 *
 * @version $Id$
 * @copyright 2003 
 **/

class rhcss_social_panels extends module_righthere_css{
	function rhcss_social_panels($args=array()){
		$args['cb_init']=array(&$this,'cb_init');
		return $this->module_righthere_css($args);
	}
	
	function cb_init(){
		//called on the head when editor is active.
	}
	
	function options($t=array()){
		$i = count($t);

		//-- HEAD --------------------------------			
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhp-header'; 
		$t[$i]->label 		= __('Header','rhc');
		$t[$i]->options = array();		
		
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhp_header_font',
			'selector'	=> 'body .cbp-spmenu h3',
			'labels'	=> (object)array(
				'family'	=> __('Header font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));	
		
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Background','rhc'),
			'prefix'	=> 'rhp_header_bg',
			'selector'	=> 'body .cbp-spmenu h3'	
		));		
		
		//-- Links --------------------------------			
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhp-links'; 
		$t[$i]->label 		= __('Links','rhc');
		$t[$i]->options = array();		
		
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhp_body_font',
			'selector'	=> 'body .cbp-spmenu a, body .cbp-spmenu a:active',
			'labels'	=> (object)array(
				'family'	=> __('Links font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));	
		
		$t[$i]->options[] =	(object)array(
				'id'				=> 'rhp_body_border',
				'type'				=> 'css',
				'label'				=> __('Border color','rhc'),
				'input_type'		=> 'color_or_something_else',
				'holder_class'		=> '',
				'opacity'			=> true,
				'btn_clear'			=> true,
				'selector'			=> 'body .cbp-spmenu-vertical a',
				'property'			=> 'border-color',
				'real_time'			=> true
			);			
		
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Background','rhc'),
			'prefix'	=> 'rhp_links_bg',
			'selector'	=> 'body .cbp-spmenu a'	
		));	
		
		//-- Links rollover --------------------------------			
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhp-links-hover'; 
		$t[$i]->label 		= __('Links hover','rhc');
		$t[$i]->options = array();	

		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhpe_links_hover_font',
			'selector'	=> 'body .cbp-spmenu a:hover',
			'labels'	=> (object)array(
				'family'	=> __('Hover font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));	
		
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Background','rhc'),
			'prefix'	=> 'rhp_links_hover_bg',
			'selector'	=> 'body .cbp-spmenu a:hover'	
		));		
		
//--- FACEBOOK
		//-- Links --------------------------------			
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhpe-facebook'; 
		$t[$i]->label 		= __('Facebook','rhc');
		$t[$i]->options = array();		
		
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhpe_facebook_font',
			'selector'	=> 'body .cbp-spmenu a#rhp-facebook, body .cbp-spmenu a#rhp-facebook:active',
			'labels'	=> (object)array(
				'family'	=> __('Facebook font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));	
		
		$t[$i]->options[] =	(object)array(
				'id'				=> 'rhpe_facebook_border',
				'type'				=> 'css',
				'label'				=> __('Border color','rhc'),
				'input_type'		=> 'color_or_something_else',
				'holder_class'		=> '',
				'opacity'			=> true,
				'btn_clear'			=> true,
				'selector'			=> 'body .cbp-spmenu-vertical a#rhp-facebook',
				'property'			=> 'border-color',
				'real_time'			=> true
			);			
		
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Background','rhc'),
			'prefix'	=> 'rhp_facebook_bg',
			'selector'	=> 'body .cbp-spmenu a#rhp-facebook'	
		));	
		
		//-- Links rollover --------------------------------			
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhpe-facebook-hover'; 
		$t[$i]->label 		= __('Facebook hover','rhc');
		$t[$i]->options = array();	

		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhpe_facebook_hover_font',
			'selector'	=> 'body .cbp-spmenu a#rhp-facebook:hover',
			'labels'	=> (object)array(
				'family'	=> __('Hover font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));	
		
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Background','rhc'),
			'prefix'	=> 'rhp_facebook_hover_bg',
			'selector'	=> 'body .cbp-spmenu a#rhp-facebook:hover'	
		));	
//--- FACEBOOK END		
//--- TWITTER
		//-- Links --------------------------------			
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhpe-twitter'; 
		$t[$i]->label 		= __('Twitter','rhc');
		$t[$i]->options = array();		
		
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhpe_twitter_font',
			'selector'	=> 'body .cbp-spmenu a#rhp-twitter, body .cbp-spmenu a#rhp-twitter:active',
			'labels'	=> (object)array(
				'family'	=> __('Twitter font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));	
		
		$t[$i]->options[] =	(object)array(
				'id'				=> 'rhpe_twitter_border',
				'type'				=> 'css',
				'label'				=> __('Border color','rhc'),
				'input_type'		=> 'color_or_something_else',
				'holder_class'		=> '',
				'opacity'			=> true,
				'btn_clear'			=> true,
				'selector'			=> 'body .cbp-spmenu-vertical a#rhp-twitter',
				'property'			=> 'border-color',
				'real_time'			=> true
			);			
		
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Background','rhc'),
			'prefix'	=> 'rhp_twitter_bg',
			'selector'	=> 'body .cbp-spmenu a#rhp-twitter'	
		));	
		
		//-- Links rollover --------------------------------			
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhp-twitter-hover'; 
		$t[$i]->label 		= __('Twitter hover','rhc');
		$t[$i]->options = array();	

		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhpe_twitter_hover_font',
			'selector'	=> 'body .cbp-spmenu a#rhp-twitter:hover',
			'labels'	=> (object)array(
				'family'	=> __('Hover font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));	
		
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Background','rhc'),
			'prefix'	=> 'rhp_twitter_hover_bg',
			'selector'	=> 'body .cbp-spmenu a#rhp-twitter:hover'	
		));	
		
//---- TWITTER END		
//---- LINKEDIN
		//-- Links --------------------------------			
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhpe-linkedin'; 
		$t[$i]->label 		= __('LinkedIn','rhc');
		$t[$i]->options = array();		
		
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhpe_linkedin_font',
			'selector'	=> 'body .cbp-spmenu a#rhp-linkedin, body .cbp-spmenu a#rhp-linkedin:active',
			'labels'	=> (object)array(
				'family'	=> __('LinkedIn font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));	
		
		$t[$i]->options[] =	(object)array(
				'id'				=> 'rhpe_linkedin_border',
				'type'				=> 'css',
				'label'				=> __('Border color','rhc'),
				'input_type'		=> 'color_or_something_else',
				'holder_class'		=> '',
				'opacity'			=> true,
				'btn_clear'			=> true,
				'selector'			=> 'body .cbp-spmenu-vertical a#rhp-linkedin',
				'property'			=> 'border-color',
				'real_time'			=> true
			);			
		
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Background','rhc'),
			'prefix'	=> 'rhp_linkedin_bg',
			'selector'	=> 'body .cbp-spmenu a#rhp-linkedin'	
		));	
		
		//-- Links rollover --------------------------------			
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhp-linkedin-hover'; 
		$t[$i]->label 		= __('LinkedIn hover','rhc');
		$t[$i]->options = array();	

		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhpe_linkedin_hover_font',
			'selector'	=> 'body .cbp-spmenu a#rhp-linkedin:hover',
			'labels'	=> (object)array(
				'family'	=> __('Hover font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));	
		
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Background','rhc'),
			'prefix'	=> 'rhp_linkedin_hover_bg',
			'selector'	=> 'body .cbp-spmenu a#rhp-linkedin:hover'	
		));	
//---- LINKEDIN END	
//---- GOOGLE
		//-- Links --------------------------------			
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhpe-google'; 
		$t[$i]->label 		= __('Google+','rhc');
		$t[$i]->options = array();		
		
		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhpe_google_font',
			'selector'	=> 'body .cbp-spmenu a#rhp-google, body .cbp-spmenu a#rhp-google:active',
			'labels'	=> (object)array(
				'family'	=> __('Google+ font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));	
		
		$t[$i]->options[] =	(object)array(
				'id'				=> 'rhpe_google_border',
				'type'				=> 'css',
				'label'				=> __('Border color','rhc'),
				'input_type'		=> 'color_or_something_else',
				'holder_class'		=> '',
				'opacity'			=> true,
				'btn_clear'			=> true,
				'selector'			=> 'body .cbp-spmenu-vertical a#rhp-google',
				'property'			=> 'border-color',
				'real_time'			=> true
			);			
		
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Background','rhc'),
			'prefix'	=> 'rhpe_google_bg',
			'selector'	=> 'body .cbp-spmenu a#rhp-google'	
		));	
		
		//-- Links rollover --------------------------------			
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhpe-google-hover'; 
		$t[$i]->label 		= __('Google+ hover','rhc');
		$t[$i]->options = array();	

		$t[$i]->options = $this->add_font_options( $t[$i]->options, array(
			'prefix'	=> 'rhpe_google_hover_font',
			'selector'	=> 'body .cbp-spmenu a#rhp-google:hover',
			'labels'	=> (object)array(
				'family'	=> __('Hover font','rhc'),
				'size'		=> __('Size','rhc'),
				'color'		=> __('Color','rhc')				
			)
		));	
		
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Background','rhc'),
			'prefix'	=> 'rhpe_google_hover_bg',
			'selector'	=> 'body .cbp-spmenu a#rhp-google:hover'	
		));	
		
		
//----- GOOGLE END
		//-- Body --------------------------------			
		$i++;
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhp-body'; 
		$t[$i]->label 		= __('Body','rhc');
		$t[$i]->options = array();	
		
		$t[$i]->options = $this->add_backgroud_options( $t[$i]->options, array(
			'label'		=> __('Background','rhc'),
			'prefix'	=> 'rhp_body_bg',
			'selector'	=> 'body .cbp-spmenu'	
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