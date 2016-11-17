<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAllAssetsRequest extends FormRequest
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
//            'name' => 'required',
            'serial_number' => 'unique:all_assets,serial_number,'.$this->route('all_asset'),
//            'imei'=>'unique:all_assets,imei'.$this->route('allasset'),
//               client data shows inmotion IMEIs are not unique
//               need to figure out which IMEIs are unique

        ];
    }
}
