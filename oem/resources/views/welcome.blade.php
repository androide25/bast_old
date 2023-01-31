@extends('layouts.app')

@section('content')
<div class="agile mainslide agile--auto-play agile--fade">
    <div class="agile__list">
        <div class="agile__track" style="transform: translate(0px); transition: transform 300ms ease 0s;">

            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" width="400">
                <div class="carousel-inner ">
                    <div class="carousel-item active">
                        <img src="{{url('/image/Fambote.jpeg')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{url('/image/Fammar.jpeg')}}" class="d-block w-100" alt="...">
                    </div>

                    <div class="carousel-item">
                        <img src="{{url('/image/Fammuelle.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

    </div>
</div>




<div class="flex-center position-ref">
    <div class="content mb-4">

        <div id="que_es" class=" my-1">
            <div class="mx-auto w-full">
                <div class="flex justify-between ">
                    <div class="md:flex md:flex-row md:flex-1 content-center hidden md:block">
                        <div class="flex-grow md:h-72 xl:h-104">
                            <div class="w-full h-full flex items-center justify-center">
                                <img class="w4" src="{{url('/image/Fammar1024.jpeg')}}" width="600" height="600">
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col flex-1 justify-between content-center my-auto">
                        <h2 class="text-2xl lg:text-5xl text-center px-4">¿Qu&eacute; es <span
                                class="font-bastfont text-bastcolor">BAST</span>?</h2>
                        <p class="flex-grow text-lg lg:text-xl text-center px-4">Es la nueva
                            forma de pagar tus
                            viajes,
                            a trav<span lang="es-mx">e</span>s de una suscripci<span lang="es-mx">o</span>n. Viaja por
                            toda la Rep<span lang="es-mx">u</span>blica Mexicana, libre de deudas, haciendo pagos
                            peque<span lang="es-mx">ñ</span>os y constantes.</p>
                    </div>
                </div>
            </div>
            <div class="block md:hidden">
                <div class="w-full h-full flex items-center justify-center">
                    <img class="w-4/6" src="/bast/oem/img/Fammar1024.jpeg">
                </div>
            </div>
        </div>


        <div id="como_funciona">
            <div class="mx-auto w-full">
                <div class="flex justify-between ">
                    <div class="flex flex-col flex-1 justify-between content-center my-auto md:h-104 xl:h-112">
                        <h2 class="text-2xl lg:text-5xl mb-4 text-center px-4">&nbsp;
                        </h2>
                        <h2 class="text-2xl lg:text-5xl mb-4 text-center px-4">¿C&oacute;mo Funciona?</h2>
                        <div class="flex-grow space-y-6 text-center">
                            <p class="text-lg lg:text-xl px-4">Selecciona la suscripci&oacute;n que quieras, para el
                                viaje que tanto a<span lang="es-mx">ñ</span>oras y realiza tus pagos puntualmente.</p>
                            <p class="text-lg lg:text-xl px-4">Cubrimos los principales destinos tur&iacute;sticos y
                                ciudades de la Rep&uacute;blica Mexicana.</p>
                            <p class="text-lg lg:text-xl px-4">Eres libre de escoger el destino en cualquier momento.
                            </p>
                            <p class="text-lg lg:text-xl px-4">Y listo, prep&aacute;rate para viajar libre de deudas.
                            </p>
                        </div>
                    </div>
                    <div class="md:flex md:flex-row md:flex-1 content-center hidden md:block">

                        <div class="flex-grow">
                            <div class="w-full h-full flex items-center justify-center">
                                <img class="w-5/6 xl:w-4/6 m-auto" src="{{url('/image/Pareja.png')}}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block md:hidden">
                    <img class="w-full h-full object-cover object-center" src="{{url('/image/Pareja.png')}}">
                </div>
            </div>
        </div>

        <div class="section">
            <div class="divimg" style="background-size: 114.03%;"></div>

            <div class="textoverlay" style="opacity: 1;">
                <div class="flex flex-col justify-between text-center content-left bg-white bg-opacity-75 p-4">
                    <h2 class="text-2xl lg:text-4xl xl:text-5xl lg:h-20 px-2">Suscripciones <span
                            class="font-bastfont text-bastcolor">BAST</span></h2>
                    <h3 class="text-xl lg:text-2xl mb-3 px-2"><strong>Beneficios para todas las suscripciones:</strong>
                    </h3>
                    <div class="flex-grow space-y-6">
                        <div class="flex mx-auto w-full justify-right">
                            <ul class="flex flex-col p-2 ml-3">
                                <li class="flex flex-row">
                                    <div class="select-none cursor-pointer1 flex flex-1">
                                        <div class="flex-1 pl-1">
                                            <div class="font-medium text-sm lg:text-lg"><span
                                                    class="mr-3 align-middle text-xs pb-1">●</span>Alimentos y
                                                <strong>bebidas no alcohólicas INCLUIDAS</strong>.
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex flex-row mt-3">
                                    <div class="select-none cursor-pointer1 flex flex-1">
                                        <div class="flex-1 pl-1">
                                            <div class="font-medium text-sm lg:text-lg"><span
                                                    class="mr-3 align-middle text-xs pb-1">●</span>Propinas e impuestos
                                                <strong>INCLUIDOS</strong>.
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex flex-row mt-3">
                                    <div class="select-none cursor-pointer1 flex flex-1">
                                        <div class="flex-1 pl-1">
                                            <div class="font-medium text-sm lg:text-lg"><span
                                                    class="mr-3 align-middle text-xs pb-1">●</span>Mismo precio a todos
                                                los destinos en cualquier temporada del a<span lang="es-mx">ñ</span>o.
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex flex-row mt-3">
                                    <div class="select-none cursor-pointer1 flex flex-1">
                                        <div class="flex-1 pl-1">
                                            <div class="font-medium text-sm lg:text-lg"><span
                                                    class="mr-3 align-middle text-xs pb-1">●</span>Reserva el destino
                                                dos meses antes de que quieras viajar.</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex flex-row mt-3">
                                    <div class="select-none cursor-pointer1 flex flex-1">
                                        <div class="flex-1 pl-1">
                                            <div class="font-medium text-sm lg:text-lg"><span
                                                    class="mr-3 align-middle text-xs pb-1">●</span>Totalmente
                                                transferible.</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex flex-row mt-3">
                                    <div class="select-none cursor-pointer1 flex flex-1">
                                        <div class="flex-1 pl-1">
                                            <div class="font-medium text-sm lg:text-lg"><span
                                                    class="mr-3 align-middle text-xs pb-1">●</span>Múltiples opciones de
                                                pago incluyendo efectivo.</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex flex-row mt-3">
                                    <div class="select-none cursor-pointer1 flex flex-1">
                                        <div class="flex-1 pl-1">
                                            <div class="font-medium text-sm lg:text-lg"><span
                                                    class="mr-3 align-middle text-xs pb-1">●</span>Garantía de
                                                cumplimiento.</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex flex-row mt-3">
                                    <div class="select-none cursor-pointer1 flex flex-1">
                                        <div class="flex-1 pl-1">
                                            <div class="font-medium text-sm lg:text-lg"><span
                                                    class="mr-3 align-middle text-xs pb-1">●</span>Suscripción gratuita
                                                a <span class="font-bold">bité</span>, revista exclusiva para miembros
                                                de <span class="font-bastfont text-bastcolor">BAST</span>.</div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="paquetes" class="overflow-hidden my-1">









            <p>&nbsp;</p>
            <h1 class="text-3xl lg:text-5xl text-center">Selecciona la suscripci<span lang="es-mx">o</span>n de viaje
                que deseas,</h1>
            <h1 class="text-3xl lg:text-5xl text-center">desde $<strong>350 pesos</strong> a la quincena</h1>
            <p>&nbsp;</p>

            <div class="container mx-auto px-4 lg:px-32">
                <div class="flex flex-col md:flex-row justify-between">

                    <div
                        class="select-none cursor-pointer1 mx-3 bg-gray-100 rounded-md border-gray-600 border-4 border-solid border-opacity-100 flex flex-col flex-1 items-center p-1 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:shadow-lg">
                        <div class="mx-auto w-4/5 h-4/5">
                            <div class="rounded-md p-3">
                                <img class="mx-auto w-auto h-24" src="{{url('/image/3DiasF.jpeg')}}">
                            </div>
                        </div>
                        <div class="flex-1 pl-1 text-center">
                            <div class="text-3xl md:text-xl xl:text-3xl text-bastcolor" style="height: 1em">TE <span
                                    class="font-bastfont">BAST</span></div>
                            <div class="text-3xl md:text-xl xl:text-3xl text-bastcolor">DE VACACIONES</div>
                            <p>&nbsp;</p>
                            <div class="text-xl md:text-sm md:text-normal lg:text-xl">
                                2 adultos, 2 menores de 12 a<span lang="es-mx">ñ</span>os, 3 d<span
                                    lang="es-mx">i</span>as y 2 noches, desde 20 quincenas.</div>
                            <div class="mt-8 mb-6 ">
                                <a class="inline-block bg-bastcolor text-white px-4 py-2 rounded-lg shadow-lg uppercase font-semibold"
                                    href="https://www.bast.mx/register">Seleccionar</a>
                            </div>
                            <div class="text-3xl md:text-xl lg:text-3xl text-bastcolor font-extrabold">$350.00 MXN</div>
                            <div class="text-xl text-bastcolor font-extrabold">QUINCENALES</div>
                            <div class="text-normal text-bastcolor font-extrabold">durante 20 quincenas</div>
                        </div>

                    </div>
                    <div
                        class="select-none cursor-pointer1 mx-3 bg-gray-100 rounded-md border-gray-600 border-4 border-solid border-opacity-100 flex flex-col flex-1 items-center p-1 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:shadow-lg">
                        <div class="mx-auto w-4/5 h-4/5">
                            <div class="rounded-md p-3">
                                <img class="mx-auto w-auto h-24" src="{{url('/image/3DiasF.jpeg')}}">
                            </div>
                        </div>
                        <div class="flex-1 pl-1 text-center">
                            <div class="text-3xl md:text-xl xl:text-3xl text-bastcolor" style="height: 1em">TE <span
                                    class="font-bastfont">BAST</span></div>
                            <div class="text-3xl md:text-xl xl:text-3xl text-bastcolor">UNOS DIAS</div>
                            <p>&nbsp;</p>
                            <div class="text-xl md:text-sm md:text-normal lg:text-xl">2 adultos, 2 menores de 12 a<span
                                    lang="es-mx">ñ</span>os, 5 d<span lang="es-mx">i</span>as y 4 noches, desde 40
                                quincenas.</div>
                            <div class="mt-8 mb-6 ">
                                <a class="inline-block bg-bastcolor text-white px-4 py-2 rounded-lg shadow-lg uppercase font-semibold"
                                    href="https://www.bast.mx/register">Seleccionar</a>
                            </div>
                            <div class="text-3xl md:text-xl lg:text-3xl text-bastcolor font-extrabold">$400.00 MXN</div>
                            <div class="text-xl text-bastcolor font-extrabold">QUINCENALES</div>
                            <div class="text-normal text-bastcolor font-extrabold">durante 40 quincenas</div>
                        </div>

                    </div>


                </div>

            </div>

        </div>
    </div>

    <div class="footer bg-bastcolor text-white py-4">
        <div class="">
            <!-- Footer links -->
            <div class="container mx-auto px-4 flex justify-between">

                <!-- Guia -->
                <div class="mt-auto">
                    <div class="flex">
                        <div class="mr-3">
                            <a href="https://www.bast.mx/bite">
                                <img class="w-full" alt="" src="{{url('/image/Magazine.png')}}">
                            </a>
                        </div>
                        <div class=" ">
                            <ul class="">
                                <li><a href="https://www.bast.mx/bite">GUIA <span class="font-bastfont">BAST</span></a>
                                </li>
                                <li>&nbsp;</li>
                                <li>Para disfrutar al m<span lang="es-mx">a</span>ximo tus viajes</li>
                                <li>&nbsp;</li>
                                <li><a href="https://www.bast.mx/bite">Descarga aqu&iacute;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Links -->
                <div class="flex justify-center content-end flex-1" data-mh="footer">

                    <div class="social flex justify-between content-end mt-auto">
                        <a class="mx-2" href="mailto:contacto@bast.mx"><img src="{{url('/image/mail-logo-small.jpeg')}}"
                                alt="Bast Mail" style="height: 30px;" /></a>&nbsp;&nbsp;
                        <a class="mx-2" target="_blank" href="https://www.facebook.com/www.bast.mx/"><img
                                src="{{url('/image/fb-logo-small.jpeg')}}" alt="Bast Facebook"
                                style="height: 30px;" /></a>&nbsp;&nbsp;
                        <a class="mx-2" target="_blank" href="https://www.youtube.com/company/4788505"><img
                                src="{{url('/image/youtube-logo-small.jpeg')}}" alt="Bast YouTube"
                                style="height: 30px;" /></a>
                    </div>
                </div>


                <!-- Derecho -->
                <div class="" data-mh="footer mt-auto">
                    <ul style="list-style-type: none;">
                        <li>Nosotros</li>
                        <li><a href="/?#suscripciones">Suscripci<span lang="es-mx">o</span>n BAST</a></li>
                        <li><a href="https://www.bast.mx/register">Registro</a></li>
                        <li><a href="https://www.advensyst.com/bast/oem/login.php">Ingresar</a></li>
                        <li><a href="https://www.bast.mx/terminos-y-condiciones">T&eacute;rminos y condiciones</a></li>
                        <li><a href="https://www.bast.mx/aviso-de-privacidad">Aviso de privacidad</a></li>

                    </ul>
                </div>
            </div>
            @endsection