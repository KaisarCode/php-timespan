<?php
// Router
Class TimeSpan {
    public static function get($S = 1) {
        if (is_nan($S)) $S = 0;
        $ts = time();
        return round($ts / $S);
    }
}
