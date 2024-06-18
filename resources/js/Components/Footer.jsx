import React from 'react'

export default function Footer() {
    return (
        <div>
            <footer className="dark:bg-gray-900">
                <div className="mx-auto w-full max-w-screen-xl">
                    <div className="grid grid-cols-2 gap-8 px-4 py-6 lg:py-8 md:grid-cols-4">
                        <div>
                            <h2 className="mb-6 text-xl font-semibold text-white">Company</h2>
                            <ul className="text-gray-500 dark:text-gray-400 font-small">
                                <li className="mb-2">
                                    <a href="/" className=" hover:underline hover:text-merah">Home</a>
                                </li>
                                <li className="mb-2">
                                    <a href="/about-us" className="hover:underline hover:text-merah">About Us</a>
                                </li>
                                <li className="mb-2">
                                    <a href="/contact-us" className="hover:underline hover:text-merah">Contact Us</a>
                                </li>
                                <li className="mb-2">
                                    <a href="/movie" className="hover:underline hover:text-merah">Movie</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 className="mb-6 text-xl font-semibold text-white">Top Categories</h2>
                            <ul className="text-gray-500 dark:text-gray-400 font-small">
                                <li className="mb-2">
                                    <p className="hover:text-merah">Action</p>
                                </li>
                                <li className="mb-2">
                                    <p className="hover:text-merah">Romance</p>
                                </li>
                                <li className="mb-2">
                                    <p className="hover:text-merah">Drama</p>
                                </li>
                                <li className="mb-2">
                                    <p className="hover:text-merah">Fantasy</p>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 className="mb-6 text-xl font-semibold text-white">My Profile</h2>
                            <ul className="text-gray-500 dark:text-gray-400 font-small">
                                <li className="mb-2">
                                    <a href="#" className="hover:underline">Profile</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 className="mb-6 text-xl font-semibold text-white"></h2>
                            <div className="text-gray-500 dark:text-gray-400 font-small">
                                <p>Jln. Kemuning 4B</p>
                                <p>Jakarta Selatan</p>
                                <p>Contact: +62 85751931285</p>
                                <p>Email: nailahikma1985@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    )
}
