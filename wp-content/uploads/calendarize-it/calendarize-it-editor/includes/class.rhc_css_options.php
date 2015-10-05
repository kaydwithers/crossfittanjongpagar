<?php

/**
 * 
 *
 * @version $Id$
 * @copyright 2003 
 **/
class rhc_css_options {
	function rhc_css_options($args=array()){
		add_filter('rhcss-editor-options-'.$args['plugin_id'], array(&$this,'pop_tab_css_editor_options'),10,1);
		if($args['admin_bar']){
			add_action('init',array(&$this,'init'),9999 );
		}
		add_action('admin_head-events_page_rhc-css-options',array(&$this,'admin_head_options'));
	}

	function admin_head_options(){
?>
<style>
.pt-option-yesno .pt-label {
display:inline-block;
min-width:220px;
}
</style>
<?php
	}
	
	
	function pop_tab_css_editor_options($options){
		//add more options to the CSS Editor Tab
		//calendar page
		//venue page
		//organizer page
		//upcoming events widget url
		global $wpdb,$rhc_plugin;
		$options[]=(object)array(
						'type'			=> 'clear'
					);	
		$options[]=(object)array(
						'type'			=> 'subtitle',
						'label'			=> __('Editable sections urls','rhc')
					);	
		//-- Calendar url ----------------------------------------------------------------------		
		$options[]=	(object)array(
				'id'	=> 'rhc_css_calendar_url',
				'type'	=>'text',
				'label'	=> __('Calendar URL','rhc'),
				'el_properties'	=> array('class'=>'widefat'),
				'description' => __('Specify the url of a page where the calendarizeit shortcode have been implemented.  If left blank the editor will try to determine it automatically.','rhc'),
				'default' => $this->get_calendar_url(),
				'save_option'=>true,
				'load_option'=>true
			);
		//------------------------------------------------------------------------

		$options[]=	(object)array(
				'id'	=> 'rhc_css_event_url',
				'type'	=>'text',
				'label'	=> __('Single event URL','rhc'),
				'el_properties'	=> array('class'=>'widefat'),
				'description' => __('URL of a single event page.  If left blank the editor will try to determine it automatically.','rhc'),
				'default' => $this->get_event_url(),
				'save_option'=>true,
				'load_option'=>true
			);	
			
		$options[]=	(object)array(
				'id'	=> 'rhc_css_venue_url',
				'type'	=>'text',
				'label'	=> __('Venue URL','rhc'),
				'el_properties'	=> array('class'=>'widefat'),
				'description' => __('URL of a venue page.  If left blank the editor will try to determine it automatically.','rhc'),
				'default' => $this->get_venue_url(),
				'save_option'=>true,
				'load_option'=>true
			);	
			
		$options[]=	(object)array(
				'id'	=> 'rhc_css_organizer_url',
				'type'	=>'text',
				'label'	=> __('Organizer URL','rhc'),
				'el_properties'	=> array('class'=>'widefat'),
				'description' => __('URL of a organizer page.  If left blank the editor will try to determine it automatically.','rhc'),
				'default' => $this->get_organizer_url(),
				'save_option'=>true,
				'load_option'=>true
			);	
			
		$options[]=	(object)array(
				'id'	=> 'rhcw_upcoming_default',
				'type'	=>'text',
				'label'	=> __('Upcoming Events Default URL','rhc'),
				'el_properties'	=> array('class'=>'widefat'),
				'description' => __('Specify the URL of a page containing the Upcoming Events widget "Default" model.','rhc'),
				'default' => '',
				'save_option'=>true,
				'load_option'=>true
			);	
			
		$options[]=	(object)array(
				'id'	=> 'rhcw_upcoming_agenda',
				'type'	=>'text',
				'label'	=> __('Upcoming Events Agenda Like URL','rhc'),
				'el_properties'	=> array('class'=>'widefat'),
				'description' => __('Specify the URL of a page containing the Upcoming Events widget "Agenda Like" model.','rhc'),
				'default' => '',
				'save_option'=>true,
				'load_option'=>true
			);	
			
		$options[]=	(object)array(
				'id'	=> 'rhcw_upcoming_agenda_b',
				'type'	=>'text',
				'label'	=> __('Upcoming Events Agenda Like B URL','rhc'),
				'el_properties'	=> array('class'=>'widefat'),
				'description' => __('Specify the URL of a page containing the Upcoming Events widget "Agenda Like B" model.','rhc'),
				'default' => '',
				'save_option'=>true,
				'load_option'=>true
			);		
			
		if(defined('RHP_ADMIN_ROLE') && current_user_can(RHP_ADMIN_ROLE)){
			$options[]=	(object)array(
					'id'	=> 'rhp_social_panels_url',
					'type'	=>'text',
					'label'	=> __('Social Panels URL','rhc'),
					'el_properties'	=> array('class'=>'widefat'),
					'description' => __('Specify the URL of a page containing social panels.','rhc'),
					'default' => '',
					'save_option'=>true,
					'load_option'=>true
				);		
		}	

		if(defined('RHCFUI_PATH')){
			$options[]=	(object)array(
					'id'	=> 'flatui_widget_url',
					'type'	=>'text',
					'label'	=> __('Flat UI widget URL','rhc'),
					'el_properties'	=> array('class'=>'widefat'),
					'description' => __('Specify the URL of a page containing the flatui widget.  Home will be used by default.','rhc'),
					'default' => '',
					'save_option'=>true,
					'load_option'=>true
				);		
		}	
		/*
		if( defined('RHCGMAP_PATH') ){
			$options[]=	(object)array(
					'id'	=> 'rhc_gmap_view_url',
					'type'	=>'text',
					'label'	=> __('Google Map View URL','rhc'),
					'el_properties'	=> array('class'=>'widefat'),
					'description' => __('Specify the URL of a page containing a calendar set with map view','rhc'),
					'default' => '',
					'save_option'=>true,
					'load_option'=>true
				);	
		}
			*/
			
/* uncomment when ready to realease rsvp css edit		
		if( defined('RHCRSVP_PATH') ){
			$options[]=	(object)array(
					'id'	=> 'rhc_rsvp_url',
					'type'	=>'text',
					'label'	=> __('RSVP URL','rhc'),
					'el_properties'	=> array('class'=>'widefat'),
					'description' => __('If not autodetected, specify the URL of an event page containing the RSVP box.','rhc'),
					'default' => '',
					'save_option'=>true,
					'load_option'=>true
				);	
		}
*/				

		if( defined('RHCCE_PATH') ){
			$options[]=	(object)array(
					'id'	=> 'ce_url',
					'type'	=>'text',
					'label'	=> __('Community Events URL','rhc'),
					'el_properties'	=> array('class'=>'widefat'),
					'description' => __('Specify the URL of a page containing the Community Events submit form','rhc'),
					'default' => '',
					'save_option'=>true,
					'load_option'=>true
				);		
		}				
	
		if( defined('RHCCZPF_PATH') ){
			$options[]=	(object)array(
					'id'	=> 'members_url',
					'type'	=>'text',
					'label'	=> __('Members URL','rhc'),
					'el_properties'	=> array('class'=>'widefat'),
					'description' => __('Specify the URL of a page containing the rhc_members shortcode','rhc'),
					'default' => '',
					'save_option'=>true,
					'load_option'=>true
				);		
			$options[]=	(object)array(
					'id'	=> 'profil_url',
					'type'	=>'text',
					'label'	=> __('Profile URL','rhc'),
					'el_properties'	=> array('class'=>'widefat'),
					'description' => __('Specify the URL of a page containing the rhc_profil shortcode','rhc'),
					'default' => '',
					'save_option'=>true,
					'load_option'=>true
				);	
			$options[]=	(object)array(
					'id'	=> 'groupsteams_url',
					'type'	=>'text',
					'label'	=> __('Groups Teams URL','rhc'),
					'el_properties'	=> array('class'=>'widefat'),
					'description' => __('Specify the URL of a page containing the rhc_groups shortcode','rhc'),
					'default' => '',
					'save_option'=>true,
					'load_option'=>true
				);	
					
		}
	
		if( defined('RHG_PATH') ){
			$options[]=	(object)array(
					'id'	=> 'grid_url',
					'type'	=>'text',
					'label'	=> __('Grid View URL','rhc'),
					'el_properties'	=> array('class'=>'widefat'),
					'description' => __('Specify the URL of a page containing the Google Grid View','rhc'),
					'default' => '',
					'save_option'=>true,
					'load_option'=>true
				);		
		}
	
		if( defined('RHCTD_PATH') || defined('RHCGMAP_PATH') ){
			$options[]=	(object)array(
					'id'	=> 'taxonomy_dropdown_url',
					'type'	=>'text',
					'label'	=> __('Filter Dropdown URL','rhc'),
					'el_properties'	=> array('class'=>'widefat'),
					'description' => __('Specify the URL of a page containing a calendar set with the taxonomy dropdown','rhc'),
					'default' => '',
					'save_option'=>true,
					'load_option'=>true
				);	
		}
	
		return $options;
	}
		
	function init(){
		global $rhc_plugin;
		if( '1'!=$rhc_plugin->get_option('enable_css_editor','1',true) )return;//editor is not enabled. do not add items to the menu.
	
		// Provide access to the css editor
		//-- create editor quick access links
		$venue_url=$this->get_venue_url();
		if(trim($venue_url)!=''){
			$venue_url = $this->addURLParameter($this->get_venue_url(), 'rhc_edit', 'venue_page');
		}	
		
		$args = array(
			'nodes'=>array(
				array(
					'id' => 'calendarize-it', 
					'title' => 'Calendarize it!', 
					'parent' => 'rh-css-editor-root',
					'href'		=> '#',
					'meta'		=> array('onclick'=>'javascript:jQuery(this).parent().toggleClass("hover");')
				),
				array(
				 	'id' 		=> 'calendarize-it-general', 
					'title' 	=> __('Calendar','rhc'), 
					'parent' 	=> 'calendarize-it',
					'href'		=> '#',
					'meta'		=> array('onclick'=>'javascript:jQuery(this).parent().toggleClass("hover");')
				),
				array(
				 	'id' 		=> 'calendarize-it-frame', 
					'title' 	=> __('Calendar frame','rhc'), 
					'parent' 	=> 'calendarize-it-general',
					'href'		=> $this->addURLParameter($this->get_calendar_url(), 'rhc_edit', 'calendar') 
				),
				array(
				 	'id' 		=> 'calendarize-it-tooltip', 
					'title' 	=> __('Tooltip','rhc'), 
					'parent' 	=> 'calendarize-it-general',
					'href'		=> $this->addURLParameter($this->get_calendar_url(), 'rhc_edit', 'tooltip') 
				),
				array(
				 	'id' 		=> 'calendarize-it-preloader', 
					'title' 	=> __('Pre loader','rhc'), 
					'parent' 	=> 'calendarize-it-general',
					'href'		=> $this->addURLParameter($this->get_calendar_url(), 'rhc_edit', 'preloader') 
				),
				array(
				 	'id' 		=> 'calendarize-it-filter-box', 
					'title' 	=> __('Calendar filter box','rhc'), 
					'parent' 	=> 'calendarize-it-general',
					'href'		=> $this->addURLParameter($this->get_calendar_url(), 'rhc_edit', 'filter_box') 
				),
				array(
					'id' 		=> 'calendarize-it-all-views', 
					'title' 	=> __('All views','rhc'), 
					'parent' 	=> 'calendarize-it-general',
					'href'		=> $this->addURLParameter($this->get_calendar_url(), 'rhc_edit', 'all_views') 
				),
				array(
					'id' 		=> 'calendarize-it-month', 
					'title' 	=> __('Calendar month view','rhc'), 
					'parent' 	=> 'calendarize-it-general',
					'href'		=> $this->addURLParameter($this->get_calendar_url(), 'rhc_edit', 'month_view') 
				),
				array(
					'id' => 'calendarize-it-agenda', 
					'title' => __('Agenda views','rhc'), 
					'parent' => 'calendarize-it-general',
					'href'		=> $this->addURLParameter($this->get_calendar_url(), 'rhc_edit', 'agenda_view') 
				),
				array(
					'id' => 'calendarize-it-basic', 
					'title' => __('Basic views','rhc'), 
					'parent' => 'calendarize-it-general',
					'href'		=> $this->addURLParameter( $this->addURLParameter($this->get_calendar_url(), 'rhc_edit', 'basic_view'), 'defaultview', 'basicWeek') 
				),								
				array(
					'id' => 'calendarize-it-list', 
					'title' => __('Calendar event list view','rhc'), 
					'parent' => 'calendarize-it-general',
					'href'		=> $this->addURLParameter($this->get_calendar_url(), 'rhc_edit', 'event_list') 
				),
								
				array(
					'id' => 'calendarize-it-detail-box', 
					'title' => __('Detail boxes (default)','rhc'), 
					'parent' => 'calendarize-it',
					'href'	=> $this->addURLParameter($this->get_event_url(), 'rhc_edit', 'detail_box')
				),

				array(
					'id' => 'calendarize-it-page-event', 
					'title' => __('Single event page','rhc'), 
					'parent' => 'calendarize-it',
					'href'	=> '#',
					'meta'		=> array('onclick'=>'javascript:jQuery(this).parent().toggleClass("hover");')
				),

				array(
					'id' => 'calendarize-it-page-event-general', 
					'title' => __('Image and image frame','rhc'), 
					'parent' => 'calendarize-it-page-event',
					'href'	=> $this->addURLParameter($this->get_event_url(), 'rhc_edit', 'event_page')
				),

				array(
					'id' => 'calendarize-it-page-event-dbox', 
					'title' => __('Event Details Box','rhc'), 
					'parent' => 'calendarize-it-page-event',
					'href'	=> $this->addURLParameter($this->get_event_url(), 'rhc_edit', 'event_page_dbox')
				),			
				/* added later with a small optimized procedure to find and event with the rsvp feature activated.
				array(
					'id' => 'calendarize-it-page-event-rsvp-dbox', 
					'title' => __('RSVP Box','rhc'), 
					'parent' => 'calendarize-it-page-event',
					'href'	=> $this->addURLParameter($this->get_event_url(), 'rhc_edit', 'event_rsvp_box')
				),	
				*/
				/*
				array(
					'id' => 'calendarize-it-page-event-rating-dbox', 
					'title' => __('Ratings and Review Box','rhc'), 
					'parent' => 'calendarize-it-page-event',
					'href'	=> $this->addURLParameter($this->get_event_url(), 'rhc_edit', 'event_rating_box')
				),*/	
				
				array(
					'id' => 'calendarize-it-page-event-vbox', 
					'title' => __('Venue Details box','rhc'), 
					'parent' => 'calendarize-it-page-event',
					'href'	=> $this->addURLParameter($this->get_event_url(), 'rhc_edit', 'event_page_vbox')
				),				
				
				array(
					'id' => 'calendarize-it-page-venue', 
					'title' => __('Venue page','rhc'), 
					'parent' => 'calendarize-it',
					'href'	=> $this->addURLParameter($this->get_venue_url(), 'rhc_edit', 'venue_page')
				),
				
				array(
					'id' => 'calendarize-it-page-organizer', 
					'title' => __('Organizer page','rhc'), 
					'parent' => 'calendarize-it',
					'href'	=> $this->addURLParameter($this->get_organizer_url(), 'rhc_edit', 'organizer_page')
				),
				
				array(
					'id' => 'rhcw-upcoming-root', 
					'title' => __('Upcoming events widget','rhc'), 
					'parent' => 'calendarize-it',
					'href'	=> '#',
					'meta'		=> array('onclick'=>'javascript:jQuery(this).parent().toggleClass("hover");')
				),
				
				array(
					'id' 		=> 'rhcw-upcoming-default', 
					'title' 	=> __('Default','rhc'), 
					'parent' 	=> 'rhcw-upcoming-root',//'rhc-widget-upcoming',
					'href'		=> $this->get_upcoming_widget_url('rhcw_upcoming_default')
				),
				
				array(
					'id' 		=> 'rhc-widget-upcoming-agenda', 
					'title' 	=> __('Agenda Like','rhc'), 
					'parent' 	=> 'rhcw-upcoming-root',
					'href'		=> $this->get_upcoming_widget_url('rhcw_upcoming_agenda')
				),
				
				array(
					'id' 		=> 'rhc-widget-upcoming-agenda-b', 
					'title' 	=> __('Agenda Like B','rhc'), 
					'parent' 	=> 'rhcw-upcoming-root',
					'href'		=> $this->get_upcoming_widget_url('rhcw_upcoming_agenda_b')
				)		
			)
		);
		
		if(defined('RHP_ADMIN_ROLE') && current_user_can(RHP_ADMIN_ROLE)){
			$args['nodes'][]=array(
						'id' 		=> 'rhp-main', 
						'title' 	=> __('Social Sharing Panel','rhc'), 
						'parent' 	=> 'calendarize-it',
						'href'		=> $this->addURLParameter($this->get_social_panels_url(), 'rhc_edit', 'rhp_main')
					);
		}
		
		if( defined('RHCGMAP_PATH') ){
			$href=$this->addURLParameter($this->get_calendar_url(), 'defaultview', 'rhc_gmap');			
			/*
			$args['nodes'][]=array(
				 	'id' 		=> 'gmap-view-holder', 
					'title' 	=> __('Events Map View','rhc'), 
					'parent' 	=> 'calendarize-it',
					'href'		=> '#',
					'meta'		=> array('onclick'=>'javascript:jQuery(this).parent().toggleClass("hover");')
				);	
			*/	
			$args['nodes'][]=array(
				 	'id' 		=> 'gmap-view-holder', 
					'title' 	=> __('Events Map View','rhc'), 
					'parent' 	=> 'calendarize-it',
					'href'		=> $this->addURLParameter($href, 'rhc_edit', 'gmap_view')
				);	
					
							
					
		}

		if( defined('RHCTD_PATH') || defined('RHCGMAP_PATH') ){
			if( defined('RHCGMAP_PATH') ){
				$view = 'rhc_gmap';
			}else{
				$view = 'month';			
			}
			
			$url = $rhc_plugin->get_option('taxonomy_dropdown_url', $this->get_calendar_url(), true); 
			
			$href=$this->addURLParameter( $url, 'defaultview', $view);			

			$args['nodes'][]=array(
				 	'id' 		=> 'tax-dropdown-view-holder', 
					'title' 	=> __('Dropdown Filter','rhc'), 
					'parent' 	=> 'calendarize-it',
					'href'		=> $this->addURLParameter($href, 'rhc_edit', 'taxonomy_filters')
				);	
		}		
	
		if( defined('RHCRSVP_PATH') ){
			$meta_search = array(
				(object)array(
					'meta_key'	=> 'enable_rsvb_box',
					'meta_value'=> '1',
					'score'		=> 100
				)
			);
			$args['nodes'][]=array(
					'id' => 'rsvp', 
					'title' => __('RSVP Box','rhc'), 
					'parent' => 'calendarize-it-page-event',
					'href'	=> $this->addURLParameter($this->get_event_url('rhc_rsvp_url',$meta_search), 'rhc_edit', 'event_rsvp_box')
			);//enable_rsvb_box
		}
		
		if( defined('RHCRATING_PATH') ){
			$meta_search = array(
				(object)array(
					'meta_key'	=> 'enable_rhc_rating_box',
					'meta_value'=> '1',
					'score'		=> 100
				)
			);
			$args['nodes'][]=array(
					'id' => 'rating', 
					'title' => __('Ratings and Review Box','rhc'), 
					'parent' => 'calendarize-it-page-event',
					'href'	=> $this->addURLParameter($this->get_event_url('rhc_rating_url',$meta_search), 'rhc_edit', 'event_rating_box')
			);//enable_rating_box
		}
		
		if( defined('RHCFUI_PATH') ){
			$url = $rhc_plugin->get_option('flatui_widget_url', site_url('/'), true);	
			$args['nodes'][]=array(
					'id' 		=> 'flatui_widget', 
					'title' 	=> __('Flat UI Widget','rhc'), 
					'parent' 	=> 'calendarize-it',
					'href'		=> $this->addURLParameter($url, 'rhc_edit', 'event_flatui_widget')
			);//enable_rating_box
		}
		
		if( defined('RHCCE_PATH') ){
			$args['nodes'][]=array(
				 	'id' 		=> 'ce', 
					'title' 	=> __('Community Events','rhc'), 
					'parent' 	=> 'calendarize-it',
					'href'		=> $this->addURLParameter( $this->get_ce_url(), 'rhc_edit', 'ce')
				);	
			$args['nodes'][]=array(
				 	'id' 		=> 'ce_end', 
					'title' 	=> __('CE End Message','rhc'), 
					'parent' 	=> 'calendarize-it',
					'href'		=> $this->addURLParameter( $this->get_ce_url(), 'rhc_edit', 'ce_end').'#css-editor-ce-end-message'
				);	
					
		}		

		if( defined('RHCCZPF_PATH') ){
		
			$args['nodes'][]=array(
				 	'id' 		=> 'calendarize-it-profile', 
					'title' 	=> __('Member Profile','rhc'), 
					'parent' 	=> 'calendarize-it',
					'href'		=> '#',
					'meta'		=> array('onclick'=>'javascript:jQuery(this).parent().toggleClass("hover");')
				);
				
			$args['nodes'][]=array(
				 	'id' 		=> 'rhcmembers', 
					'title' 	=> __('Members page','rhc'), 
					'parent' 	=> 'calendarize-it-profile',
					'href'		=> $this->addURLParameter( $this->get_members_url(), 'rhc_edit', 'rhc_members')
				);	
				
			$args['nodes'][]=array(
				 	'id' 		=> 'rhcprofile_top', 
					'title' 	=> __('Profile page top','rhc'), 
					'parent' 	=> 'calendarize-it-profile',
					'href'		=> $this->addURLParameter( $this->get_profile_url(), 'rhc_edit', 'rhc_profile_top')
				);	
				
			$args['nodes'][]=array(
				 	'id' 		=> 'rhcprofile_middle', 
					'title' 	=> __('Profile page middle','rhc'), 
					'parent' 	=> 'calendarize-it-profile',
					'href'		=> $this->addURLParameter( $this->get_profile_url(), 'rhc_edit', 'rhc_profile_middle')
				);
			
			$args['nodes'][]=array(
				 	'id' 		=> 'rhcprofile_bottom', 
					'title' 	=> __('Profile page bottom','rhc'), 
					'parent' 	=> 'calendarize-it-profile',
					'href'		=> $this->addURLParameter( $this->get_profile_url(), 'rhc_edit', 'rhc_profile_bottom')
				);
				
			$args['nodes'][]=array(
				 	'id' 		=> 'rhcgroupe', 
					'title' 	=> __('Group Page','rhc'), 
					'parent' 	=> 'calendarize-it-profile',
					'href'		=> $this->addURLParameter( $this->get_groups_url(), 'rhc_edit', 'rhc_groupe')
				);	
		}
		if( defined('RHG_PATH') ){
			$url = $this->addURLParameter( $this->get_grid_url(), 'rhc_edit', 'grid_default') ;
			$url = $this->addURLParameter( $url, 'defaultview', 'rhc_grid') ;
			
			$args['nodes'][]=	array(
					'id' 		=> 'calendarize-it-grid', 
					'title' 	=> __('Grid Gallery View','rhc'), 
					'parent' 	=> 'calendarize-it-general',
					'href'		=> $url
			);
		}		
		

				
		new admin_bar_editor_access($args);		
	}
	
	function get_upcoming_widget_url($model='rhcw_upcoming_default'){
		global $rhc_plugin;
		$url = $rhc_plugin->get_option($model,'',true);
		if($url!=''){
			return $this->addURLParameter($url, 'rhc_edit', $model);
		}
		return '';
	}
	
	function get_ce_url(){
		global $wpdb,$rhc_plugin;
		$url = $rhc_plugin->get_option('ce_url','',true);
		if( ''==$url ){
			$sql = "SELECT ID  FROM $wpdb->posts WHERE post_status=\"publish\" AND post_content LIKE \"%[community_event%\" AND post_content NOT LIKE \"%[community_event_edit%\" AND post_content NOT LIKE \"%[community_events_edit%\" ORDER BY ID DESC LIMIT 1";
			$id = $wpdb->get_var($sql,0,0);						
			$url = get_permalink( $id );	
		}
		return $url;
	}
	
	function get_members_url(){
		global $wpdb,$rhc_plugin;
		$url = $rhc_plugin->get_option('members_url','',true);
		if( ''==$url ){
			$sql = "SELECT ID  FROM $wpdb->posts WHERE post_status=\"publish\" AND post_content LIKE \"%[rhc_members%\" ORDER BY ID DESC LIMIT 1";
			$id = $wpdb->get_var($sql,0,0);						
			$url = get_permalink( $id );	
		}
		return $url;
	}
	
	function get_groups_url(){
		global $wpdb,$rhc_plugin;
		$url = $rhc_plugin->get_option('groupsteams_url','',true);
		if( ''==$url ){
			$sql = "SELECT ID  FROM $wpdb->posts WHERE post_status=\"publish\" AND post_content LIKE \"%[rhc_groups%\" ORDER BY ID DESC LIMIT 1";
			$id = $wpdb->get_var($sql,0,0);						
			$url = get_permalink( $id );	
		}
		return $url;
	}
	
	function get_profile_url(){
		global $wpdb,$rhc_plugin;
		$url = $rhc_plugin->get_option('profil_url','',true);
		if( ''==$url ){
			$sql = "SELECT ID  FROM $wpdb->posts WHERE post_status=\"publish\" AND post_content LIKE \"%[rhc_profil%\" ORDER BY ID DESC LIMIT 1";
			$id = $wpdb->get_var($sql,0,0);						
			$url = get_permalink( $id );	
		}
		return $url;
	}
	
	function get_calendar_url(){
		global $wpdb,$rhc_plugin;
		$url = $rhc_plugin->get_option('rhc_css_calendar_url','',true);
		if( ''==$url ){
			$sql = "SELECT ID  FROM $wpdb->posts WHERE post_status=\"publish\" AND post_content LIKE \"%[calendarizeit%\" ORDER BY ID DESC LIMIT 1";
			$id = $wpdb->get_var($sql,0,0);						
			$url = get_permalink( $id );	
		}
		return $url;
	}
	
	function get_grid_url(){
		global $wpdb,$rhc_plugin;
		$url = $rhc_plugin->get_option('grid_url','',true);
		if( ''==$url){
			return $this->get_calendar_url();
		}
		return $url;
	}
	
	function get_venue_url(){
		global $wpdb,$rhc_plugin;
		$url = $rhc_plugin->get_option('rhc_css_venue_url','',true);	
		if( ''==$url ){
			$terms = get_terms(RHC_VENUE,array('hide_empty'=>0));	
			if(is_array($terms) && count($terms)>0){
				$url = get_term_link($terms[0]);			
			}
		}
		return $url;
	}
	
	function get_organizer_url(){
		global $wpdb,$rhc_plugin;
		$url = $rhc_plugin->get_option('rhc_css_organizer_url','',true);	
		if( ''==$url ){
			$terms = get_terms(RHC_ORGANIZER,array('hide_empty'=>0));	
			if(is_array($terms) && count($terms)>0){
				$url = get_term_link($terms[0]);			
			}
		}
		return $url;
	}	
	
	function get_event_url($from_option_url='rhc_css_event_url',$meta=array()){
		global $wpdb,$rhc_plugin;
		$url = $rhc_plugin->get_option($from_option_url,'',true);	
		if(''==trim($url)){
			$subselect = '';
			if(is_array($meta)&&!empty($meta)){
				$subselect = sprintf(" AND P.ID IN (SELECT DISTINCT(post_id) FROM %s WHERE meta_key='%s' AND meta_value='%s')",
					$wpdb->postmeta,
					$meta[0]->meta_key,
					$meta[0]->meta_value
				);
			}
			$sql = "SELECT P.ID, P.post_content, P.post_excerpt FROM {$wpdb->posts} P";
			$sql.= " WHERE P.post_type='".RHC_EVENTS."' AND P.post_status='publish'";
			$sql.= $subselect;
			$sql.= " ORDER BY RAND() LIMIT 10";
			if($wpdb->query($sql) && $wpdb->num_rows>0){
				$o = (object)array(
					'post_ID'=>0,
					'score'=>0
				);
				foreach($wpdb->last_result as $row){
					$score = 0;
					if(trim($row->post_content)!=''){
						$score++;
					}				
					if(trim($row->post_excerpt)!=''){
						$score++;
					}	
					
					$boxes = get_post_meta($row->ID, 'postinfo_boxes', true);
					if( is_array($boxes) && count($boxes)>0 ){
						if( '1' == get_post_meta($row->ID, 'enable_postinfo', true) ){
							$score+=2;
						}
					}
					
					$venues = get_the_terms($row->ID, RHC_EVENTS);
					if( is_array($venues) && count($venues)>0 ){
						if( '1' == get_post_meta($row->ID, 'enable_venuebox', true) ){
							$score+=2;
						}
					}
					//enable_featuredimage
					//rhc_top_image
					if( intval(get_post_meta($row->ID, 'rhc_top_image', true)) > 0 ){
						if( '1' == get_post_meta($row->ID, 'enable_featuredimage', true) ){
							$score++;
						}					
					}					
					
					if(is_array($meta)&&!empty($meta)){
						foreach($meta as $m){
							if(	$m->meta_value == get_post_meta($row->ID,$m->meta_key,true) ){
								$score+=$m->score;
							}
						}
					}
					
					if( $score > $o->score ){
						$o->post_ID = $row->ID;
						$o->score = $score;
					}
				}
				
				if($o->post_ID>0){
					$url = get_permalink($o->post_ID);
				}
			}else{
				//debug:die($wpdb->last_error);
			}
		}
		return $url;	
	}
	
	function get_social_panels_url(){
		global $wpdb,$rhc_plugin;
		$url = $rhc_plugin->get_option('rhp_social_panels_url','',true);	
		if(''==$url){
			return $this->get_event_url();
		}
		return $url;
	}
	
	function addURLParameter($url, $paramName, $paramValue) {
	     if(trim($url)=='')return '';
		 $url_data = parse_url($url);
	     if(!isset($url_data["query"])){
		 	$url_data["query"]="";
		 }
	     $params = array();
	     parse_str($url_data['query'], $params);
	     $params[$paramName] = $paramValue;
	     $url_data['query'] = http_build_query($params);
	     return $this->build_url($url_data);
	}

	function build_url($url_data) {
	    $url="";
	    if(isset($url_data['host']))
	    {
	        $url .= $url_data['scheme'] . '://';
	        if (isset($url_data['user'])) {
	            $url .= $url_data['user'];
	                if (isset($url_data['pass'])) {
	                    $url .= ':' . $url_data['pass'];
	                }
	            $url .= '@';
	        }
	        $url .= $url_data['host'];
	        if (isset($url_data['port'])) {
	            $url .= ':' . $url_data['port'];
	        }
	    }
	    $url .= @$url_data['path'];
	    if (isset($url_data['query'])) {
	        $url .= '?' . $url_data['query'];
	    }
	    if (isset($url_data['fragment'])) {
	        $url .= '#' . $url_data['fragment'];
	    }
	    return $url;
	}		
}

?>