@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h3>Details of Gojukai Receivers</h3>
        <div class="col-md-12">
            <form method="POST" action="/Gojukai/{{ $gojukai->id }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

            <div class="card">
                <div class="card-header">Applicant</div>
                <div class="card-body">
                    
                        <div class="form-group row">
                            <label for="a_name" class="col-md-2 col-form-label text-md-left">Full Name : </label>
                        
                            <div class="col-md-10">
                                <input id="a_name" type="text" class="form-control @error('a_name') is-invalid @enderror" name="a_name" value="{{ $gojukai->a_name }}" required autocomplete="a_name">
                        
                                @error('a_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row d-flex justify-content-between">
                            <label for="a_address" class="col-md-1 col-form-label text-md-center">Address : </label>
                            <label for="a_address_permanent" class="col-md-2 col-form-label text-md-right">Permanent : </label>
                        
                            <div class="col-md-4">
                                <input id="a_address_permanent" type="text" class="form-control @error('a_address_permanent') is-invalid @enderror" name="a_address_permanent" value="{{ $gojukai->a_address_permanent }}" required autocomplete="a_address_permanent">
                        
                                @error('a_address_permanent')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="a_address_current" class="col-md-1 col-form-label text-md-right">Current : </label>
                        
                            <div class="col-md-4">
                                <input id="a_address_current" type="text" class="form-control @error('a_address_current') is-invalid @enderror" name="a_address_current" value="{{ $gojukai->a_address_current }}" autocomplete="a_address_current">
                        
                                @error('a_address_current')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row d-flex justify-content-between">

                            <div class="col-md-2">
                            <label for="a_contact" class="col-md-12 col-form-label text-md-left">Contact :</label>
                            </div>

                            <div class="col-md-10">
                            <div class="col-md-12 d-flex justify-content-between">
                            <label for="a_contact_home" class="col-md-2 col-form-label text-md-right">Home : </label>
                        
                            <div class="col-md-4">
                                <input id="a_contact_home" type="text" class="form-control @error('a_contact_home') is-invalid @enderror" name="a_contact_home" value="{{ $gojukai->a_contact_home }}" autocomplete="a_contact_home">
                        
                                @error('a_contact_home')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="a_contact_mobile" class="col-md-2 col-form-label text-md-right">Mobile : </label>
                        
                            <div class="col-md-4">
                                <input id="a_contact_mobile" type="text" class="form-control @error('a_contact_mobile') is-invalid @enderror" name="a_contact_mobile" value="{{ $gojukai->a_contact_mobile }}" required autocomplete="a_contact_mobile">
                        
                                @error('a_contact_mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>
                            <br>

                            <div class="col-md-12 d-flex justify-content-between">

                            <label for="a_contact_work" class="col-md-2 col-form-label text-md-right">Work : </label>
                        
                            <div class="col-md-4">
                                <input id="a_contact_work" type="text" class="form-control @error('a_contact_work') is-invalid @enderror" name="a_contact_work" value="{{ $gojukai->a_contact_work }}" autocomplete="a_contact_work">
                        
                                @error('a_contact_work')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="a_contact_whatsapp" class="col-md-2 col-form-label text-md-right">Whatsapp : </label>
                        
                            <div class="col-md-4">
                                <input id="a_contact_whatsapp" type="text" class="form-control @error('a_contact_whatsapp') is-invalid @enderror" name="a_contact_whatsapp" value="{{ $gojukai->a_contact_whatsapp }}" autocomplete="a_contact_whatsapp">
                        
                                @error('a_contact_whatsapp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="a_email" class="col-md-2 col-form-label text-md-left">Email : </label>
                        
                            <div class="col-md-10">
                                <input id="a_email" type="email" class="form-control @error('a_email') is-invalid @enderror" name="a_email" value="{{ $gojukai->a_email }}" autocomplete="a_email">
                        
                                @error('a_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="a_nic" class="col-md-2 col-form-label text-md-left">NIC No : </label>
                        
                            <div class="col-md-10">
                                <input id="a_nic" type="text" class="form-control @error('a_nic') is-invalid @enderror" name="a_nic" value="{{ $gojukai->a_nic }}" required autocomplete="a_nic">
                        
                                @error('a_nic')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="a_nic_image" class="col-md-2 col-form-label text-md-left">NIC Image : </label>
                            <img src="/storage/{{ $gojukai->a_nic_image }}" class="w-25">

                            <div class="col-md-3 float-right">
        
                        
                                @error('a_nic_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="a_nic_image" class="col-md-2 col-form-label text-md-left">New NIC Image : </label>

                            <div class="col-md-3 float-right">
                                <input id="a_nic_image" type="file" class="form-control @error('a_nic_image') is-invalid @enderror" name="a_nic_image" value="{{ $gojukai->a_nic_image }}" autocomplete="a_nic_image"><br>
                        
                                @error('a_nic_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="a_dob" class="col-md-2 col-form-label text-md-left">Date of Birth : </label>
                        
                            <div class="col-md-10">
                                <input id="a_dob" type="date" class="form-control @error('a_dob') is-invalid @enderror" name="a_dob" value="{{ $gojukai->a_dob }}" required autocomplete="a_dob">
                        
                                @error('a_dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="a_age" class="col-md-2 col-form-label text-md-left">Age : </label>
                        
                            <div class="col-md-10">
                                <input id="a_age" type="number" class="form-control @error('a_age') is-invalid @enderror" name="a_age" value="{{ $gojukai->a_age }}" required autocomplete="a_age">
                        
                                @error('a_age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="a_gender" class="col-md-2 col-form-label text-md-left">Gender : </label>
                        
                            <div class="col-md-6">
                                @if ($gojukai->a_gender == 'Male')
                                    <input class="form-check-input ml-1" type="radio" name="a_gender" id="a_gender" value="{{ $gojukai->a_gender }}" checked>
                                    <label class="form-check-label ml-4">Male</label><br>
                                    <input class="form-check-input ml-1" type="radio" name="a_gender" id="a_gender" value="{{ $gojukai->a_gender }}">
                                    <label class="form-check-label ml-4">Female</label>
                                @elseif($gojukai->a_gender == 'Female')
                                    <input class="form-check-input ml-1" type="radio" name="a_gender" id="a_gender" value="{{ $gojukai->a_gender }}" checked>
                                    <label class="form-check-label ml-4">Male</label><br>
                                    <input class="form-check-input ml-1" type="radio" name="a_gender" id="a_gender" value="{{ $gojukai->a_gender }}" checked>
                                    <label class="form-check-label ml-4">Female</label>
                                @endif

                                @error('a_gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="a_occupation" class="col-md-2 col-form-label text-md-left">Occupation : </label>
                        
                            <div class="col-md-10">
                                <input id="a_occupation" type="text" class="form-control @error('a_occupation') is-invalid @enderror" name="a_occupation" value="{{ $gojukai->a_occupation }}" autocomplete="a_occupation">
                        
                                @error('a_occupation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                </div>
            </div>

            <br><br>

            <div class="card">
                <div class="card-header">Details of Family Members</div>

                <div class="card-body">

                    <div class="form-group row d-flex justify-content-center">
                        <label for="a_family_1_name" class="col-md-2 col-form-label text-md-center">Family Member 1 : </label>
                        <label for="a_family_1_name" class="col-md-2 col-form-label text-md-right">Name : </label>
                    
                        <div class="col-md-4">
                            <input id="a_family_1_name" type="text" class="form-control @error('a_family_1_name') is-invalid @enderror" name="a_family_1_name" value="{{ $gojukai->a_family_1_name }}" autocomplete="a_family_1_name">
                    
                            @error('a_family_1_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <label for="a_family_1_dob" class="col-md-2 col-form-label text-md-right">Date of Birth :</label>

                        <div class="col-md-2">
                            <input id="a_family_1_dob" type="date" class="form-control @error('a_family_1_dob') is-invalid @enderror" name="a_family_1_dob" value="{{ $gojukai->a_family_1_dob }}" autocomplete="a_family_1_dob">

                            @error('a_family_1_dob')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row d-flex justify-content-center">
                        <label for="a_family_2_name" class="col-md-2 col-form-label text-md-center">Family Member 2 : </label>
                        <label for="a_family_2_name" class="col-md-2 col-form-label text-md-right">Name : </label>
                    
                        <div class="col-md-4">
                            <input id="a_family_2_name" type="text" class="form-control @error('a_family_2_name') is-invalid @enderror" name="a_family_2_name" value="{{ $gojukai->a_family_2_name }}" autocomplete="a_family_2_name">
                    
                            @error('a_family_2_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    
                        <label for="a_family_2_dob" class="col-md-2 col-form-label text-md-right">Date of Birth :</label>
                    
                        <div class="col-md-2">
                            <input id="a_family_2_dob" type="date" class="form-control @error('a_family_2_dob') is-invalid @enderror" name="a_family_2_dob" value="{{ $gojukai->a_family_2_dob }}" autocomplete="a_family_2_dob">
                    
                            @error('a_family_2_dob')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row d-flex justify-content-center">
                        <label for="a_family_3_name" class="col-md-2 col-form-label text-md-center">Family Member 3 : </label>
                        <label for="a_family_3_name" class="col-md-2 col-form-label text-md-right">Name : </label>
                    
                        <div class="col-md-4">
                            <input id="a_family_3_name" type="text" class="form-control @error('a_family_3_name') is-invalid @enderror" name="a_family_3_name" value="{{ $gojukai->a_family_3_name }}" autocomplete="a_family_3_name">
                    
                            @error('a_family_3_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    
                        <label for="a_family_3_dob" class="col-md-2 col-form-label text-md-right">Date of Birth :</label>
                    
                        <div class="col-md-2">
                            <input id="a_family_3_dob" type="date" class="form-control @error('a_family_3_dob') is-invalid @enderror" name="a_family_3_dob" value="{{ $gojukai->a_family_3_dob }}" autocomplete="a_family_3_dob">
                    
                            @error('a_family_3_dob')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row d-flex justify-content-center">
                        <label for="a_family_4_name" class="col-md-2 col-form-label text-md-center">Family Member 4 : </label>
                        <label for="a_family_4_name" class="col-md-2 col-form-label text-md-right">Name : </label>
                    
                        <div class="col-md-4">
                            <input id="a_family_4_name" type="text" class="form-control @error('a_family_4_name') is-invalid @enderror" name="a_family_4_name" value="{{ $gojukai->a_family_4_name }}" autocomplete="a_family_4_name">
                    
                            @error('a_family_4_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    
                        <label for="a_family_4_dob" class="col-md-2 col-form-label text-md-right">Date of Birth :</label>
                    
                        <div class="col-md-2">
                            <input id="a_family_4_dob" type="date" class="form-control @error('a_family_4_dob') is-invalid @enderror" name="a_family_4_dob" value="{{ $gojukai->a_family_4_dob }}" autocomplete="a_family_4_dob">
                    
                            @error('a_family_4_dob')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row d-flex justify-content-center">
                        <label for="a_family_5_name" class="col-md-2 col-form-label text-md-center">Family Member 5 : </label>
                        <label for="a_family_5_name" class="col-md-2 col-form-label text-md-right">Name : </label>
                    
                        <div class="col-md-4">
                            <input id="a_family_5_name" type="text" class="form-control @error('a_family_5_name') is-invalid @enderror" name="a_family_5_name" value="{{ $gojukai->a_family_5_name }}" autocomplete="a_family_5_name">
                    
                            @error('a_family_5_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    
                        <label for="a_family_5_dob" class="col-md-2 col-form-label text-md-right">Date of Birth :</label>
                    
                        <div class="col-md-2">
                            <input id="a_family_5_dob" type="date" class="form-control @error('a_family_5_dob') is-invalid @enderror" name="a_family_5_dob" value="{{ $gojukai->a_family_5_dob }}" autocomplete="a_family_5_dob">
                    
                            @error('a_family_5_dob')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                </div>
            </div>

            <br><br>

            <div class="card">
                <div class="card-header">Sponsor</div>

                <div class="card-body">

                        <div class="form-group row">
                            <label for="s_name" class="col-md-2 col-form-label text-md-left">Name : </label>
                        
                            <div class="col-md-10">
                                <input id="s_name" type="text" class="form-control @error('s_name') is-invalid @enderror" name="s_name" value="{{ $gojukai->s_name }}" required autocomplete="s_name">
                        
                                @error('s_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="s_address" class="col-md-2 col-form-label text-md-left">Address : </label>
                        
                            <div class="col-md-10">
                                <input id="s_address" type="text" class="form-control @error('s_address') is-invalid @enderror" name="s_address" value="{{ $gojukai->s_address }}" required autocomplete="s_address">
                        
                                @error('s_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row d-flex justify-content-center">
                            <label for="s_contact" class="col-md-1 col-form-label text-md-center">Contact :</label>
                            <label for="s_contact_home" class="col-md-2 col-form-label text-md-right">Home : </label>
                        
                            <div class="col-md-4">
                                <input id="s_contact_home" type="text" class="form-control @error('s_contact_home') is-invalid @enderror" name="s_contact_home" value="{{ $gojukai->s_contact_home }}" autocomplete="s_contact_home">
                        
                                @error('s_contact_home')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="s_contact_mobile" class="col-md-1 col-form-label text-md-right">Mobile : </label>
                        
                            <div class="col-md-4">
                                <input id="s_contact_mobile" type="text" class="form-control @error('s_contact_mobile') is-invalid @enderror" name="s_contact_mobile" value="{{ $gojukai->s_contact_mobile }}" required autocomplete="s_contact_mobile">
                        
                                @error('s_contact_mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="s_relationship" class="col-md-2 col-form-label text-md-left">Relationship : </label>
                        
                            <div class="col-md-10">
                                <input id="s_relationship" type="text" class="form-control @error('s_relationship') is-invalid @enderror" name="s_relationship" value="{{ $gojukai->s_relationship }}" autocomplete="s_relationship">
                        
                                @error('s_relationship')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary float-right w-25">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection
