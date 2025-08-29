<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.parts.meta')

    <title>
        {{ config('app.name', 'OAuth2 Server') }}
    </title>
    @include('layouts.parts.favicon')
    <link rel="stylesheet" href="{{ mix('/css/pages.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/tailwind.css') }}">
    <script nonce="{{ $nonce }}" src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800 font-sans">

    <!-- Hero Section -->
    <section
        class="h-screen flex flex-col items-center justify-center bg-gradient-to-br from-blue-700 via-blue-600 to-indigo-700 text-white px-6 text-center">
        <h1 class="text-5xl font-bold mb-6">{{ __('Your Secure VPN with WireGuard') }}</h1>
        <p class="max-w-2xl text-lg mb-6">
            {{ __('Connect safely anywhere. Our multiserver system lets you deploy multiple instances across different servers for higher speed, stability, and privacy.') }}
        </p>
        <p class="max-w-2xl text-md mb-8 italic">
            {{ __('Ideal for users seeking online freedom and security, and for companies wanting to deploy their own private servers. Try it now and contact us for tailored business solutions.') }}
        </p>
        <div class="flex gap-6 mb-10 flex-wrap justify-center">
            <div class="flex items-center gap-2"><i class="mdi mdi-shield-check-outline text-2xl"></i>
                {{ __('No logs stored') }}</div>
            <div class="flex items-center gap-2"><i class="mdi mdi-wifi text-2xl"></i>
                {{ __('Safe browsing on public WiFi') }}</div>
            <div class="flex items-center gap-2"><i class="mdi mdi-bank-outline text-2xl"></i>
                {{ __('Protect your banking sessions') }}</div>
            <div class="flex items-center gap-2"><i class="mdi mdi-firefox text-2xl"></i>
                {{ __('Supports browsers and extensions') }}</div>
        </div>
        <a href="{{ route('redirect') }}"
            class="bg-yellow-400 hover:bg-yellow-500 text-black text-xl font-semibold px-10 py-4 rounded-full shadow-lg transition">
            🚀 {{ __('Try now for free') }}
        </a>
    </section>

    <!-- Steps Section -->
    <section class="h-screen bg-white flex flex-col justify-center px-6 lg:px-20">
        <h2 class="text-3xl font-bold text-center mb-12">{{ __('How to use it with the Official App') }}</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">

            <!-- PC Steps -->
            <div class="bg-gray-100 rounded-2xl shadow-lg p-8">
                <h3 class="text-2xl font-semibold mb-6 flex items-center gap-2">
                    <i class="mdi mdi-laptop text-blue-600 text-3xl"></i> {{ __('On PC') }}
                </h3>
                <ol class="space-y-3 text-gray-700">
                    <li>1. {{ __('Download the official WireGuard app for your operating system.') }}</li>
                    <li>2. {{ __('Open the app and click “Add tunnel”.') }}</li>
                    <li>3. {{ __('Scan the QR code or upload the generated configuration file.') }}</li>
                    <li>4. {{ __('Assign a connection name for easy identification.') }}</li>
                    <li>5. {{ __('Click “Activate tunnel” to connect.') }}</li>
                    <li>6. {{ __('Enjoy your secure, unrestricted connection!') }}</li>
                </ol>
            </div>

            <!-- Mobile Steps -->
            <div class="bg-gray-100 rounded-2xl shadow-lg p-8">
                <h3 class="text-2xl font-semibold mb-6 flex items-center gap-2">
                    <i class="mdi mdi-cellphone text-green-600 text-3xl"></i> {{ __('On Mobile') }}
                </h3>
                <ol class="space-y-3 text-gray-700">
                    <li>1. {{ __('Install the official WireGuard app from the App Store or Google Play.') }}</li>
                    <li>2. {{ __('Open the app and tap “Add tunnel”.') }}</li>
                    <li>3. {{ __('Scan the QR code provided by the system.') }}</li>
                    <li>4. {{ __('Save the connection profile with your chosen name.') }}</li>
                    <li>5. {{ __('Toggle the switch to activate the tunnel.') }}</li>
                    <li>6. {{ __('Your traffic is now protected on mobile networks and public WiFi.') }}</li>
                </ol>
            </div>

        </div>
    </section>

    <!-- Footer / Security Reminder -->
    <section
        class="h-screen bg-gradient-to-br from-gray-900 via-gray-800 to-black text-white flex flex-col justify-center items-center px-6 text-center">
        <h2 class="text-4xl font-bold mb-6">{{ __('Browse with Total Privacy') }}</h2>
        <p class="max-w-2xl text-lg mb-8">
            {{ __('No logs, no data storage. With our VPN, you get freedom, security, and guaranteed anonymity anywhere, on any device.') }}
        </p>
        <a href="{{ route('redirect') }}"
            class="bg-yellow-400 hover:bg-yellow-500 text-black text-xl font-semibold px-10 py-4 rounded-full shadow-lg transition">
            🌐 {{ __('Start Free Today') }}
        </a>
    </section>

</body>

</html>
