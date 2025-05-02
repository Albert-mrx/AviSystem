<?php include "Views/Templates/header.php"?>

<div class="bg-slate-50 w-full h-screen  p-4 mt-16 overflow-y-auto">
    <h1 class="text-sm font-bold text-sky-950 mb-2">DASHBOARD</h1>
    <section class="flex  w-full h-auto  ">
        <!-- cards -->
        <div class="grid grid-cols-2 gap-2 xl:gap-2 w-1/2 xl:w-1/2 h-auto ">
            <!-- Card 1 -->
            <div class="lg:h-24 xl:h-32  bg-gray-800  text-white p-2 rounded-lg flex items-center">
                <div class="lg:text-5xl xl:text-6xl w-2/5 flex flex-col justify-center items-center">
                    <span class="icon-[fa-solid--user-cog]"></span>
                </div>
                <div class="w-3/5 text-center flex flex-col justify-center">
                    <p class="text-sm xl:text-lg font-bold">Total de Admins</p>
                    <p class="text-5xl text-center font-bold">5</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="lg:h-24 xl:h-32  bg-cyan-700  text-white p-2 rounded-lg flex items-center">
                <div class="lg:text-5xl xl:text-6xl w-2/5 flex flex-col justify-center items-center">
                    <span class="icon-[bxs--user-check]"></span>
                </div>
                <div class="w-3/5 text-center flex flex-col justify-center">
                    <p class="text-sm xl:text-lg font-bold">Total Líderes</p>
                    <p class="text-2xl text-center font-bold">15</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="lg:h-24 xl:h-32  bg-cyan-600  text-white p-2 rounded-lg flex items-center">
                <div class="lg:text-5xl xl:text-6xl w-2/5 flex flex-col justify-center items-center">
                    <span class="icon-[bxs--user-detail]"></span>
                </div>
                <div class="w-3/5 text-center flex flex-col justify-center">
                <p class="text-sm xl:text-lg font-bold">Total Consolidadores</p>
                <p class="text-2xl text-center font-bold">10</p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="lg:h-24 xl:h-32  bg-emerald-600 h-24  text-white p-2 rounded-lg flex items-center">
                <div class="lg:text-5xl xl:text-6xl w-2/5 flex flex-col justify-center items-center">
                    <span class="icon-[clarity--users-solid]"></span>
                </div>
                <div class="w-3/5 text-center flex flex-col justify-center">
                <p class="text-sm xl:text-lg font-bold">Total Grupos</p>
                <p class="text-2xl text-center font-bold">8</p>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="lg:h-24 xl:h-32 bg-red-500 h-24  text-white p-2 rounded-lg flex items-center">
                <div class="lg:text-5xl xl:text-6xl w-2/5 flex flex-col justify-center items-center">
                    <span class="icon-[fa-solid--users]"></span>
                </div>
                <div class="w-3/5 text-center flex flex-col justify-center">
                <p class="text-sm xl:text-lg font-bold">Grupos Activos</p>
                <p class="text-2xl text-center font-bold">23</p>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="lg:h-24 xl:h-32 bg-orange-400 h-24   text-white p-2 rounded-lg flex items-center">
                <div class="lg:text-5xl xl:text-6xl w-2/5 flex flex-col justify-center items-center">
                    <span class="icon-[material-symbols--star-rounded]"></span>
                </div>
                <div class="w-3/5 text-center flex flex-col justify-center">
                <p class="text-sm xl:text-lg font-bold">Total Integrantes</p>
                <p class="text-2xl text-center font-bold">46</p>
                </div>
            </div>

            <!-- Card 7 -->
            <div class="lg:h-24 xl:h-32  bg-cyan-700 h-24  text-white p-2 rounded-lg flex items-center">
                <div class="lg:text-5xl xl:text-6xl w-2/5 flex flex-col justify-center items-center">
                    <span class="icon-[fa6-solid--hands-holding-child]"></span>
                </div>
                <div class="w-3/5 text-center flex flex-col justify-center">
                <p class="text-sm xl:text-lg font-bold">Total Nuevos</p>
                <p class="text-2xl text-center font-bold">7</p>
                </div>
            </div>

            <!-- Card 8 -->
            <div class="lg:h-24 xl:h-32  bg-cyan-600  text-white p-2 rounded-lg flex items-center">
                <div class="lg:text-5xl xl:text-6xl w-2/5 flex flex-col justify-center items-center">
                    <span class="icon-[oui--calendar]"></span>
                </div>
                <div class="w-3/5 text-center flex flex-col justify-center">
                <p class="text-sm xl:text-lg font-bold">Reuniones Programadas</p>
                <p class="text-2xl text-center font-bold">85</p>
                </div>
            </div>
        </div>
        <!-- chart -->
        <article class="w-1/2 xl:w-1/2 h-auto flex justify-center items-center">
                <!-- <canvas id="myChart"></canvas> -->
                <canvas id="miDoughnutChart" width="400" height="400"></canvas>
        </article>
    </section>
    <section class="flex flex-col w-full overflow-y-auto h-1/2 mt-24 ">
            <h1 class="text-lg font-bold">Lista de Miembros</h1>
            <article>
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
                                Product Name
                                <span class="icon-[tabler--chevron-up] datatable-ordering-asc:block hidden"></span>
                                <span class="icon-[tabler--chevron-down] datatable-ordering-desc:block hidden"></span>
                                </div>
                            </th>
                            <th scope="col" class="group w-fit">
                                <div class="flex items-center justify-between">
                                Price
                                <span class="icon-[tabler--chevron-up] datatable-ordering-asc:block hidden"></span>
                                <span class="icon-[tabler--chevron-down] datatable-ordering-desc:block hidden"></span>
                                </div>
                            </th>
                            <th scope="col" class="group w-fit">
                                <div class="flex items-center justify-between">
                                Availability
                                <span class="icon-[tabler--chevron-up] datatable-ordering-asc:block hidden"></span>
                                <span class="icon-[tabler--chevron-down] datatable-ordering-desc:block hidden"></span>
                                </div>
                            </th>
                            <th scope="col" class="--exclude-from-ordering">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>Apple iPhone 15</td>
                            <td>$999</td>
                            <td><span class="badge badge-soft badge-success badge-sm">In Stock</span></td>
                            <td>
                                <button class="btn btn-circle btn-text btn-sm text-2xl" aria-label="Action button">
                                <span class="icon-[fluent--print-32-regular]"></span>
                                </button>
                            </td>
                            </tr>
                            <tr>
                            <td>Samsung Galaxy S23</td>
                            <td>$899</td>
                            <td><span class="badge badge-soft badge-warning badge-sm">Limited</span></td>
                            <td>
                                <button class="btn btn-circle btn-text btn-sm text-2xl" aria-label="Action button">
                                <span class="icon-[fluent--print-32-regular]"></span>
                                </button>
                            </td>
                            </tr>
                            <tr>
                            <td>Sony WH-1000XM5</td>
                            <td>$399</td>
                            <td><span class="badge badge-soft badge-error badge-sm">Out of Stock</span></td>
                            <td>
                                <button class="btn btn-circle btn-text btn-sm text-2xl" aria-label="Action button">
                                <span class="icon-[fluent--print-32-regular]"></span>
                                </button>
                            </td>
                            </tr>
                            <tr>
                            <td>Dell XPS 15</td>
                            <td>$1,299</td>
                            <td><span class="badge badge-soft badge-success badge-sm">In Stock</span></td>
                            <td>
                                <button class="btn btn-circle btn-text btn-sm text-2xl" aria-label="Action button">
                                <span class="icon-[fluent--print-32-regular]"></span>
                                </button>
                            </td>
                            </tr>
                            <tr>
                            <td>Logitech MX Master 3</td>
                            <td>$99</td>
                            <td><span class="badge badge-soft badge-warning badge-sm">Limited</span></td>
                            <td>
                                <button class="btn btn-circle btn-text btn-sm text-2xl" aria-label="Action button">
                                <span class="icon-[fluent--print-32-regular]"></span>
                                </button>
                            </td>
                            </tr>
                            <tr>
                            <td>Microsoft Surface Laptop 5</td>
                            <td>$1,499</td>
                            <td><span class="badge badge-soft badge-success badge-sm">In Stock</span></td>
                            <td>
                                <button class="btn btn-circle btn-text btn-sm text-2xl" aria-label="Action button">
                                <span class="icon-[fluent--print-32-regular]"></span>
                                </button>
                            </td>
                            </tr>
                            <tr>
                            <td>HP Spectre x360</td>
                            <td>$1,199</td>
                            <td><span class="badge badge-soft badge-error badge-sm">Out of Stock</span></td>
                            <td>
                                <button class="btn btn-circle btn-text btn-sm text-2xl" aria-label="Action button">
                                <span class="icon-[fluent--print-32-regular]"></span>
                                </button>
                            </td>
                            </tr>
                            <tr>
                            <td>Apple Watch Series 9</td>
                            <td>$499</td>
                            <td><span class="badge badge-soft badge-warning badge-sm">Limited</span></td>
                            <td>
                                <button class="btn btn-circle btn-text btn-sm text-2xl" aria-label="Action button">
                                <span class="icon-[fluent--print-32-regular]"></span>
                                </button>
                            </td>
                            </tr>
                            <tr>
                            <td>Google Pixel 7</td>
                            <td>$599</td>
                            <td><span class="badge badge-soft badge-success badge-sm">In Stock</span></td>
                            <td>
                                <button class="btn btn-circle btn-text btn-sm text-2xl" aria-label="Action button">
                                <span class="icon-[fluent--print-32-regular]"></span>
                                </button>
                            </td>
                            </tr>
                            <tr>
                            <td>Bose QuietComfort Earbuds II</td>
                            <td>$279</td>
                            <td><span class="badge badge-soft badge-error badge-sm">Out of Stock</span></td>
                            <td>
                                <button class="btn btn-circle btn-text btn-sm text-2xl" aria-label="Action button">
                                <span class="icon-[fluent--print-32-regular]"></span>
                                </button>
                            </td>
                            </tr>
                            <tr>
                            <td>Asus ROG Zephyrus G14</td>
                            <td>$1,899</td>
                            <td><span class="badge badge-soft badge-success badge-sm">In Stock</span></td>
                            <td>
                                <button class="btn btn-circle btn-text btn-sm text-2xl" aria-label="Action button">
                                <span class="icon-[fluent--print-32-regular]"></span>
                                </button>
                            </td>
                            </tr>
                            <tr>
                            <td>Sony PlayStation 5</td>
                            <td>$499</td>
                            <td><span class="badge badge-soft badge-warning badge-sm">Limited</span></td>
                            <td>
                                <button class="btn btn-circle btn-text btn-sm text-2xl" aria-label="Action button">
                                <span class="icon-[fluent--print-32-regular]"></span>
                                </button>
                            </td>
                            </tr>
                            <tr>
                            <td>Amazon Echo Dot (5th Gen)</td>
                            <td>$49</td>
                            <td><span class="badge badge-soft badge-success badge-sm">In Stock</span></td>
                            <td>
                                <button class="btn btn-circle btn-text btn-sm text-2xl" aria-label="Action button">
                                <span class="icon-[fluent--print-32-regular]"></span>
                                </button>
                            </td>
                            </tr>
                            <tr>
                            <td>NVIDIA GeForce RTX 4090</td>
                            <td>$1,599</td>
                            <td><span class="badge badge-soft badge-warning badge-sm">Limited</span></td>
                            <td>
                                <button class="btn btn-circle btn-text btn-sm text-2xl" aria-label="Action button">
                                <span class="icon-[fluent--print-32-regular]"></span>
                                </button>
                            </td>
                            </tr>
                            <tr>
                            <td>Lenovo ThinkPad X1 Carbon</td>
                            <td>$1,799</td>
                            <td><span class="badge badge-soft badge-success badge-sm">In Stock</span></td>
                            <td>
                                <button class="btn btn-circle btn-text btn-sm text-2xl" aria-label="Action button">
                                <span class="icon-[fluent--print-32-regular]"></span>
                                </button>
                            </td>
                            </tr>
                            <tr>
                            <td>Google Nest Hub (2nd Gen)</td>
                            <td>$99</td>
                            <td><span class="badge badge-soft badge-success badge-sm">In Stock</span></td>
                            <td>
                                <button class="btn btn-circle btn-text btn-sm text-2xl" aria-label="Action button">
                                <span class="icon-[fluent--print-32-regular]"></span>
                                </button>
                            </td>
                            </tr>
                            <tr>
                            <td>Fitbit Charge 6</td>
                            <td>$149</td>
                            <td><span class="badge badge-soft badge-warning badge-sm">Limited</span></td>
                            <td>
                                <button class="btn btn-circle btn-text btn-sm text-2xl" aria-label="Action button">
                                <span class="icon-[fluent--print-32-regular]"></span>
                                </button>
                            </td>
                            </tr>
                            <tr>
                            <td>Razer Blade 16</td>
                            <td>$2,499</td>
                            <td><span class="badge badge-soft badge-error badge-sm">Out of Stock</span></td>
                            <td>
                                <button class="btn btn-circle btn-text btn-sm text-2xl" aria-label="Action button">
                                <span class="icon-[fluent--print-32-regular]"></span>
                                </button>
                            </td>
                            </tr>
                            <tr>
                            <td>Oculus Quest 3</td>
                            <td>$499</td>
                            <td><span class="badge badge-soft badge-success badge-sm">In Stock</span></td>
                            <td>
                               <button class="btn btn-circle btn-text btn-sm text-2xl" aria-label="Action button">
                                <span class="icon-[fluent--print-32-regular]"></span>
                                </button>
                            </td>
                            </tr>
                            <tr>
                            <td>Canon EOS R8</td>
                            <td>$1,699</td>
                            <td><span class="badge badge-soft badge-warning badge-sm">Limited</span></td>
                            <td>
                                <button class="btn btn-circle btn-text btn-sm text-2xl" aria-label="Action button">
                                <span class="icon-[fluent--print-32-regular]"></span>
                                </button>
                            </td>
                            </tr>
                            <tr>
                            <td>DJI Mavic 3 Pro</td>
                            <td>$2,199</td>
                            <td><span class="badge badge-soft badge-success badge-sm">In Stock</span></td>
                            <td>
                                <button class="btn btn-circle btn-text btn-sm text-2xl" aria-label="Action button">
                                <span class="icon-[fluent--print-32-regular]"></span>
                                </button>
                            </td>
                            </tr>
                            <tr>
                            <td>Alienware Aurora R15</td>
                            <td>$2,899</td>
                            <td><span class="badge badge-soft badge-error badge-sm">Out of Stock</span></td>
                            <td>
                                <button class="btn btn-circle btn-text btn-sm text-2xl" aria-label="Action button">
                                <span class="icon-[fluent--print-32-regular]"></span>
                                </button>
                            </td>
                            </tr>
                            <tr>
                            <td>SteelSeries Arctis Nova Pro</td>
                            <td>$349</td>
                            <td><span class="badge badge-soft badge-warning badge-sm">Limited</span></td>
                            <td>
                                <button class="btn btn-circle btn-text btn-sm text-2xl" aria-label="Action button">
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
            </article>
        </div>
    </section>
</div>
 <!--data table container -->


<?php include "Views/Templates/footer.php"?>