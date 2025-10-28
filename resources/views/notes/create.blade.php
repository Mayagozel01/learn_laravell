<h1>Nowaya zametka</h1>
<form action="{{route('notes.store')}}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="zagolowok" required> <br>
    <textarea name="content" id="" placeholder="text"></textarea>
    <br>
    <button>Sohranit</button>

</form>