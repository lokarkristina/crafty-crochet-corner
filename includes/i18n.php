<?php

// Translation helper: loads UI strings for the active locale and exposes t() to look them up.
// To switch language, change APP_LOCALE to a locale that has a matching lang/<locale>.php file.

const APP_LOCALE = 'sl';

// Looks up a UI string by key, falling back to the key itself if the string is missing
// (so a forgotten translation shows up as a readable key, not a blank).
// Pass $replacements to fill ":placeholder" tokens, e.g. t('product.cta', [':title' => $title]).
function t(string $key, array $replacements = []): string
{
    static $translations;
    $translations ??= require __DIR__ . '/../lang/' . APP_LOCALE . '.php';

    $string = $translations[$key] ?? $key;

    return $replacements ? strtr($string, $replacements) : $string;
}
