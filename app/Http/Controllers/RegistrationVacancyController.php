<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegistrationVacancyController extends Controller
{
	public function registerVacancy(Request $request)
	{
		$validator = Validator::make($request->all(),
			array(
				'name' => 'required|alpha|min:2|max:255',
				'surname' => 'required|alpha|min:2|max:255',
			)
		);
		if ($validator->fails()) {
			return response()->json([
				'response' => $validator->messages()
			]);
		} else {
			return response()->json([
				'response' => 'zbs'
			]);
		}

//				'email' => 'required|email|max:255|min:4',
//				'message' => 'required|min:10'
	}
}
