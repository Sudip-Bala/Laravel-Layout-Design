<ul>
    @foreach($learnerKey as $each)
        <li><b>First Name:</b> {{$each['fname']}} <b>Last Name:</b> {{$each['lname']}}<li>

    @endforeach
</ul>
