<div>
    <h1>this is header component</h1>
    <h2>welcome to, {{$name}}</h2>
    <hr>
    <h2>danh sách fruits</h2>
    <ul>
        @foreach ($fruits as $item)
            <li>{{$item}}</li>
        @endforeach
    </ul>
</div>