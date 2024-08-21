<div data-title="{{ config($config.'.groups.'.$name, $name) }}" class="block">
    @foreach($group as $key => $value)
        @if(is_array($value))
            @include('translatable::inc.group', ['group' => $value, 'name' => $key])
        @else
            @include('translatable::inc.single-group')
        @endif
    @endforeach
</div>
