<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegistrationVacancyController extends Controller
{
	public function registerVacancy(Request $request)
	{
		$validator = Validator::make($request->all(),
			array(
				'name' => 'required|alpha|min:2|max:190',
				'surname' => 'required|alpha|min:2|max:190',
                'middle_name' => 'required|alpha|min:2|max:190',
                'age' => 'required|numeric',
                'email' => 'required|email|max:255|min:4'
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
	}

    public function questionVacancy(Request $request)
    {
        $validator = Validator::make($request->all(),
            array(
                'name' => 'required|alpha|min:2|max:190',
                'contact' => 'required',
                'question' => 'required|min:10|max:255',
            )
        );
        if ($validator->fails()) {
            return response()->json([
                'response' => $validator->messages()
            ]);
        } else {
            return response()->json([
                'response' => 'Всьо є дуже файно'
            ]);
        }
    }

	public function callMe(Request $request)
	{
		$validator = Validator::make($request->all(),
			array(
				'your_name' => 'required|alpha|min:2|max:190',
				'your_phone' => 'required|numeric'
			)
		);
		if ($validator->fails()) {
			return response()->json([
				'response' => $validator->messages()
			]);
		} else {
			return response()->json([
				'response' => 'Всьо є дуже файно'
			]);
		}
	}

	public function addResume ()
	{
		$page = Page::where('slug', 'add-resume')->firstOrFail();
		return view('pages.add-resume', compact('page'));
	}
}
