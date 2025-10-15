<x-guest-layout>
    <section class="w-96 p-4 sm:p-4">
        <div class="flex flex-col items-center justify-center lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900">
                <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
                Flowbite    
            </a>
            <div class="w-full">
                <div class=" space-y-4 md:space-y-6 ">
                    <h1 class="text-xl text-center font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                        Sign in to your account
                    </h1>
                    <h6 class="mb-4 text-sm text-gray-600">{{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}</h6>
                    <form class="space-y-4 md:space-y-6" action="{{ route('password.email') }} method="POST">
                        @csrf
                        <x-inputs.text 
                            name="email" 
                            :errors="$errors" 
                            label="Email" 
                            placeholder="name@company.com"
                            icon="fa-envelope"
                            styles="w-full"
                            required
                        />
                        <div class="flex items-center justify-between">
                            <a href={{ route('register') }} class="text-sm font-medium text-gray-500 hover:underline">
                                Create an account
                            </a>
                            <a href="{{ route('login') }}" class="text-sm font-medium text-gray-500 hover:underline">
                                Already registered?
                            </a>
                        </div> 
                        <x-buttons.submit class="w-full" text="Email Password Reset Link">
                        </x-buttons.submit>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
