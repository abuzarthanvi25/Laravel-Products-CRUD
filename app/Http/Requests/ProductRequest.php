<?php

namespace App\Http\Requests;

use App\Http\Helper\RequestHelper;

class ProductRequest extends RequestHelper
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'=>'required|string|max:255',
            'description'=>'required|string|max:255',
            'image'=>'required|string|max:255',
            'price'=>'required|integer',
        ];
    }
}
