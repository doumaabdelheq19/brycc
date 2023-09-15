@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Brycyler')
<img src="./Imeges/Brecycler2 Chosen-02 (1).png" class="logo" alt="Brycyler Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
