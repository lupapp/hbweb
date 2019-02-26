import React, {Component} from 'react';
import logo from '../assets/images/logo-2.png';
export default class HomePageInfo extends Component{
    render(){
        return(
            <div className="homepage-info-section">
                <div className="container">
                    <div className="row">
                        <div className="col-12 col-md-4 col-lg-5">
                            <figure>
                                <img src={logo} alt="logo"/>
                            </figure>
                        </div>

                        <div className="col-12 col-md-8 col-lg-7">
                           
                            <div className="entry-content objetivo">
                                <div className="title-2"><label>Esta capacitación y actualización se ha preparado con una metodología simple para todas las personas interesadas en conocer el esquema tributario colombiano y aquellos que estén en el medio contable y tributario.</label></div>
                                <p>

Es importante antes de tratar los temas de la ley de financiamiento conocer algunas normas básicas de carácter general para la comprensión integral de los temas de la reforma. 

Esta última reforma contiene cambios de mucho impacto para las personas naturales, situación que se refleja en el aumento de la base gravable y la tarifa del impuesto de renta; además del impuesto al patrimonio que se estableció con los años 2019, 2020 y 2021.

Es muy importante entender el nuevo esquema de tributación para las personas naturales y sociedades, denominado “Régimen simple de tributación” el cual es opcional. Para el efecto es importante hacer las simulaciones comparativas previas para decidir si se acoge a este sistema que puede ser más beneficioso que el sistema ordinario.

Finalmente se tratarán los temas integrados con respecto a algunos cambios en el impuesto a las ventas, impuesto al consumo, retención en la fuente normalización tributaria, dividendos gravados y procedimiento tributario con relación a las normas anti-evasión, beneficios tributarios especiales y nuevo régimen para compañías Holding colombiana y obras por impuestos, amnistías tributarias, beneficio de auditoria. .</p>
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