<?php

namespace App\Livewire\Forms;

use App\Models\Reserva;
use Livewire\Form;

class ReservaForm extends Form
{
    public ?Reserva $reservaModel;
    

    public function rules(): array
    {
        return [
        ];
    }

    public function setReservaModel(Reserva $reservaModel): void
    {
        $this->reservaModel = $reservaModel;
        
    }

    public function store(): void
    {
        $this->reservaModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->reservaModel->update($this->validate());

        $this->reset();
    }
}
