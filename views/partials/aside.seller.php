<div class="flex flex-col md:flex-row">
    <nav aria-label="alternative nav">
        <div class="bg-gray-800 shadow-xl h-20 fixed bottom-0 md:relative md:h-screen z-10 w-full md:w-48 content-center">

            <div class="md:mt-12 md:w-48 md:fixed md:left-2 md:top-0 content-center md:content-start text-left justify-between">
                <ul class="list-reset flex flex-row md:flex-col pt-3 md:py-3 px-1 md:px-2 text-center md:text-left">
                    <li class="mr-3 flex-1">
                        <a href="/seller" class="<?= urlIs('/seller') ? 'border-blue-600 text-blue-600' : '' ?> border-b-2 block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-blue-600 hover:border-blue-600">
                            <i class="fas fa-tasks pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Shows</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="/seller/venue" class="<?= urlIs('/seller/venue') ? 'border-blue-600 text-blue-600' : '' ?> border-b-2 block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-blue-600 hover:border-blue-600">
                        <i class="fa fa-home pr-0 md:pr-3" aria-hidden="true"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Venues</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="/seller/customer" class="border-b-2 block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-blue-600 hover:border-blue-600">
                            <i class="fa fa-user pr-0 md:pr-3" aria-hidden="true"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">Customers</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="/seller/payment" class="border-b-2 block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-blue-600 hover:border-blue-600">
                            <i class="fa fa-wallet pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Payments</span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>