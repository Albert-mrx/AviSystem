<?php include "Views/Templates/header.php"?>

<div class="bg-slate-50 w-full h-screen  p-4 mt-16 overflow-y-auto">
    <h1 class="text-sm font-bold text-sky-950 mb-2">DASHBOARD</h1>
    <section class="flex  w-full h-auto  ">
        <!-- cards -->
        <div class="grid grid-cols-2 gap-2 xl:gap-2 w-1/2 xl:w-2/5 h-auto ">
            <!-- Card 1 -->
            <div class="h-24  bg-gray-800  text-white p-2 rounded-lg flex items-center">
                <div class="text-4xl mr-4 icon-[fa-solid--user-cog]"></div>
                <div>
                <p class="text-sm xl:text-lg">Total de Admins</p>
                <p class="text-2xl text-center font-bold">5</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="h-24  bg-cyan-700  text-white p-2 rounded-lg flex items-center">
                <div class="text-4xl mr-4 icon-[bxs--user-check]"></div>
                <div>
                <p class="text-sm xl:text-lg">Total Líderes</p>
                <p class="text-2xl text-center font-bold">15</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="h-24  bg-cyan-600  text-white p-2 rounded-lg flex items-center">
                <div class="text-4xl mr-4 icon-[bxs--user-detail]"></div>
                <div>
                <p class="text-sm xl:text-lg">Total Consolidadores</p>
                <p class="text-2xl text-center font-bold">10</p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="h-24  bg-green-600 h-24  text-white p-2 rounded-lg flex items-center">
                <div class="text-4xl mr-4 icon-[clarity--users-solid]"></div>
                <div>
                <p class="text-sm xl:text-lg">Total Grupos</p>
                <p class="text-2xl text-center font-bold">8</p>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="h-24  bg-red-500 h-24  text-white p-2 rounded-lg flex items-center">
                <div class="text-4xl mr-4 icon-[fa-solid--users]"></div>
                <div>
                <p class="text-sm xl:text-lg">Grupos Activos</p>
                <p class="text-2xl text-center font-bold">23</p>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="h-24  bg-orange-400 h-24   text-white p-2 rounded-lg flex items-center">
                <div class="text-4xl mr-4 icon-[material-symbols--star-rounded]"></div>
                <div>
                <p class="text-sm xl:text-lg">Total Integrantes</p>
                <p class="text-2xl text-center font-bold">46</p>
                </div>
            </div>

            <!-- Card 7 -->
            <div class="h-24  bg-cyan-700 h-24  text-white p-2 rounded-lg flex items-center">
                <div class="text-4xl mr-4 icon-[fa6-solid--hands-holding-child]"></div>
                <div>
                <p class="text-sm xl:text-lg">Total Nuevos</p>
                <p class="text-2xl text-center font-bold">7</p>
                </div>
            </div>

            <!-- Card 8 -->
            <div class="h-24  bg-cyan-600  text-white p-2 rounded-lg flex items-center">
                <div class="text-4xl mr-4 icon-[oui--calendar]"></div>
                <div>
                <p class="text-sm xl:text-lg">Reuniones Programadas</p>
                <p class="text-2xl text-center font-bold">85</p>
                </div>
            </div>
        </div>
        <!-- chart -->
        <article class="w-1/2 xl:w-3/5 h-auto flex justify-center items-center">
                <!-- <canvas id="myChart"></canvas> -->
                <canvas id="miDoughnutChart" width="400" height="400"></canvas>
        </article>
    </section>
    <section class="flex flex-col w-full overflow-y-auto h-1/2 mt-24 ">
            <h1 class="text-lg font-bold">Lista de Miembros</h1>
            <div
        id="datatable-filter"
        class="bg-base-100 --prevent-on-load-init flex flex-col rounded-md shadow-base-300/20 shadow-sm"
        data-datatable='{
        "pageLength": 5,
        "pagingOptions": {
            "pageBtnClasses": "btn btn-text btn-circle btn-sm"
        },  
        "selecting": true,
        "rowSelectingOptions": {
            "selectAllSelector": "#datatable-filter-select-all-rows",
            "individualSelector": ".datatable-filter-select-row"
        },
        "language": {
            "zeroRecords": "<div class=\"py-10 px-5 flex flex-col justify-center items-center text-center\"><span class=\"icon-[tabler--search] shrink-0 size-6 text-base-content\"></span><div class=\"max-w-sm mx-auto\"><p class=\"mt-2 text-sm text-base-content/80\">No search results</p></div></div>"
            }
        }'
        >
        <div class="border-base-content/25 flex items-center border-b px-5 py-3 gap-3">
            <div class="input input-sm max-w-60 ">
                <span class="icon-[tabler--search] text-base-content/80 my-auto me-3 size-4 shrink-0"></span>
                <label class="sr-only" for="filter-search"></label>
                <input type="search" class="grow" placeholder="Search for items" id="filter-search" data-datatable-search="" />
                </div>
            <div class="flex flex-1 items-center justify-end gap-3">
            <!-- Select -->
            <select
                data-select='{
                "placeholder": "Select option...",
                "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
                "toggleClasses": "advance-select-toggle advance-select-sm",
                "dropdownClasses": "advance-select-menu w-24 max-sm:w-16",
                "optionClasses": "advance-select-option selected:select-active",
                "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"icon-[tabler--check] shrink-0 size-3 text-primary hidden selected:block \"></span></div>",
                "extraMarkup": "<span class=\"icon-[tabler--caret-up-down] shrink-0 size-4 text-base-content absolute top-1/2 end-2 -translate-y-1/2 \"></span>"
                }'
                class="hidden" data-datatable-page-entities="" >
                <option value="5" selected="">5</option>
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="30">30</option>
                <option value="40">40</option>
                <option value="50">50</option>
            </select>
            <!-- End Select -->
            <select
                data-select='{
                "placeholder": "Select option...",
                "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
                "toggleClasses": "advance-select-toggle advance-select-sm max-sm:w-20 w-36",
                "dropdownClasses": "advance-select-menu max-sm:w-28 w-full",
                "optionClasses": "advance-select-option selected:select-active",
                "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"icon-[tabler--check] shrink-0 size-3 text-primary hidden selected:block \"></span></div>",
                "extraMarkup": "<span class=\"icon-[tabler--caret-up-down] shrink-0 size-4 text-base-content absolute top-1/2 end-2 -translate-y-1/2 \"></span>"
                }'
                class="hidden" id="select-stock">
                <option value="all">All</option>
                <option value="In Stock">In Stock</option>
                <option value="Out of Stock">Out of Stock</option>
                <option value="Limited">Limited</option>        
            </select>
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
                        Lider a cargo
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
                <tbody>
                    <tr>

                    <td>Apple iPhone 15</td>
                    <td>$999</td>
                    <td><span class="badge badge-soft badge-success badge-sm">In Stock</span></td>
                    <td>
                        <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                        <span class="icon-[fluent--print-32-regular]"></span>
                        </button>
                    </td>
                    </tr>
                    <tr>

                    <td>Samsung Galaxy S23</td>
                    <td>$899</td>
                    <td><span class="badge badge-soft badge-warning badge-sm">Limited</span></td>
                    <td>
                         <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                        <span class="icon-[fluent--print-32-regular]"></span>
                        </button>
                    </td>
                    </tr>
                    <tr>
                    <td>Sony WH-1000XM5</td>
                    <td>$399</td>
                    <td><span class="badge badge-soft badge-error badge-sm">Out of Stock</span></td>
                    <td>
                         <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                        <span class="icon-[fluent--print-32-regular]"></span>
                        </button>
                    </td>
                    </tr>
                    <tr>
                    <td>Bose QuietComfort Earbuds II</td>
                    <td>$279</td>
                    <td><span class="badge badge-soft badge-error badge-sm">Out of Stock</span></td>
                    <td>
                        <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                        <span class="icon-[fluent--print-32-regular]"></span>
                        </button>
                    </td>
                    </tr>
                    <tr>
                    <td>Asus ROG Zephyrus G14</td>
                    <td>$1,899</td>
                    <td><span class="badge badge-soft badge-success badge-sm">In Stock</span></td>
                    <td>
                        <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                        <span class="icon-[fluent--print-32-regular]"></span>
                        </button>
                    </td>
                    </tr>
                    <tr>
                    <td>Sony PlayStation 5</td>
                    <td>$499</td>
                    <td><span class="badge badge-soft badge-warning badge-sm">Limited</span></td>
                    <td>
                        <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                        <span class="icon-[fluent--print-32-regular]"></span>
                        </button>
                    </td>
                    </tr>
                    <tr>
                    <td>Amazon Echo Dot (5th Gen)</td>
                    <td>$49</td>
                    <td><span class="badge badge-soft badge-success badge-sm">In Stock</span></td>
                    <td>
                        <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                        <span class="icon-[fluent--print-32-regular]"></span>
                        </button>
                    </td>
                    </tr>
                    <tr>
                    <td>NVIDIA GeForce RTX 4090</td>
                    <td>$1,599</td>
                    <td><span class="badge badge-soft badge-warning badge-sm">Limited</span></td>
                    <td>
                        <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                        <span class="icon-[fluent--print-32-regular]"></span>
                        </button>
                    </td>
                    </tr>
                    <tr>
                    <td>Lenovo ThinkPad X1 Carbon</td>
                    <td>$1,799</td>
                    <td><span class="badge badge-soft badge-success badge-sm">In Stock</span></td>
                    <td>
                        <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                        <span class="icon-[fluent--print-32-regular]"></span>
                        </button>
                    </td>
                    </tr>
                    <tr>
                    <td>Google Nest Hub (2nd Gen)</td>
                    <td>$99</td>
                    <td><span class="badge badge-soft badge-success badge-sm">In Stock</span></td>
                    <td>
                        <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                        <span class="icon-[fluent--print-32-regular]"></span>
                        </button>
                    </td>
                    </tr>
                    <tr>
                    <td>Fitbit Charge 6</td>
                    <td>$149</td>
                    <td><span class="badge badge-soft badge-warning badge-sm">Limited</span></td>
                    <td>
                        <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                        <span class="icon-[fluent--print-32-regular]"></span>
                        </button>
                    </td>
                    </tr>
                    <tr>
                    <td>Razer Blade 16</td>
                    <td>$2,499</td>
                    <td><span class="badge badge-soft badge-error badge-sm">Out of Stock</span></td>
                    <td>
                        <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                        <span class="icon-[fluent--print-32-regular]"></span>
                        </button>
                    </td>
                    </tr>
                    <tr>
                    <td>Oculus Quest 3</td>
                    <td>$499</td>
                    <td><span class="badge badge-soft badge-success badge-sm">In Stock</span></td>
                    <td>
                        <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                        <span class="icon-[fluent--print-32-regular]"></span>
                        </button>
                    </td>
                    </tr>
                    <tr>
                    <td>Canon EOS R8</td>
                    <td>$1,699</td>
                    <td><span class="badge badge-soft badge-warning badge-sm">Limited</span></td>
                    <td>
                        <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                        <span class="icon-[fluent--print-32-regular]"></span>
                        </button>
                    </td>
                    </tr>
                    <tr>
                    <td>DJI Mavic 3 Pro</td>
                    <td>$2,199</td>
                    <td><span class="badge badge-soft badge-success badge-sm">In Stock</span></td>
                    <td>
                        <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                        <span class="icon-[fluent--print-32-regular]"></span>
                        </button>
                    </td>
                    </tr>
                    <tr>
                    <td>Alienware Aurora R15</td>
                    <td>$2,899</td>
                    <td><span class="badge badge-soft badge-error badge-sm">Out of Stock</span></td>
                    <td>
                        <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                        <span class="icon-[fluent--print-32-regular]"></span>
                        </button>
                    </td>
                    </tr>
                    <tr>
                    <td>SteelSeries Arctis Nova Pro</td>
                    <td>$349</td>
                    <td><span class="badge badge-soft badge-warning badge-sm">Limited</span></td>
                    <td>
                        <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
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
    </section>
</div>
 <!--data table container -->


<?php include "Views/Templates/footer.php"?>