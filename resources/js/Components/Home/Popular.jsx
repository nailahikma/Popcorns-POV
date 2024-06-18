
import React, { useState } from 'react';

const Popular = ({ data }) => {
    const [visibleMovies, setVisibleMovies] = useState(4); // Jumlah awal film yang ditampilkan

    const handleMoreClick = () => {
        setVisibleMovies((prevVisibleMovies) => prevVisibleMovies + 4); // Menambah 4 film setiap kali tombol "More" ditekan
    };

    return (
        <section className='bg-biru py-[40px] px-[120px]'>
            <h1 className='text-white text-3xl font-bold mb-6'><i className="fa-solid fa-film"></i> Popular Movies</h1>
            <div className="grid grid-cols-2 md:grid-cols-4 gap-4 justify-center">
                {data.slice(0, visibleMovies).map((film) => (
                    <div key={film.id} className="grid gap-4 cursor-pointer group relative">
                        <div className="group-hover:border-4 border-merah duration-500 transition-all ease-in-out rounded-lg">
                            <div className='group-hover:opacity-100 absolute justify-center group-hover:backdrop-blur-sm w-full h-full pt-16 flex font-semibold opacity-0 duration-500 transition-all ease-in-out p-12 object-fit'>
                                <p className='text-center text-2xl font-semibold text-merah rounded-full'>{film.title} ({film.year})</p>
                            </div>
                            <div className='group-hover:opacity-100 absolute justify-center w-full bottom-8 flex font-semibold opacity-0 duration-500 transition-all ease-in-out'>
                                <a href={`/detail/${film.id}`} className='text-white bg-merah px-7 py-3 rounded-full'>View Detail</a>
                            </div>
                            <img className="w-full h-[380px] rounded-lg object-fit" src={film.cover} alt={film.title} />
                        </div>
                    </div>
                ))}
            </div>
            {visibleMovies < data.length && (
                <div className="flex justify-end mt-4">
                    <button
                        className="text-slate-400 text-lg rounded-full"
                        onClick={handleMoreClick}
                    >
                        <i class="fa-solid fa-arrow-down mr-3"></i>
                           More
                    </button>
                </div>
            )}
        </section>
    );
};

export default Popular

