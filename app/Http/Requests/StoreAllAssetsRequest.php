<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAllAssetsRequest extends FormRequest
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

    //    need to work on common fields validation,
    //    when required field is not entered
    //    it is asking to enter the required field

    public function rules()
    {
        return [
//            'name' => 'required',
            'serial_number' => 'unique:all_assets,serial_number'.$this->route('allasset'),
            'imei'=>'integer|unique:all_assets,imei'.$this->route('allasset'),
            ''
        ];
    }
}
