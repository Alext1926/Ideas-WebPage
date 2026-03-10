<?php

use App\Models\User;

// 1. Tell Pest to use the Laravel Test Case for this file

it('registers a user', function () {
    // 2. Perform the browser actions
    $this->visit('/register')
        ->fill('name', 'Jane Doe')
        ->fill('email', 'jane@example.com')
        ->fill('password', 'password123!')
        ->press('@register-button')
        ->assertPathIs('/ideas');

    // 3. Perform the assertions INSIDE the function
    expect(User::where('email', 'jane@example.com')->exists())->toBeTrue();

    $this->assertAuthenticated();
});
