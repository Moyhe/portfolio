<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class VideoTutorialItem extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $videoId, public string $title, public string $description)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.video-tutorial-item');
    }
}
