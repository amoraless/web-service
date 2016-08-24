<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AuthRequest extends Request
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
      //username:'required|max:15|regex:/[0-9]{8,9}/'
      //passwordd: 'required'
        return [
            'username' => '',
            'password' => '',
        ];
    }
}
