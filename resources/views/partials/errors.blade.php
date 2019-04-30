@if ($errors->any())
<div class="alert alert-danger rounded" role="alert">
    <ul>
        @foreach ($errors->all() as $error)
        <li class="px-2">{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
