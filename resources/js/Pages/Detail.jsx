import React from 'react'
import NavbarA1 from '../Components/NavbarA1'
import Footer from '../Components/Footer'
import Info from '../Components/Detail/Info'
import Cast from '../Components/Detail/Cast'

const Detail = ({user, film, cast}) => {
  return (
    <div>
      <NavbarA1 data={user} />
      <Info data={film}/>
      <Cast data={cast}/>
      <Footer />
    </div>
  )
}

export default Detail
