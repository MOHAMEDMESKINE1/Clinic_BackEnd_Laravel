<?php
namespace App\Http\Controllers\Excel;

use App\Models\Visit;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;


 class ExportVisits implements FromCollection, WithHeadings, WithMapping {

    public function collection()
    {
        return Visit::all();
    }

   
    public function headings(): array
    {
        return [
            'ID',
            'Date',
            'Description',
            'Patient Name',
            'Doctor Name',
            'Created At',
            'Updated At',
        ];
    }

    public function map($visit): array
    {
        return [
            $visit->id,
            $visit->date,
            $visit->description,
            $visit->patients->firstname ." ".$visit->patients->lastname, // Assuming patient_id is a foreign key to the patients table with a 'first_name' column
            $visit->doctors->firstname." ". $visit->doctors->lastname, // Assuming doctor_id is a foreign key to the doctors table with a 'first_name' column
            $visit->created_at,
            $visit->updated_at,
        ];
    }
}