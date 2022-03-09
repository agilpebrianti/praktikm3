@extends('layouts.admin.app')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row ml-3">
                    <h4 class="card-title">{{ $title }}</h4>
                    <div class="d-flex ml-3">
                        <a href="/add-post" class="btn btn-primary">Create Post</a>
                    </div>
                    </div>
                </div>
                </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                        <table class="table">
                            <thead class="text-black">
                                <th scope="col">#</th>
                                <th scope="col"> Title </th>
                                <th scope="col"> Description </th>
                                <th scope="col"> Slug </th>
                                <th scope="col"> Body </th>
                                <th scope="col">Action</th>
                            </thead>
                            <tbody>
                                @php $i=0 @endphp
                                @foreach($articles as $article)
                                @php $i++ @endphp
                                <tr>
                                  <th scope="row">1</th>
                                    <td> {{ $i }} </td>
                                    <td> {{ $article->title }} </td>
                                    <td> {{ $article->description }} </td>
                                    <td> {{ $article->slug }} </td>
                                    {{-- <td> {!! $article->body !!} </td> --}}
                                    <td>
                                    <form method="POST" action="{{ route('article.destroy', $article->id) }}">
                                       <a button type="button" class="btn btn-warning" href="{{ route('article.edit', $article->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                    </td>
                                </tr>
                                @endforeach
                            </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

