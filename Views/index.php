<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
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
</head>
<body>
    <main class="h-screen bg-cover bg-center bg-no-repeat" style="background-image: url('assets/img/bglogin.png');padding:0.1px;">
    <div class="m-auto  flex justify-center items-center">
        <form id="frmLogin"class="flex flex-col w-80  bg-sky-900/60 rounded-lg shadow-lg p-5 gap-5 mt-36 md:mt-56 lg:mt-20 xl:w-96 " >
            <div class="size-28 m-auto p-0">
                <img src="./assets/img/logoavisystem.png" alt="logo avisistem" class="size-28 object-cover">
            </div>
            <div class="flex flex-col mt-2 gap-2 md:mt-10">
                <div class="flex flex-col gap-2">
                    <label for="usuario" class="text-slate-50 font-normal"><i class='bx bxs-user'></i> Usuario</label>
                    <input type="text" name="usuario" id="usuario" class="py-2 px-2 rounded-md outline-0 placeholder:text-slate-300" placeholder="Ingrese su usuario">
                </div>
                <div class="flex flex-col gap-2">
                    <label for="password"class="text-slate-50"><i class='bx bxs-key'></i> Contraseña</label>
                    <input type="password" name="password" id="password" class="py-2 px-2 rounded-md outline-0 placeholder:text-slate-300" placeholder="Ingrese su contraseña">
                </div>
            </div>
            <div class="hidden bg-red-400/60 text-center text-red-700 fw-bold rounded-md d-none" role="alert" id="alerta"></div>
            <button type="submit" class="py-2 px-2 bg-slate-800/75 rounded-md text-slate-50 mt-4 hover:bg-slate-800" onclick="frmLogin(event)">Iniciar session</button>
        </form>
    </div>
    </main>
    <script>
        const base_url = '<?php echo base_url; ?>';
    </script>
    <script src="<?php echo base_url; ?>assets/js/login.js"></script>
   
</body>
</html>