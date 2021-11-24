@foreach ($users as $user)
<h1>{{ $user->name}}</h1>

    @foreach($user->addresses as $address)
    <p>{{ $address->country }}</p>
    @endforeach

@endforeach
{{-- 
@foreach ($addresses as $address)
    <h1>{{ $address->country }}</h1>
    <p>{{ $address->User->name }}</p>
    <p>{{ $address->User->email }}</p>
@endforeach --}}