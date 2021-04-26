<?php

namespace App\Http\Controllers\admin;

use App\Models\contacts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class contactsApiController extends Controller
{
    public function __construct(){
        $this->middleware(['auth:api']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // List of contacts 
        $contacts = contacts::all();

        return response()->json([
            'data'      => $contacts,
            'message'   => 'Contacts Fetched!',
            "error"     => array()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-pages.addContact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'full_name' => 'required|max:250',
            'email'     => 'nullable|email',
            'phone'     => 'required',
            'sec_phone' => 'max:250',
            'country'   => 'max:250',
            'company'   => 'max:250'
        ]);

        // Blank or default avatar
        $image_path = "";

        // If user has uploaded the file
        if($request->hasFile('user_avatar')){
            $name = strtolower(str_replace('/[^A-Za-z0-9]/', '', str_replace(' ', '-', $request->full_name)));

            $name_of_the_image = $name.'-'.$request->phone;
            $extension = $request->user_avatar->extension();

            $image_path = $request->user_avatar->storeAs(
                'avatars',
                $name_of_the_image.'.'.$extension,
                'public'
            );
        }
        
        contacts::create([
            'name'          => $request->full_name,
            'user_avatar'   => $image_path,
            'phone'         => $request->phone,
            'email'         => $request->email,
            'sec_phone'     => $request->sec_phone,
            'country'       => $request->country,
            'company'       => $request->company,
        ]);

        // List of contacts 
        $contacts = contacts::all();

        return view('admin-pages.viewContacts', [
            'contacts' => $contacts
        ]);
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
    public function update(Request $request, $contact_id)
    {
        $this->validate($request, [
            'full_name' => 'required|max:250',
            'email'     => 'nullable|email',
            'phone'     => 'required',
            'sec_phone' => 'max:250',
            'country'   => 'max:250',
            'company'   => 'max:250'
        ]);
        
        // Get the contact by ID
        $contact = contacts::where('id', '=', $contact_id)->update([
            'name'          => $request->full_name,
            'phone'         => $request->phone,
            'email'         => $request->email,
            'sec_phone'     => $request->sec_phone,
            'country'       => $request->country,
            'company'       => $request->company,
        ]);

        // List of contacts 
        $contacts = contacts::all();

        return view('admin-pages.viewContacts', [
            'contacts' => $contacts
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($contact_id)
    {
        $contact = contacts::where('id', '=', $contact_id)->take(1)->delete();

        // List of contacts 
        $contacts = contacts::all();

        return view('admin-pages.viewContacts', [
            'contacts' => $contacts
        ]);
    }
}
