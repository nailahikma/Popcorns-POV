import React from 'react'

const Movies = ({ data }) => {
    return (
        <div>
            <section className='bg-biru px-20 py-10'>
                <h1 className='text-white text-5xl font-bold '> Movies</h1>
                <p className='w-[500px] mt-6'>Movies move us like nothing else can, whether they’re scary, funny, dramatic, romantic or anywhere in-between. So many titles, so much to experience.</p>
                <div className="grid grid-cols-2 md:grid-cols-4 gap-7  mt-10 justify-center">
                    {data.map((film) =>
                        <div div className="grid gap-4 cursor-pointer group relative">
                            <div className="group-hover:border-4 border-merah duration-500 transition-all ease-in-out rounded-lg">
                                <div className='group-hover:opacity-100 absolute justify-center group-hover:backdrop-blur-sm w-full h-full pt-16 flex font-semibold opacity-0 duration-500 transition-all ease-in-out p-12 border-transparent'>
                                    <p className='text-center text-2xl font-semibold text-merah rounded-full'>{film.title} ({film.year})</p>
                                </div>
                                <div className='group-hover:opacity-100 absolute justify-center w-full bottom-8 flex font-semibold opacity-0 duration-500 transition-all ease-in-out'>
                                    <a href={`/detail/${film.id}`} className='text-white bg-merah px-7 py-3 rounded-full'>View Detail</a>
                                </div>
                                <img className="w-full h-[380px] rounded-lg" src={film.cover} alt={film.title} />
                            </div>
                        </div>
                    )}
                </div>
            </section >
        </div>
    )
}

export default Movies