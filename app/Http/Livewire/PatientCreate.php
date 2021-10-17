<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Patient;

class PatientCreate extends Component
 {
     public $name;
     public $email;
  
     protected $rules = [
         'name' => 'required|min:6',
         'email' => 'required|email',
     ];
 
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
 
    public function createPatient()
    {
        $validatedData = $this->validate();
 
        Patient::create($validatedData);

        return redirect()->to('/');
    }
}
