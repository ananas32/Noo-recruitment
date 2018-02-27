<?php

namespace App\Http\Controllers;

use App\Page;
use App\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegistrationVacancyController extends Controller
{
	public function registerVacancy(Request $request)
	{
		$validator = Validator::make($request->all(),
			array(git s
				'name' => 'required|alpha|min:2|max:190',
				'surname' => 'required|alpha|min:2|max:190',
                'middle_name' => 'required|alpha|min:2|max:190',
                'age' => 'required|numeric',
                'email' => 'required|email|max:255|min:4'
			)
		);

        if ($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator->errors())->with('danger', 'err');
        } else {
			$folder = 'vacancies/';

			if (!Storage::disk('public')->exists($folder)) {
				Storage::disk('public')->makeDirectory($folder);
			}

			$path = $folder;
			$avatarName = $ProviderUser->name.'_'.$ProviderUser->id.'.jpg';
			$path.=$avatarName;
			File::make($pathImage)->save(Storage::disk('public')->path($path));
			[{"download_link":"companies\/February2018\/vaH5LMIIzOygY0F9kp1l.sql","original_name":"Dump20180221.sql"}]
			Resume::create([
				'work_id' => $request->work_id,
				"name" => $request->name,
				"surname" => $request->surname,
				"middle_name" => $request->middle_name,
				"age" => $request->age,
				"email" => $request->email,
				"drive_license" => $request->drive_license,
				"level_education" => $request->level_education,
				"qualification" => $request->qualification,
				"experience" => $request->experience,
				"en" => $request->en,
				"de" => $request->de,
				"ve" => $request->ve,
				"other_languages" => $request->other_language,
				"money" => $request->money
			]);
			return redirect()->back()->with('success', 'success');
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

	public function addResume (Request $request)
	{
		$param = $request->all();
		$page = Page::where('slug', 'add-resume')->firstOrFail();
		$data = [
			'page' => $page
		];

		$data = array_merge($data, $param);

		return view('pages.add-resume', $data);
	}
}
