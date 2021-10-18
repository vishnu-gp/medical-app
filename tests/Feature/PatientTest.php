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

    /**
     * Patients page render test.
     *
     * @return void
     */
    public function test_patients_page_render()
    {
        $response = $this->get(route('patients'));

        $response->assertSuccessful();
    }

    /**
     * Patient create page render test.
     *
     * @return void
     */
    public function test_patient_create_page_render()
    {
        $response = $this->get(route('patient_create'));

        $response->assertSuccessful();
    }

    /**
     * Patient log BP render test.
     *
     * @return void
     */
    public function test_patient_log_bp_page_render()
    {
        $patient = Patient::factory()->create();
        $response = $this->get(route('bp_log', ['patient_id' => $patient->id]));

        $response->assertSuccessful();
    }

    /**
     * Patient log BP render test.
     *
     * @return void
     */
    public function test_patient_log_bp_page_render_failure()
    {
        $patient = Patient::factory()->create();
        $response = $this->get(route('bp_log', ['patient_id' => $patient->id+1]));
        
        $response->assertStatus(302);
    }

}
