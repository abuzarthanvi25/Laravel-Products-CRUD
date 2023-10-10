<?php
namespace App\Http\Helper;
use Symfony\Component\HttpFoundation\Response;

class ResponseBuilder
{
    public static function result(
        $status = '',
        $info = '',
        $data = '',
        $response_code = Response::HTTP_NOT_FOUND
    ) {
        return [
            'isSuccess' => $status,
            'responseCode' => $response_code,
            'message' => $info,
            'data' => $data,
        ];
    }
}

