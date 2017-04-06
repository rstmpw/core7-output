<?php

namespace rstmpw\core7\output;

class OutputControl
{
    public static function VariableFile($data, $mime, $disposition, $filename)
    {

    }

    public static function PrivateFile(string $location)
    {

    }

    public static function JSON(string $data = null)
    {

    }

    public static function XML(string $data = null)
    {

    }

    public static function DisconnectClient(string $location = null)
    {
        ignore_user_abort(true);
        if (!is_null($location)) {
            header('Location: '.$location, true, 302);
            header('Content-Length: 0', true);
        }
        header('Connection: close', true);
        if (!is_null($location)) {
            while (ob_get_level()) {
                ob_end_clean();
            }
        } else {
            while (ob_get_level()) {
                ob_end_flush();
            }
        }
        flush();
        fastcgi_finish_request();
    }

    /**
     * @param string $action Allowed values: clear|flush|get
     */
    public static function ObEndAll(string $action = 'clear')
    {

    }

    public static function HttpNotFound()
    {

    }

    public static function HttpForbidden()
    {

    }

    public static function HttpBadRequest()
    {

    }

    public static function HttpInternalError()
    {

    }

    public static function HttpServiceUnavailable()
    {

    }

    public static function HttpPermanentlyRedirect()
    {

    }

    public static function HttpTemporaryRedirect()
    {

    }

    public static function HttpTemporaryPOSTRedirect()
    {

    }

    public static function HttpNotImplemented()
    {

    }
}