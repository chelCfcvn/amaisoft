<?php

namespace App\View;

use App\Models\Staff;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class StaffOfManagerComposer
{
    public $staffs;
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
                $staff = Staff::find($staff_id);
                if ($staff->position_id == '2') {
                    $staffs = Staff::getStaff($staff->department_id)->with('position', 'department')->get();
                    $this->staffs = $staffs;
                }
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
        $view->with('staffs', $this->staffs);
    }
}
