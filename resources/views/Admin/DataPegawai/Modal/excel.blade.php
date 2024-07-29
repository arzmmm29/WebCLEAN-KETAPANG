<!-- Modal for Import -->
<div class="modal fade" id="exampleModalLargeExcel" tabindex="-1" aria-labelledby="exampleModalLargeLabelExcel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLargeLabel">Import Data Pegawai</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="importForm" action="{{ url('DataPegawai/import') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="file" class="form-label">Pilih file untuk diimport</label>
                        <input class="form-control" type="file" id="file" name="file" accept=".xlsx, .xls">
                        <div id="fileError" class="alert alert-danger mt-2 d-none"></div>
                        @if ($errors->has('file'))
                            <div class="alert alert-danger mt-2">
                                {{ $errors->first('file') }}
                            </div>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary" id="importButton">Import</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('importButton').addEventListener('click', function(event) {
    event.preventDefault();

    const fileInput = document.getElementById('file');
    const fileError = document.getElementById('fileError');
    const allowedExtensions = /(\.xls|\.xlsx)$/i;

    if (!fileInput.value) {
        fileError.textContent = 'File wajib diunggah.';
        fileError.classList.remove('d-none');
    } else if (!allowedExtensions.exec(fileInput.value)) {
        fileError.textContent = 'File harus berupa file dengan format xls atau xlsx.';
        fileError.classList.remove('d-none');
    } else {
        fileError.classList.add('d-none');
        document.getElementById('importForm').submit();
    }
});
</script>
