<nav class="flex bg-black dark:bg-gray-700 pt-5 pb-5  text-white">
        <div class="flex w-full  items-center justify-center">
            <ul class="flex flex-row items-center justify-center text-1xl font-medium w-full gap-3">
                <a href="/Cinema" class="flex-1 text-white  " aria-current="page">
                    <div class="<?= urlIs('/Cinema')? " bg-gray-900 border-b-2 border-red-900" : ""; ?>  hover:bg-gray-900 hover:border-b-2 hover:border-red-900 p-3  <?= urlIs('/filter') ? 'bg-red-900' : '' ?>">
                        <li class = "flex items-center justify-center">
                            Cinema
                        </li>
                    </div>
                </a>
                <a href="/Comedy" class="flex-1 text-white  " aria-current="page">
                    <div class="<?= urlIs('/Comedy')? "bg-gray-900  border-b-2  border-red-900" : ""; ?> hover:bg-gray-900 hover:border-b-2 hover:border-red-900 p-3   ">
                        <li class = "flex items-center justify-center">
                            Comedy
                        </li>
                    </div>
                </a>
                <a href="/Musical" class="flex-1 text-white  " aria-current="page">
                    <div class="<?= urlIs('/Musical')? "bg-gray-900  border-b-2  border-red-900" : ""; ?> hover:bg-gray-900 hover:border-b-2 hover:border-red-900 p-3">
                        <li class = "flex items-center justify-center">
                            Musical
                        </li>
                    </div>
                </a>
                <a href="/Classical" class="flex-1 text-white " aria-current="page">
                    <div class="<?= urlIs('/Classical')? "bg-gray-900  border-b-2  border-red-900" : ""; ?> hover:bg-gray-900 hover:border-b-2 hover:border-red-900 p-3 ">
                        <li class = "flex items-center justify-center">
                            Classical
                        </li>
                    </div>
                </a>
                <a href="/Drama" class="flex-1 text-white" aria-current="page">
                    <div class="<?= urlIs('/Drama')? "bg-gray-900  border-b-2  border-red-900" : ""; ?> hover:bg-gray-900 hover:border-b-2 hover:border-red-900 p-3 ">
                        <li class = "flex items-center justify-center">
                            Drama
                        </li>
                    </div>
                </a>
                <a href="/Concert" class="flex-1 text-white  " aria-current="page">
                    <div class="<?= urlIs('/Concert')? "bg-gray-900  border-b-2  border-red-900" : ""; ?> hover:bg-gray-900 hover:border-b-2 hover:border-red-900 p-3 ">
                        <li class = "flex items-center justify-center">
                            Concert
                        </li>
                    </div>
                </a>

            </ul>
        </div>
</nav>