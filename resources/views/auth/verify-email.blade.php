<x-guest-layout>
    <div class="mb-4 text-sm text-gray-900">
        {{ __('¡Gracias por registrarse!. Antes de continuar, verifique su dirección de correo electrónico pinchando en el enlace que le hemos enviado. Si no lo ha recibido, podemos enviarle otro.') }}    
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-gray-900">
            {{ __('Un nuevo enlace de verificación ha sido enviado a su dirección de correo electrónico.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Reenviar correo electrónico de verificación') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-300">
                {{ __('Cerrar sesión') }}
            </button>
        </form>
    </div>
</x-guest-layout>
