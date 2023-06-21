<?php
namespace App\Http\Controllers\Excel;

use App\Models\Appointement;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;


 class ExportAppointements implements FromCollection, WithHeadings, WithMapping {

    public function collection()
    {
        return Appointement::all();
    }

   
    public function headings(): array
    {
        return [
            'ID',
            'Patient Name',
            'Doctor Name',
            'Payment',
            'Status',
            'Charge',
            'Created At',
            'Updated At',
        ];
    }

    public function map($appointment): array
    {
        return [
            $appointment->id,
            $appointment->patients->firstname ." ".$appointment->patients->lastname, // Assuming patient_id is a foreign key to the patients table with a 'first_name' column
            $appointment->doctors->firstname." ". $appointment->doctors->lastname, // Assuming doctor_id is a foreign key to the doctors table with a 'first_name' column
            $appointment->payment,
            $appointment->status,
            $appointment->charge." $",
            $appointment->created_at,
            $appointment->updated_at,
        ];
    }
}