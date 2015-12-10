<?php namespace Bluschool\Teacher\Http\Controllers;


use Bluschool\Teacher\Http\Requests\TeacherRequest;
use Bluschool\Teacher\Model\Teacher;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use Laracasts\Flash\Flash;
use Orchestra\Foundation\Http\Controllers\AdminController;

class TeacherController extends AdminController {

    public function __construct()
    {
//        $this->middleware('registration');
        $this->middleware('teacher');
    }

    protected function setupFilters()
    {
        $this->beforeFilter('control.csrf', ['only' => 'delete']);
    }

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Teacher $teacher)
	{
        return view('bluschool/teacher::teacher', compact('teacher'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('bluschool/teacher::edit');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(TeacherRequest $request )
	{
        try {
            $file = Input::file('file1');
            $filename1 = 'teacher_'.uniqid() . '.jpg';
            $destinationPath = 'images/teacher';
            $itemImage = Image::make($file)->fit(350, 450);
            $itemImage->save($destinationPath . '/' . $filename1);
            $request['photo'] = $destinationPath.'/'.$filename1;

            $attachFile = Input::file('file2');
            $filename2 = 'teacher_attach_'.uniqid() . '.jpg';
            $destinationPathAttach = 'images/teacher';
            $itemAttachment = Image::make($attachFile)->fit(450, 350);

            $itemAttachment->save($destinationPathAttach . '/' . $filename2);
            $request['attachment'] = $destinationPathAttach.'/'.$filename2;

            $teacher = Teacher::create($request->all());

        } catch (Exception $e) {
            Flash::error('Unable to Save');
            return $this->redirect(handles('bluschool/teacher::teacher'));
        }
        Flash::success($teacher->name.' Saved Successfully');
        return $this->redirect(handles('bluschool/teacher::member'));

    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
