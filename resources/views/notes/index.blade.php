@section('content')
<h1>
    Zametki
</h1>
<a href="{{route('notes.create')}}">+ Novaya zametka</a>
@if (session('success'))
<p style="color:green;">{{ session('success')}}</p>
@endif
<ul>
    @foreach($notes as $note)
    <li>
        <a href="{{route('notes.show', $note)}}">{{$note->title}}</a>
        <form action="{{route('notes.destroy', $note)}}" method="POST" style="display:inline">
            @csrf @method('DELETE')
            <button type="submit" onclick='return confirm("Udalit?")'>Udalit</button>
        </form>
        <a href="{{ route('notes.edit', $note) }}">REdaktirowat</a>
    </li>
    @endforeach
</ul>