


<?php namespace Bluschool\Teacher\Http\Requests;

use App\Http\Requests\Request;

class TeacherRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
            'teacherNo' => 'required',
            'teacherNameFirst'= > 'required',
            'teacherNameLast' => 'required',
            'gender' => 'required',
            'teacherDateOfBirth' => 'required',
            'department' => 'required',
            'qualification' => 'required',
            'experienceYear' => 'required',
            'experienceMonth' => 'required',
            'homeAddressLine1' => 'required',
            'homeCity' => 'required',
            'homeState' => 'required',
            'homeCountry' => 'required',
            'homePin' => 'required',
            'mobilePhone' => 'required',
            'email' => 'required'
		];
	}
}
