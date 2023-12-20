<x-mail::message>
# contact laravel
<h3>Name: {{ $data['name']}}</h3>
<h3>Email: {{ $data['email']}}</h3>
<h3>Message: {{ $data['message']}}</h3>

The body of your message.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
