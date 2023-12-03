@if(session('success'))
        <script>
            toastr.success('{{ session('success') }}', 'Success', {
                closeButton: true,
                progressBar: true,
                positionClass: 'toast-top-right',
                timeOut: 5000,
                extendedTimeOut: 2000,
                showDuration: 300,
                hideDuration: 1000,
                showEasing: 'swing',
                hideEasing: 'linear',
                showMethod: 'fadeIn',
                hideMethod: 'fadeOut'
            });
        </script>
@endif
