<!doctype html>
<html data-theme="corporate">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="output.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<main class="h-screen bg-cover bg-center bg-no-repeat " style="background-image: url('assets/img/bglogin.png');padding:0.1px;">
    <div class="m-auto  flex justify-center items-center">
        <form id="frmLogin"class="flex flex-col w-80  bg-sky-900/70 rounded-lg shadow-lg p-5 gap-5 mt-36 md:mt-56 lg:mt-20 xl:w-96 " >
            <div class="size-28 m-auto p-0">
                <img src="./assets/img/logoavisystem.png" alt="logo avisistem" class="size-28 object-cover">
            </div>
            <div class="flex flex-col mt-2 gap-2 md:mt-10">
                <div class="flex flex-col gap-2">
                    <label for="usuario" class="text-slate-50 font-normal"><i class='icon-[tdesign--user-filled]'></i> Usuario</label>
                    <input type="text" name="usuario" id="usuario" class="input max-w-sm py-2 px-2 rounded-md outline-0 placeholder:text-slate-300" placeholder="Ingrese su usuario">
                </div>
                <div class="flex flex-col gap-2">
                    <label for="password"class="text-slate-50"><i class='icon-[bxs--key]'></i> Contraseña</label>
                    <input type="password" name="password" id="password" class="input max-w-sm py-2 px-2 rounded-md outline-0 placeholder:text-slate-300" placeholder="Ingrese su contraseña">
                </div>
            </div>
            <div class="hidden bg-red-400/30 text-center text-red-400 font-bold rounded-md d-none" role="alert" id="alerta"></div>
            <button type="submit" class="py-2 px-2 bg-slate-800/75 rounded-md text-slate-50 mt-4 hover:bg-slate-800" onclick="frmLogin(event)">Iniciar session</button>
        </form>
    </div>
    </main>
  <script>
        const base_url = '<?php echo base_url; ?>';
  </script>
  <script src="node_modules/flyonui/flyonui.js"></script>
  <script src="<?php echo base_url; ?>assets/js/login.js"></script>
</body>
</html>