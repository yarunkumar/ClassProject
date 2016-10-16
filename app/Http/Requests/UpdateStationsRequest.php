<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStationsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'station_name' => 'required|string|unique:stations,station_name,'.$this->route('stations'),
            'station_number' => 'required|integer|unique:stations,station_number',
            'station_document' => 'max:20480',
            'station_image' => 'max:20480',
            
        ];
    }
}
