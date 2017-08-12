<?php

return [
	// set to false in production
	'displayErrorDetails' => env('APP_DEBUG'),
	'determineRouteBeforeAppMiddleware' => true,
	// Renderer settings
	'renderer'            => [
		'blade_template_path' => '/content', // String or array of multiple paths
		'blade_cache_path'    => '/cache', // Mandatory by default, though could probably turn caching off for development
	],
];
