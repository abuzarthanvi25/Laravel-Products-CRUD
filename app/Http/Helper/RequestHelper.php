<?php
namespace App\Http\Helper;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use App\Http\Helper\ResponseBuilder;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Foundation\Http\FormRequest;


class RequestHelper extends FormRequest
{
    public  function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json(
                ResponseBuilder::result(false, $validator->errors()->first(), $validator->errors(), Response::HTTP_BAD_REQUEST),
                Response::HTTP_BAD_REQUEST
            )
        );
    }
    
}

