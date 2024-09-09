<?php

namespace App\View\Components;

use Illuminate\View\Component;

class RadioGroup extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $name,
        public array $options
    )
    {
        //
    }

    public function optionsWithLabels(): array
    {
        return array_is_list($this->options) ?
            array_combine($this->options, $this->options)
            : $this->options;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.radio-group');
    }
}
