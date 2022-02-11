<?php

namespace App\Http\Controllers;
use App\Models\Employee;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\Empty_;

class PostController extends Controller
{
public function index(){
return view('insert');
}
public function store(Request $request){
$post=new Employee;
$post->post_title=$request->get('title');
$post->post_author=$request->get('author');
$post->save();
echo"data sent success";


    }
    public function show(Employee $employee){
$employees=Employee::all();
return view('show',['employees'=>$employees]);

    }
    public function destroy(Employee $employee,$id){
        $employee=Employee::find($id);
        $employee->delete();
return redirect('show');


    }
    public function edit(Employee $employee,$id){
        $employees=Employee::find($id);
        return view('edit',['employees'=>$employees]);

    }
    public function update(Request $request,Employee $employee,$id){
        $employees=Employee::find($id);
        $employees->post_title=$request->get('title');
        $employees->post_author=$request->get('author');
$employees->save();
        return redirect('show');

    }
}
