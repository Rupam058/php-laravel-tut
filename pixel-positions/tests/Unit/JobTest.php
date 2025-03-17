<?php

use App\Models\Employer;
use App\Models\Job;

test('it belongs to an employer', function () {
    // AAA -> Arrange, Act, Assert 

    // Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create(['employer_id' => $employer->id]);

    // Act
    $action = $job->employer;

    // Assert
    expect($action->is($employer))->toBeTrue();
});

test('can have tags', function () {
    // AAA

    $job = Job::factory()->create();

    $job->tag('Frontend');

    expect($job->tags)->toHaveCount(1);
});
