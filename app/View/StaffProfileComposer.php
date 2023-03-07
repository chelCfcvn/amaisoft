<?php

namespace App\View;

use App\Models\Staff;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class StaffProfileComposer
{
    public $profile;
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct()
    {
        if (Auth::check()) {
            $user = auth()->user()->role_id;
            if ($user == 2) {
                $staff_id = auth()->user()->staff_id;
                $profile = Staff::find($staff_id);
                $this->profile = $profile;
            }
        }
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('profile', $this->profile);
    }
}
