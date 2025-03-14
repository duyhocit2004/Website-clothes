@extends('admin.index')
@section('main')
    <div class="my-2 main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] group-data-[theme-width=box]:xl:px-0 px-3 xl:px-4 ac-transition">
        <div class="grid grid-cols-12 gap-x-4">
            <!-- Start Dashboard Overview -->
            <div class="col-span-full card p-3 sm:p-6">
                <div class="flex-center-between flex-col sm:flex-row !items-start sm:items-center gap-3">
                    <div>
                        <h6 class="card-title text-2xl">Logistic Management</h6>
                        <p class="card-description">Welcome to Dashboard</p>
                    </div>
                    <div class="flex items-center flex-wrap sm:flex-nowrap gap-4">
                        <input type="date" class="form-input">
                        <div>
                            <a href="create-course.html" class="btn b-solid btn-primary-solid dk-theme-card-square">
                                <i class="ri-add-circle-line text-inherit"></i>
                                Add Shipments
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Dashboard Overview -->

            <div class="col-span-full grid grid-cols-12 gap-x-4">
                <div class="col-span-full 2xl:col-span-7">
                    <div class="grid grid-cols-12 gap-x-4">
                        <!-- Total Revenue -->
                        <div class="card col-span-full md:col-span-4 p-5 rounded-20 flex flex-col gap-8 bg-card-pattern dark:bg-card-pattern-dark bg-no-repeat bg-100%">
                            <div class="flex items-center gap-4">
                                <div class="size-11 rounded-full text-primary-500 dark:text-white bg-primary-200 dark:bg-dark-icon flex-center shrink-0 dk-theme-card-square">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="13" viewBox="0 0 21 13" fill="none">
                                        <path fill="#795DED" d="M14.95 0c-.81 0-1.47.72-1.47 1.61s.66 1.61 1.47 1.61h.8L12.03 7.22 8.68 3.61a1.47 1.47 0 0 0-2.05 0L.44 10.25a1.46 1.46 0 1 0 2.05 2.27l5.16-5.54 3.36 3.61a1.47 1.47 0 0 0 2.08 0l4.81-5.18v.89c0 .89.66 1.61 1.47 1.61s1.47-.72 1.47-1.61V1.61C20.8.72 20.14 0 19.33 0h-4.38Z"/>
                                    </svg>
                                </div>
                                <h6 class="leading-none text-gray-500 dark:text-dark-text font-semibold line-clamp-1" title="Total Revenue">Total Revenue</h6>
                            </div>
                            <div class="mt-auto flex-center-between gap-4">
                                <div>
                                    <div class="card-title font-bold text-[32px]">
                                        $<span class="counter-value" data-value="280">0</span>k
                                    </div>
                                    <div class="font-spline_sans text-sm leading-none text-gray-500 dark:text-dark-text mt-2">
                                        <span class="font-medium text-success">+5.2</span>
                                        <span class="text-gray-700 dark:text-dark-text-two line-clamp-1" title="Than last month">than last month</span>
                                    </div>
                                </div>
                                <div class="max-w-[100px]">
                                    <div id="total-logistic-delivery-revenue-chart"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Total Cost -->
                        <div class="card col-span-full md:col-span-4 p-5 rounded-20 flex flex-col gap-8 bg-card-pattern dark:bg-card-pattern-dark bg-no-repeat bg-100%">
                            <div class="flex items-center gap-4">
                                <div class="size-11 rounded-full text-primary-500 dark:text-white bg-primary-200 dark:bg-dark-icon flex-center shrink-0 dk-theme-card-square">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path fill="#795DED" d="M12.37 0c-.5-.07-.97-.13-1.54.12-.25.11-.48.29-.65.47-.17.18-.34.41-.44.65-.25.58-.16 1.15-.06 1.75l.51 3.06c.06.36.11.67.19.94.07.27.17.53.35.76.27.37.66.64 1.1.77.3.09.59.1.88.08.27-.02.59-.06.97-.11l3.12-.5c.61-.1 1.19-.19 1.66-.6.21-.18.38-.43.49-.66.11-.22.21-.49.23-.76.07-.62-.11-1.05-.33-1.48-.12-.24-.25-.48-.4-.71-.58-1.02-1.34-1.83-2.23-2.48-.9-.64-1.91-1.1-2.99-1.35-.27-.06-.54-.11-.81-.15ZM7 2.26c-.61-.07-1.06.13-1.52.34-.9.4-1.73.96-2.47 1.63C1.6 5.48.66 7.07.25 8.83c-.42 1.76-.3 3.6.34 5.28.64 1.68 1.78 3.12 3.32 4.17 1.55 1.06 3.32 1.66 5.15 1.72 1.82.06 3.63-.47 5.18-1.42 1.55-.95 2.8-2.33 3.56-3.97.42-.9.7-1.85.8-2.78.05-.5.11-1.04-.17-1.56-.12-.24-.31-.46-.49-.63-.18-.17-.41-.33-.68-.42-.57-.23-1.15-.14-1.75-.04l-4.09.63c-.4.06-.66.1-.86.12-.19.01-.26-.01-.3-.03-.13-.04-.23-.12-.3-.23-.01-.02-.04-.06-.07-.23-.05-.19-.1-.44-.17-.84L9 4.75c-.1-.6-.2-1.18-.61-1.65-.18-.2-.42-.36-.66-.48-.24-.11-.51-.21-.81-.23Z"/>
                                    </svg>
                                </div>
                                <h6 class="leading-none text-gray-500 dark:text-dark-text font-semibold line-clamp-1" title="Total Cost">Total Cost</h6>
                            </div>
                            <div class="mt-auto flex-center-between gap-4">
                                <div>
                                    <div class="card-title font-bold text-[32px]">
                                        $<span class="counter-value" data-value="1642">0</span>
                                    </div>
                                    <div class="font-spline_sans text-sm leading-none text-gray-500 dark:text-dark-text mt-2">
                                        <span class="font-medium text-danger">-3.2</span>
                                        <span class="text-gray-700 dark:text-dark-text-two line-clamp-1" title="Than last month">than last month</span>
                                    </div>
                                </div>
                                <div class="max-w-[100px]">
                                    <div id="total-logistic-delivery-cost-chart"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Total Shipments -->
                        <div class="card col-span-full md:col-span-4 p-5 rounded-20 flex flex-col gap-8 bg-card-pattern dark:bg-card-pattern-dark bg-no-repeat bg-100%">
                            <div class="flex items-center gap-4">
                                <div class="size-11 rounded-full text-primary-500 dark:text-white bg-primary-200 dark:bg-dark-icon flex-center shrink-0 dk-theme-card-square">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="15" viewBox="0 0 25 15" fill="none">
                                        <path fill="#795DED" d="M6.15 0C5.01 0 4.09.92 4.09 2.05c0 .38.31.68.68.68h2.07c.76 0 1.33.63 1.33 1.36 0 .73-.57 1.36-1.33 1.36H4.77c-.38 0-.68.3-.68.68s.3.68.68.68h2.73c.75 0 1.36.62 1.36 1.36 0 .75-.61 1.36-1.36 1.36H4.77c-.38 0-.68.3-.68.68v1.14c0 .94.63 1.71 1.47 1.97.25.95 1.13 1.64 2.16 1.64.98 0 1.82-.63 2.12-1.5h8.46c.3.87 1.14 1.5 2.12 1.5.98 0 1.82-.63 2.11-1.5h.14c.19 0 .38-.01.54-.05.27-.14.49-.37.63-.66.1-.19.14-.42.15-.57v-1.05c0-.92.01-1.66-.05-2.26-.05-.61-.15-1.13-.4-1.6-.4-.77-1.03-1.39-1.8-1.78-.48-.24-1-.34-1.62-.39-.6-.05-1.35-.05-2.29-.05h-.73c-.01-.4-.02-.75-.04-1.05-.05-.55-.13-1.03-.37-1.46-.36-.7-.93-1.25-1.71-1.6-.44-.22-.92-.33-1.48-.38C12.88 0 12.05 0 6.15 0ZM7.71 11.99c-.47 0-.84.37-.85.82 0 .44.37.82.85.82s.85-.37.85-.82c0-.45-.37-.82-.85-.82Zm12.69 0c-.47 0-.85.37-.85.82 0 .44.38.82.85.82.47 0 .85-.37.85-.82 0-.45-.38-.82-.85-.82Z"/>
                                        <path fill="#795DED" d="M2.05 4.09c0-.38.31-.68.68-.68h4.29c.38 0 .68.31.68.68 0 .38-.31.68-.68.68H2.73c-.38 0-.68-.31-.68-.68Zm-2.05 4.09c0-.38.31-.68.68-.68h6.87c.38 0 .68.31.68.68 0 .38-.31.68-.68.68H.68c-.38 0-.68-.31-.68-.68Z"/>
                                    </svg>
                                </div>
                                <h6 class="leading-none text-gray-500 dark:text-dark-text font-semibold line-clamp-1" title="Total Shipments">Total Shipments</h6>
                            </div>
                            <div class="mt-auto flex-center-between gap-4">
                                <div>
                                    <div class="card-title font-bold text-[32px]">
                                        $<span class="counter-value" data-value="32">0</span>k
                                    </div>
                                    <div class="font-spline_sans text-sm leading-none text-gray-500 dark:text-dark-text mt-2">
                                        <span class="font-medium text-success">+5.2</span>
                                        <span class="text-gray-700 dark:text-dark-text-two line-clamp-1" title="Than last month">than last month</span>
                                    </div>
                                </div>
                                <div class="max-w-[100px]">
                                    <div id="total-logistic-delivery-shipment-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Total Shipments Chart -->
                    <div class="card">
                        <div class="flex-center-between">
                            <h6 class="card-title">Total Shipments</h6>
                            <select class="form-input form-select">
                                <option>This Month</option>
                                <option>This Year</option>
                                <option>This Week</option>
                            </select>
                        </div>
                        <div id="total-logistic-shipment-chart"></div>
                    </div>
                    <!-- End Total Shipments Chart -->
                </div>
                <!-- Start Delivery Overview Chart -->
                <div class="card col-span-full 2xl:col-span-5">
                    <div class="flex-center-between">
                        <h6 class="card-title">Delivery Overview</h6>
                        <select class="form-input form-select">
                            <option>This Month</option>
                            <option>This Year</option>
                            <option>This Week</option>
                        </select>
                    </div>
                    <div class="mt-5">
                        <div id="logistic-delivery-overview-chart" class="flex-center grow"></div>
                        <div class="bg-white dark:bg-dark-card-two p-6 shadow-md mt-5 rounded-lg space-y-10 dk-theme-card-square">
                            <div class="flex-center-between">
                                <div class="flex items-center gap-3">
                                    <div class="size-9 rounded-lg overflow-hidden shrink-0 dk-theme-card-square bg-primary"></div>
                                    <div>
                                        <h6 class="leading-none text-heading font-semibold mb-2 line-clamp-1">Order Done</h6>
                                        <p class="leading-none text-xs text-primary font-semibold">+3.2%</p>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <div class="leading-none text-heading dark:text-dark-text text-end">72%</div>
                                    <div class="relative w-[130px] h-2 rounded-full bg-primary-200 dark:bg-dark-icon overflow-hidden">
                                        <div class="absolute top-0 left-0 bottom-0 bg-primary-500 rounded-full w-[72%]"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-center-between">
                                <div class="flex items-center gap-3">
                                    <div class="size-9 rounded-lg overflow-hidden shrink-0 dk-theme-card-square bg-secondary"></div>
                                    <div>
                                        <h6 class="leading-none text-heading font-semibold mb-2 line-clamp-1">Revenue</h6>
                                        <p class="leading-none text-xs text-secondary font-semibold">+4.6%</p>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <div class="leading-none text-heading dark:text-dark-text text-end">40%</div>
                                    <div class="relative w-[130px] h-2 rounded-full bg-primary-200 dark:bg-dark-icon overflow-hidden">
                                        <div class="absolute top-0 left-0 bottom-0 bg-primary-500 rounded-full w-[40%]"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-center-between">
                                <div class="flex items-center gap-3">
                                    <div class="size-9 rounded-lg overflow-hidden shrink-0 dk-theme-card-square bg-danger"></div>
                                    <div>
                                        <h6 class="leading-none text-heading font-semibold mb-2 line-clamp-1">Total Cost</h6>
                                        <p class="leading-none text-xs text-danger font-semibold">-2.9%</p>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <div class="leading-none text-heading dark:text-dark-text text-end">49%</div>
                                    <div class="relative w-[130px] h-2 rounded-full bg-primary-200 dark:bg-dark-icon overflow-hidden">
                                        <div class="absolute top-0 left-0 bottom-0 bg-primary-500 rounded-full w-[49%]"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Delivery Overview Chart -->
            </div>

            <!-- Start Logistic Product Track -->
            <div class="col-span-full md:col-span-6 2xl:col-span-4 card">
                <div id="google-map" class="rounded-xl overflow-hidden h-[220px] relative">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d1389118.7430075675!2d18.1862124!3d47.1554543!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1727688940216!5m2!1sen!2sbd"
                        class="size-full border-none brightness-75 blur-[0.5px] dark:brightness-100 dark:blur-none dark:grayscale dark:invert dark:contrast-[100%]"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                    <!-- Search Product By ID -->
                    <form action="#" class="absolute top-0 left-0 right-0 p-2">
                        <div class="relative">
                            <div class="flex items-center">
                                <div class="bg-white dark:bg-dark-card text-heading dark:text-dark-text font-bold p-3 h-full rounded-l-lg shrink-0 dk-theme-card-square-left">Order ID :</div>
                                <input type="text" value="154254A5DQ" class="form-input relative !rounded-l-none rounded-r-lg pl-0 h-12 border-none bg-white dark:bg-dark-card font-semibold text-heading dark:text-dark-text">
                            </div>
                            <button type="submit" class="btn b-solid btn-primary-solid size-9 absolute top-1/2 right-2 -translate-y-1/2 dk-theme-card-square">
                                <i class="ri-search-line text-inherit"></i>
                            </button>
                        </div>
                        <!-- Product Owoner List -->
                        <ul class="bg-transparent mt-2 flex flex-col gap-2 w-max">
                            <li class="flex items-center gap-2 bg-white dark:bg-dark-card-shade p-2 rounded-lg w-max min-w-44 dk-theme-card-square">
                                <img src="assets/images/user/user-2.png" alt="owoner" class="size-10 rounded-md dk-theme-card-square">
                                <div>
                                    <h6 class="leading-none text-heading font-semibold line-clamp-1">Wilkin Jana</h6>
                                    <p class="leading-none text-xs text-gray-500 dark:text-dark-text-two mt-1">Delivery agent </p>
                                </div>
                            </li>
                        </ul>
                    </form>
                </div>
                <div class="mt-5">
                    <h6 class="card-title font-bold">Product on the way</h6>
                    <div class="pt-5 flex items-center">
                        <div class="grow pt-10 px-4 first:text-left text-center last:text-end first:pl-0 last:pr-0 relative before:absolute before:top-0 first:before:left-0 first:before:translate-x-0 before:left-1/2 before:-translate-x-1/2 last:before:left-auto last:before:right-0 last:before:translate-x-0 before:size-3.5 before:rounded-50 before:bg-success before:z-10 before:border before:border-input-border after:absolute after:left-0 after:top-1.5 after:h-[0.5px] after:w-full after:border after:border-dashed after:border-input-border dark:after:border-dark-border">
                            <h6 class="card-title text-[16px]">Checking</h6>
                            <p class="text-xs text-gray-500 dark:text-dark-text-two mt-1.5">05 May 25</p>
                        </div>
                        <div class="grow pt-10 px-4 first:text-left text-center last:text-end first:pl-0 last:pr-0 relative before:absolute before:top-0 first:before:left-0 first:before:translate-x-0 before:left-1/2 before:-translate-x-1/2 last:before:left-auto last:before:right-0 last:before:translate-x-0 before:size-3.5 before:rounded-50 before:bg-success before:z-10 before:border before:border-input-border after:absolute after:left-0 after:top-1.5 after:h-[0.5px] after:w-full after:border after:border-dashed after:border-input-border dark:after:border-dark-border">
                            <h6 class="card-title text-[16px]">In transit</h6>
                            <p class="text-xs text-gray-500 dark:text-dark-text-two mt-1.5">05 May 25</p>
                        </div>
                        <div class="grow pt-10 px-4 first:text-left text-center last:text-end first:pl-0 last:pr-0 relative before:absolute before:top-0 first:before:left-0 first:before:translate-x-0 before:left-1/2 before:-translate-x-1/2 last:before:left-auto last:before:right-0 last:before:translate-x-0 before:size-3.5 before:rounded-50 before:bg-white dark:before:bg-dark-card-shade before:z-10 before:border before:border-input-border after:absolute after:left-0 after:top-1.5 after:h-[0.5px] after:w-full after:border after:border-dashed after:border-input-border dark:after:border-dark-border">
                            <h6 class="card-title text-[16px]">Deliver</h6>
                            <p class="text-xs text-gray-500 dark:text-dark-text-two mt-1.5">05 May 25</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Logistic Product Track -->

            <!-- Start Delivery Status -->
            <div class="col-span-full md:col-span-6 2xl:col-span-4 card">
                <div class="flex-center-between">
                    <h6 class="card-title">Delivery Status</h6>
                    <select class="form-input form-select">
                        <option>This Month</option>
                        <option>This Year</option>
                        <option>This Week</option>
                    </select>
                </div>
                <!-- Delivery Status Tab -->
                <div class="dashkit-tab mt-5" id="deliveryStatusTab">
                    <div class="flex items-center bg-white dark:bg-dark-card-two shadow-md rounded-md divide-x divide-input-border dark:divide-dark-border-two dk-theme-card-square">
                        <button class="dashkit-tab-btn grow shrink-0 leading-none p-4 text-gray-500 dark:text-dark-text-two font-semibold hover:text-primary [&.active]:text-primary active" id="truck">Truck</button>
                        <button class="dashkit-tab-btn grow shrink-0 leading-none p-4 text-gray-500 dark:text-dark-text-two font-semibold hover:text-primary [&.active]:text-primary" id="ship">Ships</button>
                        <button class="dashkit-tab-btn grow shrink-0 leading-none p-4 text-gray-500 dark:text-dark-text-two font-semibold hover:text-primary [&.active]:text-primary" id="fly" >Fly</button>
                        <button class="dashkit-tab-btn grow shrink-0 leading-none p-4 text-gray-500 dark:text-dark-text-two font-semibold hover:text-primary [&.active]:text-primary" id="train" >Train</button>
                    </div>
                </div>
                <div class="dashkit-tab-content mt-5 *:hidden" id="deliveryStatusTabContent">
                    <!-- Delivery By Truck Chart -->
                    <div class="dashkit-tab-pane !block" data-tab="truck">
                        <div id="logistic-delivery-by-truck-chart"></div>
                    </div>
                    <!-- Delivery By Ship Chart -->
                    <div class="dashkit-tab-pane" data-tab="ship">
                        <div id="logistic-delivery-by-ship-chart"></div>
                    </div>
                    <!-- Delivery By Fly Chart -->
                    <div class="dashkit-tab-pane" data-tab="fly" >
                        <div id="logistic-delivery-by-fly-chart"></div>
                    </div>
                    <!-- Delivery By Train Chart -->
                    <div class="dashkit-tab-pane" data-tab="train" >
                        <div id="logistic-delivery-by-train-chart"></div>
                    </div>
                </div>
            </div>
            <!-- End Delivery Status -->

            <!-- Start Delivery By Country Chart -->
            <div class="col-span-full 2xl:col-span-4 card relative">
                <div class="flex-center-between">
                    <h6 class="card-title text-lg leading-none">Delivery by country</h6>
                    <div class="leading-none shrink-0 text-xs text-gray-900 dark:text-dark-text dk-border-one rounded-full dk-theme-card-square px-2 py-1">30 Days</div>
                </div>
                <div id="logistic-delivery-by-country-chart" class="w-full h-[350px] mt-4">
                    <div class="absolute left-0 bottom-4 right-0 bg-white dark:bg-dark-card-two px-3 py-2.5 shadow-lg rounded-md dk-theme-card-square">
                        <div class="flex-center-between">
                            <div class="flex items-center gap-8 grow">
                                <select class="flag-select">
                                    <option value='option-1' data-src="assets/images/flag/us.svg">North America</option>
                                    <option value='option-2' data-src="assets/images/flag/ar.svg">Arabia</option>
                                    <option value='option-3' data-src="assets/images/flag/de.svg">Swizerland</option>
                                    <option value='option-3' data-src="assets/images/flag/es.svg">Espain</option>
                                </select>
                                <div class="country-name-by-flag-select shrink-0 leading-none text-heading dark:text-dark-text font-medium"></div>
                            </div>
                            <div class="shrink-0 text-lg leading-none text-heading dark:text-dark-text font-semibold px-5 py-3 rounded-md bg-primary-200 dark:bg-dark-icon dk-theme-card-square">68%</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Delivery By Country Chart -->


        </div>
    </div>
@endsection
@section('js')
    <script src="{{asset('admin/assets/js/vendor/jsvectormap/jsvectormap.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/vendor/jsvectormap/world-merc.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/vendor/select/select2.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/vendor/apexcharts.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/component/tab.js')}}"></script>
{{--    <script src="{{asset('admin/assets/js/pages/dashboard-logistic.js')}}"></script>--}}
@endsection
