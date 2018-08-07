@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Blog</div>

                <div class="card-body">
                    <a class="btn btn-primary mb-5" href="{{ route('blog.create') }}">Add Blog</a>
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Title</td>
                                    <td>Content</td>
                                    <td>Slug</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($blogs as $key => $blog)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $blog->title }}</td>
                                    <td>{{ str_limit($blog->content, 50) }}</td>
                                    <td>{{ $blog->slug }}</td>
                                    <td>
                                        <a href="{{ route('blog.edit', ['id' => $blog->id]) }}" class="btn btn-primary mt-1 text-center">Edit</a>
                                        <button href="" class="btn btn-danger mt-1 text-center">Delete</button>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td>No Blog Post</td>
                                </tr>
                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="3">{{ $blogs->links() }}</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
