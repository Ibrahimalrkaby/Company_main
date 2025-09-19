<a href="{{ $href }}" class="btn btn-sm btn-{{ $color }}">
    @if ($isHtml)
        {!! $text !!}
    @else
        {{ $text }}
    @endif
</a>
