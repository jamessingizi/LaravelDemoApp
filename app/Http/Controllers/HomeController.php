<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\PersonAttribute;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard');
    }

    /**
     * Fetch people from people table
     *
     * @return Json Response
     */
    public function people()
    {
        $people = Person::all()->toArray();

        $peopleData = array();

        $iterator = 0;

        foreach ($people as $person) {
            $dob = date_create($person['dob']);
            $currentDate = date_create(date("Y-m-d"));

            $age = date_diff($currentDate,$dob);

            $peopleData[$iterator] = $person;
            $peopleData[$iterator]['age'] = $age->y;

            $iterator++;

        }

        $data = array();
        $data['data'] = $peopleData;

        return json_encode($data);
    }

    /**
     * Fetch person details
     *
     * @return \Illuminate\Http\Response
     */
    public function person($id)
    {
        $person = Person::where('id',$id)->with('attributes')->get();

        if($person->isEmpty()){
            return redirect('/')->with('entry_not_found','The requested entry could not be found');
        }

        return view('person', ['person'=>$person, 'personId'=>$id]);

    }


    /**
     * Add Person Attributes ie height, weight, hair color
     *
     * @return \Illuminate\Http\Response
     */
    public function personAttributes(Request $request)
    {
        $this->validate($request, [
            'height'=>'required|numeric',
            'hair_color'=>'required|max:20|min:2|string',
            'weight'=>'required|max:300|min:5|numeric',
        ]);

        $attributes = PersonAttribute::find($request->input('person_id'));

        if($attributes == null){
            //instantiate attributes object
            $attributes = new PersonAttribute();
            $attributes->person_id = $request->input('person_id');

        }

        $attributes->height = $request->input('height');
        $attributes->weight = $request->input('weight');
        $attributes->hair_color = $request->input('hair_color');

        if($attributes->save()){
            return redirect('/')->with('attributes_updated','attributes updated successfully');
        }else{
            return redirect('/')->with('attributes_error','error updating attributes, please try again!!!');
        }
        

    }

    /**
     *show edit person view
     *
     * @return \Illuminate\Http\Response
     */
    public function showEditPerson($id)
    {
        $person = Person::where('id',$id)->get();

        if($person->isEmpty()){
            return redirect('/')->with('entry_not_found','The requested entry could not be found');
        }

        return view('edit_person', ['person'=>$person, 'personId'=>$id]);

    }


    /**
     * Edit Person
     *
     * @return \Illuminate\Http\Response
     */
    public function editPerson(Request $request)
    {
        $this->validate($request, [
            'firstname'=>'required|max:50|min:2|string',
            'surname'=>'required|max:50|min:2|string',
            'dob'=>'required|max:14|min:8|string',
        ]);

        $person = Person::find($request->input('person_id'));

        $person->firstname = $request->input('firstname');
        $person->surname = $request->input('surname');
        $person->dob = $request->input('dob');

        if($person->save()){
            return redirect('/')->with('person_updated','person updated successfully');
        }else{
            return redirect('/')->with('person_error','error updating person details, please try again!!!');
        }

    }

    /**
     *show delete confirmation dialog
     *
     * @return \Illuminate\Http\Response
     */
    public function showDeletePerson($id)
    {
        $person = Person::where('id',$id)->get();

        if($person->isEmpty()){
            return redirect('/')->with('entry_not_found','The requested entry could not be found');
        }

        return view('delete_person', ['person'=>$person, 'personId'=>$id]);

    }

     /**
     *delete preson from database
     *
     * @return \Illuminate\Http\Response
     */
    public function purgePerson(Request $request)
    {
        $person = Person::find($request->input("person_id"));

        if($person==null){
            return redirect('/')->with('entry_not_found','The requested entry could not be found');
        }

        if ($person->delete()) {
            return redirect('/')->with('person_deleted','Person entry deleted successfully');
        }else{
            return redirect('/')->with('person_delete_error','Error deleting person');
        }

    }

    /**
     *show add person view
     *
     * @return \Illuminate\Http\Response
     */
    public function showAddPerson()
    {
        return view('addperson');

    }

    /**
     * Add Person
     *
     * @return \Illuminate\Http\Response
     */
    public function addPerson(Request $request)
    {
        $this->validate($request, [
            'firstname'=>'required|max:50|min:2|string',
            'surname'=>'required|max:50|min:2|string',
            'dob'=>'required|max:14|min:8|string',
        ]);

        $person = new Person();

        $person->firstname = $request->input('firstname');
        $person->surname = $request->input('surname');
        $person->dob = $request->input('dob');

        if($person->save()){
            return redirect('/')->with('person_added','person added successfully');
        }else{
            return redirect('/')->with('person_add_error','error saving person details, please try again!!!');
        }

    }
}
