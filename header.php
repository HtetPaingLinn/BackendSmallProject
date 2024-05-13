<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./app.css">
    <style>
        .container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            max-width: 80%;
            margin: 0 auto;
        }
    </style>
</head>
<body>


<div class="container">
    <div class="w-[20%]">
        <!-- Navigation Toggle -->
        <button type="button" class="mt-[50px]  text-gray-500 hover:text-gray-600" data-hs-overlay="#docs-sidebar" aria-controls="docs-sidebar" aria-label="Toggle navigation">
            <span class="sr-only">Toggle Navigation</span>
            <svg class="flex-shrink-0 size-6" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
        </button>
        <!-- End Navigation Toggle -->
        <!-- Sidebar -->
        <?php include("./sideBar.php") ?>
        <!-- End Sidebar -->
    </div>

    <div class="w-[200%] ">
        <main class=" max-w-[1000] mx-auto pt-[50px] pl-[80px]">
            <header class= "flex gap-6 items-center">

                <h1 class="text-4xl font-serif font-bold">Backend Projects</h1>

            </header>