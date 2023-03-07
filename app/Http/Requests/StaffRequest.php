<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaffRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */

    public function rules(): array
    {
        return [
            'name' => 'required|min:5',
            'age' => 'required|integer',
            'gender' => 'required',
            'position_id' => 'required',
            'department_id' => 'required',
        ];
    }
    public function messages()
    {
        // Định nghĩa các message cho từng rule trong form
        return [
            'name.required' => 'Tên không được để trống!',
            'name.min' => 'Tên phải có ít nhất 5 kí tự',
            'age.required' => 'Tuổi không đươc để trống!',
            'age.integer' => 'Tuổi phải là một số nguyên dương!',
            'gender.required' => 'Phải chọn giới tính của nhân viên',
            'position.required' => 'Phải chọn chức vụ của nhân viên',
            'department.required' => 'Phải chọn phòng ban của nhân viên',
        ];
    }
}
