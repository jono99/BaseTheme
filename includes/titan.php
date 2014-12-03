<?php

	// documentation: http://www.titanframework.net/docs/


	// get theme name from theme folder name

		$global_themename = array_reverse(explode('/', get_bloginfo('template_directory')));
		$GLOBALS['themename'] = $global_themename[0];

	// titan init
	
		$titan = TitanFramework::getInstance($GLOBALS['themename']);

	// create admin page

		$panel = $titan->createAdminPanel( array(
			'name' => get_bloginfo('name').' Options',
			'icon' => get_bloginfo('template_directory').'/images/favicon.png'
		) );


		// misc tab

			$miscTab = $panel->createTab( array(
			    'name' => 'Miscellaneous',
			) );
			
				
				$miscTab->createOption( array(
				    'name' => 'Analytics',
				    'id' => 'analytics',
				    'type' => 'code',
				    'desc' => 'Paste the FULL Analytics script here'
				) );


		// social tab

			$socialTab = $panel->createTab( array(
			    'name' => 'Social',
			) );
			
				$socialTab->createOption( array(
				    'name' => 'Facebook',
				    'id' => 'facebook',
				    'type' => 'text',
				    'desc' => 'Enter the full URL'
				) );
				$socialTab->createOption( array(
				    'name' => 'Twitter',
				    'id' => 'twitter',
				    'type' => 'text',
				    'desc' => 'Enter the full URL'
				) );
				$socialTab->createOption( array(
				    'name' => 'Youtube',
				    'id' => 'youtube',
				    'type' => 'text',
				    'desc' => 'Enter the full URL'
				) );


	// save
	
		$panel->createOption( array(
		    'type' => 'save',
		) );




/* Functions to get values
--------------------------------------------- */



	// self-echoing function
	function titan($field) {
		$titan = TitanFramework::getInstance($GLOBALS['themename']);
		echo $titan->getOption($field);
	}
	
	// for use in conditionals
	function get_titan($field) {
		$titan = TitanFramework::getInstance($GLOBALS['themename']);
		return $titan->getOption($field);
	}
