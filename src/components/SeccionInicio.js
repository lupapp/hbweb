import React, {Component} from 'react';
import FormInscripcion from './forms/FormInscripcion2';
import Countdown from './Countdown';
import imgh from '../assets/images/imgHeader.png';
export default class SeccionInicio extends Component{
    render(){
        return(
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
        );
    }
}