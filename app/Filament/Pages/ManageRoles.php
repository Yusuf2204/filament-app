<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class ManageRoles extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-lock-closed';
    protected static ?string $navigationGroup = 'Setup';
    protected static string $view = 'filament.pages.manage-roles';
}
