@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Blog</div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Title</td>
                                    <td>Content</td>
                                    <td>Slug</td>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($blogs as $key => $blog)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $blog->title }}</td>
                                    <td>{{ str_limit($blog->content, 50) }}</td>
                                    <td>{{ $blog->slug }}</td>
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
