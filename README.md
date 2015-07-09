# Sangar-Slider-Example-Template

Under construction

# How-To

1. Clone this repo inside your theme's folder
2. Copy and paste this filter hooks inside your theme's functions.php

```
add_filter('sangar_slider_templates','zea');
function zea($args)
{
	$dir_path = get_template_directory( __FILE__ );

	// IMac Template
	$args['zea-template'] = array(
		'name' => 'zea template',		
		'location' => $dir_path . 'sangar-slider-templates/my-custom-template/template.php',
		'themesLocation' => $dir_path . 'sangar-slider-templates/themes',
		'themesAvailable' => array('dark'),
		'config' => array(
			'animation' => 'horizontal-slide',
			'onReset' => 'function(width,height){ sslider_imac_onReset(width,height) }'
		)
	);

	return $args;
}
```
