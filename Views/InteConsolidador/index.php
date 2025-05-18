<?php include "Views/Templates/header.php"?>
<div class="w-auto p-4 mt-16 overflow-y-auto bg-slate-100 ">
    <h1 class="text-sm font-bold text-sky-950 mb-2 flex justify-start items-center"><span class="icon-[heroicons--computer-desktop] font-bold"></span>INTEGRANTES</h1>
    <!-- cards -->
    <section class="flex  w-full h-auto">
        <div class="grid grid-cols-3 gap-2 xl:gap-2  xl:w-full h-1/2 ">
            <!-- Card 1 -->
            <div class="lg:h-32 xl:h-40 bg-red-500  text-white p-1 rounded-lg flex ">
                <div class="lg:text-5xl xl:text-7xl w-2/5 flex flex-col justify-center items-center">
                    <span class="icon-[fa--group]"></span>
                </div>
                <div class="w-3/5 text-center flex flex-col justify-center">
                    <p class="text-sm xl:text-lg font-bold">INTEGRANTES NO ASIGNADOS</p>
                    <p class="text-5xl text-center font-bold">5</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="lg:h-32 xl:h-40  bg-gray-800  text-white p-1 rounded-lg flex">
                <div class="lg:text-5xl xl:text-7xl w-2/5 flex flex-col justify-center items-center">
                    <span class="icon-[fluent-mdl2--reminder-group]"></span>
                </div>
                <div class="w-3/5 text-center flex flex-col justify-center">
                    <p class="text-sm xl:text-lg font-bold">INTEGRANTES ASIGNADOS</p>
                    <p class="text-5xl text-center font-bold">15</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="lg:h-32 xl:h-40  bg-orange-400  text-white p-1 rounded-lg flex">
                <div class="lg:text-5xl xl:text-7xl w-2/5 flex flex-col justify-center items-center">
                    <span class="icon-[ic--baseline-groups-2]"></span>
                </div>
                <div class="w-3/5 text-center flex flex-col justify-center">
                    <p class="text-sm xl:text-lg font-bold">TOTAL INTEGRANTES</p>
                    <p class="text-5xl text-center font-bold">10</p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="lg:h-32 xl:h-40  bg-sky-500   text-white p-1 rounded-lg flex">
                <div class="lg:text-5xl xl:text-7xl w-2/5 flex flex-col justify-center items-center">
                    <span class="icon-[raphael--user]"></span>
                </div>
                <div class="w-3/5 text-center flex flex-col justify-center">
                    <p class="text-sm xl:text-lg font-bold">GRUPOS MASCULINOS</p>
                    <p class="text-5xl text-center font-bold">8</p>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="lg:h-32 xl:h-40  bg-teal-400   text-white p-1 rounded-lg flex">
                <div class="lg:text-5xl xl:text-7xl w-2/5 flex flex-col justify-center items-center">
                    <span class="icon-[icon-park-solid--women]"></span>
                </div>
                <div class="w-3/5 text-center flex flex-col justify-center">
                    <p class="text-sm xl:text-lg font-bold">GRUPOS FEMENINOS</p>
                    <p class="text-5xl text-center font-bold">23</p>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="lg:h-32 xl:h-40 bg-emerald-600   text-white p-1 rounded-lg flex">
                <div class="lg:text-5xl xl:text-7xl w-2/5 flex flex-col justify-center items-center">
                    <span class="icon-[entypo--users]"></span>
                </div>
                <div class="w-3/5 text-center flex flex-col justify-center">
                    <p class="text-sm xl:text-lg font-bold">GRUPOS JOVENES</p>
                    <p class="text-5xl text-center font-bold">46</p>
                </div>
            </div>

            <!-- Card 7 -->
            <div class="lg:h-32 xl:h-40  bg-sky-900 h-40  text-white p-1 rounded-lg flex">
                <div class="lg:text-5xl xl:text-7xl w-2/5 flex flex-col justify-center items-center">
                    <span class="icon-[mdi--user-star]"></span>
                </div>
                <div class="w-3/5 text-center flex flex-col justify-center">
                    <p class="text-sm xl:text-lg font-bold">TOTAL NUEVOS</p>
                    <p class="text-5xl text-center font-bold">7</p>
                </div>
            </div>

            <!-- Card 8 -->
            <div class="lg:h-32 xl:h-40  bg-sky-950  text-white p-1 rounded-lg flex">
                <div class="lg:text-5xl xl:text-7xl w-2/5 flex flex-col justify-center items-center">
                    <span class="icon-[healthicons--i-groups-perspective-crowd]"></span>
                </div>
                <div class="w-3/5 text-center flex flex-col justify-center">
                    <p class="text-sm xl:text-lg font-bold">GRUPOS MIXTOS</p>
                    <p class="text-5xl text-center font-bold">85</p>
                </div>
            </div>
        </div>
    </section>
    <!-- / cards -->
     <!-- btn nuevo integrante -->
     <div class="fex justify-end mt-4 w-full  p-2">
        <button class=" btn  p-2 bg-sky-800 border-sky-800 text-slate-50" id="btn-nuevoIntegrante"> <span class="icon-[mingcute--user-add-line] "></span> Nuevo integrante</button>
     </div>
     <!-- / btn nuevo integrante -->
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
                                <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                <span class="icon-[tabler--pencil] size-5"></span>
                                </button>
                                <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
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
                                <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                <span class="icon-[tabler--pencil] size-5"></span>
                                </button>
                                <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
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
                                <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                <span class="icon-[tabler--pencil] size-5"></span>
                                </button>
                                <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
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
                                <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                <span class="icon-[tabler--pencil] size-5"></span>
                                </button>
                                <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
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
                                <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                <span class="icon-[tabler--pencil] size-5"></span>
                                </button>
                                <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
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
                                <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                <span class="icon-[tabler--pencil] size-5"></span>
                                </button>
                                <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
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
                                <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                <span class="icon-[tabler--pencil] size-5"></span>
                                </button>
                                <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
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
                                <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                <span class="icon-[tabler--pencil] size-5"></span>
                                </button>
                                <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
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
                                <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                <span class="icon-[tabler--pencil] size-5"></span>
                                </button>
                                <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
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
    <!-- /table -->
</div>
<?php include "Views/Templates/footer.php"?>