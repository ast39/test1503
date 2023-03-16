<?php

namespace App\Libs;

/**
 * Ошибки приложения
 */
class AppError {

    public int    $code;
    public string $msg;

    public function __construct(int $code)
    {
        $this->code = $code;
        $this->msg  = config('errors.' . $code, 'General error');
    }

}
