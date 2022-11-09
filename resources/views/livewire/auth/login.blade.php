<div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Вход') }}</div>

                <div class="card-body">
                    <form method="POST" wire:submit.prevent="login"  >

                        <div class="row mb-3">
                            <label for="bin" class="col-md-4 col-form-label text-md-end">{{ __('Bin') }}</label>

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
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" wire:model="password"  required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember"  wire:model="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Войти
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
            elDataInput2 = document.querySelector('input.bin');
            let bin = new Inputmask('999999999999');
            bin2 = bin.mask(elDataInput2);
            // $('#bin').inputmask('999999999999');
            //
            // $('#bin').on('keyup', function (){
            //     let input = $(this).val();
            //     input = input.replace('_', '');

                // if(String(input).length == 12){
                //     Livewire.emit('getData', input);
                // }
            })
        });

    </script>
@endpush
