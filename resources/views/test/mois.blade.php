
<ul>
@php
    $total = $nbrPair = $nbrImpair = 0;
    
@endphp
@foreach ($mois as $key => $value)
    @php
        $class = "style=color:#00F";
        if ($value%2) {
            $nbrImpair++;
            $class = "style=color:#F00";
        } else {
            $class = "style=color:#00F";
            $nbrPair++;
        }
        $total+=$value;
    @endphp
    <li {{ $class }}>mois : {{ $key }} : {{ $value }} total : {{ $total }}</li>   
    
@endforeach
</ul>
il y a {{ $nbrPair }} mois pairs et {{ $nbrImpair }} mois impairs