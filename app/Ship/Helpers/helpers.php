<?php

/*
|--------------------------------------------------------------------------
| Ship Helpers
|--------------------------------------------------------------------------
|
| Write only general helper functions here.
| Container specific helper functions should go into their own related Containers.
| All files under app/{section_name}/{container_name}/Helpers/ folder will be autoloaded by Kocek.
|
*/

if (!function_exists('activeGuard')) {
    /**
     * Get the current logged-in user guard.
     */
    function activeGuard(): string|null
    {
        foreach (array_keys(config('auth.guards')) as $guard) {
            if (auth()->guard($guard)->check()) {
                return $guard;
            }
        }

        return null;
    }
}

if (!function_exists('uncamelize')) {
    /**
     * @return string|string[]|null
     */
    function uncamelize($word, string $splitter = ' ', bool $uppercase = true): array|string|null
    {
        $word = preg_replace(
            '/(?!^)[[:upper:]][[:lower:]]/',
            '$0',
            preg_replace('/(?!^)[[:upper:]]+/', $splitter . '$0', $word),
        );

        return $uppercase ? ucwords($word) : $word;
    }
}
