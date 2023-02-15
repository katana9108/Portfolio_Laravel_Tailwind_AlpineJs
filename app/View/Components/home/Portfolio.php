<?php

namespace App\View\Components\home;

use Illuminate\Support\Arr;
use Illuminate\View\Component;

class Portfolio extends Component
{
    public array $tabs= [];
    public array $items= [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items=[
            [
                'category'=>['Laravel','php'],
                'title'=>'Create view package',
                'image'=>url('/images/create-view-package.png'),
                'github'=>url('https://github.com/katana9108/Laravel-CreateView-package'),
            ],
            [
                'category'=>['Laravel', 'Tailwind'],
                'title'=>'Laravel Bootcamp chirper',
                'image'=>url('/images/chirp-index.png'),
                'github'=>url('https://github.com/katana9108/Chirp')
            ],
            [
                'category'=>['Laravel', 'Tailwind', 'AlpineJs'],
                'title'=>'Fullstack laravel Build portfolio ',
                'image'=>url('/images/jey.png'),
                'github'=>url('link')
            ],
            [
                'category'=>['html5', 'Css3', 'Javascript'],
                'title'=>'Todo list with local storage',
                'image'=>url('/images/todo.PNG'),
                'github'=>url('https://katana9108.github.io/TODOLIST/')
            ],
            [
                'category'=>['html5', 'Css3', 'Javascript'],
                'title'=>'Tic Tac Toe game',
                'image'=>url('/images/tic.png'),
                'github'=>url('https://katana9108.github.io/TIC-TAC-TOE/')
            ],
            [
                'category'=>['html5', 'Css3', 'Javascript'],
                'title'=>'Digital Clock',
                'image'=>url('/images/digi.png'),
                'github'=>url('https://katana9108.github.io/DIGITAL-CLOCK/')
            ],
            [
                'category'=>['html5', 'Css3', 'Laravel'],
                'title'=>'Management system school',
                'image'=>url('/images/mana.png'),
                'github'=>url('https://github.com/katana9108/Management_students_System/tree/master')
            ],
            [
                'category'=>['html5', 'Css3', 'Laravel'],
                'title'=>'Multiplication APP',
                'image'=>url('/images/multi.jpg'),
                'github'=>url('https://katana9108.github.io/multiplication-app/')
            ],

        ];

        $this->tabs=array_unique(Arr::flatten(Arr::pluck($this->items,'category')));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portfolio');
    }
  }
