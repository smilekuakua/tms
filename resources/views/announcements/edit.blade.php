
<x-supervisor-layout>
<h1>Edit Announcement</h1>
<form method="post" action="{{ route('announcement.update', $announcement) }}">
    @csrf
    @method('PUT')
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" value="{{ $announcement->title }}" required>
    <label for="content">Content:</label>
    <textarea name="content" id="content" required>{{ $announcement->content }}</textarea>
    <button type="submit">Update Announce</button>
</form>
</x-supervisor-layout>
