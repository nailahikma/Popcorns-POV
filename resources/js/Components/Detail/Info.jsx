import React from 'react'
import { usePage } from '@inertiajs/react';

const Info = ({ data }) => {
    // id
    const { film } = usePage().props;
    // bersihkan tag html
    const cleanHtml = html => {
        const doc = new DOMParser().parseFromString(html, 'text/html');
        return doc.body.textContent || "";
    };
    const cleanedContent = cleanHtml(film.desc);

    return (
        <div>
            {film && (
                <section className="bg-biru w-full">
                    <div id="slide1" className="relative">
                        <img src={film.bg} className="w-full h-[590px] object-cover object-right-top" />
                        <div className="bg-gradient-to-r from-biru from-25% to-transparent to-95% w-full h-full absolute top-0 left-0 z-0"></div>
                        <div className='info mx-[50px] absolute justify-between transform -translate-y-1/2 left-5 right-5 top-1/2 w-[650px]'>
                            <img src={film.title_img} alt={film.title} className='w-[500px] mb-12' />
                            <h1 className='text-white text-2xl font-bold'>{film.title} ({film.year})</h1>
                            <div className="flex my-6">
                                <a href={`https://youtu.be/${film.trailer}`} target="_blank" className='bg-merah rounded-lg text-center h-[40px] text-white px-3 pt-2 font-semibold'>Watch Trailer</a>
                                <p className='text-slate-400 text-s font-light mt-2 ml-5'>{film.genre1.genre} | <span className='border-slate-400 border-2 p-1 rounded-sm'>{film.rating}</span> | {film.duration}</p>
                            </div>
                            <p className='text-white text-base font-font-light my-4'>{film.desc}</p>
                            <div className='text-slate-400 text-s font-light flex'>
                                <span>Platfrom:</span>
                                <a href={film.platform1.link} target='_blank'>
                                    <img src={`/storage/${film.platform1.logo}`} alt={film.platform1.platform} className='w-[100px]' />
                                </a>
                            </div>
                        </div>
                    </div>
                </section >
            )}
        </div >
    )
}

export default Info