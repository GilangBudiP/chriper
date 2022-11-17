<x-guest-layout>
    <div class="block grid-cols-2 gap-4 xl:grid">
        <!-- BEGIN: Register Info -->
        <div class="flex-col hidden min-h-screen xl:flex">
            <a href="" class="flex items-center pt-5 -intro-x">
                <img alt="Midone - HTML Admin Template" class="w-6" src="{{ asset('dist/images/logo.svg') }}">
                <span class="ml-3 text-lg text-white"> Tinker </span>
            </a>
            <div class="my-auto">
                <img alt="Midone - HTML Admin Template" class="w-1/2 -mt-16 -intro-x"
                    src="{{ asset('dist/images/illustration.svg') }}">
                <div class="mt-10 text-4xl font-medium leading-tight text-white -intro-x">
                    A few more clicks to
                    <br>
                    sign up to your account.
                </div>
                <div class="mt-5 text-lg text-white -intro-x text-opacity-70 dark:text-slate-400">Manage all your
                    e-commerce accounts in one place</div>
            </div>
        </div>
        <!-- END: Register Info -->
        <!-- BEGIN: Register Form -->
        <div class="flex h-screen py-5 my-10 xl:h-auto xl:py-0 xl:my-0">
            <div
                class="w-full px-5 py-8 mx-auto my-auto bg-white rounded-md shadow-md xl:ml-20 dark:bg-darkmode-600 xl:bg-transparent sm:px-8 xl:p-0 xl:shadow-none sm:w-3/4 lg:w-2/4 xl:w-auto">
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <h2 class="text-2xl font-bold text-center intro-x xl:text-3xl xl:text-left">
                        Sign Up
                    </h2>
                    <div class="mt-2 text-center intro-x text-slate-400 dark:text-slate-400 xl:hidden">A few more clicks
                        to
                        sign in to your account. Manage all your e-commerce accounts in one place</div>
                    <div class="mt-8 intro-x">
                        <input type="text" class="block px-4 py-3 intro-x login__input form-control"
                            placeholder="First Name" name="name">
                        <input type="text" class="block px-4 py-3 mt-4 intro-x login__input form-control"
                            placeholder="Last Name" name="last_name">
                        <input type="email" class="block px-4 py-3 mt-4 intro-x login__input form-control"
                            placeholder="Email" name="email">
                        <input type="password" class="block px-4 py-3 mt-4 intro-x login__input form-control"
                            placeholder="Password" name="password">
                        <input type="password" class="block px-4 py-3 mt-4 intro-x login__input form-control"
                            placeholder="Password Confirmation" name="password_confirmation">
                    </div>
                    <div class="flex items-center mt-4 text-xs intro-x text-slate-600 dark:text-slate-500 sm:text-sm">
                        <input id="remember-me" type="checkbox" class="mr-2 border form-check-input">
                        <label class="cursor-pointer select-none" for="remember-me">I agree to the Envato</label>
                        <a class="ml-1 text-primary dark:text-slate-200" href="">Privacy Policy</a>.
                    </div>
                    <div class="mt-5 text-center intro-x xl:mt-8 xl:text-left">
                        <button type="submit"
                            class="w-full px-4 py-3 align-top btn btn-primary xl:w-32 xl:mr-3">Register</button>
                        <a href="{{ url('login') }}"
                            class="w-full px-4 py-3 mt-3 align-top btn btn-outline-secondary xl:w-32 xl:mt-0">Sign
                            in</a>
                    </div>
                </form>
            </div>
        </div>
        <!-- END: Register Form -->
    </div>
</x-guest-layout>
