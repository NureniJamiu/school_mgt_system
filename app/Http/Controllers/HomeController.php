<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;
use App\Models\Guardian;
use App\Models\Class1;
use App\Models\Class2;
use App\Models\Class3;
use App\Models\Class4;
use App\Models\Class5;
use App\Models\Address;

class HomeController extends Controller
{
    //

    public function index() {
        return view("landing.home");
    }

    
    public function test() {
        return view("dashboard.test");
    }

    public function login() {
        return view("auth.login");
    }

    public function showStudents() {
        $data = student::all();

        return view("dashboard.students", compact('data'));
    }

    public function registerView(Request $request) {
       
        return view("dashboard.register");
    }

    public function store(Request $request) {

        $student = new student;
        $guardian = new guardian;
        $address = new address;

        $user_class = $request->class;
        switch ($user_class) {
            case '1':
                $class = new Class1;
                break;
            case '2':
                $class = new Class2;
                break;
            case '3':
                $class = new Class3;
                break;
            case '4':
                $class = new Class4;
                break;
            case '5':
                $class = new Class5;
                break;
            default:
                return redirect()->back();
        }


        $student->firstname = $request->firstname;
        $student->lastname = $request->lastname;
        $student->othername = $request->othername;
        $student->hobby = $request->hobby;
        $student->gender = $request->gender;
        $student->dob = $request->dob;
        $student->tel = $request->tel;

        // store the image uploaded in a variable called image
        $image = $request->img;
        if ($image) {
            // save the image name as the current time followed by the image extension
            $imageName = time().'.'.$image->getClientOriginalExtension();

            // save image in a folder called "student"
            $request->img->move('student', $imageName);

            // write image to db
            $student->file = $imageName;
        }

        $student->save();

        $student_id = $student->id;


        // ADDRESS TABLE

        $address->address = $request->address;
        $address->city = $request->city;
        $address->state = $request->state;
        $address->country = $request->country;

        $address->student_id = $student_id;

        $address->save();

        $address_id = $address->id;

        // GUARDIAN TABLE

        $guardian->firstname = $request->parent_firstname;
        $guardian->lastname = $request->parent_lastname;
        $guardian->email = $request->parent_email;
        $guardian->occupation = $request->parent_occupation;
        $guardian->tel = $request->parent_tel;

        $guardian->student_id = $student_id;

        $guardian->save();

        $guardian_id = $guardian->id;
        // CLASS TABLE 

        $class->student_name = $request->firstname." ".$request->lastname;
        $class->student_id = $student_id;

        $class->save();

        $class_id = $class->id;


        $student->class_id = $class_id;
        $student->address_id = $address_id;
        $student->guardian_id = $guardian_id;
        $student->save();

        return redirect()->route('/dashboard/students')->with('success', 'Student created successfully!');
    }

    public function delete($id) {
        $data = student::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function search(Request $request) {
        $search = $request->search;

        $data = student::where("name", "Like", "%".$search."%")->orWhere("email", "Like", "%".$search."%")->get();

        return view('display', compact('data'));
    }

    public function update_view($id) {
        $student = student::find($id);

        return view('dashboard.update', compact('student'));
    }

    public function update(Request $request, $id) {
        $student = student::find($id);

        $student->name = $request->name;
        $student->email = $request->email;

        $image = $request->file;

        if ($image) {
            $imageName = time().".".$image->getClientOriginalExtension();

            $request->file->move('student', $imageName);

            $student->image = $imageName;
        }

        $student->save();

        return redirect()->route('/dashboard/students')->with('success', 'Updated successfully!');
    }
}
