<div>
    <h1>{{ $message }}</h1>
    <p>{{ $type }}</p>
    {{ $slot }}
    <x-slot name="sidebar">
        <ul>
            <li>Home</li>
            <li>Contact</li>
        </ul>
    </x-slot>

    <h2>{{ $title }}</h2>
</div>
