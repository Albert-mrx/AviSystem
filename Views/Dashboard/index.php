<?php include "Views/Templates/header.php"?>

<div class="bg-slate-50 w-full h-screen  p-4 mt-16 overflow-y-auto">
    <h1 class="text-sm font-bold text-sky-950 mb-2">DASHBOARD</h1>
    <section class="flex flex-col md:flex-row   w-full h-auto  ">
        <!-- cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 xl:gap-2 w-full md:w-1/2 xl:w-1/2 h-auto ">
            <!-- Card 1 -->
            <div class="h-32 lg:h-24 xl:h-32  bg-gray-800  text-white p-2 rounded-lg flex items-center">
                <div class="text-6xl md:text-6xl lg:text-5xl xl:text-6xl w-2/5 flex flex-col justify-center items-center">
                    <span class="icon-[fa-solid--user-cog]"></span>
                </div>
                <div class="w-3/5 text-center flex flex-col justify-center">
                    <p class="text-xl md:text-lg text-sm xl:text-lg font-bold">Total de Admins</p>
                    <p class="text-5xl text-center font-bold">5</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="h-32 lg:h-24 xl:h-32  bg-cyan-700  text-white p-2 rounded-lg flex items-center">
                <div class="text-6xl lg:text-5xl xl:text-6xl w-2/5 flex flex-col justify-center items-center">
                    <span class="icon-[bxs--user-check]"></span>
                </div>
                <div class="w-3/5 text-center flex flex-col justify-center">
                    <p class="text-xl xl:text-lg font-bold">Total Líderes</p>
                    <p class="text-5xl text-center font-bold">15</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class=" h-32 lg:h-24 xl:h-32  bg-cyan-600  text-white p-2 rounded-lg flex items-center">
                <div class="text-6xl lg:text-5xl xl:text-6xl w-2/5 flex flex-col justify-center items-center">
                    <span class="icon-[bxs--user-detail]"></span>
                </div>
                <div class="w-3/5 text-center flex flex-col justify-center">
                <p class="text-xl  md:text-lg font-bold">Total Consolidadores</p>
                <p class="text-5xl text-center font-bold">10</p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="h-32 lg:h-24 xl:h-32  bg-emerald-600 h-24  text-white p-2 rounded-lg flex items-center">
                <div class="text-6xl lg:text-5xl xl:text-6xl w-2/5 flex flex-col justify-center items-center">
                    <span class="icon-[clarity--users-solid]"></span>
                </div>
                <div class="w-3/5 text-center flex flex-col justify-center">
                <p class="text-xl xl:text-lg font-bold">Total Grupos</p>
                <p class="text-5xl text-center font-bold">8</p>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="h-32 lg:h-24 xl:h-32 bg-red-500 h-24  text-white p-2 rounded-lg flex items-center">
                <div class="text-6xl lg:text-5xl xl:text-6xl w-2/5 flex flex-col justify-center items-center">
                    <span class="icon-[fa-solid--users]"></span>
                </div>
                <div class="w-3/5 text-center flex flex-col justify-center">
                <p class="text-xl xl:text-lg font-bold">Grupos Activos</p>
                <p class="text-5xl text-center font-bold">23</p>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="h-32 lg:h-24 xl:h-32 bg-orange-400 h-24   text-white p-2 rounded-lg flex items-center">
                <div class="text-6xl lg:text-5xl xl:text-6xl w-2/5 flex flex-col justify-center items-center">
                    <span class="icon-[material-symbols--star-rounded]"></span>
                </div>
                <div class="w-3/5 text-center flex flex-col justify-center">
                <p class="text-xl xl:text-lg font-bold">Total Integrantes</p>
                <p class="text-5xl text-center font-bold">46</p>
                </div>
            </div>

            <!-- Card 7 -->
            <div class="h-32 lg:h-24 xl:h-32  bg-cyan-700 h-24  text-white p-2 rounded-lg flex items-center">
                <div class="text-6xl lg:text-5xl xl:text-6xl w-2/5 flex flex-col justify-center items-center">
                    <span class="icon-[fa6-solid--hands-holding-child]"></span>
                </div>
                <div class="w-3/5 text-center flex flex-col justify-center">
                <p class="text-xl xl:text-lg font-bold">Total Nuevos</p>
                <p class="text-5xl text-center font-bold">7</p>
                </div>
            </div>

            <!-- Card 8 -->
            <div class="h-32 lg:h-24 xl:h-32  bg-cyan-600  text-white p-2 rounded-lg flex items-center">
                <div class="text-6xl lg:text-5xl xl:text-6xl w-2/5 flex flex-col justify-center items-center">
                    <span class="icon-[oui--calendar]"></span>
                </div>
                <div class="w-3/5 text-center flex flex-col justify-center">
                <p class="text-xl xl:text-lg font-bold">Reuniones Programadas</p>
                <p class="text-5xl text-center font-bold">85</p>
                </div>
            </div>
        </div>
        <!-- chart -->
        <article class="mt-5 w-full md:w-1/2 xl:w-1/2 h-auto flex justify-center items-center">
                <!-- <canvas id="myChart"></canvas> -->
                <canvas id="miDoughnutChart" width="400" height="400"></canvas>
        </article>
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
                                    Grupo
                                    <span class="icon-[tabler--chevron-up] datatable-ordering-asc:block hidden"></span>
                                    <span class="icon-[tabler--chevron-down] datatable-ordering-desc:block hidden"></span>
                                    </div>
                                </th>
                                <th scope="col" class="group w-fit">
                                    <div class="flex items-center justify-between">
                                    Lider a Cargo
                                    <span class="icon-[tabler--chevron-up] datatable-ordering-asc:block hidden"></span>
                                    <span class="icon-[tabler--chevron-down] datatable-ordering-desc:block hidden"></span>
                                    </div>
                                </th>
                                <th scope="col" class="group w-fit">
                                    <div class="flex items-center justify-between">
                                    Fecha
                                    <span class="icon-[tabler--chevron-up] datatable-ordering-asc:block hidden"></span>
                                    <span class="icon-[tabler--chevron-down] datatable-ordering-desc:block hidden"></span>
                                    </div>
                                </th>
                                <th scope="col" class="--exclude-from-ordering">Acciones</th>
                                </tr>
                            </thead>
                            <tbody  >
                                <tr>
                                <td>G101-F</td>
                                <td>Juan carlos</td>
                                <td> <span>10/02/2025</span> al <span>15/03/2025</span> </td>
                                <td>
                                    <button class="btn btn-circle btn-text text-2xl btn-sm" aria-label="Action button">
                                    <span class="icon-[fluent--print-32-regular]"></span>
                                    </button>
                                </td>
                                </tr>
                                <tr>
                                <td>G102-J</td>
                                <td>Maria jose</td>
                                <td> <span>10/02/2025</span> al <span>15/03/2025</span> </td>
                                <td>
                                    <button class="btn btn-circle btn-text text-2xl btn-sm" aria-label="Action button">
                                    <span class="icon-[fluent--print-32-regular]"></span>
                                    </button>
                                </td>
                                </tr>
                                <tr>
                                <td>G104-M</td>
                                <td>Pedro</td>
                                <td> <span>10/02/2025</span> al <span>15/03/2025</span> </td>
                                <td>
                                    <button class="btn btn-circle btn-text text-2xl btn-sm" aria-label="Action button">
                                    <span class="icon-[fluent--print-32-regular]"></span>
                                    </button>
                                </td>
                                </tr>
                                <tr>
                                <td>G103-X</td>
                                <td>Antoni</td>
                                <td> <span>10/02/2025</span> al <span>15/03/2025</span> </td>
                                <td>
                                    <button class="btn btn-circle btn-text text-2xl btn-sm" aria-label="Action button">
                                    <span class="icon-[fluent--print-32-regular]"></span>
                                    </button>
                                </td>
                                </tr>
                                <tr>
                                <td>G101-F</td>
                                <td>Sara milagros</td>
                                <td> <span>10/02/2025</span> al <span>15/03/2025</span> </td>
                                <td>
                                    <button class="btn btn-circle btn-text text-2xl btn-sm" aria-label="Action button">
                                    <span class="icon-[fluent--print-32-regular]"></span>
                                    </button>
                                </td>
                                </tr>
                                <tr>
                                <td>G101-F</td>
                                <td>Pepe carlos</td>
                                <td> <span>10/02/2025</span> al <span>15/03/2025</span> </td>
                                <td>
                                    <button class="btn btn-circle btn-text text-2xl btn-sm" aria-label="Action button">
                                    <span class="icon-[fluent--print-32-regular]"></span>
                                    </button>
                                </td>
                                </tr>
                                <tr>
                                <td>G101-F</td>
                                <td>Jhon pedro</td>
                                <td> <span>10/02/2025</span> al <span>15/03/2025</span> </td>
                                <td>
                                    <button class="btn btn-circle btn-text text-2xl btn-sm" aria-label="Action button">
                                    <span class="icon-[fluent--print-32-regular]"></span>
                                    </button>
                                </td>
                                </tr>
                                <tr>
                                <td>G101-F</td>
                                <td>Margarita</td>
                                <td> <span>10/02/2025</span> al <span>15/03/2025</span> </td>
                                <td>
                                    <button class="btn btn-circle btn-text text-2xl btn-sm" aria-label="Action button">
                                    <span class="icon-[fluent--print-32-regular]"></span>
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
        </div>
    </section>
</div>
 <!--data table container -->


<?php include "Views/Templates/footer.php"?>