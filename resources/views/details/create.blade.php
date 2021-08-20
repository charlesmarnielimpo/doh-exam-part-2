@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-6">
                <form action="{{ route('crud.store') }}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            Laravel CRUD (Add)
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="full-name-text" class="form-label">Full Name</label>
                                <input type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" id="full-name-text"  autofocus autocomplete="full_name" placeholder="John Doe" value="{{ old('full_name') }}">
                                @error('full_name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email-address-text" class="form-label">E-mail Address</label>
                                <input type="email" class="form-control @error('email_address') is-invalid @enderror" name="email_address" id="email-address-text"  autocomplete="email_address" placeholder="example@email.com" value="{{ old('email_address') }}">
                                @error('email_address')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="birth-date-text" class="form-label">Birth Date</label>
                                <input type="date" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date" id="birth-date-text"  autocomplete="birth_date" value="{{ old('birth_date') }}">
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
                                <textarea class="form-control @error('edge') is-invalid @enderror" name="edge" id="edge-textarea" placeholder="Lorem ipsum..."  autocomplete="edge" rows="5">{{ old('edge') }}</textarea>
                                @error('edge')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection