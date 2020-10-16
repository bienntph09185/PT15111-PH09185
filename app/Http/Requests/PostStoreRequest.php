<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //Update return true để áp dụng rule bên dưới
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
            'desc' => 'max:255',
            'content' => 'required|max:1000'
        ];
    }
    //Định nghịa hàm mess trả về thông báo tương ứng
    public function messages()
    {
        return [
            'desc.max' => 'Giới thiệu tối đa 255 kí tự',
            'content.required' => 'Content Không được bỏ trống',
            'content.max' => 'Không quá 1000 kí tự',
        ];
    }
}
