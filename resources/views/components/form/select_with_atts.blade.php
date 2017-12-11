<div class="form-group">
    {{ Form::label($name, $label, ['class' => 'control-label']) }}
    <select name="{{ $name }}" id="{{ $name }}" class="form-control">
        <option value="">Seleccione una región</option>
        @foreach ($options as $option)
        <option @foreach (array_merge(['value' => $option[1]], $option[2]) as $key => $value)
            {{ $key }}="{{ $value }}"
        @endforeach
        @if ($option[1] == $selected) selected
        @endif
        >
            {{ $option[0] }}
        </option>
        @endforeach
    </select>
</div>