<?php include './header.php'; ?>

                <section class="bg-gray-100 p-10 mt-6 mb-6 rounded-lg ">

                    <ol class="flex items-center whitespace-nowrap mb-3">
                        <li class="inline-flex items-center">
                            <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600" href="#">
                                <svg class="flex-shrink-0 me-3 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                Home
                            </a>
                            <svg class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m9 18 6-6-6-6"></path>
                            </svg>
                        </li>
                        <li class="inline-flex items-center text-sm font-semibold text-blue-500 truncate" aria-current="page">
                            Area Calculator
                        </li>
                    </ol>
                    <hr class="border-blue-300 mb-5">

                    <form action="./area.php" method="post">

                        <div class=" mb-5">
                            <label for="calWidth" class="block text-[20px] font-medium mb-2 text-blue-600">Width</label>
                            <input type="number" name="calWidth" id="calWidth" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Enter width">
                        </div>

                        <div class="mb-5">
                            <label for="calHeight" class="block text-[20px] font-medium mb-2 text-blue-600">Height</label>
                            <input type="number" name="calHeight" id="calHeight" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Enter height">
                        </div>
                        <button name="calcArea" type="submit" class="w-full justify-center py-3 px-4 inline-flex items-center gap-x-2 text-[14px] font-medium rounded-lg border border-gray-200 bg-white text-blue-600 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-blue-500 dark:hover:bg-neutral-800">
                            Calculate
                        </button>
                    </form>


                    <a class="inline-flex m-[20px]  float-right items-center gap-x-1 text-2l text-blue-600 decoration-2 hover:underline font-medium dark:text-blue-500" href="./record-list.php">
                        Show Records
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                    </a>
                    <br>
                </section>


<?php include('./footer.php'); ?>

