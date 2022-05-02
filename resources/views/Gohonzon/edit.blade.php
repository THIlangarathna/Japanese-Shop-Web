@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h3>Details of Gohonzon Receivers</h3>
        <div class="col-md-12">
            <form method="POST" action="/Gohonzon/{{ $gohonzon->id }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

            <div class="card">
                <div class="card-header">Applicant</div>

                <div class="card-body">

                        <div class="form-group row">
                            <label for="date" class="col-md-2 col-form-label text-md-left">Date of Gojukai: </label>
                        
                            <div class="col-md-10">
                                <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ $gohonzon->date }}" autocomplete="date">
                        
                                @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-left">Full Name : </label>
                        
                            <div class="col-md-10">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $gohonzon->name }}" required autocomplete="name">
                        
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row d-flex justify-content-between">
                            <label for="address" class="col-md-1 col-form-label text-md-center">Address : </label>
                            <label for="address_permanent" class="col-md-2 col-form-label text-md-right">Permanent : </label>
                        
                            <div class="col-md-4">
                                <input id="address_permanent" type="text" class="form-control @error('address_permanent') is-invalid @enderror" name="address_permanent" value="{{ $gohonzon->address_permanent }}" required autocomplete="address_permanent">
                        
                                @error('address_permanent')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="address_current" class="col-md-1 col-form-label text-md-right">Current : </label>
                        
                            <div class="col-md-4">
                                <input id="address_current" type="text" class="form-control @error('address_current') is-invalid @enderror" name="address_current" value="{{ $gohonzon->address_current }}" autocomplete="address_current">
                        
                                @error('address_current')
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
                                <input id="contact_home" type="text" class="form-control @error('contact_home') is-invalid @enderror" name="contact_home" value="{{ $gohonzon->contact_home }}" autocomplete="contact_home">
                        
                                @error('contact_home')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="contact_mobile" class="col-md-2 col-form-label text-md-right">Mobile : </label>
                        
                            <div class="col-md-4">
                                <input id="contact_mobile" type="text" class="form-control @error('contact_mobile') is-invalid @enderror" name="contact_mobile" value="{{ $gohonzon->contact_mobile }}" autocomplete="contact_mobile">
                        
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
                                <input id="contact_work" type="text" class="form-control @error('contact_work') is-invalid @enderror" name="contact_work" value="{{ $gohonzon->contact_work }}" autocomplete="contact_work">
                        
                                @error('contact_work')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="contact_whatsapp" class="col-md-2 col-form-label text-md-right">Whatsapp : </label>
                        
                            <div class="col-md-4">
                                <input id="contact_whatsapp" type="text" class="form-control @error('contact_whatsapp') is-invalid @enderror" name="contact_whatsapp" value="{{ $gohonzon->contact_whatsapp }}" autocomplete="contact_whatsapp">
                        
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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $gohonzon->email }}" autocomplete="email">
                        
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nic" class="col-md-2 col-form-label text-md-left">NIC No : </label>
                        
                            <div class="col-md-10">
                                <input id="nic" type="text" class="form-control @error('nic') is-invalid @enderror" name="nic" value="{{ $gohonzon->nic }}" required autocomplete="nic">
                        
                                @error('nic')
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
                <div class="card-header">Enshrined Details</div>

                <div class="card-body">
                    <div class="form-group row">
                        <label for="e_name" class="col-md-2 col-form-label text-md-left">Full Name : </label>
                    
                        <div class="col-md-10">
                            <input id="e_name" type="text" class="form-control @error('e_name') is-invalid @enderror" name="e_name" value="{{ $gohonzon->e_name }}" autocomplete="e_name">
                    
                            @error('e_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="e_date" class="col-md-2 col-form-label text-md-left">Date : </label>
                    
                        <div class="col-md-10">
                            <input id="e_date" type="date" class="form-control @error('e_date') is-invalid @enderror" name="e_date" value="{{ $gohonzon->e_date }}" autocomplete="e_date">
                    
                            @error('e_date')
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
                                <input id="s_name" type="text" class="form-control @error('s_name') is-invalid @enderror" name="s_name" value="{{ $gohonzon->s_name }}" required autocomplete="s_name">
                        
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
                                <input id="s_address" type="text" class="form-control @error('s_address') is-invalid @enderror" name="s_address" value="{{ $gohonzon->s_address }}" required autocomplete="s_address">
                        
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
                                <input id="s_contact_home" type="text" class="form-control @error('s_contact_home') is-invalid @enderror" name="s_contact_home" value="{{ $gohonzon->s_contact_home }}" autocomplete="s_contact_home">
                        
                                @error('s_contact_home')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="s_contact_mobile" class="col-md-1 col-form-label text-md-right">Mobile : </label>
                        
                            <div class="col-md-4">
                                <input id="s_contact_mobile" type="text" class="form-control @error('s_contact_mobile') is-invalid @enderror" name="s_contact_mobile" value="{{ $gohonzon->s_contact_mobile }}" autocomplete="s_contact_mobile">
                        
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
                                <input id="s_relationship" type="text" class="form-control @error('s_relationship') is-invalid @enderror" name="s_relationship" value="{{ $gohonzon->s_relationship }}" autocomplete="s_relationship">
                        
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
