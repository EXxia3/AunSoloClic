<header class="bg-gradient-to-r from-gray-700 via-purple-900 to-indigo-700 sticky top-0 " style="z-index: 900" x-data="dropdown()">
    <div class="container flex items-center h-18 justify-between md:justify-start">
        <a  :class="{'bg-opacity-100 text-indigo-600' : open}"
            x-on:click="show()"
            class="flex flex-col items-center justify-center order-last md:order-first px-6 md:px-4 bg-white bg-opacity-25 text-white cursor-pointer font-semibold h-full">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC0AAAAtCAYAAAA6GuKaAAAABmJLR0QA/wD/AP+gvaeTAAAEXElEQVRYhe1ZTUhjVxg9ESNJdu0UngYjgSwiyYSAmsloohNjxko7jIq4kjiFQVwILoZZBCEbQY20TSTgIghtSnfWUmyHWlIn+JuEiouOiH+RBlHBdmxnoVFJ8r5u4k8z+t6jcWxnyIFHknu/nHs4Ofnee/cBOeTwbkGUOSCRSH4qKSmpyoZ0e3t7Jh6PP5DJZM+Ki4trsuHa2toKHR8fN3AW6fX6V5QlNBrNSwDQaDQvs+XS6/WvMjXmZePCf4V8rsmFhQUEg0FBRDabDeXl5VfOLy4uYnJyUhCX1WqFwWC4cp5T9NzcHBwOx2cAfuFZ567X633CJToUCsHhcLgBRHi47rjd7qf/WvTpegC+E1AnBBEA3/DUJPlI3spM50TfFHKibwo50TcFIX26SkDdXYHrCam7w1fAKcZms8Hn8z0VosZkMnHOW61W+Hy+J0K4KisrOec5Ret0Ouh0OiHr8EKr1UKr1V4L17uR6Y2NjWmtVnv11YoAxGKxcPp1WqvVcv/W/FwL2Xz/f4PXbrdkMtm4UqnM2ul4PN4ik8m+VSqVWTsdj8cbOYtyt1tvCJwtb2lpCeFwWBCRyWTibGnLy8uYn58/+1xXVweVSgUAGB8fx97eHhiGQWMjdxIuxcV4uN1uAvAFgP2CggIC8AOA1vQxkR77A8CXXq+XMx5er5cAfA4gYLfbKZVKERFRf38/AXjOMExiZWXleuIhEokeTk9Pv3dwcICmpqaPAawD+K21tfXDw8NDBAKBWwAeCPREZ7fbbX6/H3l5eRgYGEBPT8+EQqEonZqayi8tLcXm5iZGR0c5SXhFSySSWyaTSSQWi2GxWEQAbgO4XVtbK8rPz4fFYhGJxeIPhCi22+33/X6/KEOwPhAIyE8F19TUpHZ2djh5eC+Yjo6OJtra2hqqq6tFg4ODqKio+JplWfT19YGIEAwGKZFITAD4iIunvr4eXV1dmQ7/Q7DNZvt9d3f3V4Zh7gsx4QyXZLoZgAHAY6PRSCzLEsuyVFZWxgL4BEA5gFa+TJ8ineEfFQrFzmmGo9EoKZXKPQDjTqfz2lpeCkBSJDo/F6XfJ9NzgsDlcCwWizidzoe9vb1C6c5xidPPWlpaWI/HQ4WFhWQ0GslgMJBcLqehoSFqbm5mAXzP5/TY2BgBeM7nMMuytL6+zuk0r2ipVErJZJKIiDweDwFoB/B4eHiYiIhOTk5ILBaTkJZ3sa1dJbijo4Pcbnd28Tg+Pv4zHA4jmUxidnaWALwA8GJmZoZSqRRCoRAlEol9Ph6GYXCxrWVGgojQ2dmJkZERYZuHXE4D8AP4SyqVEoAJnJ9cAumxfQBfCf0jRqNRksvlKQA/ZzoMYArAp3xOc7Y8s9kMl8v16MJQQ/q4iPcBtFdVCduHD4VC6O7uzisqKrK1t7cDAFZXV6FSqeByue4BuGc2mwVxnSF3lfeG8Fo81tbWImq1OttnLhEAiMViEbVane0zF7797BxyeOvxNzsGc/3GicFlAAAAAElFTkSuQmCC">
            <span class="text-sm hidden md:block">Categorías</span>
        </a>

        <a href="/" class="mx-6">
            <x-jet-application-mark class="block h-9 w-auto" />
        </a>

        <div class="flex-1 hidden md:block">
            @livewire('search')
        </div>

        <div class="mx-6 relative hidden md:block">
            @auth
            
                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        
                        <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                        </button>
                    
                    </x-slot>

                    <x-slot name="content">
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-black">
                            {{ __('Administrar cuenta') }}
                        </div>

                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Profile') }}
                        </x-jet-dropdown-link>

                        <x-jet-dropdown-link href="{{ route('orders.index') }}">
                            Mis ordenes
                        </x-jet-dropdown-link>

                        @role('admin')
                            <x-jet-dropdown-link href="{{ route('admin.index') }}">
                                Administrador
                            </x-jet-dropdown-link>
                        @endrole

                        <div class="border-t border-purple-300"></div>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-jet-dropdown-link>
                        </form>
                    </x-slot>
                </x-jet-dropdown>

            @else

                <x-jet-dropdown align="right" width="48">

                    <x-slot name="trigger">
                        <i class="fas fa-user-circle text-white text-4xl cursor-pointer"></i>
                    </x-slot>

                    <x-slot name="content">
                        <x-jet-dropdown-link href="{{ route('login') }}">
                            {{ __('Login') }}
                        </x-jet-dropdown-link>

                        <x-jet-dropdown-link href="{{ route('register') }}">
                            {{ __('Register') }}
                        </x-jet-dropdown-link>
                    </x-slot>

                </x-jet-dropdown>

            @endauth
        </div>

        <div class="hidden md:block">
            @livewire('dropdown-cart')
        </div>

    </div>

    <nav id="navigation-menu" 
        :class="{'block': open, 'hidden': !open}"
        class="bg-trueGray-700 bg-opacity-25 w-full absolute hidden">

        {{-- Menu computadora --}}
        <div class="container h-full hidden md:block">
            <div
                x-on:click.away="close()"
                class="grid grid-cols-4 h-full relative">
                <ul class="bg-white">
                    @foreach ($categories as $category)
                        <li class="navigation-link text-black hover:bg-indigo-600 hover:text-white">
                            <a href="{{route('categories.show', $category)}}" class="py-2 px-4 text-sm flex items-center">

                                <span class="flex justify-center w-9">
                                    {!!$category->icon!!}
                                </span>

                                {{$category->name}}
                            </a>


                            <div class="navigation-submenu bg-gray-100 absolute w-3/4 h-full top-0 right-0 hidden">
                                <x-navigation-subcategories :category="$category" />
                            </div>

                        </li>
                    @endforeach
                </ul>

                <div class="col-span-3 bg-gray-100">
                    <x-navigation-subcategories :category="$categories->first()" />
                </div>
            </div>
        </div>

        {{-- menu mobil --}}
        <div class="bg-white h-full overflow-y-auto">

            <div class="container bg-gray-200 py-3 mb-2">
                @livewire('search')
            </div>

            <ul>
                @foreach ($categories as $category)
                    <li class="text-black hover:bg-indigo-600 hover:text-white">
                        <a href="{{route('categories.show', $category)}}" class="py-2 px-4 text-sm flex items-center">

                            <span class="flex justify-center w-9">
                                {!!$category->icon!!}
                            </span>

                            {{$category->name}}
                        </a>
                    </li>
                @endforeach
            </ul>

            <p class="text-trueGray-500 px-6 my-2">USUARIOS</p>

            @livewire('cart-mobil')

            @auth
                <a href="{{ route('profile.show') }}" class="py-2 px-4 text-sm flex items-center text-trueGray-500 hover:bg-indigo-600 hover:text-white">

                    <span class="flex justify-center w-9">
                        <i class="far fa-address-card"></i>
                    </span>

                    Perfil
                </a>

                <a href="" 
                    onclick="event.preventDefault();
                            document.getElementById('logout-form').submit() "
                    class="py-2 px-4 text-sm flex items-center text-trueGray-500 hover:bg-indigo-600 hover:text-white">

                    <span class="flex justify-center w-9">
                        <i class="fas fa-sign-out-alt"></i>
                    </span>

                    Cerrar sesión
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                </form>

            @else
                <a href="{{ route('login') }}" class="py-2 px-4 text-sm flex items-center text-trueGray-500 hover:bg-indigo-600 hover:text-white">

                    <span class="flex justify-center w-9">
                        <i class="fas fa-user-circle"></i>
                    </span>

                    Iniciar sesión
                </a>

                <a href="{{ route('register') }}" class="py-2 px-4 text-sm flex items-center text-trueGray-500 hover:bg-indigo-600 hover:text-white">

                    <span class="flex justify-center w-9">
                        <i class="fas fa-fingerprint"></i>
                    </span>

                    Registrarse
                </a>
            @endauth
        </div>
    </nav>
</header>