<?php
use App\Models\User;

it('shows all ideas', function () {
$this->actingAs($user = User::factory()->create());

$user->ideas()->create([
    'description' =>'Build a thing',
    'state'=>'pending'

]);
    visit('/ideas')->assertSee('Build a thing');


});


it('shows a single idea', function () {
    // SETUP: Create a user and an idea
    $this->actingAs($user = User::factory()->create());
    $idea = $user->ideas()->create([
        'description' => 'My special idea',
        'state' => 'pending'
    ]);

    // ACTION: Visit the specific idea page
    $this->visit("/ideas/{$idea->id}")

        // ASSERT: Check if the description is there
        ->assertSee('My special idea');
});

it('shows an edit form to update an idea', function () {
    // SETUP: Create user and idea
    $this->actingAs($user = User::factory()->create());
    $idea = $user->ideas()->create([
        'description' => 'Change me',
        'state' => 'pending'
    ]);

    // ACTION: Visit the edit page
    $this->visit("/ideas/{$idea->id}/edit")

        // ASSERT: Check for the existing description in the form
        ->assertSee('Change me')
        ->assertSee('Update Idea'); // Assuming this text is on your button or header
});
