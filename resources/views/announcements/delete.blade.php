<!-- Inside resources/views/posts/delete.blade.php -->
<h1>Delete Announcement</h1>
<p>Are you sure you want to delete this announcement?</p>
<form method="post" action="{{ route('announcement.destroy', $announcement) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Delete Post</button>
</form>
