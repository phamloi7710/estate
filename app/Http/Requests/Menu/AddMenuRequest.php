<?php

namespace App\Http\Requests\Menu;

use Illuminate\Foundation\Http\FormRequest;

class AddMenuRequest extends FormRequest
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
    public function rules()
    {
        return [
            'txtUrl' => 'unique:menu,url',
            
        ];
    }
    public function messages()
    {
        return [
           'txtUrl.unique' => 'Đường Dẫn Này Đã Tồn Tại!',
        ];
    }
}
