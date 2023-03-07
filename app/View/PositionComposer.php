<?php

namespace App\View;

use App\Models\Position;
use Illuminate\View\View;

class PositionComposer
{
    public $positions ;
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct()
    {
        $positionList = Position::all();
        $this->positions = $positionList;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('positions', $this->positions);
    }
}
