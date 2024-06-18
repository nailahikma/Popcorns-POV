import React from 'react'

const Popular1 = ({ data }) => {
    return (
        <div>
            <section className='bg-biru'>
                <div className="carousel carousel-center max-w-md p-4 space-x-4">
                    {data.map((film) =>
                        <div className="carousel-item">
                            <div className='group-hover:opacity-100 absolute justify-center group-hover:backdrop-blur-sm w-full h-full pt-16 flex font-semibold opacity-0 duration-500 transition-all ease-in-out p-12 object-fit'>
                                <p className='text-center text-2xl font-semibold text-merah rounded-full'>{film.title} ({film.year})</p>
                            </div>
                            <div className='group-hover:opacity-100 absolute justify-center w-full bottom-8 flex font-semibold opacity-0 duration-500 transition-all ease-in-out'>
                                <a href="/detail" className='text-white bg-merah px-7 py-3 rounded-full'>Detail</a>
                            </div>
                            <img src={film.cover} alt={film.title} className="rounded-box" />
                        </div>
                    )}
                </div>
            </section>
        </div>
    )
}

export default Popular1