<header>
    <!--Nav-->
    <nav aria-label="menu nav" class="bg-gray-800 md:pt-1 pb-1 px-2 mt-0 h-auto fixed w-full z-20 top-0">

        <div class="ml-2 flex flex-wrap items-center justify-between">
            <div class="flex flex-shrink md:w-1/3 justify-center md:justify-start text-white">
                <a href="/seller" aria-label="Home">
                    <img class="h-9 w-auto" src="../../assets/logo.png" alt="Cambo Show">
                </a>
            </div>

            <div class="flex w-full p-2 content-center justify-between md:w-1/3 md:justify-end">
                <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                    
                    <li class="flex-1 md:flex-none">
                        <a href="/" class="flex justify-center items-center gap-2 rounded-md text-sm font-medium" href=''>
                            <i class="text-2xl text-white fa-solid fa-right-from-bracket"></i>
                            <span class="text-white text-transform: uppercase font-medium"><?= isset($_SESSION['first-name']) ? $_SESSION['first-name'] : ""?></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>