<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use PDF;

class studentController extends Controller
{
    
    public function index(Request $request)
    {
       //Search function
       $search = $request['search'] ?? "";
       if($search !=""){
           $students = student::where('name', 'LIKE', "%$search%")->orwhere('nic', 'LIKE', "%$search%")->get();

       }else{
           $students = student::all();
       }

       $data = compact('students', 'search');
       return view ('students.index')->with($data);
    }

    public function create()
    {
        return view('students.create');
    }

  
    public function store(Request $request)
    {
      //validation
      $request->validate([
             
        'name' => 'required|max:10|string',
        'address' => 'required',
        'gender' => 'required',
        'nic' => 'required|numeric',
        'mobile' => 'required|numeric',
        'photo' => 'required',
        

    ]);
        $requestData = $request->all();
        $fileName = time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public'); 
        $requestData["photo"] = '/storage/'.$path;
        student::create($requestData);
        return redirect('studentinfo')->with('status', 'Added Successfully!');  
    }

  
    public function show($id)
    {
        
        $student = student::find($id);
        return view('students.show')->with('students', $student);
    }

  
    public function edit($id)
    {
        $student = student::find($id);
        return view('students.edit', compact('student'))->with('students', $student);
    }

  
    public function update(Request $request, $id)
    {

        $student = student::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('studentinfo')->with('statusU', 'Updated Successfully!');  
    }

  
    public function destroy($id)
    {
        student::destroy($id);
        return redirect('studentinfo')->with('statusD', 'Deleted Successfully!');
    }

    public function exportpdf()
    {
        $users = student::get();

        $pdf = FacadePdf::loadView('students/pdf.user',[
            'users' => $users
        ]);
        return $pdf->download('Report.pdf');
    }

}
