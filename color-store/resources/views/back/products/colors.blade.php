@for($i = 0; $i < $colorsCount; $i++)
<div class="one-color">
    <input type="color" name="color[]">{{-- color[] --> i post nueis ne vienas color o visas masyvas --}}
    <input type="hidden" name="name[]">
    <div class="color-view"></div> {{-- color atvaizdavimas --}}
</div>
@endfor
