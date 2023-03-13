<?php

if (!function_exists('storage_path')) {
    function storage_path(): string
    {
        return __DIR__ . '/../../storage';
    }
}

if (!function_exists('move_file_to_storage')) {
    function move_file_to_storage(array $file_data): void
    {
        $filePath = storage_path() . '/' . $file_data['name'];

        move_uploaded_file($file_data['tmp_name'], $filePath);
    }
}