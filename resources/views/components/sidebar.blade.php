<div
    :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
    class="fixed md:static z-30 inset-y-0 left-0 w-64 bg-gray-800 transform md:translate-x-0 transition duration-300 ease-in-out flex flex-col">
    <div class="flex items-center justify-center h-16 bg-gray-900">
        <span class="text-white font-bold uppercase">Sidebar</span>
        <button @click="sidebarOpen = !sidebarOpen" class="text-gray-500 focus:outline-none focus:text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16" />
                     </svg>
                </button>

    </div>
    <div class="flex-1 overflow-y-auto">

        <nav class="px-2 py-4">
            <a href="/homepage" class="flex items-center px-4 py-2 text-white hover:bg-gray-700">
                <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
                Homepage
            </a>
            <a href="/absent" class="flex items-center px-4 py-2 mt-2 text-white hover:bg-gray-700">
                <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24"><path d="M6 18L18 6M6 6l12 12"/></svg>
                Absent
            </a>
            <a href="/project" class="flex items-center px-4 py-2 mt-2 text-white hover:bg-gray-700">
                <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                Project
            </a>
            <a href="/logbook" class="flex items-center px-4 py-2 mt-2 text-white hover:bg-gray-700">
                <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                Logbook
            </a>
            <a href="/finalvalue" class="flex items-center px-4 py-2 mt-2 text-white hover:bg-gray-700">
                <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                Final Value
            </a>
        </nav>
    </div>
</div>
