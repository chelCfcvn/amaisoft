<?php

namespace App\View;

use App\Models\User;
use Illuminate\View\View;

class UserComposer
{
    public $users ;
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct()
    {
        $userList = User::with('staff','role')->get();
        $this->users = $userList;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('users', $this->users);
    }
}
