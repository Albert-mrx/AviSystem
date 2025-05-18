<?php include "Views/Templates/header.php"?>
<div class="bg-slate-50 w-full   p-4 mt-16 overflow-y-auto">
    <h1 class="text-sm font-bold text-sky-950 mb-2">DASHBOARD</h1>
    <section class="flex  flex-col w-full ">
        <!-- cards -->
        <div class="grid grid-cols-1 h-48 md:grid-cols-2 lg:grid-cols-3 gap-2 w-full  p-2">
            <!-- Card 1 -->
            <div class="h-32 md:h-auto bg-emerald-600  text-white p-4 rounded-lg flex items-center">
                <div class="text-7xl w-2/5 flex flex-col justify-center items-center">
                    <span class="icon-[heroicons--user-group-20-solid]"></span>
                </div>
                <div class="w-3/5 text-center flex flex-col justify-center">
                    <p class="text-xl font-bold">Grupos Activos</p>
                    <p class="text-5xl md:text-4xl font-bold">5</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="h-32 md:h-auto bg-cyan-400 text-white p-4 rounded-lg flex items-center">
                <div class="text-7xl w-2/5 flex flex-col justify-center items-center">
                    <span class="icon-[si--user-fill]"></span>
                </div>
                <div class="w-3/5 text-center flex flex-col justify-center">
                    <p class="text-xl font-bold">Total Integrantes</p>
                    <p class="text-5xl font-bold">30</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="h-32 md:h-auto bg-teal-400 text-white p-4 rounded-lg flex items-center">
                <div class="text-7xl w-2/5 flex flex-col justify-center items-center">
                    <span class="icon-[solar--calendar-bold]"></span>
                </div>
                <div class="w-3/5 text-center flex flex-col justify-center">
                    <p class="text-xl font-bold">Reuniones Programadas</p>
                    <p class="text-5xl font-bold">80</p>
                </div>
            </div>
        </div>

        <!-- chart -->
        <div class="w-full mt-60 md:mt-8 flex flex-wrap md:flex-nowrap   h-auto   md:justify-center ">
            <canvas id="recurrenciactr" class="w-xl h-xl md:w-full md:h-full"></canvas>
            <canvas id="sexoctr" class="w-xl h-xl md:w-full md:h-full"></canvas>
            <canvas id="integrantesctr" class="w-xl h-xl md:w-full md:h-full"></canvas>
        </div>
    </section>
    <section class="flex flex-col w-full md:overflow-y-auto h-1/2 mt-24 ">
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
                                    TELÉFONO
                                    <span class="icon-[tabler--chevron-up] datatable-ordering-asc:block hidden"></span>
                                    <span class="icon-[tabler--chevron-down] datatable-ordering-desc:block hidden"></span>
                                    </div>
                                </th>
                                <th scope="col" class="--exclude-from-ordering">ESTADO</th>
                                </tr>
                            </thead>
                            <tbody  >
                                <tr>
                                <td>04412387</td>
                                <td>Juan carlos</td>
                                <td> Quispe</td>
                                <td>Flores</td>
                                <td>G102-J</td>
                                <td>96584752</td>
                                <td><div class="h-4 w-4 rounded-full bg-green-500"></div></td>
                                </tr>
                                <tr>
                                <td>04412387</td>
                                <td>Juan carlos</td>
                                <td> Quispe</td>
                                <td>Flores</td>
                                <td>G102-J</td>
                                <td>96584752</td>
                                <td><div class="h-4 w-4 rounded-full bg-orange-500"></div></td>
                                </tr>
                                <tr>
                                <td>04412387</td>
                                <td>Juan carlos</td>
                                <td> Quispe</td>
                                <td>Flores</td>
                                <td>G102-J</td>
                                <td>96584752</td>
                                <td><div class="h-4 w-4 rounded-full bg-red-500"></div></td>
                                </tr>
                                <tr>
                                <td>04412387</td>
                                <td>Juan carlos</td>
                                <td> Quispe</td>
                                <td>Flores</td>
                                <td>G102-J</td>
                                <td>96584752</td>
                                <td><div class="h-4 w-4 rounded-full bg-green-500"></div></td>
                                </tr>
                                <tr>
                                <td>04412387</td>
                                <td>Juan carlos</td>
                                <td> Quispe</td>
                                <td>Flores</td>
                                <td>G102-J</td>
                                <td>96584752</td>
                                <td><div class="h-4 w-4 rounded-full bg-orange-500"></div></td>
                                </tr>
                                <tr>
                                <td>04412387</td>
                                <td>Juan carlos</td>
                                <td> Quispe</td>
                                <td>Flores</td>
                                <td>G102-J</td>
                                <td>96584752</td>
                                <td><div class="h-4 w-4 rounded-full bg-red-500"></div></td>
                                </tr>
                                <tr>
                                <td>04412387</td>
                                <td>Juan carlos</td>
                                <td> Quispe</td>
                                <td>Flores</td>
                                <td>G102-J</td>
                                <td>96584752</td>
                                <td><div class="h-4 w-4 rounded-full bg-green-500"></div></td>
                                </tr>
                                <tr>
                                <td>04412387</td>
                                <td>Juan carlos</td>
                                <td> Quispe</td>
                                <td>Flores</td>
                                <td>G102-J</td>
                                <td>96584752</td>
                                <td><div class="h-4 w-4 rounded-full bg-orange-500"></div></td>
                                </tr>
                                <tr>
                                <td>04412387</td>
                                <td>Juan carlos</td>
                                <td> Quispe</td>
                                <td>Flores</td>
                                <td>G102-J</td>
                                <td>96584752</td>
                                <td><div class="h-4 w-4 rounded-full bg-red-500"></div></td>
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
        </div>
    </section>
</div>
<?php include "Views/Templates/footer.php"?>