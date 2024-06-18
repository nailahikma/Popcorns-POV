import React from 'react'
import Footer from '../Components/Footer'
import Popular from '../Components/Home/Popular'
import NavbarB1 from '../Components/NavbarB1'
import Carousel from '../Components/Home/Carousel'

export default function HomeB({film}) {
    return (
        <div>
            <NavbarB1 />
            <Carousel data={film}/>
            <Popular data={film}/>
            <Footer/>
        </div>
    )
}
