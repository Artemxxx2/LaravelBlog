<x-mail::message>
Здравствуйте, {{$name}}
Ваш пароль {{$password}}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
