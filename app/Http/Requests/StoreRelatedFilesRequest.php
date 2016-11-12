<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRelatedFilesRequest extends FormRequest
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
//            'related_file' => 'max:20480|mimes:pdf,gif,jpg,jpeg,png',
//            'related_image' => 'max:20480',
//            'related_file' =>
            
        ];
    }
}

//public function rules()
//{
//    return [
//        'file.*' => 'required|mimes:png,gif,jpg,jpeg,doc,docx,pdf,txt,zip,rar|max:2000'
//    ];
//}
//
//public function response(array $errors)
//{
//    return $this->redirector->back()->withInput()->withErrors($errors, $this->errorBag);
//}
