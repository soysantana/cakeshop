<?php
function url($rutaRelativa) {
    $urlBase = dirname($_SERVER['SCRIPT_NAME']);
    $urlBase = preg_replace('~(?:/[^/]+){2}/?$~', '', $urlBase);
    $rutaFinal = $urlBase . '/' . ltrim($rutaRelativa, '/');
    $rutaFinal = preg_replace('/\/+/', '/', $rutaFinal);
    return $rutaFinal;
}
?>
