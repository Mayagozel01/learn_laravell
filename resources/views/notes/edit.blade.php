<h1>Редактировать</h1>
<form method="POST" action="{{ route('notes.update', $note) }}">
    @csrf @method('PATCH')
    <input type="text" name="title" value="{{ $note->title }}" required><br>
    <textarea name="content" required>{{ $note->body }}</textarea><br>
    <button>Обновить</button>
</form>