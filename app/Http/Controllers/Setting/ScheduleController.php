<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\SoftMedic\Settings\Doctors\Doctor;
use App\SoftMedic\Settings\Schedules\Schedule;
use Illuminate\Support\Facades\DB;

class ScheduleController extends Controller
{
    public function index()
    {
        $data = DB::select("
SELECT
	date,
	availabilities.idDoctor,
	turno,
	LEFT(min(start_time), 5) AS horaMinimo,
	LEFT(max(end_time), 5) AS horaMaxima,
	IF(turno = 1, 'Mañana', 'Tarde') AS turno,
		IF(area = 1, 'CE-COVID', IF(area = 2, 'Reten', IF(area = 3, 'Presencial', IF(area = 5, 'Teleconsulta', IF(area = 6, 'Procedimientos', IF(area = 7, 'CAI', IF(area = 8, 'CE', 'COVID'))))))) AS tipo,
			concat(doctors.firstname, ' ', doctors.lastname) AS lastname,
			specialties.name AS especialidad
		FROM
			availabilities
			INNER JOIN doctors ON doctors.idDoctor = availabilities.idDoctor
			INNER JOIN specialties ON specialties.idSpecialty = doctors.idSpecialty
		WHERE
		left(availabilities.date, 7) >= '2023-04' AND availabilities.disponible in(0, 1)
	GROUP BY
		availabilities.idDoctor,
		date,
		turno,
		area,
		codigo_interno
	ORDER BY
		date DESC
		");

        $schedules = array_map(function($item){
            return (array) $item;
        },$data);

        return view('setting.schedules.index',compact('schedules'));
    }

    public function delete($doctor_id,$date)
    {
       Schedule::where('date',$date)->where('idDoctor',$doctor_id)->delete();

        return redirect()->route('setting.schedules.index')->with('message','Registro eliminado');
    }
}
