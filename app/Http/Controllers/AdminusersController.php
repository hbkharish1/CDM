<?php

namespace App\Http\Controllers;
// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Redirect;
use App\Models\Adminusers;
class AdminusersController extends Controller
{
    public function add(Request $request)  
    {  
        // console.log($request);
        $request->validate([  
            'name'=>'required',   
            'gender'=>'required',  
            'dob'=>'required', 
            'age'=>'required',
            'mobile1'=>'required',
            'mobile2'=>'required',
            'whatsapp'=>'required',
            'email'=>'required',
            'address'=>'required',
            'city'=>'required',
            'pincode'=>'required',
            'state'=>'required',
            'country'=>'required',
            'company'=>'required',
            'designation'=>'required',
            'company_location'=>'required',
            'session_attended'=>'required',
            'language'=>'required',
            'palmleaf_sub'=>'required',
            'facebook'=>'required',
            'instagram'=>'required',
            'linkedin'=>'required',
            'comments'=>'required',
            'status'=>'required' 
        ]);  
  
        $adminuser = new adminusers;  
        $adminuser->name =  $request->get('name');  
        $adminuser->gender = $request->get('gender');  
        $adminuser->dob = $request->get('dob');  
        $adminuser->age = $request->get('age');  
        $adminuser->mobile1 = $request->get('mobile1');  
        $adminuser->mobile2 = $request->get('mobile2');  
        $adminuser->whatsapp = $request->get('whatsapp');  
        $adminuser->email = $request->get('email');  
        $adminuser->address = $request->get('address');  
        $adminuser->city = $request->get('city');  
        $adminuser->pincode = $request->get('pincode');  
        $adminuser->state = $request->get('state');  
        $adminuser->country = $request->get('country');  
        $adminuser->company = $request->get('company');  
        $adminuser->designation = $request->get('designation');  
        $adminuser->company_location = $request->get('company_location');  
        $adminuser->session_attended = $request->get('session_attended');  
        $adminuser->language = $request->get('language');  
        $adminuser->palmleaf_sub = $request->get('palmleaf_sub');  
        $adminuser->facebook = $request->get('facebook');  
        $adminuser->instagram = $request->get('instagram');  
        $adminuser->linkedin = $request->get('linkedin');  
        $adminuser->comments = $request->get('comments');  
        $adminuser->status = $request->get('status');  
        // console.log(adminuser);
        echo "function is working";
        $adminuser->save();  
        }  

        public function create(Request $request)
        {
            $data = $request->all();
            // dd($data);
            $rules = [
                'name'=> 'required',
                'gender'=> 'required',
                "dob"=> 'required',
                'age'=> 'required',
                'mobile1'=> 'required',
                'mobile2'=> 'required',
                'whatsapp'=> 'required',
                'email'=> 'required',
                'address'=> 'required',
                'city'=> 'required',
                'pincode'=> 'required',
                'state'=> 'required',
                'country'=> 'required',
                'company'=> 'required',
                'designation'=> 'required',
                'company_location'=> 'required',
                "sessions_attended"=> 'required',
                "languages"=> 'required',
                "palmleaf_sub"=> 'required',
                'email'=> 'required',
                'facebook'=> 'required',
                'instagram'=> 'required',
                'linkedin'=> 'required',
                'comments'=> 'required',
                'status'=> 'required'
            ];
        
            // validator
            $input = $request->only(
                'name',
                'gender',
                "dob",
                'age',
                'mobile1',
                'mobile2',
                'whatsapp',
                'email',
                'address',
                'city',
                'pincode',
                'state',
                'country',
                'company',
                'designation',
                'company_location',
                "sessions_attended",
                "languages",
                "palmleaf_sub",
                'email',
                'facebook',
                'instagram',
                'linkedin',
                'comments',
                'status'
            );
            
            $validator = Validator::make($input, $rules);
            if ($validator->fails()) {
                $validator->getMessageBag();    
                return Redirect::back()->withErrors($validator)->withInput();
            }
            // save function
            
            $matchlist = Adminusers::create([
                'name'=> $data['name'],
                'gender'=> $data['gender'],
                "dob"=> $data['dob'],
                'age'=> $data['age'],
                'mobile1'=> $data['mobile1'],
                'mobile2'=> $data['mobile2'],
                'whatsapp'=> $data['whatsapp'],
                'email'=> $data['email'],
                'address'=> $data['address'],
                'city'=> $data['city'],
                'pincode'=> $data['pincode'],
                'state'=> $data['state'],
                'country'=> $data['country'],
                'company'=> $data['company'],
                'designation'=> $data['designation'],
                'company_location'=> $data['company_location'],
                "sessions_attended"=> $data['sessions_attended'],
                "language"=> $data['languages'],
                "palmleaf_sub"=> $data['palmleaf_sub'],
                'email'=> $data['email'],
                'facebook'=> $data['facebook'],
                'instagram'=> $data['instagram'],
                'linkedin'=> $data['linkedin'],
                'comments'=> $data['comments'],
                'status'=> $data['status'],
            ]);
                // alert("Created Successfully ");
                
            return redirect()->back()->with('success','Created Successfully.');
        
        }        
        function list()
        {
            
            $ml = Adminusers::all();
            return view("all-users",compact('ml'));
        }
}
            