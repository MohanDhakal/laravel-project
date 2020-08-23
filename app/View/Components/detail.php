<?php

namespace App\View\Components;

use Illuminate\View\Component;

class detail extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $imageUri;
    public $title;
    public $content;
    public function __construct($uri, $title, $content)
    {
        $this->imageUri = $uri;
        $this->title = $title;
        $this->content = $content;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.detail');
    }
}
