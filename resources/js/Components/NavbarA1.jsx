import React from 'react'

const NavbarA1 = ({ data }) => {
  return (
    <div>
      <nav className="bg-biru shadow-sm py-1.5 shadow-slate-500/50">
        <div className="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
          <a href="/" className="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="images/moonton-white.svg" className="h-8" alt="Flowbite Logo" />
            <span className="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
          </a>
          {data.map((user) =>
            <div className="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
              <button type="button" className="flex text-sm bg-biru rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                <span className="sr-only">Open user menu</span>
                <img className="w-8 h-8 rounded-full" src={`/storage/${user.img_user}`} alt={user.username} />
              </button>

              {/* User */}
              <div div className="shadow-sm shadow-slate-500/50 z-50 hidden my-4 text-base list-none bg-biru divide-y divide-gray-100 rounded-lg dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown" >
                <div className="px-4 py-3">
                  <span className="block text-sm text-white dark:text-white">{user.username}</span>
                  <span className="block text-sm  text-white truncate dark:text-gray-400">{user.email}</span>
                </div>
                <ul className="py-2" aria-labelledby="user-menu-button">
                  <li>
                    <a href="/admin/home" className="block px-4 py-2 text-sm text-white hover:bg-gray-100 hover:text-biru">Dashboard</a>
                  </li>
                  <li>
                    <a href="/logout" className="block px-4 py-2 text-sm text-white hover:bg-gray-100 hover:text-biru">Sign Out</a>
                  </li>
                </ul>
              </div>
              <button data-collapse-toggle="navbar-user" type="button" className="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
                <span className="sr-only">Open main menu</span>
                <svg className="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
              </button>
            </div>
          )}

          {/* Navbar List */}
          <div className="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
            <ul className="flex flex-col font-medium p-4 md:p-0 mt-4 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0">
              <li>
                <a href="/movie" className="block py-2 px-3 text-white rounded md:p-0 hover:text-merah" aria-current="page">Movie</a>
              </li>
              <li>
                <a href="/about-us" className="block py-2 px-3 text-white rounded md:p-0 hover:text-merah">About Us</a>
              </li>
              <li>
                <a href="/contact-us" className="block py-2 px-3 text-white rounded md:p-0 hover:text-merah">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav >
    </div >
  )
}

export default NavbarA1
