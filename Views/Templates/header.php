<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>const base_url = '<?php echo base_url; ?>';</script>
    <script>
        tailwind.config = {
        theme: {
            extend: {
            colors: {
                clifford: '#da373d',
            },
            fontFamily:{
                "popin":[ "Poppins", "sans-serif"]
            },
            
            }
        }
        }
  </script>
    <title>Document</title>
</head>
<body>
    <main class="flex h-screen ">
        <aside class=" flex flex-col w-64 h-screen bg-white shadow-md relative ">
            <div class="w-auto bg-sky-700">
                <img src="<?php echo base_url;?>assets/img/logoavisystem.png" alt="" class="size-16 object-cover m-auto">
            </div>
            <div class="flex flex-col p-2">
                <ul class="flex flex-col gap-2">
                    <li>
                        <a class="flex flex-center items-center px-4 py-2 hover:bg-sky-950/60 cursor-pointer hover:text-slate-50 rounded-md text-neutral-700 text-lg font-popin font-bolder">
                            <div><i class='bx bx-home-alt'></i></div>
                            <h5 class="ml-3 text-base">Dashboard</h5>
                        </a>
                    </li>
                    <li>
                        <a class="flex flex-center items-center px-4 py-2 hover:bg-sky-950/60 cursor-pointer hover:text-slate-50 rounded-md text-neutral-700 text-lg font-popin font-bolder">
                            <div><i class='bx bx-home-alt'></i></div>
                            <h5 class="ml-3 text-base">Dashboard(admin)</h5>
                        </a>
                    </li>
                    <li>
                        <a class="flex flex-center items-center px-4 py-2 hover:bg-sky-950/60 cursor-pointer hover:text-slate-50 rounded-md text-neutral-700 text-lg font-popin font-bolder">
                            <div><i class='bx bx-home-alt'></i></div>
                            <h5 class="ml-3 text-base">Dashboard(lider)</h5>
                        </a>
                    </li>
                    <li>
                        <a class="flex flex-center items-center px-4 py-2 hover:bg-sky-950/60  cursor-pointer hover:text-slate-50 rounded-md text-neutral-700 text-lg font-popin font-bolder">
                            <div><i class='bx bx-user'></i></div>
                            <h5 class="ml-3 text-base">Integrantes</h5>
                        </a>
                    </li>
                    <li>
                        <a class="flex flex-center items-center px-4 py-2 hover:bg-sky-950/60  cursor-pointer hover:text-slate-50 rounded-md text-neutral-700 text-lg font-popin font-bolder">
                            <div><i class='bx bx-calendar'></i></div>
                            <h5 class="ml-3 text-base">Reuniones</h5>
                        </a>
                    </li>
                    <li>
                        <a class="flex flex-center items-center px-4 py-2 hover:bg-sky-950/60  cursor-pointer hover:text-slate-50 rounded-md text-neutral-700 text-lg font-popin font-bolder">
                            <div><i class='bx bxs-group'></i></div>
                            <h5 class="ml-3 text-base">Grupos</h5>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="w-full bg-sky-900 h-20 absolute bottom-0 flex flex-col items-center ">
                <div class="flex flex-col text-sky-100">
                    <span class="text-base font-bold"><?php echo $_SESSION['name'] ?></span>
                    <span class="text-sm">Sup Admin</span>
                </div>
                <a href="<?php echo base_url;?>Integrantes/salir" class="flex text-lg text-red-500 items-center gap-2">
                    <i class='bx bx-exit'></i>
                    <span class="font-bolder">Terminar Session</span>
                </a>
            </div>
        </aside>
        <section class="flex flex-col w-screen">
            <nav class="bg-sky-200 h-16 w-full">
            </nav>

