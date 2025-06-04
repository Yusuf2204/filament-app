<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class RoleManager extends Component
{
    use WithPagination;

    public $roleId;
    public $name;
    public $primaryKey = 'id';

    protected $rules = [
        'name' => 'required|string|max:255',
    ];

    public function __construct() {
        $this->form = [
            [
                'label' => 'Role',
                'field' => 'name',
                'type' => 'textarea'
            ]
        ];

        $this->grid = [
            [
                'label' => 'Role',
                'field' => 'name',
                'value' => 'name',
                'type' => 'text'
            ],
        ];
    }

    public function save()
    {
        $this->validate();

        Role::updateOrCreate(
            ['id' => $this->roleId],
            ['name' => $this->name]
        );

        $this->reset(['name', 'roleId']);
    }

    public function edit($id)
    {
        $role = Role::findOrFail($id);
        $this->roleId = $role->id;
        $this->name = $role->name;
    }

    public function delete($id)
    {
        Role::findOrFail($id)->delete();
    }

    public function render()
    {
        $query = Role::latest()->paginate(10);
        return view('livewire.master', [
            'pK' => $this->primaryKey,
            'data' => $query,
            'form' => $this->form,
            'grid' => $this->grid
        ]);
    }
}
