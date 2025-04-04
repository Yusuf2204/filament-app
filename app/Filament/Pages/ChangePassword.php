<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Form;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;

class ChangePassword extends Page
{
    protected static ?string $navigationGroup = 'Setup';
    protected static ?string $navigationLabel = 'Change Password';
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.change-password';

    public ?string $current_password = '';
    public ?string $new_password = '';
    public ?string $new_password_confirmation = '';

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('current_password')
                    ->label('Old Password')
                    ->password()
                    ->required(),

                Forms\Components\TextInput::make('new_password')
                    ->label('New Password')
                    ->password()
                    ->required()
                    ->minLength(4),

                Forms\Components\TextInput::make('new_password_confirmation')
                    ->label('Confirm New Password')
                    ->password()
                    ->required()
                    ->same('new_password'),
            ])
            ->statePath('');
    }

    public function updatePassword()
    {
        $user = auth()->user();

        if (!Hash::check($this->current_password, $user->password)) {
            Notification::make()
                ->title('Wrong Password.')
                ->danger()
                ->send();
            return;
        }

        $user->update([
            'password' => Hash::make($this->new_password),
        ]);

        $this->reset(['current_password', 'new_password', 'new_password_confirmation']);

        Notification::make()
            ->title('Password Changed.')
            ->success()
            ->send();
    }
}
