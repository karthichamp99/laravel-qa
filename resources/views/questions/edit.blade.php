@extends('layouts.app')

@section('cdns')
<style>

</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h2>Edit Questions</h2>
                        <div class="ml-auto">
                            <a href="{{ route('questions.index') }}" class="btn btn-outline-secondary">Back to All Questions</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('questions.update', $question->id) }}" method="post">
                        @include("questions._form", ["buttonText" => "Update Question"])
                        {{ method_field('PUT') }}
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection