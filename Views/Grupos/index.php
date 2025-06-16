<?php include "Views/Templates/header.php"?>
<div class="w-auto p-4 mt-16 overflow-y-auto bg-slate-100 ">
    <h1 class="text-sm font-bold text-sky-950 mb-2 flex justify-start items-center"><span class="icon-[heroicons--computer-desktop] font-bold"></span>GRUPOS ASIGNADOS</h1>
    <!-- grupos card -->
    <div class="flex flex-col gap-4  sm:grid sm:grid-cols-4 ">
        <!-- card1 -->
        <div class="w-full h-1/2  flex flex-col bg-white rounded-md sm:h-full sm:rounded-lg p-4 shadow-md gap-2.5">
            <!-- card header -->
            <div class="bg-blue-600/15 h-16 p-2 flex text-sky-600 font-bold text-center gap-1 justify-center items-center">
                <div><span class="icon-[mynaui--users-solid] text-4xl font-normal bg-blue-700/10"></span></div>
                <h3 class="text-xl font-normal">GRUPO: <span class="text-xl font-bold">G101-F</span></h3>
            </div>
            <!-- card body -->
            <div class="flex flex-col gap-1.5">
                <p class="text-sm">Miembros: <span class="font-bold">10</span></p>
                <p class="text-sm">Lider a cargo: <span class="font-bold">Juan Perez</span></p>
                <p class="text-sm">Tipo de Grupo: <span class="font-bold">Maria Lopez</span></p>
            </div>
            <div class="w-full flex justify-end">
                <button class="btn btn-primary btn-sm bg-sky-600">Ver Lista</button>
            </div>
        </div>
        <!-- /card1 -->
        <div class="w-full h-1/2 flex flex-col bg-white rounded-md sm:h-full sm:rounded-lg p-4 shadow-md gap-2.5">
            <!-- card header -->
            <div class="bg-blue-600/15 h-16 p-2 flex text-sky-600 font-bold text-center gap-1 justify-center items-center">
                <div><span class="icon-[mynaui--users-solid] text-4xl font-normal bg-blue-700/10"></span></div>
                <h3 class="text-xl font-normal">GRUPO: <span class="text-xl font-bold">G101-F</span></h3>
            </div>
            <!-- card body -->
            <div class="flex flex-col gap-1.5">
                <p class="text-sm">Miembros: <span class="font-bold">10</span></p>
                <p class="text-sm">Lider a cargo: <span class="font-bold">Juan Perez</span></p>
                <p class="text-sm">Tipo de Grupo: <span class="font-bold">Maria Lopez</span></p>
            </div>
            <div class="w-full flex justify-end">
                <button class="btn btn-primary btn-sm bg-sky-600">Ver Lista</button>
            </div>
        </div>
        <div class="w-full h-1/2 flex flex-col bg-white rounded-md sm:h-full sm:rounded-lg p-4 shadow-md gap-2.5">
            <!-- card header -->
            <div class="bg-blue-600/15 h-16 p-2 flex text-sky-600 font-bold text-center gap-1 justify-center items-center">
                <div><span class="icon-[mynaui--users-solid] text-4xl font-normal bg-blue-700/10"></span></div>
                <h3 class="text-xl font-normal">GRUPO: <span class="text-xl font-bold">G101-F</span></h3>
            </div>
            <!-- card body -->
            <div class="flex flex-col gap-1.5">
                <p class="text-sm">Miembros: <span class="font-bold">10</span></p>
                <p class="text-sm">Lider a cargo: <span class="font-bold">Juan Perez</span></p>
                <p class="text-sm">Tipo de Grupo: <span class="font-bold">Maria Lopez</span></p>
            </div>
            <div class="w-full flex justify-end">
                <button class="btn btn-primary btn-sm bg-sky-600">Ver Lista</button>
            </div>
        </div>
        <div class="w-full h-1/2 flex flex-col bg-white rounded-md sm:h-full sm:rounded-lg p-4 shadow-md gap-2.5">
            <!-- card header -->
            <div class="bg-blue-600/15 h-16 p-2 flex text-sky-600 font-bold text-center gap-1 justify-center items-center">
                <div><span class="icon-[mynaui--users-solid] text-4xl font-normal bg-blue-700/10"></span></div>
                <h3 class="text-xl font-normal">GRUPO: <span class="text-xl font-bold">G101-F</span></h3>
            </div>
            <!-- card body -->
            <div class="flex flex-col gap-1.5">
                <p class="text-sm">Miembros: <span class="font-bold">10</span></p>
                <p class="text-sm">Lider a cargo: <span class="font-bold">Juan Perez</span></p>
                <p class="text-sm">Tipo de Grupo: <span class="font-bold">Maria Lopez</span></p>
            </div>
            <div class="w-full flex justify-end">
                <button class="btn btn-primary btn-sm bg-sky-600">Ver Lista</button>
            </div>
        </div>
        <div class="w-full h-1/2 flex flex-col bg-white rounded-md sm:h-full sm:rounded-lg p-4 shadow-md gap-2.5">
            <!-- card header -->
            <div class="bg-blue-600/15 h-16 p-2 flex text-sky-600 font-bold text-center gap-1 justify-center items-center">
                <div><span class="icon-[mynaui--users-solid] text-4xl font-normal bg-blue-700/10"></span></div>
                <h3 class="text-xl font-normal">GRUPO: <span class="text-xl font-bold">G101-F</span></h3>
            </div>
            <!-- card body -->
            <div class="flex flex-col gap-1.5">
                <p class="text-sm">Miembros: <span class="font-bold">10</span></p>
                <p class="text-sm">Lider a cargo: <span class="font-bold">Juan Perez</span></p>
                <p class="text-sm">Tipo de Grupo: <span class="font-bold">Maria Lopez</span></p>
            </div>
            <div class="w-full flex justify-end">
                <button class="btn btn-primary btn-sm bg-sky-600">Ver Lista</button>
            </div>
        </div>
    </div>
    <!-- / grupos card -->
    <!-- btn asignar nuevo grupo -->
    <div class="w-full mt-6">
        <button class="btn btn-primary btn-sm h-14 sm:h-12 bg-sky-600" onclick="location.href='<?php echo base_url; ?>Grupos/crearGrupo'">
            <span class="icon-[heroicons--plus-circle]"></span> Asignar Nuevo Grupo
        </button>
    </div>
    <!-- / btn asignar nuevo grupo -->
    <!-- table -->
   
            <section class="flex flex-col mt-24 ">
                <h1 class="text-lg font-bold">Lista de Miembros</h1>
                <!-- table -->
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
                                    Dni
                                    <span class="icon-[tabler--chevron-up] datatable-ordering-asc:block hidden"></span>
                                    <span class="icon-[tabler--chevron-down] datatable-ordering-desc:block hidden"></span>
                                    </div>
                                </th>
                                <th scope="col" class="group w-fit">
                                    <div class="flex items-center justify-between">
                                    Nombres
                                    <span class="icon-[tabler--chevron-up] datatable-ordering-asc:block hidden"></span>
                                    <span class="icon-[tabler--chevron-down] datatable-ordering-desc:block hidden"></span>
                                    </div>
                                </th>
                                <th scope="col" class="group w-fit">
                                    <div class="flex items-center justify-between">
                                    Ap paterno
                                    <span class="icon-[tabler--chevron-up] datatable-ordering-asc:block hidden"></span>
                                    <span class="icon-[tabler--chevron-down] datatable-ordering-desc:block hidden"></span>
                                    </div>
                                </th>
                                <th scope="col" class="group w-fit">
                                    <div class="flex items-center justify-between">
                                    Ap materno
                                    <span class="icon-[tabler--chevron-up] datatable-ordering-asc:block hidden"></span>
                                    <span class="icon-[tabler--chevron-down] datatable-ordering-desc:block hidden"></span>
                                    </div>
                                </th>
                                <th scope="col" class="group w-fit">
                                    <div class="flex items-center justify-between">
                                    Grupo conexion
                                    <span class="icon-[tabler--chevron-up] datatable-ordering-asc:block hidden"></span>
                                    <span class="icon-[tabler--chevron-down] datatable-ordering-desc:block hidden"></span>
                                    </div>
                                </th>
                                <th scope="col" class="group w-fit">
                                    <div class="flex items-center justify-between">
                                    Rol
                                    <span class="icon-[tabler--chevron-up] datatable-ordering-asc:block hidden"></span>
                                    <span class="icon-[tabler--chevron-down] datatable-ordering-desc:block hidden"></span>
                                    </div>
                                </th>
                                <th scope="col" class="group w-fit">
                                    <div class="flex items-center justify-between">
                                    Telefono
                                    <span class="icon-[tabler--chevron-up] datatable-ordering-asc:block hidden"></span>
                                    <span class="icon-[tabler--chevron-down] datatable-ordering-desc:block hidden"></span>
                                    </div>
                                </th>
                                <th scope="col" class="--exclude-from-ordering">Acciones</th>
                                </tr>
                            </thead>
                            <tbody  >
                                <tr>
                                <td>04423451</td>
                                <td>Juan carlos</td>
                                <td>Ordoño</td>
                                <td>Flores</td>
                                <td>G102-J</td>
                                <td><span class="badge badge-soft badge-success badge-sm">Admin</span></td>
                                <td>912345678</td>
                                <td>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"aria-haspopup="dialog" aria-expanded="false" aria-controls="slide-down-animated-modal" data-overlay="#editIntegrantes">
                                    <span class="icon-[tabler--pencil] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button" onclick="delIntegrantes()">
                                    <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                </td>
                                </tr>
                                <tr>
                                <td>04423451</td>
                                <td>Juan carlos</td>
                                <td>Quispe</td>
                                <td>Flores</td>
                                <td>G102-J</td>
                                <td><span class="badge badge-soft badge-success badge-sm">Admin</span></td>
                                <td>912345678</td>
                                <td>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"aria-haspopup="dialog" aria-expanded="false" aria-controls="slide-down-animated-modal" data-overlay="#editIntegrantes">
                                    <span class="icon-[tabler--pencil] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button" onclick="delIntegrantes()">
                                    <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                </td>
                                </tr>
                                <tr>
                                <td>04423451</td>
                                <td>Juan carlos</td>
                                <td>Quispe</td>
                                <td>Flores</td>
                                <td>G102-J</td>
                                <td><span class="badge badge-soft badge-success badge-sm">Admin</span></td>
                                <td>912345678</td>
                                <td>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"aria-haspopup="dialog" aria-expanded="false" aria-controls="slide-down-animated-modal" data-overlay="#editIntegrantes">
                                    <span class="icon-[tabler--pencil] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button" onclick="delIntegrantes()">
                                    <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                </td>
                                </tr>
                                <tr>
                                <td>04423451</td>
                                <td>Juan carlos</td>
                                <td>Quispe</td>
                                <td>Flores</td>
                                <td>G102-J</td>
                                <td><span class="badge badge-soft badge-success badge-sm">Admin</span></td>
                                <td>912345678</td>
                                <td>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"aria-haspopup="dialog" aria-expanded="false" aria-controls="slide-down-animated-modal" data-overlay="#editIntegrantes">
                                    <span class="icon-[tabler--pencil] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button" onclick="delIntegrantes()">
                                    <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                </td>
                                </tr>
                                <tr>
                                <td>04423451</td>
                                <td>Juan carlos</td>
                                <td>Quispe</td>
                                <td>Flores</td>
                                <td>G102-J</td>
                                <td><span class="badge badge-soft badge-success badge-sm">Admin</span></td>
                                <td>912345678</td>
                                <td>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"aria-haspopup="dialog" aria-expanded="false" aria-controls="slide-down-animated-modal" data-overlay="#editIntegrantes">
                                    <span class="icon-[tabler--pencil] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button" onclick="delIntegrantes()">
                                    <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                </td>
                                </tr>
                                <tr>
                                <td>04423451</td>
                                <td>Juan carlos</td>
                                <td>Quispe</td>
                                <td>Flores</td>
                                <td>G102-J</td>
                                <td><span class="badge badge-soft badge-success badge-sm">Admin</span></td>
                                <td>912345678</td>
                                <td>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"aria-haspopup="dialog" aria-expanded="false" aria-controls="slide-down-animated-modal" data-overlay="#editIntegrantes">
                                    <span class="icon-[tabler--pencil] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button" onclick="delIntegrantes()">
                                    <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                </td>
                                </tr>
                                <tr>

                                <td>04423451</td>
                                <td>Juan carlos</td>
                                <td>Quispe</td>
                                <td>Flores</td>
                                <td>G102-J</td>
                                <td><span class="badge badge-soft badge-success badge-sm">Admin</span></td>
                                <td>912345678</td>
                                <td>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"aria-haspopup="dialog" aria-expanded="false" aria-controls="slide-down-animated-modal" data-overlay="#editIntegrantes">
                                    <span class="icon-[tabler--pencil] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button" onclick="delIntegrantes()">
                                    <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                </td>
                                </tr>
                                <tr>

                                <td>04423451</td>
                                <td>Juan carlos</td>
                                <td>Quispe</td>
                                <td>Flores</td>
                                <td>G102-J</td>
                                <td><span class="badge badge-soft badge-success badge-sm">Admin</span></td>
                                <td>912345678</td>
                                <td>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"aria-haspopup="dialog" aria-expanded="false" aria-controls="slide-down-animated-modal" data-overlay="#editIntegrantes">
                                    <span class="icon-[tabler--pencil] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button" onclick="delIntegrantes()">
                                    <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                </td>
                                </tr>
                                <tr>

                                <td>04423451</td>
                                <td>Juan carlos</td>
                                <td>Quispe</td>
                                <td>Flores</td>
                                <td>G102-J</td>
                                <td><span class="badge badge-soft badge-success badge-sm">Admin</span></td>
                                <td>912345678</td>
                                <td>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button" aria-haspopup="dialog" aria-expanded="false" aria-controls="slide-down-animated-modal" data-overlay="#editIntegrantes">
                                    <span class="icon-[tabler--pencil] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button" onclick="delIntegrantes()">
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
                        Showing
                        <span data-datatable-info-from="1"></span>
                        to
                        <span data-datatable-info-to="30"></span>
                        of
                        <span data-datatable-info-length="50"></span>
                        products
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
        </section>
    <!-- / table -->
</div>
<?php include "Views/Templates/footer.php"?>