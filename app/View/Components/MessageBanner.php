<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class MessageBanner extends Component
{
    public $msg;
    public $type;

    public function __construct($msg, $type)
    {
        $this->msg  = $msg;
        $this->type = $type;
    }

    public function render(): View|Closure|string
    {
        return view('components.message-banner');
    }
}
