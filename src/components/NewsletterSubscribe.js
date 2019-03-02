import React, {Component} from 'react';
export default class NewsletterSubscribe extends Component{
    render(){
        return(
            <div className="newsletter-subscribe">
                <div className="container">
                    <div className="row">
                        <div className="col-12">
                            <header className="entry-header">
                                <h2 className="entry-title">Suscribete para que estar enterado de nuestros nuevos, cursos, capacitaciones, promociones</h2>
                            </header>

                            <div className="newsletter-form">
                                <form className="flex flex-wrap justify-content-center align-items-center">
                                    <div className="col-md-12 col-lg-3">
                                        <input type="text" placeholder="Nombre"/>
                                    </div>

                                    <div className="col-md-12 col-lg-6">
                                        <input type="email" placeholder="Correo electrónico"/>
                                    </div>

                                    <div className="col-md-12 col-lg-3">
                                        <input className="btn gradient-bg" type="submit" value="Suscribirse"/>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}