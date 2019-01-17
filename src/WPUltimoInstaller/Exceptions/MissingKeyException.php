<?php namespace WPU\WPUltimoInstaller\Exceptions;

/**
 * Exception thrown if the WP ULTIMO key is not available in the environment
 */
class MissingKeyException extends \Exception
{
    public function __construct(
        $message = '',
        $code = 0,
        \Exception $previous = null
    ) {
        parent::__construct(
            'Could not find a key for WP ULTIMO. ' .
            'Please make it available via the environment variable ' .
            $message,
            $code,
            $previous
        );
    }
}
