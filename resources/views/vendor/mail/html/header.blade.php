@props(['url'])

<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
                <div>
                    <img src="{{ asset('img/logo.png') }}" alt="Logo">
                    <b>Oceanskipper</b>
                </div>
            @else
                {{ $slot }}
            @endif
        </a>
    </td>
</tr>
