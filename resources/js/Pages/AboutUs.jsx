import React from 'react'
import Footer from '../Components/Footer'
import NavbarA1 from '../Components/NavbarA1'

function AboutUs({ user }) {
    return (
        <div>
            <NavbarA1 data={user} />
            <section className='bg-biru'>
                <div className=' justify-between flex'>
                    <img src="https://1.bp.blogspot.com/-2dTgFqhjuSw/YAKH1ZPkh_I/AAAAAAAAARU/7N2U3q6gLIIvzMka1DipgM-hky6fw5BRgCLcBGAsYHQ/s1501/5%2BRekomendasi%2BFilm%2BNetflix%2BAction%2BTerbaik%2Bdan%2BPaling%2BBaru-1.jpg" alt="films" className='relative object-cover w-full h-[290px] opacity-80' />
                    <h1 className='text-4xl text-center text-white font-semibold absolute w-full mt-28'>About Us</h1>
                </div>
            </section>

            <section className='bg-biru py-20'>
                <div className="grid grid-cols-2 gap-10 mx-10">
                    <div className="text-start">
                        <h3 className='text-merah text-4xl font-bold'>Welcome to Popcorn's POV!</h3>
                        <p className='my-7 tracking-wide'>Your ultimate destination for a cinematic journey like no other! In Our Web, we are passionate about the world of cinema and are dedicated to providing you with an immersive and tailored movie experience. Dive into a vast collection of films, explore in-depth details about your favorite actors and directors, and discover hidden gems you might have missed. Whether you're a casual viewer or a dedicated cinephile, our platform is designed to cater to your unique tastes. From the latest releases to timeless classics, user-generated reviews to personalized recommendations, [Your Movie Web] is your go-to source for all things movies. Join us as we celebrate the magic of storytelling, the art of filmmaking, and the joy of discovering new cinematic treasures. Let the journey begin – because every movie has a story, and we're here to help you find yours. Welcome to the world of Popcorn's POV!</p>
                        <div className='grid grid-cols-2 gap-5'>
                            <div className="bg-slate-900 rounded-lg p-7 hover:border-4 border-merah">
                                <h2 className='text-4xl text-white font-bold'>1k</h2>
                                <h4 className='text-2xl text-white font-semibold my-2'>Listed Movies</h4>
                                <p>With spesific information of each film and their trailer!</p>
                            </div>
                            <div className="bg-slate-900 rounded-lg p-7 hover:border-4 border-merah">
                                <h2 className='text-4xl text-white font-bold'>8k</h2>
                                <h4 className='text-2xl text-white font-semibold my-2'>Lovely Users</h4>
                                <p>Completely free, with just registration to our web!</p>
                            </div>
                        </div>
                    </div>
                    <div className="flex justify-center items-center">
                        <img src="https://c0.wallpaperflare.com/preview/620/757/83/film-35mm-film-roll-filmstrip-cinema.jpg" alt="Roll Film" className='rounded-lg' />
                    </div>
                </div>
            </section>
            <Footer />
        </div>
    )
}

export default AboutUs