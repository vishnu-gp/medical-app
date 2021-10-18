<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Patient;
use App\Models\BloodPressure;

class PatientTest extends TestCase
{
    /**
     * To test patient creation.
     *
     * @return void
     */
    public function test_patient_creation()
    {
        $patients = Patient::factory()->count(5)->create();
        if($patients->count() == 5)
            $this->assertTrue(true);
    }

    /**
     * To blood pressure logging.
     *
     * @return void
     */
    public function test_patient_bp_log()
    {
        $patients = Patient::factory()->count(5)
            ->has(BloodPressure::factory()->count(3))
            ->create();
        if($patients->count() == 5)
            $this->assertTrue(true);
    }


}
