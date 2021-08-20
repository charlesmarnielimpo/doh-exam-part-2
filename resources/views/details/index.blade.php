@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <h2>List of Applicant</h2>
            </div>
        </div>
        <div class="row">
            <div class="d-flex flex-row-reverse">
                <a href="{{ route('crud.create') }}" type="button" class="btn btn-dark mb-3">Add New</a>
            </div>
        </div>
        <div class="row">
            {{-- Success Message --}}
            @if (session('success'))
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    <div>
                        <strong> Success!</strong> {{ session('success') }}
                    </div>
                </div>
            @endif
        </div>
        <table class="table table-hover">
            <thead>
                <th>#</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Birth Date</th>
                <th>Position Applied</th>
                <th>Edge</th>
                <th style="width: 100px;">Action</th>
            </thead>
            <tbody>
                @forelse ($details as $detail)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $detail->full_name }}</td>
                        <td>{{ $detail->email_address }}</td>
                        <td>{{ $detail->birth_date }}</td>
                        <td>{{ $detail->position_applied }}</td>
                        <td class="text-truncate" style="max-width: 250px;">{{ $detail->edge }}</td>
                        <td>
                            <a href="{{ route('crud.edit', $detail->id) }}" class="btn btn-dark btn-sm" title="Edit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                            </a>
                            <button data-bs-toggle="modal" data-bs-target="#delete-{{ $detail->id }}" class="btn btn-dark btn-sm" title="Delete">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                            </button>
                        </td>
                    </tr>
                    @include('details.delete')
                @empty
                    <tr>
                        <td colspan="7" class="text-center">
                            <span>No records found.</span>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection