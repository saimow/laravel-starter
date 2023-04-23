@push('scripts')

    <script>
        const type = getComputedStyle(document.documentElement).getPropertyValue('--cui-'+'{{ $type }}' );

        Toastify({
            text: "{{ $slot }}",
            duration: 5000,
            close: true,
            gravity: "top", // `top` or `bottom`
            position: "center", // `left`, `center` or `right`
            stopOnFocus: true, // Prevents dismissing of toast on hover
            style: {
                background: type,
            },
        }).showToast();
    </script>
    
@endpush
