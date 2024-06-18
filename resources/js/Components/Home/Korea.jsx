import React from 'react'

const New = ({ data }) => {
    return (
        <div>
            <section className='bg-biru pb-10 pt-4'>
                <h1 className='text-white text-3xl font-bold mt-12 mx-[120px]'><i className="fa-solid fa-film"></i> Korea's Movie & Series</h1>
                <div className="grid grid-cols-2 md:grid-cols-4 gap-4 mx-[120px] mt-10">
                {data.map((korea) =>
                    <div className="grid gap-4 cursor-pointer group relative  ">
                            <div className="group-hover:border-4 border-merah duration-500 transition-all ease-in-out rounded-lg">
                                <div className='group-hover:opacity-100 absolute justify-center group-hover:backdrop-blur-sm w-full h-full pt-16 flex font-semibold opacity-0 duration-500 transition-all ease-in-out p-12 border-transparent'>
                                    <p className='text-center text-2xl font-semibold text-merah rounded-full'>{korea.film1.title} ({korea.film1.year})</p>
                                </div>
                                <div className='group-hover:opacity-100 absolute justify-center w-full bottom-8 flex font-semibold opacity-0 duration-500 transition-all ease-in-out'>
                                    <a href={`/detail/${korea.id}`} className='text-white bg-merah px-7 py-3 rounded-full'>View Detail</a>
                                </div>
                                <img className="w-full h-[380px] rounded-lg" src={korea.film1.cover} alt={korea.film1.title} />
                            </div>
                    </div>
                    )}
                </div>
            </section >
        </div>
    )
}

export default New