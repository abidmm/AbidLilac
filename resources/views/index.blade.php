@extends('Layouts.layout')
@section('content')
    <style>
        .bg-shadow {
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
            transition: box-shadow 0.3s ease;
        }

        .bg-shadow:hover {
            box-shadow: rgba(60, 64, 67, 0.4) 0px 2px 4px 0px, rgba(60, 64, 67, 0.25) 0px 4px 8px 4px;
        }
    </style>
    <h1>Search</h1>

    <input type="text" name="searchList" id="searchList" class="form-control rounded-4 p-3" placeholder="Search">


    <div class="row" id="userCard">
        @foreach ($users as $user)
            <div class="col-6 mt-4 user-details">
                <div class="card rounded-4 bg-shadow">
                    <div class="card-body">
                        <h4>{{ $user->name }}</h4>
                        <p> {{ $user->department->name }} </p>
                        <p> {{ $user->designation->name }} </p>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#searchList').on('keyup', function() {
                var search = $(this).val().toLowerCase();

                $("#userCard .user-details").each(function() {
                    var text = $(this).text().toLowerCase();

                    $(this).toggle(text.indexOf(search) > -1);
                });
            });
        });
    </script>
@endpush
