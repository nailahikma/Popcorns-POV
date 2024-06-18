import React from 'react'

const Cast = ({ data }) => {
    return (
        <>
            <section className='bg-biru w-full px-16'>
            <h1 className='text-white text-3xl font-bold'><i class="fa-solid fa-podcast mr-4"></i>   Starring</h1>
                    <div className="carousel carousel-center p-4 mx-4 my-6 space-x-4">
                        {data.map((cast) => (
                            <div className="carousel-item bg-gray-900 w-[186px]  rounded-t-box p-4">
                                <div className="image">
                                    <img src={`/storage/${cast.img_cast}`} alt={cast.cast} className="rounded-box object-cover object-center w-[170px] h-[200px]" />
                                </div>
                                <div className="info mt-4">
                                    <p class="text-white">{cast.cast}</p>
                                    <div class="inline-flex items-center justify-center w-full">
                                        <hr class="w-[170px] h-px bg-gray-200 border-0 dark:bg-gray-700" />
                                        <span class="pl-3 font-medium text-gray-900 -translate-x-1/2 bg-white dark:text-merah dark:bg-gray-900">as</span>
                                    </div>
                                    <p class="text-white">{cast.role_name}</p>
                                </div>
                            </div>
                        ))}
                    </div>
            </section >
        </>
    )
}

export default Cast