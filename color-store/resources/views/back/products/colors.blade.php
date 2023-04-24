@for($i = 0; $i < $colorsCount; $i++)
<div class="one-color">
    <input type="color" name="color[]">  
    <input type="hidden" name="name[]">{{-- color[] --> i post nueis ne vienas color o visas masyvas --}}
    <div class="color-view"></div> {{-- color atvaizdavimas --}}
</div>
@endfor
