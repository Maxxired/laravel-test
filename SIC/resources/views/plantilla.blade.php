<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('titulo')</title>
</head>

<body>
    <header>
        <div bg-[#F0F6FF] h-screen flex>
            <div class="flex">
                <!-- Sidebar -->
                <!-- Content -->
                <div class="flex flex-col flex-grow">
                    <!-- Header -->
                    <nav class="fixed top-0 left-0 right-0 bg-[#ffffff] shadow-lg p-5">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center flex-shrink-0 text-white mr-6">
                            </div>
                            <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto text-right ">
                                <div class="text-sm font-medium lg:flex-grow mt-2">
                                    <h3>¡Bienvenido Yo!</h3>
                                </div>
                                <div
                                    class="mt-2 ml-4 w-10 h-10 flex items-center justify-center rounded-full bg-slate-500">
                                    <!-- Replace with appropriate icon based on role -->
                                    <i class="text-white fas fa-code"></i>
                                </div>

                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <body>
        <div class="bg-[#F0F6FF] min-h-screen flex justify-between items-center">
            <nav class="w-52 bg-[#ffffff] min-h-screen p-4 shadow-md flex flex-col">
                <!-- Sidebar content -->
                <div class="text-[#5D7285] text-lg font-semibold mb-4 ml-4 mt-24">
                    <!-- Conditional rendering based on role -->
                    <!-- Admin and Leader -->
                    <a class="block mt-4 hover:text-[#376690] mr-4">
                        <i class="mr-3 fas fa-house-user"></i>
                        Inicio
                    </a>
                    <a class="block mt-4 hover:text-[#376690] mr-4">
                        <i class="mr-3 fas fa-diagram-project"></i>
                        Proyectos
                    </a>
                    <a class="block mt-4 hover:text-[#376690] mr-4">
                        <i class="mr-3 fas fa-tasks"></i>
                        Tareas
                    </a>
                    <a class="block mt-4 hover:text-[#376690] mr-4">
                        <i class="mr-3 fas fa-folder-open"></i>
                        Recursos
                    </a>
                    <a class="block mt-4 hover:text-[#376690] mr-4">
                        <i class="mr-3 fas fa-user-friends"></i>
                        Equipo
                    </a>
                </div>
                <button
                    class="transform transition duration-300 hover:scale-110 p-2 text-white rounded-md bg-[#036EFF] font-semibold mt-auto"
                    onclick="logOff()">
                    Cerrar Sesión
                </button>
            </nav>
            @yield('contenido')
        </div>


    </body>
</body>

</html>
