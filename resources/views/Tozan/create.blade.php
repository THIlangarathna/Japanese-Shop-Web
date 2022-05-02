@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h3>Tozan</h3>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Details required for Tozan</div>

                <div class="card-body">
                    <form method="POST" action="/Tozan" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="full_name" class="col-md-2 col-form-label text-md-left">Full Name : </label>
                        
                            <div class="col-md-10">
                                <input id="full_name" type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" value="{{ old('full_name') }}" required autocomplete="full_name">
                        
                                @error('full_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="surname" class="col-md-2 col-form-label text-md-left">Surname : </label>
                        
                            <div class="col-md-10">
                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname">
                        
                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="other_names" class="col-md-2 col-form-label text-md-left">Other Names : </label>
                        
                            <div class="col-md-10">
                                <input id="other_names" type="text" class="form-control @error('other_names') is-invalid @enderror" name="other_names" value="{{ old('other_names') }}" autocomplete="other_names">
                        
                                @error('other_names')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-2 col-form-label text-md-left">Address : </label>
                        
                            <div class="col-md-10">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">
                        
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row d-flex justify-content-between">
                        
                            <div class="col-md-2">
                            <label for="contact" class="col-md-12 col-form-label text-md-left">Contact :</label>
                            </div>
                        
                            <div class="col-md-10">
                            <div class="col-md-12 d-flex justify-content-between">
                            <label for="contact_home" class="col-md-2 col-form-label text-md-right">Home : </label>
                        
                            <div class="col-md-4">
                                <input id="contact_home" type="text" class="form-control @error('contact_home') is-invalid @enderror" name="contact_home" value="{{ old('contact_home') }}" autocomplete="contact_home">
                        
                                @error('contact_home')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                            <label for="contact_mobile" class="col-md-2 col-form-label text-md-right">Mobile : </label>
                        
                            <div class="col-md-4">
                                <input id="contact_mobile" type="text" class="form-control @error('contact_mobile') is-invalid @enderror" name="contact_mobile" value="{{ old('contact_mobile') }}" autocomplete="contact_mobile">
                        
                                @error('contact_mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>
                            <br>
                        
                            <div class="col-md-12 d-flex justify-content-between">
                        
                            <label for="contact_work" class="col-md-2 col-form-label text-md-right">Work : </label>
                        
                            <div class="col-md-4">
                                <input id="contact_work" type="text" class="form-control @error('contact_work') is-invalid @enderror" name="contact_work" value="{{ old('contact_work') }}" autocomplete="contact_work">
                        
                                @error('contact_work')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                            <label for="contact_whatsapp" class="col-md-2 col-form-label text-md-right">Whatsapp : </label>
                        
                            <div class="col-md-4">
                                <input id="contact_whatsapp" type="text" class="form-control @error('contact_whatsapp') is-invalid @enderror" name="contact_whatsapp" value="{{ old('contact_whatsapp') }}" autocomplete="contact_whatsapp">
                        
                                @error('contact_whatsapp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>
                            </div>
                        
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-left">Email : </label>
                        
                            <div class="col-md-10">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">
                        
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dob" class="col-md-2 col-form-label text-md-left">Date of Birth : </label>
                        
                            <div class="col-md-10">
                                <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}" required autocomplete="dob">
                        
                                @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="age" class="col-md-2 col-form-label text-md-left">Age : </label>
                        
                            <div class="col-md-10">
                                <input id="age" type="number" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" autocomplete="age">
                        
                                @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-2 col-form-label text-md-left">Gender : </label>
                        
                            <div class="col-md-6">
                                <input class="form-check-input ml-1" type="radio" name="gender" id="gender" value="Male">
                                <label class="form-check-label ml-4">Male</label><br>
                                <input class="form-check-input ml-1" type="radio" name="gender" id="gender" value="Female">
                                <label class="form-check-label ml-4">Female</label>
                        
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="occupation" class="col-md-2 col-form-label text-md-left">Occupation : </label>
                        
                            <div class="col-md-10">
                                <input id="occupation" type="text" class="form-control @error('occupation') is-invalid @enderror" name="occupation" value="{{ old('occupation') }}" autocomplete="occupation">
                        
                                @error('occupation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row d-flex justify-content-between">
                            <label for="passport_no" class="col-md-2 col-form-label text-md-left">Passport No : </label>
                        
                            <div class="col-md-4">
                                <input id="passport_no" type="text" class="form-control @error('passport_no') is-invalid @enderror" name="passport_no" value="{{ old('passport_no') }}" required autocomplete="passport_no">
                        
                                @error('passport_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                            <label for="passport_expiry_date" class="col-md-2 col-form-label text-md-right">Expiry Date : </label>
                        
                            <div class="col-md-4">
                                <input id="passport_expiry_date" type="date" class="form-control @error('passport_expiry_date') is-invalid @enderror" name="passport_expiry_date" value="{{ old('passport_expiry_date') }}" required autocomplete="passport_expiry_date">
                        
                                @error('passport_expiry_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row d-flex justify-content-between">
                            <label for="gojukai_received_date" class="col-md-2 col-form-label text-md-left">Gojukai Received Date : </label>
                        
                            <div class="col-md-4">
                                <input id="gojukai_received_date" type="date" class="form-control @error('gojukai_received_date') is-invalid @enderror" name="gojukai_received_date" value="{{ old('gojukai_received_date') }}" autocomplete="gojukai_received_date">
                        
                                @error('gojukai_received_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                            <label for="gohonzon_received_date" class="col-md-2 col-form-label text-md-right">Gohonzon Received Date : </label>
                        
                            <div class="col-md-4">
                                <input id="gohonzon_received_date" type="date" class="form-control @error('gohonzon_received_date') is-invalid @enderror" name="gohonzon_received_date" value="{{ old('gohonzon_received_date') }}" autocomplete="gohonzon_received_date">
                        
                                @error('gohonzon_received_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="chanting" class="col-md-4 col-form-label text-md-left">Whether the family members are chanting or not : </label>
                        
                            <div class="col-md-8">
                                <input id="chanting" type="text" class="form-control @error('chanting') is-invalid @enderror" name="chanting" value="{{ old('chanting') }}" autocomplete="chanting">
                        
                                @error('chanting')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="first_tozan" class="col-md-4 col-form-label text-md-left">First Tozan ? </label>
                        
                            <div class="col-md-8">
                                <input id="first_tozan" type="text" class="form-control @error('first_tozan') is-invalid @enderror" name="first_tozan" value="{{ old('first_tozan') }}" autocomplete="first_tozan">
                        
                                @error('first_tozan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="previous_tozans" class="col-md-4 col-form-label text-md-left">Previous Tozans (Years) : </label>
                        
                            <div class="col-md-8">
                                <input id="previous_tozans" type="text" class="form-control @error('previous_tozans') is-invalid @enderror" name="previous_tozans" value="{{ old('previous_tozans') }}" autocomplete="previous_tozans">
                        
                                @error('previous_tozans')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="illnesses" class="col-md-4 col-form-label text-md-left">Any long-term illnesses or are you taking medicine for any illnesses ? </label>
                        
                            <div class="col-md-8">
                                <input id="illnesses" type="text" class="form-control @error('illnesses') is-invalid @enderror" name="illnesses" value="{{ old('illnesses') }}" autocomplete="illnesses">
                        
                                @error('illnesses')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="wheelchair" class="col-md-4 col-form-label text-md-left">Wheelchair required or not ? </label>
                        
                            <div class="col-md-8">
                                <input id="wheelchair" type="text" class="form-control @error('wheelchair') is-invalid @enderror" name="wheelchair" value="{{ old('wheelchair') }}" autocomplete="wheelchair">
                        
                                @error('wheelchair')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contact_japan" class="col-md-4 col-form-label text-md-left">Contact number in Japan : </label>
                        
                            <div class="col-md-8">
                                <input id="contact_japan" type="text" class="form-control @error('contact_japan') is-invalid @enderror" name="contact_japan" value="{{ old('contact_japan') }}" autocomplete="contact_japan">
                        
                                @error('contact_japan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="members_names_tozan" class="col-md-4 col-form-label text-md-left">Few names of other members going on Tozan : </label>
                        
                            <div class="col-md-8">
                                <input id="members_names_tozan" type="text" class="form-control @error('members_names_tozan') is-invalid @enderror" name="members_names_tozan" value="{{ old('members_names_tozan') }}" autocomplete="members_names_tozan">
                        
                                @error('members_names_tozan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row d-flex justify-content-between">
                            <label for="tozan" class="col-md-1 col-form-label text-md-center">Tozan : </label>
                            <label for="tozan_years" class="col-md-1 col-form-label text-md-right">Year : </label>
                        
                            <div class="col-md-2">
                                <input id="tozan_years" type="number" class="form-control @error('tozan_years') is-invalid @enderror" name="tozan_years" value="{{ old('tozan_years') }}" autocomplete="tozan_years">
                        
                                @error('tozan_years')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                            <label for="tozan_months" class="col-md-1 col-form-label text-md-right">Months : </label>
                        
                            <div class="col-md-2">
                                <input id="tozan_months" type="number" class="form-control @error('tozan_months') is-invalid @enderror" name="tozan_months" value="{{ old('tozan_months') }}" autocomplete="tozan_months">
                        
                                @error('tozan_months')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                            <label for="tozan_days" class="col-md-3 col-form-label text-md-right">Days (Including traveling Days) : </label>
                        
                            <div class="col-md-2">
                                <input id="tozan_days" type="number" class="form-control @error('tozan_days') is-invalid @enderror" name="tozan_days" value="{{ old('tozan_days') }}" autocomplete="tozan_days">
                        
                                @error('tozan_days')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary float-right w-25">
                                    {{ __('Add') }}
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
