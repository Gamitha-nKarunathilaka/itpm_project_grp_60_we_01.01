<?php

namespace App\Http\Controllers;
use App\Models\User_Data;
use App\Models\FormData;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Notifications\NewUserNotification;
use Illuminate\Support\Facades\Notification;

class UserController extends Controller
{
    public function dashboard(Request $request)
    {
        $user = auth()->user();
        Notification::send($user, new NewUserNotification());

        return view('user.dashboard');
    }

    public function step1()
    {
        return view('form.step1');
    }

    public function postStep1(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'contact_num' => 'required',
            'occupation' => 'required',
        ]);

        $formData = new FormData;
        $formData->name = $validated['name'];
        $formData->email = $validated['email'];
        $formData->address = $validated['address'];
        $formData->contact_num = $validated['contact_num'];
        $formData->occupation = $validated['occupation'];
        $formData->save();

        return redirect()->route('form.step2', $formData->id);
    }

    //start form 2
    public function step2($id)
    {
        $formData = FormData::find($id);
        if (!$formData) {
            abort(404);
        }
        return view('form.step2', compact('formData'));
    }

    public function postStep2(Request $request)
    {
        $validated = $request->validate([
            'beaf' => 'required',
            'expect_soluation' => 'required',
            'photo' => 'required',
            'problem_level' => 'required',
            'suggestions' => 'required',
        ]);
        $formData = FormData::find($request->input('id'));
        if (!$formData) {
            abort(404);
        }
        $formData->beaf = $validated['beaf'];
        $formData->expect_soluation = $validated['expect_soluation'];
        $formData->photo = $validated['photo'];
        $formData->problem_level = $validated['problem_level'];
        $formData->suggestions = $validated['suggestions'];
        $formData->save();

        return redirect()->route('form.step3', $formData->id);
    }

    //start form 3
    public function step3($id)         
    {
        $formData = FormData::find($id);
        if (!$formData) {
            abort(404);
        }
        return view('form.step3', compact('formData'));
    }

    public function postStep3(Request $request)
    {
        $validated = $request->validate([
            'district' => 'required',
            'city' => 'required',
            'postal_code' => 'required',
            'grama_name' => 'required',
            'gcontact_num' => 'required',
            'authorized_per_name' => 'required',
            'authorized_per_num' => 'required',
        ]);

        $formData = FormData::find($request->input('id'));
        if (!$formData) {
            abort(404);
        }
        $formData->district = $validated['district'];
        $formData->city = $validated['city'];
        $formData->postal_code = $validated['postal_code'];
        $formData->grama_name = $validated['grama_name'];
        $formData->gcontact_num = $validated['gcontact_num'];
        $formData->authorized_per_name = $validated['authorized_per_name'];
        $formData->authorized_per_num = $validated['authorized_per_num'];
        $formData->save();

        return redirect()->route('form.step4', $formData->id);
    }

     //start form 4
     public function step4($id)         
     {
         $formData = FormData::find($id);
         if (!$formData) {
             abort(404);
         }
 
         // Retrieve all input fields before Step 1, 2, and 3
         $step1Fields = ['name', 'email', 'address', 'contact_num', 'occupation'];
         $step2Fields = ['beaf', 'expect_soluation', 'photo', 'problem_level', 'suggestions'];
         $step3Fields = ['district', 'city', 'postal_code', 'grama_name', 'gcontact_num', 'authorized_per_name', 'authorized_per_num'];
         $previousData = [];
         foreach ($step1Fields as $field) {
             $previousData[$field] = $formData->{$field};
         }
         foreach ($step2Fields as $field) {
             $previousData[$field] = $formData->{$field};
         }
         foreach ($step3Fields as $field) {
             $previousData[$field] = $formData->{$field};
         }
 
         return view('form.step4', compact('formData', 'previousData'));
     }
 
     public function postStep4(Request $request)
     {
         $formData = FormData::find($request->input('id'));
         if (!$formData) {
             abort(404);
         }
 
         return redirect()->route('form.step4', $formData->id);
     }
 
}