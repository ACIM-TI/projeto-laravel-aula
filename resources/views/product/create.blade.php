@extends('layouts.app')
@section('content')
    <div class="modal fade" id="deleteConfirmationModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">Adicionar novo produto</div>
                <div class="modal-footer">
                    <form id="delete-frm" class="" action="{{ route('products.store') }}" method="POST">
                        @method('POST')
                        @csrf
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title">
                        <label for="description">Description</label>
                        <input type="text" name="description" id="description">
                        <label for="short_notes">Short Notes</label>
                        <input type="text" name="short_notes" id="short_notes">
                        <label for="price">Price</label>
                        <input type="text" name="price" id="price">
                        <label for="image">Image</label>
                        <input type="text" name="image" id="image">
                        <label for="slug">Slug</label>
                        <input type="text" name="slug" id="slug">
                        <button class="btn btn-danger">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

@endsection
