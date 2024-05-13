<?php

if (!isset($_POST['submit']) && empty($_POST['amount'])) {
    header("Location: exchangeRate.php");
}
$content = file_get_contents("http://forex.cbm.gov.mm/api/latest");
$content2 = file_get_contents("http://forex.cbm.gov.mm/api/currencies");
$rate = json_decode($content, true);
$longterm = json_decode($content2, true);
$long = $longterm["currencies"][$_POST["currency"]];
$currency = $rate["rates"];
if ($_POST["MMK"] == "From") {
    $result = round($_POST["amount"] / (float)str_replace(',', '', $rate["rates"][$_POST["currency"]]), 2);
}
if ($_POST["MMK"] == "To") {
    $result = round($_POST["amount"] * (float)str_replace(',', '', $rate["rates"][$_POST["currency"]]), 2);
}
$fileName = "saveCurrencyRecord.txt";

if (!file_exists($fileName)) {
    touch($fileName);
}
$fileStream = fopen($fileName, "a");
if ($_POST["MMK"] == "From") {
    fwrite($fileStream, "\nMMK {$_POST["amount"]} => {$long}  {$result}");
}
if ($_POST["MMK"] == "To") {
    fwrite($fileStream, "\n{$long} {$_POST["amount"]}  => MMK {$result}");
}
fclose($fileStream);
?>

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
        <li class="inline-flex items-center">
            <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600"
               href="./exchangeRate.php">
                <svg class="flex-shrink-0 me-3 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                     viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round">
                    <rect width="7" height="7" x="14" y="3" rx="1"></rect>
                    <path d="M10 21V8a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1H3"></path>
                </svg>
                Exchange Rate Calculator
                <svg class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                     width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                     stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </a>
        </li>
        <li class="inline-flex items-center text-sm font-semibold text-blue-500 truncate" aria-current="page">
            Calculate Result
        </li>
    </ol>
    <hr class="border-blue-300 mb-5">

    <p class="text-5xl text-center mt-[30px]">
        <?php if ($_POST["MMK"] == "From"): ?>
            MMK <?= $_POST["amount"] ?> => <?= $long ?> <?= $result ?>
        <?php endif; ?>

        <?php if ($_POST["MMK"] == "To"): ?>
            <?= $long ?> <?= $_POST["amount"] ?> => MMK <?= $result ?>
        <?php endif; ?>
    </p>
    <a class="inline-flex items-center gap-x-1 text-2l text-blue-600 decoration-2 hover:underline font-medium dark:text-blue-500 mt-[50px]"
       href="./exchangeRate.php">
        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m15 18-6-6 6-6"/>
        </svg>
        Calculate Again
    </a>

    <a class="inline-flex m-[20px] float-right items-center gap-x-1 text-2l text-blue-600 decoration-2 hover:underline font-medium dark:text-blue-500 mt-[50px]"
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

