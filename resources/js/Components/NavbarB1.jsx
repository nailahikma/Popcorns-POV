import React from 'react'

export default function NavbarB1() {
    return (
        <div>
            <nav className="bg-biru fixed w-full z-20 top-0 p-1.5">
                <div className="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                    <a href="https://flowbite.com/" className="flex items-center space-x-3 rtl:space-x-reverse">
                        <img src="https://flowbite.com/docs/images/logo.svg" className="h-8" alt="Flowbite Logo" />
                        <span className="self-center text-2xl font-semibold whitespace-nowrap">Flowbite</span>
                    </a>
                    <div className="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                        <a href='/login' className="text-white bg-merah hover:bg-opacity-40 focus:ring-4 focus:outline-none focus:ring-merah font-medium rounded-lg text-sm px-4 py-2 text-center 0 lue-700 -blue-800">Sign In</a>
                        <button data-collapse-toggle="navbar-sticky" type="button" className="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 400 ray-700 -gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                            <span className="sr-only">Open main menu</span>
                            <svg className="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                            </svg>
                        </button>
                    </div>
                    <div className="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                        <ul className="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 0 md:0 y-700">
                            <li>
                                <a href="#" className="block py-2 px-3 text-white rounded md:hover:bg-transparent md:hover:text-merah md:p-0 md:-blue-500  ray-700 -white md:ransparent y-700">Movies</a>
                            </li>
                            <li>
                                <a href="#" className="block py-2 px-3 text-white rounded md:hover:bg-transparent md:hover:text-merah md:p-0 md:-blue-500  ray-700 -white md:ransparent y-700">About Us</a>
                            </li>
                            <li>
                                <a href="#" className="block py-2 px-3 text-white rounded md:hover:bg-transparent md:hover:text-merah md:p-0 md:-blue-500  ray-700 -white md:ransparent y-700">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    )
}
