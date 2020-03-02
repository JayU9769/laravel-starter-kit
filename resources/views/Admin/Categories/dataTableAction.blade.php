<div class="btn-group">
    <a href="{{ route('category.edit',$query->slug) }}" class="btn btn-sm btn-primary btn-simple">
        <i class="fas fa-edit"></i>
    </a>
    {{--<button class="btn btn-sm btn-outline-primary">
        <i class="fas fa-eye"></i>
    </button>
    <button class="btn btn-sm btn-outline-danger">
        <i class="fas fa-trash"></i>
    </button>--}}
    <button type="button" data--toggle="delete"
            data--id="{{ $query->slug }}"
            data--url="{{ route('category.destroy', $query->slug) }}"
            class="btn btn-sm btn-danger  btn-simple">
        <i class="fas fa-trash"></i>
    </button>
</div>
