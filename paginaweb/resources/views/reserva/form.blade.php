<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="user_id" class="form-label">{{ __('User Id') }}</label>
            <select name="user_id" class="form-control @error('user_id') is-invalid @enderror" id="user_id">
                <option value="">{{ __('Seleccione un usuario') }}</option>
                @foreach($usuarios as $id => $nombre)
                    <option value="{{ $id }}" {{ old('user_id', $reserva?->user_id) == $id ? 'selected' : '' }}>
                        {{ $nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="servicio_id" class="form-label">{{ __('Servicio Id') }}</label>
            <select name="servicio_id" class="form-control @error('servicio_id') is-invalid @enderror" id="servicio_id">
                <option value="">{{ __('Seleccione un servicio') }}</option>
                @foreach($servicios as $id => $nombre)
                    <option value="{{ $id }}" {{ old('servicio_id', $reserva?->servicio_id) == $id ? 'selected' : '' }}>
                        {{ $nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('servicio_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>