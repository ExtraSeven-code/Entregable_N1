<?php

namespace App\Livewire\Forms;

use App\Models\Servicio;
use Livewire\Form;

class ServicioForm extends Form
{
    public ?Servicio $servicioModel;
    
    public $servicio = '';
    public $nombre = '';
    public $descripción = '';
    public $disponibilidad = '';
    public $costo = '';
    public $horario = '';

    public function rules(): array
    {
        return [
			'servicio' => 'required|string',
			'nombre' => 'required|string',
			'descripción' => 'required|string',
			'disponibilidad' => 'required|string',
			'costo' => 'required|string',
			'horario' => 'required|string',
        ];
    }

    public function setServicioModel(Servicio $servicioModel): void
    {
        $this->servicioModel = $servicioModel;
        
        $this->servicio = $this->servicioModel->servicio;
        $this->nombre = $this->servicioModel->nombre;
        $this->descripción = $this->servicioModel->descripción;
        $this->disponibilidad = $this->servicioModel->disponibilidad;
        $this->costo = $this->servicioModel->costo;
        $this->horario = $this->servicioModel->horario;
    }

    public function store(): void
    {
        $this->servicioModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->servicioModel->update($this->validate());

        $this->reset();
    }
}
