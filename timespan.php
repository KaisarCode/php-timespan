<?php
// Returns an extract of unix time that changes each S seconds
function timeSpan($S = 1) {
    if (is_nan($S)) $S = 0;
    $ts = time();
    return round($ts / $S);
}
