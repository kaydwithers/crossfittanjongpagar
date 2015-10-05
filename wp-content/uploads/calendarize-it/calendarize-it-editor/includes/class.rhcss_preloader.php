<?php

/**
 * 
 *
 * @version $Id$
 * @copyright 2003 
 **/

class rhcss_preloader extends module_righthere_css{
	function rhcss_preloader($args=array()){
		$args['cb_init']=array(&$this,'cb_init');
		return $this->module_righthere_css($args);
	}

	function cb_init(){
		//called on the head when editor is active.
?>
<script>
function force_spinner(){
	jQuery(document).ready(function($){
		$('.fc-view-loading.loading-events').show();
	});
	setTimeout('force_spinner()',2000);
}
force_spinner();
</script>

<?php		
	}
	
	function options($t=array()){
		$i = count($t);
		//require RHL_PATH.'includes/admin_frontend_options.php';


		//-- Spinner Color --------------------------------			
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc-preloader-size'; 
		$t[$i]->label 		= __('Size','rhc');
		$t[$i]->options = array();				

		$t[$i]->options[]=	(object)array(
				'id'				=> 'rhc_preloader_size',
				'type'				=> 'css',
				'label'				=> __('Size','rhc'),
				'input_type'		=> 'number',
				//'input_type'		=> 'element_size',
				'unit'				=> 'em',
				'class'				=> 'input-mini',
				'holder_class'		=> '',
				//'class'				=> 'input-mini pop_rangeinput',
				'min'				=> '0',
				'max'				=> '20',
				'step'				=> '.1',
				'selector'			=> '.fc-view-loading .xspinner',
				'property'			=> 'font-size',
				'real_time'			=> true
			);		
		
		//-- Spinner Color --------------------------------			
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc-preloader-color'; 
		$t[$i]->label 		= __('Color','rhc');
		$t[$i]->options = array();				
		$t[$i]->options[] =(object)array(
				'id'				=> 'rhc_spinner_color',
				'type'				=> 'css',
				'label'				=> __('Color','rhc'),
				'input_type'		=> 'color_or_something_else',
				'opacity'			=> false,
				'selector'	=> implode(',',array(
					'.fc-view-loading .xspinner'
				)),					
				'property'			=> 'color',
				'real_time'			=> true,
				'btn_clear'			=> true,
				'derived'			=> array()
		);	
		
		//-- Spinner shadow --------------------------------			
		$i = count($t);
		$t[$i]=(object)array();
		$t[$i]->id 			= 'rhc-tooltip-preloader'; 
		$t[$i]->label 		= __('Shadow','rhc');
		$t[$i]->options = array();				
		$t[$i]->options[] =(object)array(
				'id'				=> 'spinner_shadow',
				'type'				=> 'css',
				'label'				=> __('Shadow','rhc'),
				'input_type'		=> 'textshadow',
				'opacity'			=> true,
				'selector'			=> ".fc-view-loading .xspinner",
				'property'			=> 'text-shadow',
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