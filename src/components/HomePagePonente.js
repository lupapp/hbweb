import React, { Component } from 'react';
import logo from '../assets/images/icon.png';

export default class HomePagePonente extends Component{
    render(){
        return(
            <div className="homepage-info-section">
                <div className="container">
                    <div className="row">
                        <div className="col-12 col-md-4 col-lg-5">
                        <h1 className="title-1">Experto</h1>
                            <figure>
                                <img src={logo} alt="logo"/>
                            </figure>
                            <p>Contador Público Universidad Javeriana
Especialización en derecho tributario de la Universidad ICESI

Asistente durante 30 años a las jornadas colombianas  de derecho tributario.</p>
                        </div>

                        <div className="col-12 col-md-8 col-lg-7">
                           
                            <div className="entry-content objetivo">
                                <p></p>
                            </div>

                            <footer className="entry-footer">
                                <a href="/" className="btn gradient-bg">Read More</a>
                                <a href="/" className="btn dark">Register Now</a>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        );
    }

}