<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Specialty;
use App\Models\Professional;
use App\Models\Appointment;
use App\Models\Schedule;
use Carbon\Carbon;

class AppointmentCreate extends Component
{
    public $selectedSpecialty;
    public $professionals;
    public $selectedProfessional;
    public $professionalId;
    public $selectedDate;
    public $date;
    public $appointments;
    public $actualTime;
    public $actualDate;
    public $schedules;
    public $selectedTime;
    public $time;

    public function render()
    {
        $specialties = Specialty::all();
        return view('livewire.appointment-create')->with('specialties', $specialties);
    }

    public function updatedSelectedSpecialty($specialtyId)
    {
        $this->professionals = Professional::where('specialty_id', $specialtyId)->get();
        $this->professionalId = null;
        $this->selectedProfessional = null;
    }

    public function updatedSelectedProfessional($professionalId)
    {
        $this->professionalId = $professionalId;
        $this->selectedDate = null;
        $this->date = null;
    }

    public function updatedSelectedDate($date)
    {
        $this->date = null;
        $this->time = null;
        $this->selectedTime = null;
        $this->appointments = array();
        $parsedDate = Carbon::parse($date);
        if (!$parsedDate->isWeekend() && ($parsedDate->isFuture() || $parsedDate->isToday())) {
            $this->date = $date;
            $this->actualTime = Carbon::now()->format('H:i');
            $this->actualDate = Carbon::now()->format('Y-m-d');
            $appointments = Appointment::where('date', $this->date)->where('professional_id', $this->professionalId)->get();
            foreach($appointments as $appointment) {
                array_push($this->appointments, Carbon::parse($appointment->time)->format('H:i'));
            }
            $this->schedules = Schedule::where('professional_id', $this->professionalId)->get();
            foreach($this->schedules as $schedule) {
                $schedule->time = Carbon::parse($schedule->time)->format('H:i');
            }
        }
    }

    public function updatedSelectedTime($time)
    {
        $this->time = $time;
        $this->schedules = Schedule::where('professional_id', $this->professionalId)->get();
        foreach($this->schedules as $schedule) {
            $schedule->time = Carbon::parse($schedule->time)->format('H:i');
        }
    }
}
