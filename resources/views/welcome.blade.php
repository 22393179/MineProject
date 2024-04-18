<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Datos Minecraft</title>
</head>

<body class="bg-[#F3F5F9] m-0 p-0">
    <h1 class="text-center text-4xl font-bold mt-10">Minecraft en Arduino</h1>

    <div class="grid grid-cols-2 gap-10 ml-20 mr-20 mt-10">
        <div class="bg-white h-[75vh] rounded-lg border-black border-2 w-96 mx-auto">
            <h2 class="text-center font-bold text-xl mt-4">Total de Animales</h2>
            <div class="flex justify-center">
                <ul class="space-y-8 mt-10">
                        {{-- Gallinas --}}
                        <div class="flex gap-6">
                            <img src="{{ url('/img/pollo.png') }}" alt="pollo_Minecraft" class=" w-20 h-20"/>
                            <p class="font-bold">Total de Gallinas:</p>
                        </div>
                    {{-- Cerdos --}}
                    <div class="flex gap-6">
                        <img src="{{ url('/img/cerdo.webp') }}" alt="pollo_Minecraft" class=" w-20 h-20"/>
                        <p class="font-bold">Total de Cerdos:</p>
                    </div>
                    {{-- Vacas --}}
                    <div class="flex gap-6">
                        <img src="{{ url('/img/Vaca.png') }}" alt="pollo_Minecraft" class=" w-20 h-20"/>
                        <p class="font-bold">Total de Vacas:</p>
                    </div>
                    {{-- Ovejas --}}
                    <div class="flex gap-6">
                        <img src="{{ url('/img/oveja.webp') }}" alt="pollo_Minecraft" class=" w-20 h-20"/>
                        <p class="font-bold">Total de Ovejas:</p>
                    </div>
                </ul>
            </div>
        </div>
        <div class="grid grid-rows-2 gap-y-10 h-[75vh]">
            <div class="bg-white w-full rounded-lg border-2 border-black">
                <h2 class="text-center text-xl font-bold mt-4">LCD</h2>
                {{-- Dibujo del LCD --}}
                <div class="bg-green-600 w-[30vw] h-[20vh] flex items-center justify-center mx-auto mt-5">
                    <div class="bg-black w-[27vw] h-[15vh] flex items-center justify-center relative">
                        <div class="bg-blue-700 w-[25vw] h-[10vh]">
                            {{-- apartir de aqui se aplicara los datos del lcd --}}
                        </div>
                    </div>
                </div>
            </div>
            {{-- Parte para los foquitos leds --}}
            <div class="bg-white w-full rounded-lg border-2 border-black">
                <h2 class="text-center text-xl font-bold mt-4">LEDs</h2>
                {{-- posicion de las imagenes del led --}}
                <div class="flex justify-center gap-20 mt-5">
                    <div>
                        <p class="font-bold mb-4">Encendido:</p>
                        <img src="{{ url('/img/VERDE ON.svg') }}" alt="led_verde_encendido" class=" w-20 h-20"/>
                    </div>
                    <div>
                        <p class="font-bold mb-4">Apagado:</p>
                        <img src="{{ url('/img/VERDE OFF.svg') }}" alt="led_verde_encendido" class=" w-20 h-20"/>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</body>

</html>
