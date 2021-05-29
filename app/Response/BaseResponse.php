<?php

namespace App\Response;

use Illuminate\Support\Facades\Log;



class BaseResponse
{

    /**
     * success
     *
     * @param array $data ["success" => true, "error" => 0, "msg" => "Sucesso", "data" => null]
     * @return void
     */
    public static function success($data = [])
    {

        $default = ["success" => true, "error" => null, "msg" => "Sucesso", "data" => null];
        $data = array_merge($default, $data);

        return response()->success($data);
    }

    /**
     * success
     *
     * @param array $data ["success" => true, "error" => 0, "msg" => "Sucesso", "data" => null]
     * @return void
     */
    public static function error($data = [], $th = null)
    {

        $th ?? Log::error('BaseResponse::error => ' . $th->getMessage(), ['error' => $th->getTraceAsString()]);

        $default = ["success" => false, "error" => $th->getMessage(), "message" => $th ?? $th->getMessage(), "data" => null];
        $data = array_merge($default, $data);

        return response()->error($data);
    }

    public function teste()
    {
        echo "teste";
    }
}
