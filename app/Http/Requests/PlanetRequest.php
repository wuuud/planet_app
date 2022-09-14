<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlanetRequest extends FormRequest
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
            'name'   =>'required|string|max:100',
            //alpha全てアルファベット入力
            //https://yutaro-blog.net/2021/05/05/laravel-validation-alpha/
            'enname' =>'required|string|alpha|max:100',
            'radius' =>'required|integer|max:10',
            'weight' =>'required|integer|max:10',
        ];
    }

}
