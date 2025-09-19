<form action="{{ route('admin.service.destroy', ['service' => $service]) }}" method='post' class="d-inline"
    id="deleteForm-{{ $service->id }}">
    @csrf
    @method('DELETE')
    <button type="button" class="btn btn-sm btn-danger" onclick="conformDelete({{ $service->id }})"><i
            class="fe fe-trash-2 fa-2x"></i></button>
</form>
