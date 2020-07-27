<?php namespace VimirLab\Testimonials;

use Event;
use Backend;
use Cms\Classes\Controller;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
	public function pluginDetails()
	{
		return [
			'name'        => 'Quote Tokoh',
            'description' => 'Quote Tokoh Slider.',
            'author'      => 'VimirLab',
            'icon'        => 'icon-thumbs-o-up'
		];
	}
	
	public function registerComponents()
	{
		return [
			'VimirLab\Testimonials\Components\Testimonials' => 'testimonials',
			'VimirLab\Testimonials\Components\Slider' => 'slider'
		];
	}

    public function registerPermissions()
    {
        return [
            'vimirlab.testimonials.testimonials' => [
                'label' => 'Manage the testimonials',
                'tab' => 'Testimonials',
            ],
        ];
    }
		
	public function registerNavigation()
    {
        return [
            'testimonials' => [
                'label'       => 'Quote Tokoh',
                'url'         => Backend::url('vimirlab/testimonials/testimonials'),
                'icon'        => 'icon-thumbs-o-up',
				'iconSvg'     => 'plugins/vimirlab/testimonials/assets/images/vimirlab_testimonial.svg',
                'permissions' => ['vimirlab.testimonials.*'],
                'order'       => 500,
                
                'sideMenu'    => [
                    'testimonials'  => [
                        'label'       => 'Quote Tokoh',
                        'url'         => Backend::url('vimirlab/testimonials/testimonials'),
                        'icon'        => 'icon-list',
                        'permissions' => ['vimirlab.testimonials.testimonials'],
                    ],
                ]
            ]
        ];
    }
}