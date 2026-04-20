<?php

test('registration screen can be rendered', function () {
    /** @var \Tests\TestCase $this */
    $response = $this->get(route('register'));

    $response->assertOk();
});

test('new users can register', function () {
    /** @var \Tests\TestCase $this */
    $response = $this->post(route('register.store'), [
        'name' => 'John Doe',
        'email' => 'test@example.com',
        'password' => 'NewPass@123',
        'password_confirmation' => 'NewPass@123',
    ]);

    $response->assertSessionHasNoErrors()
        ->assertRedirect(route('dashboard', absolute: false));

    $this->assertAuthenticated();
});