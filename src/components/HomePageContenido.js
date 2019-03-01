import React, { Component } from 'react';
import modern from '../assets/images/modern.jpg';
import img1 from '../assets/images/1.jpg';
import img2 from '../assets/images/2.jpg';
import img3 from '../assets/images/3.jpg';
import img90 from '../assets/images/90.jpg';
import smoke from '../assets/images/smoke.jpg';
import festival from '../assets/images/summer-festival.jpg';
import autum from '../assets/images/autumn.jpg';

export default class HomePageContenido extends Component{
    render(){
        return(
            <div className="homepage-featured-events">
                <h1 className="title-secciones shadow-text">Contenido
                            </h1>
                <div className="container">
                    
                    <div className="row">
                        <div className="col-12">
                            
                            <div className="featured-events-wrap flex flex-wrap justify-content-between">
                                <div className="event-content-wrap positioning-event-1">
                                    <figure className="imghvr-shutter-out-diag-2"><img src={img1} alt="1"/>
                                        <figcaption>
                                           
                                            <h3>Conceptos Básicos</h3>
                                            <p>Residencia fiscal - Comprensión del contenido art. 107 ET que define el concepto de deducciones en general - Depuración de la renta - Costo fiscal - Valor patrimonial - Ganancia ocasional -Precios de transferencia - Contribuyentes y responsables. </p>
                                        </figcaption>
                                        <h3 className="title-contenido shadow-text">Conceptos básicos</h3>
                                    </figure>
                                   
                                    

                                </div>

                                <div className="event-content-wrap positioning-event-2">
                                <figure className="imghvr-shutter-out-diag-2"><img src={modern} alt=""/>
                                    <figcaption>
                                            <h3>Personas Naturales</h3>
                                            <p>Sistema cedular - Análisis del significado gastos, costos, deducciones, rentas exentas en el sistema cedular - Limitaciones en la aplicación de las deducciones -      Limitación en la aplicación de rentas exentas - Limitación en la aplicación en los ingresos no constitutivos de renta - Limitación de los anteriores de manera conjunta en la depuración de la renta del sistema cedular - Simulación para comparar el aumento de la tarifa efectiva.</p>
                                        </figcaption>
                                        <h3 className="title-contenido">Personas Naturales</h3>
                                    </figure>
                                </div>

                                <div className="event-content-wrap positioning-event-3">
                                    <figure className="imghvr-shutter-out-diag-2"><img src={img3} alt=""/>
                                        <figcaption>
                                            <h3>Metodo de Tributación Simple para Personas Naturales y Sociedades</h3>
                                            <p>Descripción del sistema - Condiciones para pertenecer a este método - Simulación comparativa para definir el perfil del contribuyente que le conviene el método - Reducción de riesgos tributarios.</p>
                                        </figcaption>
                                        <h3 className="title-contenido">Metodo de Tributación Simple para Personas Naturales y Sociedades</h3>
                                    </figure>
                                </div>
                                <div className="event-content-wrap positioning-event-7">
                                    <figure className="imghvr-shutter-out-diag-2"><img src={img90} alt=""/>
                                        <figcaption>
                                            <h3>Sociedades</h3>
                                            <p>Cambios en tarifa de renta - Impacto impositivo en el gravamen a los dividendos  - Simulación para determinar tasa efectiva sociedad - accionista Vs Tasa nominal - Retención en la fuente cambios tarifarios contenidos en la RT - Régimen de compañías holding                colombianas (CHC) - Sociedades controladas en el exterior -Sistema de determinación de los dividendos en calidad de gravados específicamente o por la vía ordinaria.</p>
                                        </figcaption>
                                        <h3 className="title-contenido">Sociedades</h3>
                                    </figure>
                                </div>

                                <div className="event-content-wrap positioning-event-8">
                                <figure className="imghvr-shutter-out-diag-2"><img src={img2} alt="1"/>
                                    <figcaption>
                                        <h3>Impuesto a las Ventas</h3>
                                        <p>Aspectos básicos del impuesto a las ventas en Colombia - Descripción de los cambios en el impuesto a las ventas - Modificaciones del impuesto al consumo.</p>
                                    </figcaption>
                                    <h3 className="title-contenido">Impuesto a las Ventas</h3>
                                </figure>                                </div>

                                <div className="event-content-wrap positioning-event-9">
                                <figure className="imghvr-shutter-out-diag-2"><img src={smoke} alt=""/>
                                    <figcaption>
                                        <h3>Contabilidad</h3>
                                        <p>Definiciones de costo fiscal comparado con costos o valores bajo contabilidad NIIF.</p>
                                    </figcaption>
                                    <h3 className="title-contenido">Contabilidad</h3>
                                </figure>
                                        
                                </div>

                                <div className="event-content-wrap positioning-event-10 half">
                                <figure className="imghvr-shutter-out-diag-2"><img src={festival} alt=""/>
                                    <figcaption>
                                        <h3>Otro</h3>
                                        <p>Contratos de colaboración empresarial - Beneficio de auditoria -Amnistías tributarias.</p>
                                    </figcaption>
                                    <h3 className="title-contenido">Otro</h3>
                                </figure>
                                       
                                </div>

                                <div className="event-content-wrap positioning-event-11 half">
                                    <figure>
                                        <a href="/"><img src={autum} alt=""/></a>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }

}