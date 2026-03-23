<?php

class Env
{
    public static function load(string $path): void
    {
        if (!is_file($path) || !is_readable($path)) {
            return;
        }

        $lines = file($path, FILE_IGNORE_NEW_LINES);

        if ($lines === false) {
            return;
        }

        foreach ($lines as $line) {
            $line = trim($line);

            if ($line === '' || str_starts_with($line, '#')) {
                continue;
            }

            if (str_starts_with($line, 'export ')) {
                $line = trim(substr($line, 7));
            }

            $parts = explode('=', $line, 2);

            if (count($parts) !== 2) {
                continue;
            }

            $name = trim($parts[0]);
            $value = self::normalizeValue(trim($parts[1]));

            if ($name === '' || preg_match('/^[A-Z0-9_]+$/i', $name) !== 1) {
                continue;
            }

            self::set($name, $value);
        }
    }

    public static function get(string $name, ?string $default = null): ?string
    {
        $value = $_ENV[$name] ?? $_SERVER[$name] ?? getenv($name);

        if ($value === false || $value === null || $value === '') {
            return $default;
        }

        return (string) $value;
    }

    public static function getInt(string $name, ?int $default = null): ?int
    {
        $value = self::get($name);

        if ($value === null || filter_var($value, FILTER_VALIDATE_INT) === false) {
            return $default;
        }

        return (int) $value;
    }

    public static function getBool(string $name, bool $default = false): bool
    {
        $value = self::get($name);

        if ($value === null) {
            return $default;
        }

        $normalized = strtolower($value);

        return in_array($normalized, ['1', 'true', 'yes', 'on'], true);
    }

    private static function normalizeValue(string $value): string
    {
        if ($value === '') {
            return '';
        }

        $firstChar = $value[0];
        $lastChar = $value[strlen($value) - 1];

        if (($firstChar === '"' && $lastChar === '"') || ($firstChar === "'" && $lastChar === "'")) {
            $value = substr($value, 1, -1);

            if ($firstChar === '"') {
                $value = str_replace(
                    ['\n', '\r', '\t', '\"'],
                    ["\n", "\r", "\t", '"'],
                    $value
                );
            }

            return $value;
        }

        if (str_contains($value, ' #')) {
            $value = strstr($value, ' #', true);
        }

        return trim($value);
    }

    private static function set(string $name, string $value): void
    {
        $_ENV[$name] = $value;
        $_SERVER[$name] = $value;
        putenv($name . '=' . $value);
    }
}
