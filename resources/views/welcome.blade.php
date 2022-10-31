<x-app-layout>
<section class="bg-cover mt-3" style="background-image: url({{asset('img/vista.jpg')}})">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-56">
        <div class="w-full md:w-3/4 lg:w-1/2">
            <h1 class="text-white font-fold text-4xl">¡Bienvenido A Un Solo Clic!</h1>
            <p class="text-white text-lg mt-2">Deslizate y descubre nuestros Productos!</p>
        </div>
    </div>
</section>

    <div class="container py-8">
        @foreach ($categories as $category)
            <secelion class="mb-6">
                <div class="flex items-center mb-2">
                    <h1 class="text-lg uppercase font-semibold text-black">
                        {{$category->name}}
                    </h1>

                    <a href="{{route('categories.show', $category)}}" class="text-purple-600 hover:text-indigo-600 hover:underline ml-2 font-semibold">Ver más</a>

                </div>

                @livewire('category-products', ['category' => $category])
            </secelion>

        @endforeach
    </div>

    
    @push('script')
        
        <script>

            Livewire.on('glider', function(id){

                new Glider(document.querySelector('.glider-' + id), {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    draggable: true,
                    dots: '.glider-' + id + '~ .dots',
                    arrows: {
                        prev: '.glider-' + id + '~ .glider-prev',
                        next: '.glider-' + id + '~ .glider-next'
                    },
                    responsive: [
                        {
                            breakpoint: 640,
                            settings: {
                                slidesToShow: 2.5,
                                slidesToScroll: 2,
                            }
                        },
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 3.5,
                                slidesToScroll: 3,
                            }
                        },

                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 4.5,
                                slidesToScroll: 4,
                            }
                        },

                        {
                            breakpoint: 1280,
                            settings: {
                                slidesToShow: 5.5,
                                slidesToScroll: 5,
                            }
                        },
                    ]
                });

            });
                
        </script>

    @endpush

    <section class="container bg-white rounded-xl">
        <h1 class="text-gray-600 text-center text-2xl mb-6">PREGUNTAS FRECUENTES</h1>
        <p>¿Cuál es el método de pago que se utiliza?</p> <p> El único método de pago con el que contamos actualmente es por medio de PayPal</p> <br>
        <p>¿El precio que se muestra en la web es el precio final?</p> <p>Todos los precios que se encuentran en la página son el precio final. Estos se encuentran expresos en dólares</p><br>
        <p>¿Todas las compras tienen recibo o fractura?</p> <p>Todos los productos cuentan con una factura.</p> <br>
        <p>¿Cómo recibo la factura de mi compra?</p> <p>La factura es enviada en el paquete con el producto</p> <br>
        <p>¿Que ocurre si quiero reembolsar mi producto?</p> <p>Debe comunicarse con nosotros por medio del correo electrónico (aunsoloclic@gmail.com) o redes sociales</p> <br>
       
    </section>

    <section class="mt-8">
        <h1 class="text-gray-600 text-center text-2xl mb-6">Algunas Marcas con las que trabajamos!</h1>
    
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-8">
            <article>
                <figure>
                    <img class="rounded-xl object-cover w-full" src="{{asset('img/marca1.png')}}" alt="">
                </figure>
            </article>
    
            <article>
                <figure>
                    <img class="rounded-xl object-cover w-full" src="{{asset('img/marca2.png')}}" alt="">
                </figure>
            </article>
    
            <article>
                <figure>
                    <img class="rounded-xl object-cover w-full" src="{{asset('img/marca3.png')}}" alt="">
                </figure>
            </article>
    
            <article>
                <figure>
                    <img class="rounded-xl object-cover w-full" src="{{asset('img/marca4.png')}}" alt="">
                </figure>
            </article>
    
            <article>
                <figure>
                    <img class="rounded-xl object-cover w-full" src="{{asset('img/marca5.png')}}" alt="">
                </figure>
            </article>
    
            <article>
                <figure>
                    <img class="rounded-xl object-cover w-full" src="{{asset('img/marca6.png')}}" alt="">
                </figure>
            </article>
    
            <article>
                <figure>
                    <img class="rounded-xl object-cover w-full" src="{{asset('img/marca7.png')}}" alt="">
                </figure>
            </article>
    
            <article>
                <figure>
                    <img class="rounded-xl object-cover w-full" src="{{asset('img/marca8.png')}}" alt="">
                </figure>
            </article>
        </div>
    
    </section>
    
    </section>
        <div class="bg-gradient-to-r from-gray-800 to-indigo-700 mt-16">
            <div class="max-w-screen-lg py-2 px-4 sm:px-6 sm:flex justify-between mx-auto">
                <div class="mt-2 sm:w-7/12">
                    <h4 class="font-bold text-xl text-purple-400 mb-2">A UN SOLO CLIC</h4>
                    <p class="text-white text-sm mb-4">Acerca de nosotros:
                    <br>
                    Somos una distribuidora de componentes de computadora para gamers de parte de gamers. Creamos esta empresa en el año 2020 y cada dia estamos dispuestos a mejorar nuestros servicios.
                    </p>
                </div>
                <div class="p-5 sm:w-3/12">
                    <div class="text-sm uppercase text-purple-400 font-bold">Nuestras Redes Sociales</div>
                    <ul>
                        <li>
                            <a class="flex mt-3 text-white hover:text-indigo-200" href=""><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAZCAYAAADE6YVjAAAABmJLR0QA/wD/AP+gvaeTAAAENUlEQVRIie2VTYiVVRjHf+ec9+O+M/fOvXPHGRtHTUQowqAPg3JThEgQJKS2cNOmELRFkeGiTbuKoYWEZiIRGFEzQSS00EUQfQk12aqwsBKc63x/Xufe+77veZ4WN2GuNVJ7HzhwnrP4/3j+z3POgdvxP8LcfDC8+1z3TMW9PxmHu3JrClGuGquXgleJRaUgIrFXSUQkznMNcyQRlSSXqULmRweaM8M7xg5ma0KGd5/rvtobXJpM4iE1ihMlUiX2nliFglcKuSfxSkFu5ELBCwUPhVxJcvmimM48sRoUrIZkiX+7FYRDpTwFA1aVak/IxsESkVVCr0QihKpEXghzpfHnEkxnRKqEQIA+nge9h4Bj/wrJA91V8ikKJKWAZ57fzrZ7qsxPrYAqBrAKBsUqWKA4WGRmbIJLw9/jFlJCBYzdtyYkkbRoc4saZd9zD5E1Whw/+DmmlRGoEoonFiUUIfZCJEqlr8jdz97HvUce5PdXv8Qah6IbVuva1UlJGlLxK2wsCVu393Ph5NeUGktUpE5F6pR1hYGK0MN1Sqyw+f4+Hjuzl4n3vqOyY5DSUISzKQbf0euOSsra9KrC+qESy1fnKbcWsSoEVrhrzwNs27sDaw0qyvjHF5g9e5HLR0cIJ6dIr8xR2NBFWltqe7oWpCrLAp4eW8b5jD5ZxCHcuedhBnZu5Zcj75JfnaVrQ5UtrzxDt7ZY/uhbEhOA5FiX40wGdEI67OrTJV/VRSpSJySnX+foN3NsfvoRpt86TbH2K+uYpWf8N+pvnqbvwKPEcUpgmxgUZ1KcTQlMvnYl63TeozkJVUIy+pkiKpewBiq1n3EIxlgEh1y7DqrEfQFMrmCM4GyGsy30pvvXASmxKI4WkRkgIKdq5rBLMxgVihu70VoNUYdoAENbwIBZnCS0AQbBmYzApqCdD0mHXYFrELoGoWlijCdydcKgDmc/IHj5KOGWPqKgTrSpl8KRF8hHRghlmcA2MEaxNv/bslvYFdomgW3gWMEEFspA6OCbTyCx8PopjCoO0NEzmLOfEdgYAOPAarsnom5tSGCbBK6BmbsCQ5uhvwtsCg4YG4WxTyGpwuQMZjklcAKqEMW4TYOYqWtYk+Fsh2ynXc42xXQZkAW4/CMceAn6E6i69ior6AwUBUoWihaXKPHhg/iLP6GTNZzJsLeaLhv5CbrcVooWzh+Dp16Ewx/C8gSg7fEXQBR8e2/WDcHFH8hPnMAZxdscgx9fE0LsRinYnSQG3Ap89QasH4TKYLvmVKGp0FCoC9Q9/DEOl2uYvIg1RSwehx9ZGxItHifufZLY7KJgoMuCnQY/266gJbAksOBhXmDew6LHWMUawRjBkJ9fP914Z7XsP35GfW1/RHf9EFW7n157B1UHFddu/oLAnG+Lz3mYvQHLyZpJrZUXR4q16kkzdiq7Wfd2/Of4C8vK7flALw7oAAAAAElFTkSuQmCC">AunSoloClic</a>
                        </li>
                        <li class="my-2">
                            <a class="flex text-white hover:text-indigo-200" href=""><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAZCAYAAADE6YVjAAAABmJLR0QA/wD/AP+gvaeTAAAB/klEQVRIie2Vz29MURTHP/e9Oz90ZrRCQ4ZYSCYSi0Z3omHXDaWNnb/Aqn8BJfFjLSzE2lIagwVCIjaSho0fEQkTC5qqMDX01eib++6xqOq8zLzbjumOszv3nfv9nPM97+XB/+ggVCy7LmktwYRV6qiyku9UTDwVeCK3TC1/jhOqsXyum4u0BBOCOqUEUKpFZNWOBQQ1oHsDMXBm+dxrLrKo0Y6V24T11FhzHoMoKKwHRAkbEyGdRHGDYmt2xdKMQ0knPcj6cKDf58FsFO8SuLYvw/GdS1dvTBsWLVytGB5/idooOSbZXfAoD2UZ3e7HzkeK/h8AwLEdmv1bfHpTyZMkQiqBZd4Ik0NZLg6m6c8sWTPQ13rl9TfLnY/tp3BC8lpx6U2DegTjpRSVwz3cPZjlSLHV4c+LkjwGjp0ERhgvpej57VZOw/A2v23ts5p1QhInWTAw/OgnT+fcAqGF8rT5OwjAnl6PwU3ut/xKpcH7H267nAqTHwx779U5+yqk1mgVevgp4uSL0AkAx0525RQjRU2poDhU1PSlVj680MLltw1OvwwJ3W66Ie8WhCdzETntc382YnMaqiE8/2q5PWOYqbstWhMEYKpqmaquodVVIrYTgfmuFQFRfE+EeMjN9YB4IuXmPGaXUfnz2gZiPTXWxZ+xbGr5C902+g/HL+zOpxNWiyk8AAAAAElFTkSuQmCC">AunSoloClic</a>
                        </li>
                        <li class="my-2">
                            <a class="flex text-white hover:text-indigo-200" href=""><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAYAAADEtGw7AAAABmJLR0QA/wD/AP+gvaeTAAACJElEQVQ4je3Uz0tUURjG8e89Xp2pUdMcjRAkMXIRQcvAFrZ0lQRCPzZBELWKNrUVNyW0CAokV2GrCNoKQSBBbYKEQnJhGFExpDjJMM3o3PM+Le40aN2b/gG+mwPnHD73Pe95z4W9qEeQNKnhy9n1jkpvc62pw7vaPrcZZBVYuzBZFJRcoIpFVsX7tQO56HswO7uRCAuC8uilG0gXgCNIPTKBjHgUksCsPgrJ4vl4vSCz5UD2+OCbF9MNuDx68arEozjdP5t3jSKzeN1EYHa+6+3Lp65unUtDTcJ7vys0/jhjAK6e9tG0TCv9fTSP36bS2YntiArMH2vAknrTju862mkdOkXPzBR+7CwbDTwJNcysD8BpeDiUKZtaU8W37LIZ8tev0Hb/Lr968igBrc+1CZwrht25HS9qS+w/eYLDM1PUzpyOoe0omLnVwaFcXIodbv/fRgdt3b8te0Nhs8LOaKVcCvPp6F9uef49PycmaflaIEhAMUXdH+fKLpibiyRV/9enAFatsvJgmtK1m2TSUWS2HoDC+Gj2TdJAEurXipRevaZ07yEthRVCkXj8OgqmLwBhvcZLmAaSmj+zuET11jgZS6/pFhR5+9ToYzzP014UJtxuUTNMegbQBHDn8+K7av/gGqauwBRK1prU/KmoVMD0AfMTvcvzT9J/myMjmeKP2iGP5V1TkFHN57ypDTwYJbCyj2wDV1stUi0cX1jYTHL2AoDf1LnKH4E9Sm4AAAAASUVORK5CYII=">AunSoloClic</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flex py-5 m-auto text-gray-800 text-sm flex-col items-center border-t max-w-screen-xl">
                <div class="md:flex-auto md:flex-row-reverse mt-2 flex-row flex">
                </div>
                <div class="text-white">A un Solo Clic | © Copyright 2022 </div>
            </div>
        </div>
    </section>    
</x-app-layout>