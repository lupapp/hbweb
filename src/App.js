import React, { Component } from 'react';
import './App.css';
import './assets/style.css';
import './assets/css/imagehover.css';
import Countdown from './components/Countdown';
import HomePageContenido from './components/HomePageContenido';
import HomePageInfo from './components/HomePageInfo';
import HomePonente from './components/HomePonente';
//import Styled from 'styled-components';
import Header from './components/HeaderHome';
import FooterHome from './components/FooterHome';
import FormInscripcion from './components/forms/FormInscripcion2';
import imgh from './assets/images/imgHeader.png'
import HomePartners from './components/HomePartners';
import NewsletterSubscribe from './components/NewsletterSubscribe';

/*const AppWrapper =Styled.div`
    display:flex;
    justify-center:center;
`;*/
class App extends Component {
  render() {
    return (
      <div className="App">
        <header className="site-header">
            <Header></Header>
            <div className="swiper-container hero-slider">
                <div className="swiper-wrapper">
                    <div className="swiper-slide header-bg" data-date="2018/05/01" >
                        <div className="hero-content">
                            <div className="container">
                                <div className="row">
                                    <div className="col-md-8 flex flex-column justify-content-center">
                                        <div className="row">
                                            <div className="col-md-12">
                                                <figure className="figuraHeader"><img src={imgh} alt="15 de Marzo, Salón Caracoli C.C. Unicentro"/></figure>
                                           
                                                    
                                                    <h1 className="title-curso shadow-text">CAPACITACIÓN Y ACTUALIZACIÓN 
                                                    ULTIMA REFORMA TRIBUTARIA
                                                    LEY DE FINANCIAMIENTO <br/>
                                                    <small>(Ley 1943 expedida el 28 de diciembre 2018)</small>
                                                    </h1>
                                            </div>    
                                        </div>
                                    </div>
                                    <div className="col-md-4"><FormInscripcion/></div>
                                    <div className="col-md-12">
                                            <div className="countdown flex align-items-center">
                                             <Countdown></Countdown>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </header>
        <HomePageInfo/>
        
        <HomePageContenido></HomePageContenido>
        <HomePonente></HomePonente>
        <HomePartners></HomePartners>
        <NewsletterSubscribe></NewsletterSubscribe>
        <FooterHome></FooterHome>

      </div>
    );
  }
}

export default App;
