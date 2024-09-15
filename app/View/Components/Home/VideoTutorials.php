<?php

namespace App\View\Components\home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class VideoTutorials extends Component
{

    public array $videoTutorials = [];

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->videoTutorials = [
            [
                'videoId' => 'w_W0zuFmQTU',
                'title' => 'Laravel 10 PHP framework for web development',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s.'
            ],
            [
                'videoId' => 'SOTamWNgDKc',
                'title' => 'AWS Certified Cloud Practitioner Certification Course (CLF-C01)',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s'
            ],
            [
                'videoId' => 'kF0UBL1eHeQ',
                'title' => 'WordPress Content Manage System',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s.'
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.Home.video-tutorials');
    }
}
