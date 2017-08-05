<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class ModalEditController extends Controller
{
    public function get_modal_personal($id){
    	$edit = Profile::find($id);
    	return view('view_applicant.modals.personal_modal_edit')->withEdit($edit);
    }
}
