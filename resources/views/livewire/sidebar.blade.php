<div>
    <aside id="sidebar"
        class="fixed top-0 z-20 flex flex-col flex-shrink-0 hidden w-64 h-full font-normal duration-75 lg:flex transition-width"
        aria-label="Sidebar">
        <div
            class="relative flex flex-col flex-1 min-h-0 pt-0 border-gray-200 bg-gray-50 ltr:border-r rtl:border-l dark:bg-gray-800 dark:border-gray-700">
            <div class="flex flex-col flex-1 pt-5 pb-4 mb-16 overflow-y-auto">
                <div class="flex-1 px-3 space-y-1 text-3xl text-white bg-gray-800 divide-y divide-gray-200">
                    <ul>
                        <li>
                            <a href="/" wire:navigate class="">dashboard</a>
                        </li>
                        <li>
                            <a href="/fiat" wire:navigate class="">fiat</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>

    {{-- <div class="fixed inset-0 z-10 hidden bg-gray-900/50 dark:bg-gray-900/90" id="sidebarBackdrop"></div> --}}


</div>
