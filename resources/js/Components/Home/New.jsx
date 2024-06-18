import React from 'react'

const New = ({ data }) => {
    return (
        <div>
            <section className='bg-biru py-[40px]'>
                <h1 className='text-white text-3xl font-bold mt-10 mb-6 mx-[120px]'><i className="fa-solid fa-film"></i> New Films in 2023</h1>
                <div className="carousel carousel-center p-4 space-x-4 mx-[120px] justify-center">
                    {data && data.map((todate) => (
                        <div className="carousel-item gap-4 cursor-pointer group relative" key={todate.id}>
                            <div className="group-hover:border-4 border-merah duration-500 transition-all ease-in-out rounded-lg">
                                <div className='group-hover:opacity-100 absolute justify-center group-hover:backdrop-blur-sm w-full h-full pt-16 flex font-semibold opacity-0 duration-500 transition-all ease-in-out p-12 object-fit'>
                                    <p className='text-center text-2xl font-semibold text-merah rounded-full'>{todate.title} ({todate.year})</p>
                                </div>
                                <div className='group-hover:opacity-100 absolute justify-center w-full bottom-8 flex font-semibold opacity-0 duration-500 transition-all ease-in-out'>
                                    <a href={`/detail/${todate.id}`} className='text-white bg-merah px-7 py-3 rounded-full'>View Detail</a>
                                </div>
                                <img className="w-full h-[380px] rounded-lg object-fit" src={todate.bg} alt={todate.title} />
                            </div>
                        </div>
                    ))}
                </div>
            </section >
        </div>
    )
}

export default New