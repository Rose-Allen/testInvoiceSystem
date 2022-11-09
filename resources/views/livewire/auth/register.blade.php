<div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST"  wire:submit.prevent="register"  >

                        <div class="row mb-3">
                            <label for="bin" class="col-md-4 col-form-label text-md-end">{{ __('Бин') }}</label>

                            <div class="col-md-6">
                                <input id="bin" type="text" class="bin form-control @error('bin') is-invalid @enderror" name="bin" wire:model="bin" value="{{ old('bin') }}" required autocomplete="bin" autofocus>

                                @error('bin')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="company_name" class="col-md-4 col-form-label text-md-end">{{ __('Название Компании') }}</label>

                            <div class="col-md-6">
                                <input id="company_name" type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" wire:model="company_name" value="{{ old('company_name') }}" required autocomplete="company_name" autofocus>

                                @error('company_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  wire:model="email"  value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Номер телефона') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="phone form-control @error('phone') is-invalid @enderror" name="phone"  wire:model="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  wire:model="password"  required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" wire:model="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Регистрация
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('script')
    <script>
        document.addEventListener('livewire:load', function (){
            // elDataInput = document.querySelector('input.phone');
            // let im = new Inputmask('+9(999)-999-9999');
            // im.mask(elDataInput);
            // $('#phone').inputmask('+9(999)-999-9999');
            // elDataInput2 = document.querySelector('input.bin');
            // let bin = new Inputmask('999999999999');
            // bin2 = bin.mask(elDataInput2);
            $('#bin').inputmask('999999999999');

            $('#bin').on('keyup', function (){
                let input = $(this).val();
                input = input.replace('_', '');
                if(String(input).length == 12){
                    Livewire.emit('getData', input);
                }
            })
        });

    </script>
@endpush
