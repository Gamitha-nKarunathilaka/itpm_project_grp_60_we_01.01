<form method="POST" action="{{ route('admin.login') }}">
    @csrf

    <div>
        <label for="email">{{ __('Email') }}</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
            {{ !str_contains(old('email'), '@admin.com') ?: 'class=invalid' }}>
        @if(str_contains(old('email'), '@admin.com'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ __('Users are not authorized to log in as admin.') }}</strong>
            </span>
        @endif
    </div>

    <div>
        <label for="password">{{ __('Password') }}</label>
        <input id="password" type="password" name="password" required autocomplete="current-password">
    </div>

    <div>
        <button type="submit">{{ __('Login') }}</button>
    </div>
</form>
