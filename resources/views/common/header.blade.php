<div>
   Header file 
   <h2>{{$msg}}</h2>
   <!-- <h2>{{rand()}}</h2> -->
    <h1>{{$name}}</h1>

@if($name=="swikriti")
<h2>this is swikriti</h2>

@elseif($name=='swikar')
<h2>this is swikar</h2>

@else
<h2>other users</h2>

@endif
</div>

<div>
    @for($i=0;$i<10;$i++)
    <h1>{{$i}}</h1>

    @endfor


@foreach($user as $user)
<h5>{{$user}}</h5>

@endforeach



</div>
