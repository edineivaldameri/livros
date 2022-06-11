<tr>
    <td>
        <!--begin::User-->
        <div class="d-flex align-items-center">
            <!--begin::Info-->
            <div class="d-flex flex-column justify-content-center">
                <span class="mb-1 text-gray-800">
                    {{ $book->title }}
                </span>
                <span class="fw-bold fs-6 text-gray-400">
                    {{ $book->author }}
                </span>
            </div>
            <!--end::Info-->
        </div>
        <!--end::User-->
    </td>
    <td>
        {{ $book->created_at->format('d/m/Y') }}
    </td>
    <td>
        <span class="badge badge-light-primary fw-bolder px-4 py-3">
            {{ $book->pages }}
        </span>
    </td>
    <td class="text-end">
        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-sm btn-icon btn-light-primary" title="Editar" alt="Editar">
            <span class="svg-icon svg-icon-5 m-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M2 4.63158C2 3.1782 3.1782 2 4.63158 2H13.47C14.0155 2 14.278 2.66919 13.8778 3.04006L12.4556 4.35821C11.9009 4.87228 11.1726 5.15789 10.4163 5.15789H7.1579C6.05333 5.15789 5.15789 6.05333 5.15789 7.1579V16.8421C5.15789 17.9467 6.05333 18.8421 7.1579 18.8421H16.8421C17.9467 18.8421 18.8421 17.9467 18.8421 16.8421V13.7518C18.8421 12.927 19.1817 12.1387 19.7809 11.572L20.9878 10.4308C21.3703 10.0691 22 10.3403 22 10.8668V19.3684C22 20.8218 20.8218 22 19.3684 22H4.63158C3.1782 22 2 20.8218 2 19.3684V4.63158Z" fill="black"/>
                    <path d="M10.9256 11.1882C10.5351 10.7977 10.5351 10.1645 10.9256 9.77397L18.0669 2.6327C18.8479 1.85165 20.1143 1.85165 20.8953 2.6327L21.3665 3.10391C22.1476 3.88496 22.1476 5.15129 21.3665 5.93234L14.2252 13.0736C13.8347 13.4641 13.2016 13.4641 12.811 13.0736L10.9256 11.1882Z" fill="black"/>
                    <path d="M8.82343 12.0064L8.08852 14.3348C7.8655 15.0414 8.46151 15.7366 9.19388 15.6242L11.8974 15.2092C12.4642 15.1222 12.6916 14.4278 12.2861 14.0223L9.98595 11.7221C9.61452 11.3507 8.98154 11.5055 8.82343 12.0064Z" fill="black"/>
                </svg>
            </span>
        </a>
        <a href="{{ route('books.show', $book->id) }}" class="btn btn-sm btn-icon btn-light-info" title="Visualizar Detalhes" alt="Visualizar Detalhes">
            <span class="svg-icon svg-icon-5 m-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path opacity="0.3" d="M21 22H12C11.4 22 11 21.6 11 21V3C11 2.4 11.4 2 12 2H21C21.6 2 22 2.4 22 3V21C22 21.6 21.6 22 21 22ZM15.4 17L19.7 12.7C20.1 12.3 20.1 11.7 19.7 11.3L15.4 7V17Z" fill="black"/>
                    <path d="M15.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H15.4V11Z" fill="black"/>
                </svg>
            </span>
        </a>
        <form class="d-inline" action="{{ route('books.destroy', $book->id) }}" method="POST">
            <button type="submit" class="btn btn-sm btn-icon btn-light-danger show-alert-delete-box" title="Excluir Registro" alt="Excluir Registro">
                <span class="svg-icon svg-icon-5 m-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
                        <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="black" />
                        <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="black" />
                    </svg>
                </span>
            </button>
            @csrf
            @method('DELETE')
        </form>
    </td>
</tr>


