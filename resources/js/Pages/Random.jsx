import React from 'react'
import Cast from '../Components/Detail/Cast'
import NavbarA1 from '../Components/NavbarA1'
import Footer from '../Components/Footer'

const Random = ({cast, user}) => {
  return (
    <div>
        <NavbarA1 data={user}/>
        <Cast data={cast}/>
        <Footer/>
    </div>
  )
}

export default Random
