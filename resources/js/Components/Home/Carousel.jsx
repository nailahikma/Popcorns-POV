import React from 'react'

const Carousel = () => {
    return (
        <div>
            <section className='bg-biru'>
                <div className="carousel h-[500px]">
                    <div id="slide1" className="carousel-item relative w-full">
                        <img src="https://www.telkomsel.com/sites/default/files/2023-09/w4-33.png" className="w-full object-cover opacity-80 hover:opacity-50" />
                        <div className='info mx-[250px] absolute justify-between transform -translate-y-1/2 left-5 right-5 top-1/2'>
                            <h1 className='text-white text-5xl font-bold mb-10'>Jujutsu Kaisen</h1>
                            <p className='text-white text-xs font-normal bg-merah p-2 bg-opacity-90 rounded-sm w-fit mb-3'>Fantasy | +13 | 2020 </p>
                            <p className='text-white text-s font-normal'>Yuji Itadori is an athletic genius in high school. One day, to save
                                <br />a senior from “the cursed”, he swallows and then absorbs the cursed
                                <br />“Ryomen Sukura’s Finger(s)”. Later, he goes to an institute for
                                <br />sorcerers, as his grandpa’s last word...
                            </p>
                        </div>
                        <div className="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2 ">
                            <a href="#slide4" className="btn btn-circle">❮</a>
                            <a href="#slide2" className="btn btn-circle">❯</a>
                        </div>
                    </div>
                    <div id="slide2" className="carousel-item relative w-full">
                        <img src="https://gallery.poskota.co.id/2020/07/cee815a1566f453a33d1da65580b95a0-drama-korea-the-k2-1-169jpeg.jpg" className="w-full object-cover object-top opacity-80 hover:opacity-50" />
                        <div className='info mx-[250px] absolute justify-between transform -translate-y-1/2 left-5 right-5 top-1/2'>
                            <h1 className='text-white text-5xl font-bold mb-10'>The K2</h1>
                            <p className='text-white text-xs font-normal bg-merah p-2 bg-opacity-90 rounded-sm w-fit mb-3'>Drama | +13 | 2016 </p>
                            <p className='text-white text-s font-normal'>Kim Je Ha is a former mercenary soldier known as “K2” who
                                <br />suddenly turns into a fugitive when he is wrongfully accused of killing his
                                <br />girlfriend. He uses his new job to revenge on Park Kwan Soo...
                            </p>
                        </div>
                        <div className="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2 ">
                            <a href="#slide1" className="btn btn-circle">❮</a>
                            <a href="#slide3" className="btn btn-circle">❯</a>
                        </div>
                    </div>
                    <div id="slide3" className="carousel-item relative w-full">
                        <img src="https://akcdn.detik.net.id/visual/2021/08/02/drama-china-unforgettable-love-1_169.jpeg?w=650" className="w-full object-cover object-top opacity-80 hover:opacity-50" />
                        <div className='info mx-[250px] absolute justify-between transform -translate-y-1/2 left-5 right-5 top-1/2'>
                            <h1 className='text-white text-5xl font-bold mb-10'>Unforgettable Love</h1>
                            <p className='text-white text-xs font-normal bg-merah p-2 bg-opacity-90 rounded-sm w-fit mb-3'>Romance | +13 | 2021 </p>
                            <p className='text-white text-s font-normal'>A love story between He Qiaoyan
                                <br />(played by Miles Wei), CEO of He’s Group, and Qin Yiyue (played by Hu
                                <br />Yixuan), a child psychologist. In the beginning, they start a contract...
                            </p>
                        </div>
                        <div className="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2 ">
                            <a href="#slide2" className="btn btn-circle">❮</a>
                            <a href="#slide4" className="btn btn-circle">❯</a>
                        </div>
                    </div>
                    <div id="slide4" className="carousel-item relative w-full">
                        <img src="https://akcdn.detik.net.id/visual/2020/01/30/fd8a89f8-cd07-4d7e-9a24-17c440c90e4d_169.png?w=400&q=90" className="w-full object-cover object-top opacity-80 hover:opacity-50" />
                        <div className='info mx-[250px] absolute justify-between transform -translate-y-1/2 left-5 right-5 top-1/2'>
                            <h1 className='text-white text-5xl font-bold mb-10'>One Piece</h1>
                            <p className='text-white text-xs font-normal bg-merah p-2 bg-opacity-90 rounded-sm w-fit mb-3'>Fantasy | +13 | 1999 </p>
                            <p className='text-white text-s font-normal'>Monkey D. Luffy wants to become the King of all pirates.
                                <br />Along his quest he meets: a skilled swordsman named Roronoa Zolo; Nami,
                                <br />a greedy thief who has a knack. Chopper, a sentient deer who is also a skilled...
                            </p>
                        </div>
                        <div className="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2 ">
                            <a href="#slide3" className="btn btn-circle">❮</a>
                            <a href="#slide5" className="btn btn-circle">❯</a>
                        </div>
                    </div>
                    <div id="slide5" className="carousel-item relative w-full">
                        <img src="https://kmtntf.ft.ugm.ac.id/wp-content/uploads/sites/771/2023/02/interstellar_poster_0.jpg" className="w-full object-cover opacity-80 hover:opacity-50" />
                        <div className='info mx-[250px] absolute justify-between transform -translate-y-1/2 left-5 right-5 top-1/2'>
                            <h1 className='text-white text-5xl font-bold mb-10'>Interstellar</h1>
                            <p className='text-white text-xs font-normal bg-merah p-2 bg-opacity-90 rounded-sm w-fit mb-3'>Sci-fi | +13 | 2014 </p>
                            <p className='text-white text-s font-normal'>When Earth becomes uninhabitable in the future, a farmer
                                <br />and ex-NASA pilot, Joseph Cooper, is tasked to pilot a spacecraft,
                                <br />along with a team of researchers, to find a new planet for humans.
                            </p>
                        </div>
                        <div className="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2 ">
                            <a href="#slide4" className="btn btn-circle">❮</a>
                            <a href="#slide6" className="btn btn-circle">❯</a>
                        </div>
                    </div>
                    <div id="slide6" className="carousel-item relative w-full">
                        <img src="https://cineverse.id/wp-content/uploads/2023/06/the-childe-ed10.jpeg" className="w-full object-cover object-top opacity-80 hover:opacity-50" />
                        <div className='info mx-[250px] absolute justify-between transform -translate-y-1/2 left-5 right-5 top-1/2'>
                            <h1 className='text-white text-5xl font-bold mb-10'>The Childe</h1>
                            <p className='text-white text-xs font-normal bg-merah p-2 bg-opacity-90 rounded-sm w-fit mb-3'>Action | +13 | 2021 </p>
                            <p className='text-white text-s font-normal'>Desperate to secure funds for his mother's surgery, an
                                <br />amateur boxer searches for the wealthy father he's never
                                <br />met. Traveling from the Philippines to Korea, he is relentlessly...
                            </p>
                        </div>
                        <div className="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2 ">
                            <a href="#slide5" className="btn btn-circle">❮</a>
                            <a href="#slide1" className="btn btn-circle">❯</a>
                        </div>
                    </div>

                </div>
            </section>
        </div>
    )
}

export default Carousel