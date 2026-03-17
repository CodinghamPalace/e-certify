<?php

use App\Livewire\Settings\Password;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Livewire;

test('password can be updated', function () {
    /** @var \Tests\TestCase $this */
    $user = User::factory()->create([
        'password' => Hash::make('Current@123'),
    ]);
    /** @var User $user */

    $this->actingAs($user);

    $response = Livewire::test(Password::class)
        ->set('current_password', 'Current@123')
        ->set('password', 'NewPass@123')
        ->set('password_confirmation', 'NewPass@123')
        ->call('updatePassword');

    $response->assertHasNoErrors();

    expect(Hash::check('NewPass@123', $user->refresh()->password))->toBeTrue();
});

test('correct password must be provided to update password', function () {
    /** @var \Tests\TestCase $this */
    $user = User::factory()->create([
        'password' => Hash::make('Current@123'),
    ]);
    /** @var User $user */

    $this->actingAs($user);

    $response = Livewire::test(Password::class)
        ->set('current_password', 'wrong-password')
        ->set('password', 'NewPass@123')
        ->set('password_confirmation', 'NewPass@123')
        ->call('updatePassword');

    $response->assertHasErrors(['current_password']);
});