@extends('layouts.app')
@section('content')

    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">Tous les livres</h2>
                </div>
                <div class="offset-md-7 col-md-2">
                    <a class="add-new" href="{{ route('book.create') }}">Add Book</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="message"></div>
                    <table class="content-table">
                        <thead>
                            <th>S.No</th>
                            <th>Non du livre</th>
                            <th>Categorie</th>
                            <th>Auteur</th>
                            <th>Publieur</th>
                            <th>Status</th>
                            <th>Modifier</th>
                            <th>Effacer</th>
                        </thead>
                        <tbody>
                            @forelse ($books as $book)
                                <tr>
                                    <td class="id">{{ $book->id }}</td>
                                    <td>{{ $book->name }}</td>
                                    <td>{{ $book->category->name }}</td>
                                    <td>{{ $book->auther->name }}</td>
                                    <td>{{ $book->publisher->name }}</td>
                                    <td>
                                        @if ($book->status == 'Y')
                                            <span class='badge badge-success'>Available</span>
                                        @else
                                            <span class='badge badge-danger'>Issued</span>
                                        @endif
                                    </td>
                                    <td class="edit">
                                        <a href="{{ route('book.edit', $book) }}" class="btn btn-success">Modifier</a>
                                    </td>
                                    <td class="delete">
                                        <form action="{{ route('book.destroy', $book) }}" method="post"
                                            class="form-hidden">
                                            <button class="btn btn-danger delete-book">Effacer</button>
                                            @csrf
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8">Aucun livre trouvé</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $books->links('vendor/pagination/bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection
