<?php

namespace App\View\Components\home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Arr;

class Portfolio extends Component
{

    public array $items = [];

    public array $tabs = [];

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['Laravel', 'tailwindcss'],
                'title' => 'Ecommerce with Laravel, Tailwindcss, paymob payment , alpine js and docker',
                'image' => url('/images/1.jpg'),
                'github' => 'https://github.com/Moyhe/Laravel_Projects/tree/Blogging'
            ],
            [
                'category' => ['PHP', "Bootstrap"],
                'title' => 'Resturant management system built wiht Bootstrap, Dokcer, MVC PHP,  Mysql',
                'image' => url('/images/2.jpg'),
                'github' => 'https://github.com/Moyhe/PHP_Projects/tree/ecommerce'
            ],
            [
                'category' => ['PHP', "Bootstrap"],
                'title' => 'Content management system like wordPress built with Bootstrap 5 , php and Mysql',
                'image' => url('/images/2.jpg'),
                'github' => 'https://github.com/Moyhe/PHP_Projects/tree/ecommerce'
            ],
            [
                'category' => ['Laravel'],
                'title' => 'REST API with Laravel 9 and Sanctum',
                'image' => url('/images/3.png'),
                'github' => 'https://github.com/Moyhe/Laravel_API/tree/auth_API'
            ],
            [
                'category' => ['Laravel', 'tailwindcss'],
                'title' => 'Movie website with laravel, tailwindcss',
                'image' => url('/images/3.png'),
                'github' => 'https://github.com/Moyhe/Laravel_API/tree/auth_API'
            ],
            [
                'category' => ['React', "typescript"],
                'title' => 'App Game built with react, type script, axios for fetching information',
                'image' => url('/images/touka2.jpg'),
                'github' => 'https://github.com/Moyhe/Front_End/tree/education'
            ],
            [
                'category' => ['Laravel', 'React', "Inertia", 'tailwindcss'],
                'title' => 'Project Management built with laravel, inertia, tailwindcss, docker',
                'image' => url('/images/4.jpg'),
                'github' =>  'https://github.com/Moyhe/Laravel_Angular_Projects/tree/main'
            ],
            [
                'category' => ['Laravel', 'React', "Inertia", 'tailwindcss'],
                'title' => 'software as a service built laravel, inertia, tailwindcss, docker, stripe payment ',
                'image' => url('/images/4.jpg'),
                'github' =>  'https://github.com/Moyhe/Laravel_Angular_Projects/tree/main'
            ],
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.Home.portfolio');
    }
}
