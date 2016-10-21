<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStationsRequest extends FormRequest
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
            'station_name' => 'required|string|unique:stations,station_name,'. $this->route('station'),
            'station_number' => 'required|integer|unique:stations,station_number,' . $this->route('station'),
            'address' => 'required|string:stations,address'. $this->route('station'),
            'city' => 'required|string:stations,city'. $this->route('station'),
            'zipcode' => 'required|integer:stations,zipcode'. $this->route('station'),
            'district' => 'required|string:stations,district'. $this->route('station'),
            'station_date' => 'date:stations,station_date,'. $this->route('station'),
            'station_document' => 'max:20480',
            'station_image' => 'max:20480',

        ];
    }
}
