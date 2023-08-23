<?php

namespace App\Http\Livewire\Backend\Employer;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CMP\CompanyProfiles;

class EmployerDashboard extends Component
{
    public function render()
    {
        $user_id = Auth::guard('Employer')->user()->id;
        $CMP_Profile = CompanyProfiles::where('EMP_ID', $user_id)->first();
        // dd($CMP_Profile->toArray());
        return view('livewire.backend.employer.employer-dashboard', compact('CMP_Profile'))->layout('layouts.employer');
    }

    public function postCompany(Request $request)
    {
        // dd($request->all());
        $Company = new CompanyProfiles();
        $Company->CMP_Name = $request->CMP_Name;
        $Company->CMP_Phone = $request->CMP_Phone;
        $Company->CMP_Email = $request->CMP_Email;
        $Company->CMP_Website = $request->CMP_Website;
        $Company->CMP_Country = $request->CMP_Country;
        $Company->CMP_City = $request->CMP_City;
        $Company->CMP_PostalCode = $request->CMP_PostalCode;
        $Company->CMP_Address = $request->CMP_Address;
        $Company->CMP_Desc = $request->CMP_Desc;
        $Company->EMP_ID = Auth::guard('Employer')->user()->id;

        $CompanyLogo = $request->file('CMP_Logo');
        $logoName = 'Logo_'.time().'.'.$CompanyLogo->extension();
        $CompanyLogo->move(public_path('Uploads/EMP/'.$Company->EMP_ID.'/'), $logoName);
        $Company->CMP_Logo = url('Uploads/EMP/'.$Company->EMP_ID.'/'.$logoName);

        $CompanyCover = $request->file('CMP_Cover');
        $coverName = 'Cover_'.time().'.'.$CompanyCover->extension();
        $CompanyCover->move(public_path('Uploads/EMP/'.$Company->EMP_ID.'/'), $coverName);
        $Company->CMP_Cover = url('Uploads/EMP/'.$Company->EMP_ID.'/'.$coverName);

        if ($Company->save()) {
            return back()->with('Success!', 'Data Inserted Successfully!');
        }
        return back()->with('Error!', 'Bad Request! => 400');
    }
}
