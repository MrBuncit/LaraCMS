<p>
    Hallo {{ $member->name }}
</p>
<p>
    Admin kami telah mendaftarkan email Anda ({{ $member->email }}) ke Larapus. Untuk Login, silahkan kunjungi <a
        href="{{ $login = url('login') }}"></a>. Login dengan email Anda dan password
    <strong>{{ $password }}</strong>
</p>

<p>
    Jika Anda ingin mengubah password, silahkan kunjungi <a
        href="{{ $reset = url('password/reset') }}">{{ $reset }}</a> dan masukan email Anda.
</p>
