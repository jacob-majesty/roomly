<?php

// src/Core/Session.php

namespace App\Core;

class Session
{
    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public static function destroy()
    {
        session_destroy();
    }
}