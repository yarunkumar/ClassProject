<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePersonnelsRequest extends FormRequest
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
            'ofd_id' => 'required|unique:personnels,ofd_id',
            'ofd_full_name' => 'required',
            
        ];
    }
}
