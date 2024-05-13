<?php include './header.php'; ?>

<section class="bg-gray-100 p-10 mt-6 mb-6 rounded-lg ">

    <ol class="flex items-center whitespace-nowrap mb-3">
        <li class="inline-flex items-center">
            <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600"
               href="#">
                <svg class="flex-shrink-0 me-3 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                     viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round">
                    <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                Home
            </a>
            <svg class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                 width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                 stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6"></path>
            </svg>
        </li>
        <li class="inline-flex items-center text-sm font-semibold text-blue-500 truncate" aria-current="page">
            Exchange Rate Calculator
        </li>
    </ol>
    <hr class="border-blue-300 mb-5">

    <form action="./exchangeCalculation.php" method="post">

        <div class=" mb-5">
            <label for="amount" class="block text-[20px] font-medium mb-2 text-blue-600">Amount</label>
            <input type="number" name="amount" id="amount"
                   class="py-3 px-4 block w-full border-gray-200 rounded-lg text-[15px] focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                   placeholder="Enter amount to exchange">
        </div>

        <div class="flex  gap-7">
            <select name="MMK"
                    class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg c focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                <option name="MMK" value="From">From MMK</option>
                <option name="MMK" value="To">To MMK</option>
            </select>

            <?php
            $content = file_get_contents("http://forex.cbm.gov.mm/api/latest");
            $rate = json_decode($content);
            //$currency = (array_keys($rate["rates"]));
            ?>
            <select name="currency"
                    class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-[15px] focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                <?php foreach ($rate->rates as $key => $rate) : ?>
                    <option name="currency" value="<?= $key ?>"><?= $key ?></option>
                <?php endforeach; ?>
            </select>
        </div>


        <button type="submit"
                class="w-full mt-7 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
            Exchange
        </button>
    </form>


    <a class="inline-flex m-[20px]  float-right items-center gap-x-1 text-2l text-blue-600 decoration-2 hover:underline font-medium dark:text-blue-500"
       href="./exchangeRecord.php">
        Show Records
        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m9 18 6-6-6-6"/>
        </svg>
    </a>
    <br>
</section>

<?php include './footer.php' ?>
