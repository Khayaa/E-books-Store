
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 d-flex align-items-center justify-content-center">
                <div class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                    <div class="text-center text-md-center mb-4 mt-md-0">
                        <h1 class="mt-n3 mb-0 h3">{{ __('EBook-Store') }}</h1>
                        <br>
                        <h5 class="mt-n3 mb-0 h3">{{ __('Create Account')  }}</h5>
                    </div>
                    <form  wire:submit.prevent="register" method="POST">
                        @csrf

                        <!-- Form -->
                        <div class="row">
                            <div class="col">
                                <div class="form-group mt-4 mb-4">
                                    <label for="name">{{ __('Your Name') }}</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                            </svg>
                                        </span>
                                        <input name="name" wire:model="name" id="name" type="text" class="form-control"
                                            placeholder="{{ __('Name') }}" value="{{ old('name') }}" autofocus
                                            required>
                                    </div>

                                    @error('name')
                                        <div class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mt-4 mb-4">
                                    <label for="surname">{{ __('Your Surname') }}</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                            </svg>
                                        </span>
                                        <input wire:model="surname" name="surname" id="surname" type="text" class="form-control"
                                            placeholder="{{ __('Surname') }}" value="{{ old('surname') }}" autofocus
                                            required>
                                    </div>

                                    @error('surname')
                                        <div class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group mt-4 mb-4">
                                    <label for="email">{{ __('Your Email') }}</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">
                                            <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                                                </path>
                                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z">
                                                </path>
                                            </svg>
                                        </span>
                                        <input wire:model="email" name="email" id="email" type="email" class="form-control"
                                            placeholder="{{ __('Email') }}" value="{{ old('email') }}" autofocus
                                            required>
                                    </div>
                                    @error('email')
                                        <div class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mt-4 mb-4">
                                    <label for="phone_number">{{ __('Phone Number') }}</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                            </svg>
                                        </span>
                                        <input wire:model="phone_number" name="phone_number" id="phone_number" type="text"
                                            class="form-control" placeholder="{{ __('Phone number') }}"
                                            value="{{ old('phone_number') }}" autofocus required>
                                    </div>

                                    @error('phone_number')
                                        <div class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>


                        </div>


                        <div class="row">
                            <div class="col">
                                <div class="form-group mb-4">
                                    <label for="password">{{ __('Your Password') }}</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon2">
                                            <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                                    clip-rule="evenodd">
                                                </path>
                                            </svg>
                                        </span>
                                        <input wire:model="password" name="password" type="password" placeholder="{{ __('Password') }}"
                                            class="form-control" id="password" required autocomplete="new-password">
                                    </div>
                                    @error('password')
                                        <div class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-4">
                                    <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon3">
                                            <svg class="icon icon-xs text-gray-600" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                                    clip-rule="evenodd">
                                                </path>
                                            </svg>
                                        </span>
                                        <input wire:model="password_confirmation" name="password_confirmation" type="password"
                                            placeholder="{{ __('Confirm Password') }}" class="form-control"
                                            id="password_confirmation" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End of Form -->
                        <!-- Form -->

                        <!-- End of Form -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-gray-800">{{ __('Register') }}</button>
                        </div>
                    </form>

                    <div class="d-flex justify-content-center align-items-center mt-4">
                        <span class="fw-normal">
                            {{ __('Already have an account?') }}
                            <a href="{{ route('login') }}" class="fw-bold">{{ __('Login here') }}</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>

