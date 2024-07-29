<form action="{{ url($url, $id) }}" method="post" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
    @csrf
    @method('delete')
    <button class="btn btn-sm btn-outline-danger btn-mat"><i class="bi bi-trash"></i></button>
</form>
