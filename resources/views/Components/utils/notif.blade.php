<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer);
                    toast.addEventListener('mouseleave', Swal.resumeTimer);
                }
            });

            @foreach (['success', 'warning', 'danger'] as $status)
                @if (session()->has($status))
                    Toast.fire({
                        icon: '{{ $status === 'success' ? 'success' : ($status === 'warning' ? 'warning' : 'error') }}',
                        title: '{{ session($status) }}'
                    });
                @endif
            @endforeach
        });
</script>
