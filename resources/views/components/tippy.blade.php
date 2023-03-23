@props([
    'limit' => 100,
    'content' => null,
    'maxWidth' => 700,
    'theme' => 'light',
])

@php
    $shortContent = \Illuminate\Support\Str::limit($content, $limit);
@endphp

<div x-data="tippyComponent({{ json_encode($shortContent) }}, {{ json_encode($content) }}, {{ json_encode($theme) }}, {{ $maxWidth }})">
    @if(strlen($content) > $limit)
        <button
            {{ $attributes->merge(['class' => 'transition ease-in-out duration-150']) }}
            x-ref="button"
            x-init="initializeTippy()"
            x-text="teaser">
        </button>
    @else
        {{ $content }}
    @endif
</div>

@push('scripts')
    <script>
        function tippyComponent(shortContent, content, theme, maxWidth) {
            return {
                teaser: shortContent,
                content: content,
                theme: theme,
                maxWidth: maxWidth,
                initializeTippy() {
                    tippy(this.$refs.button, {
                        content: `<div class="p-4">${this.content}</div>`,
                        theme: this.theme,
                        maxWidth: this.maxWidth,
                        allowHTML: true,
                    });
                },
            };
        }
    </script>
@endpush
