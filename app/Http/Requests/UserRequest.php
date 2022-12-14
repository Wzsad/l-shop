<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    use SceneValidator;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|unique:users',
            'email' => 'required|email|unique:users',
        ];
    }

    /**
     * 场景规则
     * @return array
     */
    public function scene()
    {
        return [
            'add' => [
                'name',                         // 复用 rules() 下 name 规则
                'email' => 'email|unique:users' // 重置规则
            ],
            // edit 场景
            'edit' => ['name']
        ];
    }
}
