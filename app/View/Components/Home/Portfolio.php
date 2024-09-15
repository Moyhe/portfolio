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
                'category' => ['Laravel', 'tailwindcss', 'Docker'],
                'title' => 'Ecommerce with Laravel, Tailwindcss, paymob payment , alpine js and docker',
                'image' => url('/images/ecommerce.png'),
                'github' => 'https://github.com/Moyhe/Ecommerce_Website'
            ],
            [
                'category' => ['PHP', "Docker"],
                'title' => 'Resturant management system built wiht Bootstrap, Dokcer, MVC PHP,  Mysql',
                'image' => url('/images/resturant.png'),
                'github' => 'https://github.com/Moyhe/Restaurant_Management_System'
            ],
            [
                'category' => ['Laravel', "tailwindcss"],
                'title' => 'Blog website built with laravel, tailwindcss, alpinejs, mysql, with comment and like systems',
                'image' => url('/images/blog.png'),
                'github' => 'https://github.com/Moyhe/Enhanced_Blog_Wbesite'
            ],
            [
                'category' => ['Laravel'],
                'title' => 'full authentication system api made with laravel and jwt',
                'image' => url('/images/api.png'),
                'github' => 'https://github.com/Moyhe/Auth_user_API'
            ],
            [
                'category' => ['Laravel', 'tailwindcss', "Docker"],
                'title' => 'Movie website with laravel, tailwindcss',
                'image' => url('/images/movie.png'),
                'github' => 'https://github.com/Moyhe/Movies_App'
            ],
            [
                'category' => ['React', "typescript"],
                'title' => 'App Game built with react, type script, axios for fetching information',
                'image' => url('/images/game.png'),
                'github' => 'https://github.com/Moyhe/game-app'
            ],
            [
                'category' => ['Laravel', 'React', "Inertia", 'tailwindcss', 'Docker', "typescript"],
                'title' => 'Project Management built with laravel, inertia, tailwindcss, docker',
                'image' => url('/images/management.png'),
                'github' =>  'https://github.com/Moyhe/project_management'
            ],
            [
                'category' => ['Laravel', 'React', "Inertia", 'tailwindcss', 'Docker', "typescript"],
                'title' => 'software as a service built laravel, inertia, tailwindcss, docker, stripe payment ',
                'image' => url('/images/software.png'),
                'github' =>  'https://github.com/Moyhe/Software_As_A_Service'
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
