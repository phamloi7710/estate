<?php

namespace App\Http\Requests\Permissions;

use Illuminate\Foundation\Http\FormRequest;

class AddPermissionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'name' => 'unique:roles,name|required',
            'permission'=>'required'
            
        ];
    }
    public function messages()
    {
        return [
           'name.unique' => 'Quyền Này Đã Tồn Tại!',
           'name.required' => 'Tên Quyền Không Được Bỏ Trống!',
           'permission.required' => 'Vui Lòng Chọn Ít Nhất 1 Key Cho Quyền Này!',
        ];
    }
}
