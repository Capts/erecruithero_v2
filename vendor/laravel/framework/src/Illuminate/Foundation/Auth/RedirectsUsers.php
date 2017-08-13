<?php

namespace Illuminate\Foundation\Auth;
use Auth;
trait RedirectsUsers
{
    /**
     * Get the post register / login redirect path.
     *
     * @return string
     */
    public function redirectPath()
    {
        if (method_exists($this, 'redirectTo')) {
            return $this->redirectTo();
        }
        if (Auth::user()->roles->first()->name == 'applicant') {
            # code...
            return property_exists($this, 'redirectTo') ? $this->redirectTo : '/';
        }
    }
}
