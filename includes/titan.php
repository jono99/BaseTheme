<?php

	// documentation: http://www.titanframework.net/docs/


	// get theme name from theme folder name

		$GLOBALS['themename'] = array_reverse(explode('/', get_bloginfo('template_directory')))[0]; 


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
				    'name' => 'Favicon',
				    'id' => 'favicon',
				    'type' => 'upload',
				    'desc' => '16x16 PNG or ICO file'
				) );
				
				$miscTab->createOption( array(
				    'name' => 'Analytics',
				    'id' => 'analytics',
				    'type' => 'code',
				    'desc' => 'Paste the FULL Analytics script here'
				) );

				$miscTab->createOption( array(
				    'name' => 'Conference Menu',
				    'id' => 'conference_menu',
				    'type' => 'multicheck-pages',
				    'desc' => 'Choose the pages that must be in the Conference menu panel.'
				) );


		// home tab

			$homeTab = $panel->createTab( array(
			    'name' => 'Home',
			) );
			
				$homeTab->createOption( array(
					'type' => 'note',
					'desc' => 'Choose 2 colors to be used to create a <b>radial</b> gradient effect on the home page.'
				) );

					$homeTab->createOption( array(
					    'name' => 'Inside color',
					    'id' => 'teasercolor1',
					    'type' => 'color',
					    'desc' => 'If you want a flat color (no gradient), set the color using this option and remove the value from the \'Outside color\' below.'
					) );
					$homeTab->createOption( array(
					    'name' => 'Outside color',
					    'id' => 'teasercolor2',
					    'type' => 'color',
					) );
				
					$homeTab->createOption( array(
					    'name' => 'Teaser Pictures',
					    'type' => 'heading',
					    'desc' => 'Choose up to 5 pictures to be used in a slideshow of pictures on the home page. For best results, upload a transparent PNG file.'
					) );
					
						$homeTab->createOption( array(
						    'name' => 'Pic 1',
						    'id' => 'teaser1pic',
						    'type' => 'upload',
						) );
							$homeTab->createOption( array(
							    'name' => 'Pic 1 URL',
							    'id' => 'teaser1url',
							    'type' => 'text',
							    'placeholder' => 'http://',
							    'desc' => 'Optionally enter a URL that this slide should link to.'
							) );
						
						$homeTab->createOption( array(
						    'name' => 'Pic 2',
						    'id' => 'teaser2pic',
						    'type' => 'upload',
						) );
							$homeTab->createOption( array(
							    'name' => 'Pic2 URL',
							    'id' => 'teaser2url',
							    'type' => 'text',
							    'placeholder' => 'http://',
							    'desc' => 'Optionally enter a URL that this slide should link to.'
							) );

						$homeTab->createOption( array(
						    'name' => 'Pic 3',
						    'id' => 'teaser3pic',
						    'type' => 'upload',
						) );
							$homeTab->createOption( array(
							    'name' => 'Pic 3 URL',
							    'id' => 'teaser3url',
							    'type' => 'text',
							    'placeholder' => 'http://',
							    'desc' => 'Optionally enter a URL that this slide should link to.'
							) );
							
						$homeTab->createOption( array(
						    'name' => 'Pic 4',
						    'id' => 'teaser4pic',
						    'type' => 'upload',
						) );
							$homeTab->createOption( array(
							    'name' => 'Pic 4 URL',
							    'id' => 'teaser4url',
							    'type' => 'text',
							    'placeholder' => 'http://',
							    'desc' => 'Optionally enter a URL that this slide should link to.'
							) );
							
						$homeTab->createOption( array(
						    'name' => 'Pic 5',
						    'id' => 'teaser5pic',
						    'type' => 'upload',
						) );
							$homeTab->createOption( array(
							    'name' => 'Pic 5 URL',
							    'id' => 'teaser5url',
							    'type' => 'text',
							    'placeholder' => 'http://',
							    'desc' => 'Optionally enter a URL that this slide should link to.'
							) );

					$homeTab->createOption( array(
					    'name' => 'Sponsors',
					    'type' => 'heading',
					) );

						$homeTab->createOption( array(
						    'name' => 'Macsteel',
						    'id' => 'macsteel',
						    'type' => 'text',
						    'desc' => 'Enter the full URL',
						    'placeholder' => 'http://'
						) );
						$homeTab->createOption( array(
						    'name' => 'Investec',
						    'id' => 'investec',
						    'type' => 'text',
						    'desc' => 'Enter the full URL',
						    'placeholder' => 'http://'
						) );
						$homeTab->createOption( array(
						    'name' => 'Discovery',
						    'id' => 'discovery',
						    'type' => 'text',
						    'desc' => 'Enter the full URL',
						    'placeholder' => 'http://'
						) );
						$homeTab->createOption( array(
						    'name' => 'RAM',
						    'id' => 'ram',
						    'type' => 'text',
						    'desc' => 'Enter the full URL',
						    'placeholder' => 'http://'
						) );
						$homeTab->createOption( array(
						    'name' => 'Dis-Chem',
						    'id' => 'dischem',
						    'type' => 'text',
						    'desc' => 'Enter the full URL',
						    'placeholder' => 'http://'
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
