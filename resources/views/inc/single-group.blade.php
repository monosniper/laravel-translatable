@isset($filteredItems[$col][$name][$key])
    <div class="item">
        <label for="{{ $name . '.' . $key }}" class="item__key">
            {{ config("$config.keys.$key") !== null ? config("$config.keys.$key") : $key }}
        </label>
        <div class="item__value">
                        <textarea
                            @disabled($loading)
                            @class([$language === 'ru' ? '' : 'd-none'])
                            rows="1"
                            x-init="$nextTick(() => resize())"
                            x-data="{
                                resize() {
                                    $el.style.height = 'auto';
                                    $el.style.height = $el.scrollHeight + 'px';
                                }
                            }"
                            x-on:resize-textarea.window="
                                setTimeout(() => {
                                    resize();
                                }, 10);
                            "
                            @input="resize()"
                            wire:model.live="items.{{ $page }}.ru.{{ $col }}.{{ $name }}.{{ $key }}"
                            name="{{ $name . '.' . $key }}"
                            id="{{ $name . '.' . $key }}"
                        ></textarea>
            <textarea
                @disabled($loading)
                @class([$language === 'en' ? '' : 'd-none'])
                rows="1"
                x-init="$nextTick(() => resize())"
                x-data="{
                                resize() {
                                    $el.style.height = 'auto';
                                    $el.style.height = $el.scrollHeight + 'px';
                                }
                            }"
                x-on:resize-textarea.window="
                                setTimeout(() => {
                                    resize();
                                }, 10);
                            "
                @input="resize()"
                wire:model.live="items.{{ $page }}.en.{{ $col }}.{{ $name }}.{{ $key }}"
                name="{{ $name . '.' . $key }}"
                id="{{ $name . '.' . $key }}"
            ></textarea>
            <textarea
                @disabled($loading)
                @class([$language === 'uz' ? '' : 'd-none'])
                rows="1"
                x-init="$nextTick(() => resize())"
                x-data="{
                                resize() {
                                    $el.style.height = 'auto';
                                    $el.style.height = $el.scrollHeight + 'px';
                                }
                            }"
                x-on:resize-textarea.window="
                                setTimeout(() => {
                                    resize();
                                }, 10);
                            "
                @input="resize()"
                wire:model.live="items.{{ $page }}.uz.{{ $col }}.{{ $name }}.{{ $key }}"
                name="{{ $name . '.' . $key }}"
                id="{{ $name . '.' . $key }}"
            ></textarea>
        </div>
    </div>
@endisset
