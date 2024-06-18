import React from 'react'
import Footer from '../Components/Footer'
import Movies from '../Components/Movie/Movies'
import SeaFil from '../Components/Movie/SeaFil'
import NavbarA1 from '../Components/NavbarA1'

const Movie = ({user, film}) => {
    return (
        <div>
            <NavbarA1 data={user} />
            <SeaFil/>
            <Movies data={film}/>
            <Footer/>
        </div>
    )
}

export default Movie