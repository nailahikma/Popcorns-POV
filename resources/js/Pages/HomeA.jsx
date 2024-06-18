import React from 'react'
import NavbarA1 from '../Components/NavbarA1'
import Footer from '../Components/Footer'
import Popular from '../Components/Home/Popular'
import Carousel from '../Components/Home/Carousel'
import Korea from '../Components/Home/Korea'
import New from '../Components/Home/New'

export default function HomeA({film, year, user, korea}) {
    return (
        <div>
            <NavbarA1 data={user}/>
            <Carousel/>
            <Korea data={korea} />
            <Popular data={film}/>
            <New data={year} />
            <Footer/>
        </div>
    )
}
