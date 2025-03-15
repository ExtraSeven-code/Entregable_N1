<div class="space-y-6">
    
    <div>
        <x-input-label for="servicio" :value="__('Servicio')"/>
        <x-text-input wire:model="form.servicio" id="servicio" name="servicio" type="text" class="mt-1 block w-full" autocomplete="servicio" placeholder="Servicio"/>
        @error('form.servicio')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="nombre" :value="__('Nombre')"/>
        <x-text-input wire:model="form.nombre" id="nombre" name="nombre" type="text" class="mt-1 block w-full" autocomplete="nombre" placeholder="Nombre"/>
        @error('form.nombre')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="descripción" :value="__('Descripción')"/>
        <x-text-input wire:model="form.descripción" id="descripción" name="descripción" type="text" class="mt-1 block w-full" autocomplete="descripción" placeholder="Descripción"/>
        @error('form.descripción')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="disponibilidad" :value="__('Disponibilidad')"/>
        <x-text-input wire:model="form.disponibilidad" id="disponibilidad" name="disponibilidad" type="text" class="mt-1 block w-full" autocomplete="disponibilidad" placeholder="Disponibilidad"/>
        @error('form.disponibilidad')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="costo" :value="__('Costo')"/>
        <x-text-input wire:model="form.costo" id="costo" name="costo" type="text" class="mt-1 block w-full" autocomplete="costo" placeholder="Costo"/>
        @error('form.costo')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="horario" :value="__('Horario')"/>
        <x-text-input wire:model="form.horario" id="horario" name="horario" type="text" class="mt-1 block w-full" autocomplete="horario" placeholder="Horario"/>
        @error('form.horario')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>