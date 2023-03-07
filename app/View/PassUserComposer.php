<?php

namespace App\View;

use App\Models\User;
use Illuminate\View\View;
 
class PassUserComposer
{
    public $user;
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct()
    {
        $user = User::latest()->first()->toArray();
        $this->user = $user;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('user', $this->user);
    }
}
