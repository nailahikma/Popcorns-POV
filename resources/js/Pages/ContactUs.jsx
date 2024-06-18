import React from 'react'
import NavbarA1 from '../Components/NavbarA1'
import Footer from '../Components/Footer'

function ContactUs({ user }) {
  return (
    <div>
      <NavbarA1 data={user} />

      <section className='bg-biru'>
        <div className=' justify-between flex'>
          <img src="https://1.bp.blogspot.com/-2dTgFqhjuSw/YAKH1ZPkh_I/AAAAAAAAARU/7N2U3q6gLIIvzMka1DipgM-hky6fw5BRgCLcBGAsYHQ/s1501/5%2BRekomendasi%2BFilm%2BNetflix%2BAction%2BTerbaik%2Bdan%2BPaling%2BBaru-1.jpg" alt="films" className='relative object-cover w-full h-[290px] opacity-90'/>
          <h1 className='text-4xl text-center text-white font-semibold absolute w-full mt-28'>Contact Us</h1>
        </div>
      </section>

      <section className='bg-biru py-20'>
        <div className="grid grid-cols-3 gap-7 mx-10 text-center text-sm">

          <div className="bg-gray-900 p-10 rounded-box hover:scale-105 shadow-lg shadow-merah ">
            <i className="fa-solid fa-envelope text-biru text-xl bg-merah rounded-full px-5 py-4 hover:scale-125"></i>
            <h3 className='font-semibold text-white text-2xl my-3'>Our Email</h3>
            <p className='font-light text-sm'><span className='hover:underline hover:cursor-zoom-out'>nailahikma1985@gmail.com</span> Interactively grow backend ideas for cross-platform models.</p>
          </div>
          
          <div className="bg-gray-900 p-10 rounded-box hover:scale-105 shadow-lg shadow-merah">
            <i class="fa-solid fa-phone-volume text-biru text-xl bg-merah rounded-full px-5 py-4 hover:scale-125"></i>
            <h3 className='font-semibold text-2xl my-3'>Call Us</h3>
            <p className='font-light text-sm'>+62 85751931285 Distinctively exploit optimal alignments for intuitive bandwidth.</p>
          </div>

          <div className="bg-gray-900 p-10 rounded-box hover:scale-105 shadow-lg shadow-merah">
            <i class="fa-solid fa-location-dot text-biru text-xl bg-merah rounded-full px-5 py-3 hover:scale-125"></i>
            <h3 className='font-semibold text-2xl mt-5 mb-3'>Location</h3>
            <p className='font-light text-sm'>Jln. Kemuning 4B No.40, Pasar Minggu, <br />Jakarta Selatan</p>
          </div>
          
        </div>
      </section>
      <Footer />
    </div>
  )
}

export default ContactUs