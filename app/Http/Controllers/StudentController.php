<?php

namespace App\Http\Controllers;

use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $students = Student::all();
        

        return view('index', compact('students'));
        
        




    }

    public function indexliste0()
    {
       $info_students = Student::where('filieres','=','informatique')->get();
       
       
        return view('indexliste0', compact('info_students'));
    }

    public function indexliste1()
    {
        $bureau_students = Student::where('filieres','=','Bureautique')->get();
       
       
        return view('indexliste1', compact('bureau_students'));
        
    }

     public function indexliste2()
    {
        $resource_students = Student::where('filieres','=','RH')->get();
       
       
        return view('indexliste2', compact('resource_students'));
        
    }

     public function indexliste3()
    {
        $mark_students = Student::where('filieres','=','Marketing')->get();
       
       
        return view('indexliste3', compact('mark_students'));
        
    }

     public function indexliste4()
    {
        $dev_students = Student::where('filieres','=','Developpement ')->get();
       
       
        return view('indexliste4', compact('dev_students'));
        
    }

    public function indexliste5()
    {
        $graph_students = Student::where('filieres','=','Infographie ')->get();
       
       
        return view('indexliste5', compact('graph_students'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $validateData = $request->validate([


            'name'=>'required|max:255',
            'email'=>'required|max:255',
            'phone'=>'required|max:255',
            'filieres'=>'required|max:255',
            'image'=>'required|image|mimes:jpg,jpeg,png,gif,svg',



        ]);
        $image = $request->file('image');
        $destinationPath = 'image/';
        $profileImage = date('YmdHis') .".".$image->getClientOriginalExtension();
        $image->move($destinationPath , $profileImage);
        $validateData['image'] = $profileImage;




        $students = Student::create($validateData);

        return redirect('/students');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student  $student){

        return view('show', compact('student'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function edit( $id){


         $student = Student::find($id);
        return view('edit', compact('student'));




    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function save(array $inputs)
    {
        return $this->student->create($inputs);
    }
    public function update(Student $student, Request  $request)
    {


        $request->validate([



            'name'=>'required|max:255',
            'email'=>'required|max:255',
            'phone'=>'required',
            'filieres'=>'required|max:255'


        ]);

            $input = $request->all();

       if( $image = $request->file('image')){
        $destinationPath = 'image/';
        $profileImage = date('YmdHis') .".".$image->getClientOriginalExtension();
        $image->move($destinationPath , $profileImage);
        $input['image'] = "$profileImage";

        }else{

            unset($input['image']);

        }

        $student->update($input);

        return redirect('/students');

    }
    /**'
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $student = Student::find($id);
        $student->delete(); // Easy right?

        return redirect('/students');

    }
}