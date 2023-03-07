<?php

namespace App\View;

use App\Models\Staff;
use Illuminate\View\View;

class StaffComposer
{
    public $staffs ;
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct()
    {
        $staffList = Staff::with('position', 'department')->get();
        $this->staffs = $staffList;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('staffs', $this->staffs);
    }
}
