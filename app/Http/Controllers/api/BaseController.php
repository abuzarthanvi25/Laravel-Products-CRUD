<?php
namespace App\Http\Controllers\api;
use Illuminate\Http\Exceptions\HttpResponseException;
use App\Http\Controllers\Controller as Controller;
use App\Http\Helper\ResponseBuilder;


class BaseController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */

    public function responseHandler(
        $info,
        $data,
        $code,
        $is_success = true
    ) {
        if ($is_success) {
            return response()->json(
                ResponseBuilder::result($is_success, $info, $data, $code),
                $code
            );
        } else {
            throw new HttpResponseException(
                response()->json(
                    ResponseBuilder::result($is_success, $info, $data, $code),
                    $code
                )
            );
        }
    }
}
