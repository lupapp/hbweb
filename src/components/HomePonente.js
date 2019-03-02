import React, { Component } from 'react';
import icon from '../assets/images/incon.png';
import next1 from '../assets/images/next1.jpg';
import next2 from '../assets/images/next2.jpg';
import next3 from '../assets/images/next3.jpg';

export default class HomePonente extends Component{
    render(){
        return(
            <div className="homepage-next-events">
                <div className="container">
                    <div className="row">
                        <div className="next-events-section-header">
                            <h2 className="entry-title">Experto</h2>
                        </div>
                    </div>

                    <div className="row">
                        <div className="col-12 col-sm-6 col-md-4">
                            <div className="next-event-wrap">
                               

                                <header className="entry-header">
                                    
                                    <figure>
                                        <a href="#"><img src={next1} alt="1"/></a>

                                    </figure>
                                    <h3 className="entry-title">Hector Barrera López</h3>
                                    <div className="posted-date">
                                        
                                    </div>
                                </header>

                                <div className="entry-content">
                                    <ul className="listaExperto">
                                        <li>Contador Público Universidad Javeriana especializado en derecho tributario de la Universidad ICESI.</li>
                                        <li>Asistente durante 30 años a las jornadas colombianas  de derecho tributario.</li>
                                    </ul>
                                </div>

                               
                            </div>
                        </div>

                        <div className="col-12 col-sm-6 col-md-4">
                            <div className="next-event-wrap">
                                <figure>
                                    <a href="#"><img src={next2} alt="1"/></a>

                                </figure>

                                <header className="entry-header">
                                    <h3 className="entry-title">Experiencia</h3>

                                </header>

                                <div className="entry-content">
                                    <ul className="listaExperto">
                                        <li>Director del departamento de impuestos corporativo del grupo fanalca (1991-2015).</li>
                                        <li>Asesor tributario de importantes compañias como: Fanalca SA, Compañía de Negocio CGM SAS, Alimentos Tony SA,  Agregados y Mezclas Cachibi SA, Blanco y Negro SA, Blanco y Negro Masivo SA, Protecnica Ingenieria SA, Fabricea SA, Constructora Limonar SA, Noti 5 SA, Promotora Limonar SA, Rubio Constructores SA, Calitex SA, Diseño y Moda SA, Burica SA, Constructora Normandia SA, Zona Franca Palmaseca, Laskin, Celco SA.</li>
                                    </ul>
                                </div>

                                
                            </div>
                        </div>

                        <div className="col-12 col-sm-6 col-md-4">
                            <div className="next-event-wrap">
                                <figure>
                                    <a href="#"><img src={next3} alt="1"/></a>

                                </figure>

                                <header className="entry-header">
                                    
                                    <h3 className="entry-title">Docencia</h3>
                                </header>

                                <div className="entry-content">
                                    <ul className="listaExperto">
                                        <li>Catedrático de la Universidad Javeriana - 5 años.</li> 
                                        <li>Capacitación continua personal del grupo Fanalca SA.</li>
                                        <li>Grupo de Contadores y Área Tributaria. </li>
                                    </ul>
                                </div>

                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}