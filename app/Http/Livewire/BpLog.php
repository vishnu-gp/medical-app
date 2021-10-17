<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\BloodPressure;

class BpLog extends Component
 {
     
    public $systolic;
    public $diastolic;
    public $patient;

    public function mount($patient_id)
    {
        $this->patient = \App\Models\Patient::find($patient_id);
        if(!$this->patient)
            return redirect()->to('/');
    }

    protected $rules = [
        'systolic' => 'required|integer|min:0',
        'diastolic' => 'required|integer|min:0',
    ];

 
    public function logBp()
    {
        $validatedData = $this->validate();
        $validatedData['patient_id'] = $this->patient->id;
        if($this->patient){
            $bloodPressure = new BloodPressure;
            $bloodPressure->patient_id = $this->patient->id;
            $bloodPressure->systolic = $validatedData["systolic"];
            $bloodPressure->diastolic = $validatedData["diastolic"];
            $bloodPressure->save();
        }

        return redirect()->to('/');
    }
}
