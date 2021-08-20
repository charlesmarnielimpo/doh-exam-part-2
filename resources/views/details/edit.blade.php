@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-6">
                {{-- Success Message --}}
                @if (session('success'))
                    <div class="alert alert-success d-flex align-items-center" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <div>
                            <strong>Success!</strong> {{ session('success') }}
                        </div>
                    </div>
                @endif

                <form method="POST" action="{{ route('crud.update', $detail) }}">
                    @csrf
                    @method('PUT')
                    
                    <div class="card">
                        <div class="card-header">
                            Laravel CRUD (Edit)
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="full-name-text" class="form-label">Full Name</label>
                                <input type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" id="full-name-text"  autofocus autocomplete="full_name" placeholder="John Doe" value="{{ $detail->full_name }}">
                                @error('full_name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email-address-text" class="form-label">E-mail Address</label>
                                <input type="email" class="form-control @error('email_address') is-invalid @enderror" name="email_address" id="email-address-text"  autocomplete="email_address" placeholder="example@email.com" value="{{ $detail->email_address }}">
                                @error('email_address')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="birth-date-text" class="form-label">Birth Date</label>
                                <input type="date" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date" id="birth-date-text"  autocomplete="birth_date" value="{{ $detail->birth_date }}">
                                @error('birth_date')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="position-applied-select">Position Applied</label>
                                <select class="form-select @error('position_applied') is-invalid @enderror" name="position_applied" id="position-applied-select"  aria-label="select example">
                                    <option value="Computer Programmer I" selected>Computer Programmer I</option>
                                </select>
                                @error('position_applied')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="edge-textarea" class="form-label">What's your edge over the other applicants?</label>
                                <textarea class="form-control @error('edge') is-invalid @enderror" name="edge" id="edge-textarea" placeholder="Lorem ipsum..."  autocomplete="edge" rows="5">{{ $detail->edge }}</textarea>
                                @error('edge')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection