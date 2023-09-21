@props(['url'])
<tr>
<td class="header">
<a href="https://smart-guyz.com" style="display: inline-block;">Smart<span style="color: black !important">&nbsp;Guyz</span></a>
@if (trim($slot) === 'Smart Guyz')
{{--  --}}
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
