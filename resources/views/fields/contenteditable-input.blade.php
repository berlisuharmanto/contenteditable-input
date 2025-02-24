@php
    $datalistOptions = $getDatalistOptions();
    $extraAlpineAttributes = $getExtraAlpineAttributes();
    $hasInlineLabel = $hasInlineLabel();
    $id = $getId();
    $isConcealed = $isConcealed();
    $isDisabled = $isDisabled();
    $isPrefixInline = $isPrefixInline();
    $isSuffixInline = $isSuffixInline();
    $prefixActions = $getPrefixActions();
    $prefixIcon = $getPrefixIcon();
    $prefixLabel = $getPrefixLabel();
    $suffixActions = $getSuffixActions();
    $suffixIcon = $getSuffixIcon();
    $suffixLabel = $getSuffixLabel();
    $statePath = $getStatePath();

    if (count($extraAlpineAttributes)) {
        $xData = '{}';
    } else {
        $xData = null;
    }
@endphp
<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">
    <x-filament::input.wrapper
        :disabled="$isDisabled"
        :inline-prefix="$isPrefixInline"
        :inline-suffix="$isSuffixInline"
        :prefix="$getPrefixLabel()"
        :prefix-actions="$prefixActions"
        :prefix-icon="$prefixIcon"
        :prefix-icon-color="$getPrefixIconColor()"
        :suffix="$getSuffixLabel()"
        :suffix-actions="$suffixActions"
        :suffix-icon="$suffixIcon"
        :suffix-icon-color="$getSuffixIconColor()"
        :valid="! $errors->has($statePath)"
        :x-data="$xData"
        :attributes="
            \Filament\Support\prepare_inherited_attributes($getExtraAttributeBag())
                ->class(['fi-fo-text-input overflow-hidden'])
        "
        x-data="{
        state: $wire.entangle('{{ $getStatePath() }}'),
        text: '{{ $field->getState() ?? '' }}'
    }" x-init="$refs.chatInput.innerHTML = text" x-ref="chatInputWrapper"
        @clear-chat-input.window="text = ''; state = ''; $refs.chatInput.innerHTML = '{{ $field->getPlaceholder() }}'"
        class="fi-input-wrp fi-fo-text-area overflow-auto rounded-lg ring-1 ring-gray-950/10 transition duration-75 dark:ring-white/20 [&:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 [&:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600">
        <!-- Editable Content -->
        <div contenteditable="{{ $isDisabled ? 'false' : 'true' }}" x-ref="chatInput"
            @input="text = $event.target.innerText.trim(); state = text; $dispatch('input', text)"
            @focusout="if(text.trim() === '') { text = ''; $refs.chatInput.innerHTML = text; }"
            class="max-h-[200px] min-h-[40px] text-base w-full py-1.5 px-3 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)]  dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3 {{ $isDisabled ? 'dark:text-gray-400' : 'dark:text-white' }}"
            style="white-space: pre-wrap;" placeholder="{{ $field->getPlaceholder() }}" role="textbox"></div>

        <!-- Placeholder Fix -->
        <style>
            [contenteditable=true]:empty:before {
                content: attr(placeholder);
                color: gray;
                pointer-events: none;
                display: block;
            }
        </style>
    </x-filament::input.wrapper>
</x-dynamic-component>
