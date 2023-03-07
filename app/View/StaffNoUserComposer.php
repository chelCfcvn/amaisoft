<?php

namespace App\View;

use App\Models\Staff;
use Illuminate\View\View;

class StaffNoUserComposer
{
    public $staffNoUsers ;
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct()
    {
        $staffNoUsers = Staff::whereDoesntHave('user')->get();
        $this->staffNoUsers = $staffNoUsers;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('staffNoUsers', $this->staffNoUsers);
    }
}
