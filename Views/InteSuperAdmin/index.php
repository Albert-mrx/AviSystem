<?php include "Views/Templates/header.php"?>
<div class="mt-16 w-full flex flex-col p-4 overflow-y-auto">
    <h2 class="text-sky-950 text-xl font-bold md:text-2xl">Integrantes</h2>
    <!-- contenedor botones -->
    <div class="flex flex-wrap  gap-2 p-1 mt-4">
        <div>
            <button class=" bg-sky-800 hover:bg-sky-800/90 p-3 md:cursor-pointer text-center text-slate-50  rounded-lg flex justify-center items-center  gap-1.5"  aria-haspopup="dialog" aria-expanded="false" aria-controls="slide-down-animated-modal" data-overlay="#nuevouser"><span class="icon-[mingcute--user-add-line]"></span>Nuevo Usuario</button>
        </div>
        <div>
            <button class=" bg-green-700 hover:bg-green-700/90 md:cursor-pointer p-3 text-center text-slate-50 rounded-lg flex justify-center items-center  gap-1.5"aria-haspopup="dialog" aria-expanded="false" aria-controls="slide-down-animated-modal" data-overlay="#nuevoconsoli"><span class="icon-[mingcute--user-add-line]"></span>Nuevo Consolidador</button>
        </div>
        <div>
            <button class=" bg-sky-600 hover:bg-sky-600/90 p-3 md:cursor-pointer text-center text-slate-50  rounded-lg flex justify-center items-center  gap-1.5"aria-haspopup="dialog" aria-expanded="false" aria-controls="slide-down-animated-modal" data-overlay="#nuevolid"><span class="icon-[mingcute--user-add-line]"></span>Nuevo Lider</button>
        </div>
        <div>
            <button class=" bg-sky-950 hover:bg-sky-950/90 p-3 md:cursor-pointer text-center text-slate-50 rounded-lg flex justify-center items-center  gap-1.5"aria-haspopup="dialog" aria-expanded="false" aria-controls="slide-down-animated-modal" data-overlay="#nuevointe"><span class="icon-[mingcute--user-add-line]"></span>Nuevo Integrante</button>
        </div>
    </div>
    <!-- contenedor tabla -->
    <section class="flex flex-col w-full md:overflow-y-auto  md:h-screen mt-8 md:mt-24">
            <h1 class="text-lg font-bold">Lista de Miembros</h1>
            <article>
            <div class="h-auto lg:w-auto">
                <div
                    class="bg-base-100 flex flex-col rounded-md shadow-base-300/20 shadow-sm"
                    data-datatable='{
                    "pageLength": 5,
                    "pagingOptions": {
                        "pageBtnClasses": "btn btn-text btn-circle btn-sm"
                    },
                    "selecting": true,
                    "rowSelectingOptions": {
                        "selectAllSelector": "#table-search-all"
                    },
                    "language": {
                        "zeroRecords": "<div class=\"py-10 px-5 flex flex-col justify-center items-center text-center\"><span class=\"icon-[tabler--search] shrink-0 size-6 text-base-content\"></span><div class=\"max-w-sm mx-auto\"><p class=\"mt-2 text-sm text-base-content/80\">No search results</p></div></div>"
                        }
                    }'
                    >
                    <div class="py-3 ps-5 border-b border-base-content/25">
                        <div class="input input-sm max-w-60">
                        <span class="icon-[tabler--search] text-base-content/80 my-auto me-3 size-4 shrink-0"></span>
                        <label class="sr-only" for="table-input-search"></label>
                        <input type="search" class="grow" placeholder="Search for items" id="table-input-search" data-datatable-search="" />
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden">
                            <table class="table min-w-full">
                            <thead>
                                <tr>
                                <th scope="col" class="group w-fit">
                                    <div class="flex items-center justify-between">
                                    DNI
                                    <span class="icon-[tabler--chevron-up] datatable-ordering-asc:block hidden"></span>
                                    <span class="icon-[tabler--chevron-down] datatable-ordering-desc:block hidden"></span>
                                    </div>
                                </th>
                                <th scope="col" class="group w-fit">
                                    <div class="flex items-center justify-between">
                                    NOMBRES
                                    <span class="icon-[tabler--chevron-up] datatable-ordering-asc:block hidden"></span>
                                    <span class="icon-[tabler--chevron-down] datatable-ordering-desc:block hidden"></span>
                                    </div>
                                </th>
                                <th scope="col" class="group w-fit">
                                    <div class="flex items-center justify-between">
                                    A PATERNO
                                    <span class="icon-[tabler--chevron-up] datatable-ordering-asc:block hidden"></span>
                                    <span class="icon-[tabler--chevron-down] datatable-ordering-desc:block hidden"></span>
                                    </div>
                                </th>
                                <th scope="col" class="group w-fit">
                                    <div class="flex items-center justify-between">
                                    A MATERNO
                                    <span class="icon-[tabler--chevron-up] datatable-ordering-asc:block hidden"></span>
                                    <span class="icon-[tabler--chevron-down] datatable-ordering-desc:block hidden"></span>
                                    </div>
                                </th>
                                <th scope="col" class="group w-fit">
                                    <div class="flex items-center justify-between">
                                    GRUPO 
                                    <span class="icon-[tabler--chevron-up] datatable-ordering-asc:block hidden"></span>
                                    <span class="icon-[tabler--chevron-down] datatable-ordering-desc:block hidden"></span>
                                    </div>
                                </th>
                                <th scope="col" class="group w-fit">
                                    <div class="flex items-center justify-between">
                                    ROL
                                    <span class="icon-[tabler--chevron-up] datatable-ordering-asc:block hidden"></span>
                                    <span class="icon-[tabler--chevron-down] datatable-ordering-desc:block hidden"></span>
                                    </div>
                                </th>
                                <th scope="col" class="group w-fit">
                                    <div class="flex items-center justify-between">
                                    TELÉFONO
                                    <span class="icon-[tabler--chevron-up] datatable-ordering-asc:block hidden"></span>
                                    <span class="icon-[tabler--chevron-down] datatable-ordering-desc:block hidden"></span>
                                    </div>
                                </th>
                                <th scope="col" class="--exclude-from-ordering">Acciones</th>
                                </tr>
                            </thead>
                            <tbody  >
                                <tr>
                                <td>04412387</td>
                                <td>Juan carlos</td>
                                <td> Quispe</td>
                                <td>Flores</td>
                                <td>G102-J</td>
                                <td><span class="badge badge-soft badge-success badge-sm">Admin</span></td>
                                <td>96584752</td>
                                 <td>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button" aria-haspopup="dialog" aria-expanded="false" aria-controls="slide-down-animated-modal" data-overlay="#edituser">
                                    <span class="icon-[tabler--pencil] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button" onclick="deluser()">
                                    <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                </td>
                                </tr>
                                <tr>
                                <td>04412387</td>
                                <td>Juan carlos</td>
                                <td> Quispe</td>
                                <td>Flores</td>
                                <td>G102-J</td>
                                <td><span class="badge badge-soft badge-success badge-sm">Admin</span></td>
                                <td>96584752</td>
                                 <td>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button" aria-haspopup="dialog" aria-expanded="false" aria-controls="slide-down-animated-modal" data-overlay="#edituser">
                                    <span class="icon-[tabler--pencil] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button" onclick="deluser()">
                                    <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                </td>
                                </tr>
                                <tr>
                                <td>04412387</td>
                                <td>Juan carlos</td>
                                <td> Quispe</td>
                                <td>Flores</td>
                                <td>G102-J</td>
                                <td><span class="badge badge-soft badge-success badge-sm">Admin</span></td>
                                <td>96584752</td>
                                 <td>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button" aria-haspopup="dialog" aria-expanded="false" aria-controls="slide-down-animated-modal" data-overlay="#edituser">
                                    <span class="icon-[tabler--pencil] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button" onclick="deluser()">
                                    <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                </td>
                                </tr>
                                <tr>
                                <td>04412387</td>
                                <td>Juan carlos</td>
                                <td> Quispe</td>
                                <td>Flores</td>
                                <td>G102-J</td>
                                <td><span class="badge badge-soft badge-success badge-sm">Admin</span></td>
                                <td>96584752</td>
                                 <td>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button" aria-haspopup="dialog" aria-expanded="false" aria-controls="slide-down-animated-modal" data-overlay="#edituser">
                                    <span class="icon-[tabler--pencil] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button" onclick="deluser()">
                                    <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                </td>
                                </tr>
                                <tr>
                                <td>04412387</td>
                                <td>Juan carlos</td>
                                <td> Quispe</td>
                                <td>Flores</td>
                                <td>G102-J</td>
                                <td><span class="badge badge-soft badge-success badge-sm">Admin</span></td>
                                <td>96584752</td>
                                 <td>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button" aria-haspopup="dialog" aria-expanded="false" aria-controls="slide-down-animated-modal" data-overlay="#edituser">
                                    <span class="icon-[tabler--pencil] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button" onclick="deluser()">
                                    <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                </td>
                                </tr>
                                <tr>
                                <td>04412387</td>
                                <td>Juan carlos</td>
                                <td> Quispe</td>
                                <td>Flores</td>
                                <td>G102-J</td>
                                <td><span class="badge badge-soft badge-success badge-sm">Admin</span></td>
                                <td>96584752</td>
                                 <td>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button" aria-haspopup="dialog" aria-expanded="false" aria-controls="slide-down-animated-modal" data-overlay="#edituser">
                                    <span class="icon-[tabler--pencil] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button" onclick="deluser()">
                                    <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                </td>
                                </tr>
                                <tr>
                                <td>04412387</td>
                                <td>Juan carlos</td>
                                <td> Quispe</td>
                                <td>Flores</td>
                                <td>G102-J</td>
                                <td><span class="badge badge-soft badge-success badge-sm">Admin</span></td>
                                <td>96584752</td>
                                 <td>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button" aria-haspopup="dialog" aria-expanded="false" aria-controls="slide-down-animated-modal" data-overlay="#edituser">
                                    <span class="icon-[tabler--pencil] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button" onclick="deluser()">
                                    <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                </td>
                                </tr>
                                <tr>
                                <td>04412387</td>
                                <td>Juan carlos</td>
                                <td> Quispe</td>
                                <td>Flores</td>
                                <td>G102-J</td>
                                <td><span class="badge badge-soft badge-success badge-sm">Admin</span></td>
                                <td>96584752</td>
                                 <td>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button" aria-haspopup="dialog" aria-expanded="false" aria-controls="slide-down-animated-modal" data-overlay="#edituser">
                                    <span class="icon-[tabler--pencil] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button" onclick="deluser()">
                                    <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                </td>
                                </tr>
                                <tr>
                                <td>04412387</td>
                                <td>Juan carlos</td>
                                <td> Quispe</td>
                                <td>Flores</td>
                                <td>G102-J</td>
                                <td><span class="badge badge-soft badge-success badge-sm">Admin</span></td>
                                <td>96584752</td>
                                 <td>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button" aria-haspopup="dialog" aria-expanded="false" aria-controls="slide-down-animated-modal" data-overlay="#edituser">
                                    <span class="icon-[tabler--pencil] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button" onclick="deluser()">
                                    <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                </td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        </div>
                    </div>

                    <div class="border-base-content/25 flex items-center justify-between gap-3 border-t p-3 max-md:flex-wrap max-md:justify-center">
                        <div class="text-base-content/80 text-sm" data-datatable-info="">
                        Mostrando del
                        <span data-datatable-info-from="1"></span>
                        al
                        <span data-datatable-info-to="30"></span>
                        de
                        <span data-datatable-info-length="50"></span>
                        Integrantes
                        </div>
                        <div class="flex hidden items-center space-x-1" data-datatable-paging="">
                        <button type="button" class="btn btn-text btn-circle btn-sm" data-datatable-paging-prev="">
                            <span aria-hidden="true">«</span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <div class="[&>.active]:text-bg-soft-primary flex items-center space-x-1" data-datatable-paging-pages=""></div>
                        <button type="button" class="btn btn-text btn-circle btn-sm" data-datatable-paging-next="">
                            <span class="sr-only">Next</span>
                            <span aria-hidden="true">»</span>
                        </button>
                        </div>
                    </div>
                    </div>
            </div>
            </article>
        </section>
    </div>
    <!-- modal muevo usuario -->
    <div id="nuevouser" class="overlay modal overlay-open:opacity-100 overlay-open:duration-300 hidden " role="dialog" tabindex="-1">
        <div class="modal-dialog overlay-open:mt-12 overlay-open:opacity-100 overlay-open:duration-300 transition-all ease-out" >
            <div class="modal-content">
                <div class="modal-header text-center justify-center">
                    <h2 class="text-xl  font-bold text-center text-sky-800 modal-title">Nuevo Usuario</h2>
                    <button type="button" class="btn btn-text btn-circle btn-sm absolute end-3 top-3" aria-label="Close" data-overlay="#nuevouser">
                        <span class="icon-[tabler--x] size-4"></span>
                    </button>
                </div>
                 
                <form method="POST" id="frmUsuario" class="p-4 grid grid-cols-2 gap-4">
                    <section>
                        <div class="w-full flex flex-col">
                            <label for="doc" class="text-sky-800">Tipo Documento</label>
                            <select name="documento" id="documento" class="p-2 border border-sky-600 rounded-md outline-none">
                                <option value="" class="text-center" selected>----Seleccione----</option>
                                <option value="1">Dni</option>
                                <option value="">Pasaporte</option>
                            </select>
                        </div>
                        <div class="w-full flex flex-col">
                            <label for="ndoc"class="text-sky-800">Número de Documento</label>
                            <input type="text" name="ndoc" id="ndoc" class="p-2 border border-sky-600 rounded-md outline-none ">
                        </div>
                        <div class="w-full flex flex-col">
                            <label for="apmat"class="text-sky-800">Apellido  Materno</label>
                            <input type="text" name="apmat" id="apmat" class="p-2 border border-sky-600 rounded-md outline-none">
                        </div>
                        <div class="w-full flex flex-col">
                            <label for="rol"class="text-sky-800">Rol</label>
                            <select name="rol" id="rol" class="p-2 border border-sky-600 rounded-md outline-none">
                                <option value=""class="text-center" selected>----Seleccione----</option>
                                <option value="1">Admin</option>
                                <option value="2">Lider</option>
                                <option value="3">Consolidador</option>
                            </select>
                        </div>
                        <div class="w-full flex flex-col">
                            <label for="miembro"class="text-sky-800">Miembro</label>
                            <select name="" id="miembro" class="p-2 border border-sky-600 rounded-md outline-none">
                                <option value="" class="text-center" selected>----Seleccione----</option>
                                <option value="1">Activo</option>
                                <option value="2">Inactivo</option>
                            </select>
                        </div>
                    </section>
                    <section>
                        <div class="w-full flex flex-col">
                            <label for=""class="text-sky-800">Nombres</label>
                            <input type="text"  id="nombre" name="nombre" class="p-2 border border-sky-600 rounded-md outline-none">
                        </div>
                        <div class="w-full flex flex-col">
                            <label for="appat"class="text-sky-800">Apellido Paterno</label>
                            <input type="text"  id="appat" name="appat" class="p-2 border border-sky-600 rounded-md outline-none">
                        </div>
                        <div class="w-full flex flex-col">
                            <label for="grupo"class="text-sky-800">Asignar grupo</label>
                            <select name="" id="" class="p-2 border border-sky-600 rounded-md outline-none">
                                <option value="" class="text-center" selected>----Seleccione----</option>
                                <option value="1">Grupo 1</option>
                                <option value="2">Grupo 2</option>
                            </select>
                        </div>
                        <div class="w-full flex flex-col">
                            <label for="telefono"class="text-sky-800">Numero de Telefono</label>
                            <input type="number"  id="telefono" name="telefono" maxlength="9" class="p-2 border border-sky-600 rounded-md outline-none">
                        </div>
                        <div class="w-full flex flex-col">
                            <label for="justificacion"class="text-sky-800">Justificacion</label>
                            <textarea name="justificacion" id="justificacion" cols="30" rows="10"class="px-0.5 border border-sky-600 rounded-md outline-none min-w-24 min-h-32 max-h-32" onclick="setCursorToStart(this)">

                            </textarea>
                        </div>
                    </section>
                    <div class="col-span-2">
                        <button class="bg-sky-500 p-4 text-slate-50 rounded-md block m-auto">Guardar cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /modal nuevo usuario -->
     <!-- editar usuario -->
       <div id="edituser" class="overlay modal overlay-open:opacity-100 overlay-open:duration-300 hidden" role="dialog" tabindex="-1">
        <div class="modal-dialog overlay-open:mt-12 overlay-open:opacity-100 overlay-open:duration-300 transition-all ease-out" >
            <div class="modal-content">
                <div class="modal-header text-center justify-center">
                    <h2 class="text-xl  font-bold text-center text-sky-800 modal-title">Editar Usuario</h2>
                    <button type="button" class="btn btn-text btn-circle btn-sm absolute end-3 top-3" aria-label="Close" data-overlay="#edituser">
                        <span class="icon-[tabler--x] size-4"></span>
                    </button>
                </div>
                 
                <form method="POST" id="frmUsuario" class="p-4 grid grid-cols-2 gap-4">
                    <section>
                        <div class="w-full flex flex-col">
                            <label for="doc" class="text-sky-800">Tipo Documento</label>
                            <select name="documento" id="documento" class="p-2 border border-sky-600 rounded-md outline-none">
                                <option value="" class="text-center" selected>----Seleccione----</option>
                                <option value="1">Dni</option>
                                <option value="">Pasaporte</option>
                            </select>
                        </div>
                        <div class="w-full flex flex-col">
                            <label for="ndoc"class="text-sky-800">Número de Documento</label>
                            <input type="text" name="ndoc" id="ndoc" class="p-2 border border-sky-600 rounded-md outline-none ">
                        </div>
                        <div class="w-full flex flex-col">
                            <label for="apmat"class="text-sky-800">Apellido  Materno</label>
                            <input type="text" name="apmat" id="apmat" class="p-2 border border-sky-600 rounded-md outline-none">
                        </div>
                        <div class="w-full flex flex-col">
                            <label for="rol"class="text-sky-800">Rol</label>
                            <select name="rol" id="rol" class="p-2 border border-sky-600 rounded-md outline-none">
                                <option value=""class="text-center" selected>----Seleccione----</option>
                                <option value="1">Admin</option>
                                <option value="2">Lider</option>
                                <option value="3">Consolidador</option>
                            </select>
                        </div>
                        <div class="w-full flex flex-col">
                            <label for="miembro"class="text-sky-800">Miembro</label>
                            <select name="" id="miembro" class="p-2 border border-sky-600 rounded-md outline-none">
                                <option value="" class="text-center" selected>----Seleccione----</option>
                                <option value="1">Activo</option>
                                <option value="2">Inactivo</option>
                            </select>
                        </div>
                    </section>
                    <section>
                        <div class="w-full flex flex-col">
                            <label for=""class="text-sky-800">Nombres</label>
                            <input type="text"  id="nombre" name="nombre" class="p-2 border border-sky-600 rounded-md outline-none">
                        </div>
                        <div class="w-full flex flex-col">
                            <label for="appat"class="text-sky-800">Apellido Paterno</label>
                            <input type="text"  id="appat" name="appat" class="p-2 border border-sky-600 rounded-md outline-none">
                        </div>
                        <div class="w-full flex flex-col">
                            <label for="grupo"class="text-sky-800">Asignar grupo</label>
                            <select name="" id="" class="p-2 border border-sky-600 rounded-md outline-none">
                                <option value="" class="text-center" selected>----Seleccione----</option>
                                <option value="1">Grupo 1</option>
                                <option value="2">Grupo 2</option>
                            </select>
                        </div>
                        <div class="w-full flex flex-col">
                            <label for="telefono"class="text-sky-800">Numero de Telefono</label>
                            <input type="number"  id="telefono" name="telefono" maxlength="9" class="p-2 border border-sky-600 rounded-md outline-none">
                        </div>
                        <div class="w-full flex flex-col">
                            <label for="justificacion"class="text-sky-800">Justificacion</label>
                            <textarea name="justificacion" id="justificacion" cols="30" rows="10"class="px-0.5 border border-sky-600 rounded-md outline-none min-w-24 min-h-32 max-h-32" onclick="setCursorToStart(this)">

                            </textarea>
                        </div>
                    </section>
                    <div class="col-span-2">
                        <button class="bg-sky-500 p-4 text-slate-50 rounded-md block m-auto">Guardar cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /editar usuario -->
    <!-- modal nuevo consolidador -->
        <div id="nuevoconsoli" class="overlay modal overlay-open:opacity-100 overlay-open:duration-300 hidden" role="dialog" tabindex="-1">
        <div class="modal-dialog overlay-open:mt-12 overlay-open:opacity-100 overlay-open:duration-300 transition-all ease-out" >
            <div class="modal-content">
                <div class="modal-header text-center justify-center">
                    <h2 class="text-xl  font-bold text-center text-sky-800 modal-title">Nuevo Consolidador</h2>
                    <button type="button" class="btn btn-text btn-circle btn-sm absolute end-3 top-3" aria-label="Close" data-overlay="#nuevoconsoli">
                        <span class="icon-[tabler--x] size-4"></span>
                    </button>
                </div>
                 
                <form method="POST" id="frmUsuario" class="p-4 grid grid-cols-2 gap-4">
                    <section>
                        <div class="w-full flex flex-col">
                            <label for="doc" class="text-sky-800">Tipo Documento</label>
                            <select name="documento" id="documento" class="p-2 border border-sky-600 rounded-md outline-none">
                                <option value="" class="text-center" selected>----Seleccione----</option>
                                <option value="1">Dni</option>
                                <option value="">Pasaporte</option>
                            </select>
                        </div>
                        <div class="w-full flex flex-col">
                            <label for="ndoc"class="text-sky-800">Número de Documento</label>
                            <input type="text" name="ndoc" id="ndoc" class="p-2 border border-sky-600 rounded-md outline-none ">
                        </div>
                        <div class="w-full flex flex-col">
                            <label for="apmat"class="text-sky-800">Apellido  Materno</label>
                            <input type="text" name="apmat" id="apmat" class="p-2 border border-sky-600 rounded-md outline-none">
                        </div>
                        <div class="w-full flex flex-col">
                            <label for="rol"class="text-sky-800">Rol</label>
                            <select name="rol" id="rol" class="p-2 border border-sky-600 rounded-md outline-none">
                                <option value=""class="text-center" selected>----Seleccione----</option>
                                <option value="1">Admin</option>
                                <option value="2">Lider</option>
                                <option value="3">Consolidador</option>
                            </select>
                        </div>
                        <div class="w-full flex flex-col">
                            <label for="miembro"class="text-sky-800">Miembro</label>
                            <select name="" id="miembro" class="p-2 border border-sky-600 rounded-md outline-none">
                                <option value="" class="text-center" selected>----Seleccione----</option>
                                <option value="1">Activo</option>
                                <option value="2">Inactivo</option>
                            </select>
                        </div>
                    </section>
                    <section>
                        <div class="w-full flex flex-col">
                            <label for=""class="text-sky-800">Nombres</label>
                            <input type="text"  id="nombre" name="nombre" class="p-2 border border-sky-600 rounded-md outline-none">
                        </div>
                        <div class="w-full flex flex-col">
                            <label for="appat"class="text-sky-800">Apellido Paterno</label>
                            <input type="text"  id="appat" name="appat" class="p-2 border border-sky-600 rounded-md outline-none">
                        </div>
                        <div class="w-full flex flex-col">
                            <label for="grupo"class="text-sky-800">Asignar grupo</label>
                            <select name="" id="" class="p-2 border border-sky-600 rounded-md outline-none">
                                <option value="" class="text-center" selected>----Seleccione----</option>
                                <option value="1">Grupo 1</option>
                                <option value="2">Grupo 2</option>
                            </select>
                        </div>
                        <div class="w-full flex flex-col">
                            <label for="telefono"class="text-sky-800">Numero de Telefono</label>
                            <input type="number"  id="telefono" name="telefono" maxlength="9" class="p-2 border border-sky-600 rounded-md outline-none">
                        </div>
                        <div class="w-full flex flex-col">
                            <label for="justificacion"class="text-sky-800">Justificacion</label>
                            <textarea name="justificacion" id="justificacion" cols="30" rows="10"class="px-0.5 border border-sky-600 rounded-md outline-none min-w-24 min-h-32 max-h-32" onclick="setCursorToStart(this)">

                            </textarea>
                        </div>
                    </section>
                    <div class="col-span-2">
                        <button class="bg-sky-500 p-4 text-slate-50 rounded-md block m-auto">Guardar cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--/modal nuevo consolidador  -->
    <!-- nuevo lider -->
     <div id="nuevolid" class="overlay modal overlay-open:opacity-100 overlay-open:duration-300 hidden" role="dialog" tabindex="-1">
        <div class="modal-dialog overlay-open:mt-12 overlay-open:opacity-100 overlay-open:duration-300 transition-all ease-out" >
            <div class="modal-content">
                <div class="modal-header text-center justify-center">
                    <h2 class="text-xl  font-bold text-center text-sky-800 modal-title">Nuevo Lider</h2>
                    <button type="button" class="btn btn-text btn-circle btn-sm absolute end-3 top-3" aria-label="Close" data-overlay="#nuevolid">
                        <span class="icon-[tabler--x] size-4"></span>
                    </button>
                </div>
                 
                <form method="POST" id="frmUsuario" class="p-4 grid grid-cols-2 gap-4">
                    <section>
                        <div class="w-full flex flex-col">
                            <label for="doc" class="text-sky-800">Tipo Documento</label>
                            <select name="documento" id="documento" class="p-2 border border-sky-600 rounded-md outline-none">
                                <option value="" class="text-center" selected>----Seleccione----</option>
                                <option value="1">Dni</option>
                                <option value="">Pasaporte</option>
                            </select>
                        </div>
                        <div class="w-full flex flex-col">
                            <label for="ndoc"class="text-sky-800">Número de Documento</label>
                            <input type="text" name="ndoc" id="ndoc" class="p-2 border border-sky-600 rounded-md outline-none ">
                        </div>
                        <div class="w-full flex flex-col">
                            <label for="apmat"class="text-sky-800">Apellido  Materno</label>
                            <input type="text" name="apmat" id="apmat" class="p-2 border border-sky-600 rounded-md outline-none">
                        </div>
                        <div class="w-full flex flex-col">
                            <label for="rol"class="text-sky-800">Rol</label>
                            <select name="rol" id="rol" class="p-2 border border-sky-600 rounded-md outline-none">
                                <option value=""class="text-center" selected>----Seleccione----</option>
                                <option value="1">Admin</option>
                                <option value="2">Lider</option>
                                <option value="3">Consolidador</option>
                            </select>
                        </div>
                        <div class="w-full flex flex-col">
                            <label for="miembro"class="text-sky-800">Miembro</label>
                            <select name="" id="miembro" class="p-2 border border-sky-600 rounded-md outline-none">
                                <option value="" class="text-center" selected>----Seleccione----</option>
                                <option value="1">Activo</option>
                                <option value="2">Inactivo</option>
                            </select>
                        </div>
                    </section>
                    <section>
                        <div class="w-full flex flex-col">
                            <label for=""class="text-sky-800">Nombres</label>
                            <input type="text"  id="nombre" name="nombre" class="p-2 border border-sky-600 rounded-md outline-none">
                        </div>
                        <div class="w-full flex flex-col">
                            <label for="appat"class="text-sky-800">Apellido Paterno</label>
                            <input type="text"  id="appat" name="appat" class="p-2 border border-sky-600 rounded-md outline-none">
                        </div>
                        <div class="w-full flex flex-col">
                            <label for="grupo"class="text-sky-800">Asignar grupo</label>
                            <select name="" id="" class="p-2 border border-sky-600 rounded-md outline-none">
                                <option value="" class="text-center" selected>----Seleccione----</option>
                                <option value="1">Grupo 1</option>
                                <option value="2">Grupo 2</option>
                            </select>
                        </div>
                        <div class="w-full flex flex-col">
                            <label for="telefono"class="text-sky-800">Numero de Telefono</label>
                            <input type="number"  id="telefono" name="telefono" maxlength="9" class="p-2 border border-sky-600 rounded-md outline-none">
                        </div>
                        <div class="w-full flex flex-col">
                            <label for="justificacion"class="text-sky-800">Justificacion</label>
                            <textarea name="justificacion" id="justificacion" cols="30" rows="10"class="px-0.5 border border-sky-600 rounded-md outline-none min-w-24 min-h-32 max-h-32" onclick="setCursorToStart(this)">

                            </textarea>
                        </div>
                    </section>
                    <div class="col-span-2">
                        <button class="bg-sky-500 p-4 text-slate-50 rounded-md block m-auto">Guardar cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
     <!-- /nuevo lider -->
    <!-- nuevo integrante -->
     <div id="nuevointe" class="overlay modal overlay-open:opacity-100 overlay-open:duration-300 hidden" role="dialog" tabindex="-1">
        <div class="modal-dialog overlay-open:mt-12 overlay-open:opacity-100 overlay-open:duration-300 transition-all ease-out" >
            <div class="modal-content">
                <div class="modal-header text-center justify-center">
                    <h2 class="text-xl  font-bold text-center text-sky-800 modal-title">Nuevo Integrante</h2>
                    <button type="button" class="btn btn-text btn-circle btn-sm absolute end-3 top-3" aria-label="Close" data-overlay="#nuevointe">
                        <span class="icon-[tabler--x] size-4"></span>
                    </button>
                </div>
                 
                <form method="POST" id="frmUsuario" class="p-4 grid grid-cols-2 gap-4">
                    <section>
                        <div class="w-full flex flex-col">
                            <label for="doc" class="text-sky-800">Tipo Documento</label>
                            <select name="documento" id="documento" class="p-2 border border-sky-600 rounded-md outline-none">
                                <option value="" class="text-center" selected>----Seleccione----</option>
                                <option value="1">Dni</option>
                                <option value="">Pasaporte</option>
                            </select>
                        </div>
                        <div class="w-full flex flex-col">
                            <label for="ndoc"class="text-sky-800">Número de Documento</label>
                            <input type="text" name="ndoc" id="ndoc" class="p-2 border border-sky-600 rounded-md outline-none ">
                        </div>
                        <div class="w-full flex flex-col">
                            <label for="apmat"class="text-sky-800">Apellido  Materno</label>
                            <input type="text" name="apmat" id="apmat" class="p-2 border border-sky-600 rounded-md outline-none">
                        </div>
                        <div class="w-full flex flex-col">
                            <label for="rol"class="text-sky-800">Rol</label>
                            <select name="rol" id="rol" class="p-2 border border-sky-600 rounded-md outline-none">
                                <option value=""class="text-center" selected>----Seleccione----</option>
                                <option value="1">Admin</option>
                                <option value="2">Lider</option>
                                <option value="3">Consolidador</option>
                            </select>
                        </div>
                        <div class="w-full flex flex-col">
                            <label for="miembro"class="text-sky-800">Miembro</label>
                            <select name="" id="miembro" class="p-2 border border-sky-600 rounded-md outline-none">
                                <option value="" class="text-center" selected>----Seleccione----</option>
                                <option value="1">Activo</option>
                                <option value="2">Inactivo</option>
                            </select>
                        </div>
                    </section>
                    <section>
                        <div class="w-full flex flex-col">
                            <label for=""class="text-sky-800">Nombres</label>
                            <input type="text"  id="nombre" name="nombre" class="p-2 border border-sky-600 rounded-md outline-none">
                        </div>
                        <div class="w-full flex flex-col">
                            <label for="appat"class="text-sky-800">Apellido Paterno</label>
                            <input type="text"  id="appat" name="appat" class="p-2 border border-sky-600 rounded-md outline-none">
                        </div>
                        <div class="w-full flex flex-col">
                            <label for="grupo"class="text-sky-800">Asignar grupo</label>
                            <select name="" id="" class="p-2 border border-sky-600 rounded-md outline-none">
                                <option value="" class="text-center" selected>----Seleccione----</option>
                                <option value="1">Grupo 1</option>
                                <option value="2">Grupo 2</option>
                            </select>
                        </div>
                        <div class="w-full flex flex-col">
                            <label for="telefono"class="text-sky-800">Numero de Telefono</label>
                            <input type="number"  id="telefono" name="telefono" maxlength="9" class="p-2 border border-sky-600 rounded-md outline-none">
                        </div>
                        <div class="w-full flex flex-col">
                            <label for="justificacion"class="text-sky-800">Justificacion</label>
                            <textarea name="justificacion" id="justificacion" cols="30" rows="10"class="px-0.5 border border-sky-600 rounded-md outline-none min-w-24 min-h-32 max-h-32" onclick="setCursorToStart(this)">

                            </textarea>
                        </div>
                    </section>
                    <div class="col-span-2">
                        <button class="bg-sky-500 p-4 text-slate-50 rounded-md block m-auto">Guardar cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
     <!-- /nuevo integrante -->
</div>
<?php include "Views/Templates/footer.php"?>