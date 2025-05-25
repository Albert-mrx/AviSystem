<!DOCTYPE html>
<html lang="en" data-theme="corporate">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="output.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="<?php echo base_url;?>node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script>const base_url = '<?php echo base_url; ?>';</script>
   
    <title>Dashboard</title>
</head>
<body>
<main class="flex h-screen p-0 overflow-hidden">
        <aside id="mobileMenu" class="fixed top-0 left-0 w-64 h-screen bg-white shadow-lg transform -translate-x-full transition-transform duration-300 z-50 md:translate-x-0 md:static md:flex md:flex-col">
            <div class="w-auto bg-sky-700">
                <img src="<?php echo base_url;?>assets/img/logoavisystem.png" alt="" class="size-16 object-cover m-auto">
            </div>

            <div class="menu flex flex-col p-2">
                <ul class="h-full ">
                    <li>
                        <a href="<?php echo base_url; ?>Dashboard" class="bg-sky-700 text-slate-50 hover:not-focus ">
                        <span class="icon-[tabler--home] size-5"></span>
                        Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url; ?>DashboardAdmin" class="bg-sky-700 text-slate-50">
                        <span class="icon-[tabler--home] size-5 "></span>
                        Dashboard(admin)
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url; ?>DashboardLider" class="bg-sky-700 text-slate-50">
                        <span class="icon-[tabler--home] size-5"></span>
                        Dashboard(lider)
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url; ?>InteSuperAdmin" class="">
                        <span class="icon-[mage--user-fill] size-5"></span>
                        Integrantes
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url; ?>InteConsolidador" class="">
                        <span class="icon-[mage--user-fill] size-5"></span>
                        Integrantes(consolidador)
                        </a>
                    </li>
                    <li>
                        <a href="#" class="">
                        <span class="icon-[cuida--calendar-outline] size-5"></span>
                        Reuniones
                        </a>
                    </li>
                    <li>
                        <a href="#" class="">
                        <span class="icon-[material-symbols--group] size-5"></span>
                        Grupos
                        </a>
                    </li>
                </ul>
            </div>
            <div class="w-full absolute bg-sky-700 h-20  bottom-0 flex flex-col items-center ">
                <div class="flex  gap-1 text-sky-100 mt-3">
                        <span class="text-sm font-bold"><?php echo $_SESSION['name'] ?> :</span>
                        <span class="text-sm">Sup Admin</span>
                </div>
                <a href="<?php echo base_url;?>Integrantes/salir" class=" flex justify-between text-sm bg-red-500/80 items-center gap-2 p-2 w-32 rounded-sm mt-1">
                    <span class="font-bold text-slate-50">Salir</span>
                    <i class='icon-[material-symbols-light--exit-to-app] text-slate-50 text-lg'></i>
                </a>
            </div>
        </aside>
        <section class="flex flex-col w-full h-screen relative">
            <nav class="bg-sky-200 h-16 w-full  flex items-center  px-4 shadow-lg fixed top-0">
            <button id="menuToggle" class="block md:hidden text-sky-800 text-3xl focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            </nav>

