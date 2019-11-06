<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Graduate;
use DB;
use App\Department;
use App\Course;
use App\Statuse;

class GraduateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $graduates = DB::table('graduates')
            ->leftjoin('courses','graduates.course_id','=','courses.id')   
            ->leftjoin('departments','graduates.department_id','=','departments.id')
            ->leftjoin('statuses','graduates.infor_status_id','=','statuses.id')
            ->get();

        // dd($graduates);
        return view('graduates.graduate_show')->with(['graduates'
            =>$graduates]);


          

        // querying from the database
        // $graduates = Graduate::where('id','=', $id)
        //     ->with('course_id')
        //     ->with('department_id')
        //     ->with('infor_status_id')
        //     ->with('course_id')
        //     ->get()
        //     ->first();
        //     dd($graduates);
        // //
        // return view('views.graduate')->with([''
        //     =>$graduate_show]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $graduates = DB::table('graduates')
            ->leftjoin('courses','graduates.course_id','=','courses.id')   
            ->leftjoin('departments','graduates.department_id','=','departments.id')
            ->leftjoin('statuses','graduates.infor_status_id','=','statuses.id')
            ->get();
            $courses = Course::all();
            $depts = Department::all(); 
            $statuses = Statuse::all();
        
        return view('graduates.graduate_create')->with(['graduates'=>$graduates,'statuses'=>$statuses ,'courses'=>$courses, 'depts'=>$depts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //
        $this->validate($request,[
            'first_name'=>['required','Min:2','Max:60'],
            'last_name'=>['required','Min:2','Max:60'],
            'student_id'=>['required',],
            'gender'=>['required','Min:2','Max:60'],
            'department_id'=>['required'],
            'graduate_date'=>['required'],
            'infor_status_id'=>['required'],
            'course_id'=>['required'],
            'address'=>['required','Min:5','Max:60'],
            'phone_number'=>['required','Min:5','Max:60'],

            
        ]);
        // dd($request);
        $graduates = Graduate::create([
            'first_name'=>$request->get('first_name'),
            'last_name'=>$request->get('last_name'),
            'student_id'=>$request->get('student_id'),
            'gender'=>$request->get('gender'),
            'phone_number'=>$request->get('phone_number'),
            'address'=>$request->get('address'),
            'course_id'=>$request->get('course_id'),
            'graduate_date'=>$request->get('graduate_date'),
            'department_id'=>$request->get('department_id'),
            'infor_status_id'=>$request->get('infor_status_id'),
            'updated_at'=>$request->get('updated_at'),

            
            
        ]);

        return redirect('graduates')->with('success','graduated successefully added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
