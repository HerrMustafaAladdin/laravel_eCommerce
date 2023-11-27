@extends('admin.layouts.master')

@section('title', __('create permissions'))

@section('content')
    <div class="col-md-12">
        <div class="d-sm-flex align-items-center justify-content-between mb-4 bg-white p-2 shadow rounded">
            <h5 class="font-weight-bold">{{ __('Permissions') }}</h5>
            <a href="{{ route('admin-panel.permissions.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-eye fa-sm text-white-50"></i>
                {{ __('Index permissions') }}
            </a>
        </div>

        <div class="my-2 bg-white border shadow rounded p-4">
            <form action="{{ route('admin-panel.permissions.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="row">
                    {{-- name --}}
                    <div class="form-group col-md-3">
                        <label for="name">{{ __('Name') }}</label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- display_name --}}
                    <div class="form-group col-md-3">
                        <label for="display_name">{{ __('display name') }}</label>
                        <input type="text" name="display_name" id="display_name" class="form-control @error('display_name') is-invalid @enderror" value="{{ old('display_name') }}" dir="auto">
                        @error('display_name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                </div>

                {{-- buttons --}}
                <div class="btn-group" dir="ltr">

                    <a href="{{ url()->previous() }}" class="btn btn-dark">
                        {{ __('Go back') }}
                    </a>

                    <button type="submit" class="btn btn-md btn-primary">
                        {{ __('Save') }}
                    </button>
                </div>

            </form>
        </div>

    </div>


@endsection

@section('javascript')
    <script>
        $("#image").change(function(){
        let fileName = $(this).val();
        $(this).next('.custom-file-label').html(fileName)
        });

        // status
        $('#is_active').selectpicker({
            liveSearch: true,
            liveSearchPlaceholder: "{{ __('Searching') }}",
            multipleSeparator: " | ",
            title: "{{ __('Please select at least one ability.') }}"
        });
    </script>
@endsection
