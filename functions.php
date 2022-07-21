<?php 
add_theme_support('about_actions');

add_theme_support( 'post-thumbnails' );

add_theme_support( 'widgets' );


function wpb_custom_new_menu() {
  register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

function add_theme_css_and_js(){
	wp_enqueue_style('main-css', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'add_theme_css_and_js');


add_action('customize_register', 'about_actions');

function about_actions($wp_customize){

    $wp_customize->add_section('About-us', [
        'title' => 'About-us', 
		'priority' => 1,
    ]);
	
		$wp_customize->add_setting('img_add_aboutus', [
			'default' => get_bloginfo('template_url').'/assets/images/1.png',
		]);
		
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'img_add_aboutus', [
			'section' => 'About-us',
			'label' => 'Nouvelle image'
		]));

		$wp_customize->add_setting('titre_aboutus', [
			'default' => 'About us',
		]);
		
		$wp_customize->add_control('titre_aboutus', [
			'section' => 'About-us',
			'label' => 'Nouvau titre',
			'priority' => 1,

		]);


		$wp_customize->add_setting('titre_home', [
			'default' => 'A really professional structure for all your events!',
		]);
		
		$wp_customize->add_control('titre_home', [
			'section' => 'About-us',
			'label' => 'Nouvau titre',
			'priority' => 1,

		]);

		$wp_customize->add_setting('description_aboutus', [
			'default' => 'Specializing in the creation of exceptional events for private and corporate clients, we design, plan and manage every project from conception to execution.',
		]);
		
		$wp_customize->add_control('description_aboutus', [
			'section' => 'About-us',
			'label' => 'Nouvelle description',
			'priority' => 2,
			'type'=> 'textarea'

		]);
	
}


add_action('customize_register', 'missions_actions');

function missions_actions($wp_customize){

    $wp_customize->add_section('Missions', [
        'title' => 'Missions', 
		'priority' => 1,
    ]);
	
		$wp_customize->add_setting('img_add_missions', [
			'default' => get_bloginfo('template_url').'/assets/images/2.png',
		]);
		
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'img_add_missions', [
			'section' => 'Missions',
			'label' => 'Nouvelle image'
		]));

		$wp_customize->add_setting('titre_missions1', [
			'default' => 'Who are we?',
		]);
		
		$wp_customize->add_control('titre_missions1', [
			'section' => 'Missions',
			'label' => 'Nouvau titre',
			'priority' => 1,
		]);

		$wp_customize->add_setting('description_missions1', [
			'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu convallis elit, at convallis magna.',
		]);
		
		$wp_customize->add_control('description_missions1', [
			'section' => 'Missions',
			'label' => 'Nouvelle description',
			'priority' => 2,
			'type'=> 'textarea'
		]);

		$wp_customize->add_setting('titre_missions2', [
			'default' => 'Our vision',
		]);
		
		$wp_customize->add_control('titre_missions2', [
			'section' => 'Missions',
			'label' => 'Nouvau titre',
			'priority' => 3,
		]);

		$wp_customize->add_setting('description_missions2', [
			'default' => ' Nullam faucibus interdum massa. Duis eget leo mattis, pulvinar nisi et, consequat lectus. Suspendisse commodo magna orci, id luctus risus porta pharetra. Fusce vehicula aliquet urna non ultricies.',
		]);
		
		$wp_customize->add_control('description_missions2', [
			'section' => 'Missions',
			'label' => 'Nouvelle description',
			'priority' => 4,
			'type'=> 'textarea'
		]);

		$wp_customize->add_setting('titre_missions3', [
			'default' => 'Our mission',
		]);
		
		$wp_customize->add_control('titre_missions3', [
			'section' => 'Missions',
			'label' => 'Nouvau titre',
			'priority' => 5,
		]);

		$wp_customize->add_setting('description_missions3', [
			'default' => 'Vivamus et viverra neque, ut pharetra ipsum. Aliquam eget consequat libero, quis cursus tortor. Aliquam suscipit eros sit amet velit malesuada dapibus. Fusce in vehicula tellus. Donec quis lorem ut magna tincidunt egestas. ',
		]);
		
		$wp_customize->add_control('description_missions3', [
			'section' => 'Missions',
			'label' => 'Nouvelle description',
			'priority' => 6,
			'type'=> 'textarea'
		]);
	
}

add_action('customize_register', 'service_actions');


function service_actions($wp_customize){

    $wp_customize->add_section('Services', [
        'title' => 'Services', 
		'priority' => 1,
    ]);
	
		$wp_customize->add_setting('img_add_services1', [
			'default' => get_bloginfo('template_url').'/assets/images/3.png',
		]);
		
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'img_add_services1', [
			'section' => 'Services',
			'label' => 'Nouvelle image'
		]));

		$wp_customize->add_setting('img_add_services2', [
			'default' => get_bloginfo('template_url').'/assets/images/5.png',
		]);
		
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'img_add_services2', [
			'section' => 'Services',
			'label' => 'Nouvelle image'
		]));


		$wp_customize->add_setting('img_add_services3', [
			'default' => get_bloginfo('template_url').'/assets/images/12.png',
		]);
		
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'img_add_services3', [
			'section' => 'Services',
			'label' => 'Nouvelle image'
		]));


		$wp_customize->add_setting('titre_services1', [
			'default' => 'Our Services',
		]);
		
		$wp_customize->add_control('titre_services1', [
			'section' => 'Services',
			'label' => 'Nouvau titre',
			'priority' => 1,
		]);

		$wp_customize->add_setting('titre_services2', [
			'default' => 'Private Parties',
		]);
		
		$wp_customize->add_control('titre_services2', [
			'section' => 'Services',
			'label' => 'Nouvau titre',
			'priority' => 1,
		]);
	
}


add_action('customize_register', 'partners_actions');


function partners_actions($wp_customize){

    $wp_customize->add_section('Partners', [
        'title' => 'Partners', 
		'priority' => 1,
    ]);

		$wp_customize->add_setting('titre_partners', [
			'default' => 'Our Partners',
		]);
		
		$wp_customize->add_control('titre_partners', [
			'section' => 'Partners',
			'label' => 'Nouvau titre',
			'priority' => 1,
		]);
	

		$wp_customize->add_setting('svg_add_partners1', [
			'default' => get_bloginfo('template_url').'/assets/svg/partner-1.svg',
		]);
		
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'svg_add_partners1', [
			'section' => 'Partners',
			'label' => 'Nouvelle image'
		]));

		$wp_customize->add_setting('svg_add_partners2', [
			'default' => get_bloginfo('template_url').'/assets/svg/partner-2.svg',
		]);
		
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'svg_add_partners2', [
			'section' => 'Partners',
			'label' => 'Nouvelle image'
		]));

		$wp_customize->add_setting('svg_add_partners3', [
			'default' => get_bloginfo('template_url').'/assets/svg/partner-3.svg',
		]);
		
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'svg_add_partners3', [
			'section' => 'Partners',
			'label' => 'Nouvelle image'
		]));

		$wp_customize->add_setting('svg_add_partners4', [
			'default' => get_bloginfo('template_url').'/assets/svg/partner-4.svg',
		]);
		
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'svg_add_partners4', [
			'section' => 'Partners',
			'label' => 'Nouvelle image'
		]));

		$wp_customize->add_setting('svg_add_partners5', [
			'default' => get_bloginfo('template_url').'/assets/svg/partner-5.svg',
		]);
		
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'svg_add_partners5', [
			'section' => 'Partners',
			'label' => 'Nouvelle image'
		]));

		$wp_customize->add_setting('svg_add_partners6', [
			'default' => get_bloginfo('template_url').'/assets/svg/partner-6.svg',
		]);
		
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'svg_add_partners6', [
			'section' => 'Partners',
			'label' => 'Nouvelle image'
		]));
	
}




add_action('customize_register', 'about_us_section5_actions');


function about_us_section5_actions($wp_customize){

    $wp_customize->add_section('about_us_section5', [
        'title' => 'about_us_section5', 
		'priority' => 5,
    ]);

		$wp_customize->add_setting('titre_about_us_section51', [
			'default' => 'About us.',
		]);
		
		$wp_customize->add_control('titre_about_us_section51', [
			'section' => 'about_us_section5',
			'label' => 'Nouvau titre',
			'priority' => 1,
		]);

		$wp_customize->add_setting('titre_about_us_section52', [
			'default' => 'Sky’s the limit',
		]);
		
		$wp_customize->add_control('titre_about_us_section52', [
			'section' => 'about_us_section5',
			'label' => 'Nouvau titre',
			'priority' => 2,
		]);
	

		$wp_customize->add_setting('img_add_about_us_section5', [
			'default' => get_bloginfo('template_url').'/assets/images/4.png',
		]);
		
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'img_add_about_us_section5', [
			'section' => 'about_us_section5',
			'label' => 'Nouvelle image'
		]));


		$wp_customize->add_setting('description_about_us_section5', [
			'default' => 'Specializing in the creation of exceptional events for private and corporate clients, we design, plan and manage every project from conception to execution. ',
		]);
		
		$wp_customize->add_control('description_about_us_section5', [
			'section' => 'about_us_section5',
			'label' => 'Nouvelle description',
			'priority' => 3,
			'type'=> 'textarea'

		]);
	

	
	
}




add_action('customize_register', 'team_actions');


function team_actions($wp_customize){

    $wp_customize->add_section('Team', [
        'title' => 'Team', 
		'priority' => 5,
    ]);

	$wp_customize->add_setting('titre_team', [
		'default' => 'Our Team',
	]);
	
	$wp_customize->add_control('titre_person1', [
		'section' => 'Team',
		'label' => 'Nouvau titre',
		'priority' => 1,
	]);

		$wp_customize->add_setting('titre_person1', [
			'default' => 'Sales Manager',
		]);
		
		$wp_customize->add_control('titre_person1', [
			'section' => 'Team',
			'label' => 'Nouvau titre',
			'priority' => 1,
		]);

		$wp_customize->add_setting('img_add_person1', [
			'default' => get_bloginfo('template_url').'/assets/images/5.png',
		]);
		
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'img_add_person1', [
			'section' => 'Team',
			'label' => 'Nouvelle image'
		]));

		$wp_customize->add_setting('description_person1', [
			'default' => '+33 1 53 31 25 23
			sales@company.com ',
		]);
		
		$wp_customize->add_control('description_person1', [
			'section' => 'Team',
			'label' => 'Nouvelle description',
			'priority' => 3,
			'type'=> 'textarea'

		]);

		$wp_customize->add_setting('titre_person2', [
			'default' => 'Event planner.',
		]);
		
		$wp_customize->add_control('titre_person2', [
			'section' => 'Team',
			'label' => 'Nouvau titre',
			'priority' => 1,
		]);

		$wp_customize->add_setting('img_add_person2', [
			'default' => get_bloginfo('template_url').'/assets/images/6.png',
		]);
		
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'img_add_person2', [
			'section' => 'Team',
			'label' => 'Nouvelle image'
		]));

		$wp_customize->add_setting('description_person2', [
			'default' => '+33 1 53 31 25 24
			plan@company.com',
		]);
		
		$wp_customize->add_control('description_person2', [
			'section' => 'Team',
			'label' => 'Nouvelle description',
			'priority' => 3,
			'type'=> 'textarea'

		]);

		$wp_customize->add_setting('titre_person3', [
			'default' => 'Designer',
		]);
		
		$wp_customize->add_control('titre_person3', [
			'section' => 'Team',
			'label' => 'Nouvau titre',
			'priority' => 1,
		]);

		$wp_customize->add_setting('img_add_person3', [
			'default' => get_bloginfo('template_url').'/assets/images/7.png',
		]);
		
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'img_add_person3', [
			'section' => 'Team',
			'label' => 'Nouvelle image'
		]));

		$wp_customize->add_setting('description_person3', [
			'default' => '+33 1 53 31 25 20
			design@company.com',
		]);
		
		$wp_customize->add_control('description_person3', [
			'section' => 'Team',
			'label' => 'Nouvelle description',
			'priority' => 3,
			'type'=> 'textarea'

		]);

		$wp_customize->add_setting('titre_person4', [
			'default' => 'CEO',
		]);
		
		$wp_customize->add_control('titre_person4', [
			'section' => 'Team',
			'label' => 'Nouvau titre',
			'priority' => 1,
		]);

		$wp_customize->add_setting('img_add_person4', [
			'default' => get_bloginfo('template_url').'/assets/images/8.png',
		]);
		
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'img_add_person4', [
			'section' => 'Team',
			'label' => 'Nouvelle image'
		]));

		$wp_customize->add_setting('description_person4', [
			'default' => '+33 1 53 31 25 25
			ceo@company.com ',
		]);
		
		$wp_customize->add_control('description_person4', [
			'section' => 'Team',
			'label' => 'Nouvelle description',
			'priority' => 3,
			'type'=> 'textarea'

		]);

}


add_action('customize_register', 'parties_actions');


function parties_actions($wp_customize){

    $wp_customize->add_section('Parties', [
        'title' => 'Parties', 
		'priority' => 5,
    ]);


		$wp_customize->add_setting('titre_parties', [
			'default' => 'Corp. Parties',
		]);
		
		$wp_customize->add_control('titre_parties', [
			'section' => 'Parties',
			'label' => 'Nouvau titre',
			'priority' => 1,
		]);

		$wp_customize->add_setting('img_add_parties', [
			'default' => get_bloginfo('template_url').'/assets/images/9.png',
		]);
		
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'img_add_parties', [
			'section' => 'Parties',
			'label' => 'Nouvelle image'
		]));

		$wp_customize->add_setting('description_parties', [
			'default' => 'Specializing in the creation of exceptional events for private and corporate clients, we design, plan and manage every project from conception to execution. ',
		]);
		
		$wp_customize->add_control('description_parties', [
			'section' => 'Parties',
			'label' => 'Nouvelle description',
			'priority' => 3,
			'type'=> 'textarea'

		]);

	}

	add_action('customize_register', 'contact_actions');


function contact_actions($wp_customize){

    $wp_customize->add_section('Contact', [
        'title' => 'Contact', 
		'priority' => 5,
    ]);

		$wp_customize->add_setting('titre_contact', [
			'default' => 'Contacts.',
		]);
		
		$wp_customize->add_control('titre_contact', [
			'section' => 'Contact',
			'label' => 'Nouvau titre',
			'priority' => 1,
		]);

		$wp_customize->add_setting('description_contact', [
			'default' => 'A desire for a big big party or a very select congress? Contact us. ',
		]);
		
		$wp_customize->add_control('description_contact', [
			'section' => 'Contact',
			'label' => 'Nouvelle description',
			'priority' => 3,
			'type'=> 'textarea'

		]);

		$wp_customize->add_setting('img_add_contact', [
			'default' => get_bloginfo('template_url').'/assets/images/10.png',
		]);
		
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'img_add_contact', [
			'section' => 'Contact',
			'label' => 'Nouvelle image'
		]));


		$wp_customize->add_setting('titre_contact1', [
			'default' => 'Location.',
		]);
		
		$wp_customize->add_control('titre_contact1', [
			'section' => 'Contact',
			'label' => 'Nouvau titre',
			'priority' => 1,
		]);

		$wp_customize->add_setting('description_contact1', [
			'default' => '242 Rue du Faubourg Saint-Antoine 75020 Paris FRANCE',
		]);
		
		$wp_customize->add_control('description_contact1', [
			'section' => 'Contact',
			'label' => 'Nouvelle description',
			'priority' => 3,
			'type'=> 'textarea'

		]);

		$wp_customize->add_setting('titre_contact2', [
			'default' => 'Manager.',
		]);
		
		$wp_customize->add_control('titre_contact2', [
			'section' => 'Contact',
			'label' => 'Nouvau titre',
			'priority' => 1,
		]);

		$wp_customize->add_setting('description_contact2', [
			'default' => '+33 1 53 31 25 23 info@company.com. ',
		]);
		
		$wp_customize->add_control('description_contact2', [
			'section' => 'Contact',
			'label' => 'Nouvelle description',
			'priority' => 3,
			'type'=> 'textarea'

		]);

		$wp_customize->add_setting('titre_contact3', [
			'default' => 'CEO.',
		]);
		
		$wp_customize->add_control('titre_contact3', [
			'section' => 'Contact',
			'label' => 'Nouvau titre',
			'priority' => 1,
		]);

		$wp_customize->add_setting('description_contact3', [
			'default' => '+33 1 53 31 25 25 ceo@company.com ',
		]);
		
		$wp_customize->add_control('description_contact3', [
			'section' => 'Contact',
			'label' => 'Nouvelle description',
			'priority' => 3,
			'type'=> 'textarea'
		]);



	}


	

	
	
