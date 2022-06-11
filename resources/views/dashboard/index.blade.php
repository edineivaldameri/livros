<x-auth-layout>
    <div class="d-flex flex-wrap flex-stack pb-7">
        <x-dashboard.search-actions />
    </div>

    <x-dashboard.pane-books-table :books="$books" />

    <div class="row mt-5">
        {{ $books->links() }}
    </div>

    @section('scripts')
        <script>
            $('.show-alert-delete-box').click(function(event){
                var form =  $(this).closest("form");
                event.preventDefault();
                Swal.fire({
                    title: "Tem certeza de que deseja excluir este registro?",
                    text: "Se você excluir isso, ele desaparecerá para sempre!",
                    icon: "warning",
                    buttonsStyling: false,
                    showCancelButton: false,
                    showDenyButton: true,
                    showConfirmButton: true,
                    confirmButtonText: "Cancelar",
                    denyButtonText: 'OK. EXCLUIR!',
                    customClass: {
                        confirmButton: "btn btn-primary",
                        denyButton: 'btn btn-danger'
                    }
                }).then((result) => {
                    if (result.isDenied) {
                        form.submit();
                    }
                });
            });
        </script>
    @endsection
</x-auth-layout>
