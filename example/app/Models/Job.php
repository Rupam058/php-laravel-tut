<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
    {
        return [
            [
                "id" => 1,
                "title" => "Director",
                "salary" => "$50, 000",
            ],
            [
                "id" => 2,
                "title" => "Manager",
                "salary" => "$40, 000",
            ],
            [
                "id" => 3,
                "title" => "Employee",
                "salary" => "$30, 000",
            ]
        ];
    }

    public static function find(int $id): array
    {
        $job = Arr::first(Job::all(), fn($job) => $job["id"] === $id);

        if (!$job) {
            abort(404);
        }

        return $job;
    }
}
