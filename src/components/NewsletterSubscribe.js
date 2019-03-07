import React, {Component} from 'react';
export default class NewsletterSubscribe extends Component{
    render(){
        return(
            <div className="newsletter-subscribe">
                <div className="container">
                    <div className="row">
                        <div className="col-12">
                            <header className="entry-header">
                                <h2 className="entry-title">Suscríbete para estar enterado de nuestros nuevos, cursos, capacitaciones y promociones</h2>
                            </header>
                      
                            <div className="newsletter-form">
                                <form className="flex flex-wrap justify-content-center align-items-center" action="https://hectorbarreralopez.us20.list-manage.com/subscribe/post?u=a1e83a1a4e8267e5e06b07cbe&amp;id=70a8aa9138" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate>
                                    <div className="col-md-12 col-lg-3">
                                        <input type="text"name="FNAME" class="" id="mce-FNAME" placeholder="Nombre"/>
                                    </div>
                                    <div className="col-md-12 col-lg-3">
                                        <input type="text"  name="LNAME" class="" id="mce-LNAME" placeholder="Apellidos"/>
                                    </div>
                                    <div className="col-md-12 col-lg-3">
                                        <input type="email" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Correo electrónico"/>
                                    </div>

                                    <div className="col-md-12 col-lg-3">
                                    <input type="submit" className="button" value="Suscribirse" name="subscribe" id="mc-embedded-subscribe" />
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