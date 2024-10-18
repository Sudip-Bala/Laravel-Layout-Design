<h1>Home</h1>

<ul>
    @foreach($learnerKey as $each)
        <li><b>First Name:</b> {{$each['fname']}} <b>Last Name:</b> {{$each['lname']}}<li>

    @endforeach
</ul>


<h1>1 to 100</h1>

@for($i=0;$i<10;$i=$i+1)
    ITEM NUMBER {{$i}} <br/>
@endfor

<h1>Simple Math</h1>
{{2+2}}<br/>
{{20-2}}<br/>
{{20/2}}<br/>
{{2*2}}<br/>


<h1>Raw PHP Inside Blade Template Engine</h1>

@php
$num1 = 10;
$num2 = 20;

echo $num1 + $num2;
 @endphp

<hr/>

<h1>Including Child/Subview</h1>

@include('component.hero',['num1'=>$num1,'num2'=>$num2]),
@include('component.contact'),
@include('component.features'),
@include('component.learner')

<hr/>

<h1>Working With if else</h1>
@php
$marks= 50
@endphp

@if($marks<=100 && $marks>=80)
    <h3>A+</h3>

@elseif($marks<80 && $marks>=70)
    <h3>A</h3>

@elseif($marks<70 && $marks>=60)
    <h3>A</h3>

    @else
    <h3>Fail</h3>
@endif

<hr/>

<h1>Static Assets</h1>
<img alt="img" width="300" height="150" src="{{asset('https://cdn.ostad.app/course/photo/2024-10-02T14-42-04.811Z-Course%20Thumbnail%2005%20v2.jpg')}}">
<img alt="img" width="300" height="150" src="{{asset('photos/img-1.jpg')}}">
