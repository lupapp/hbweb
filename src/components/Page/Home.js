import React, { Component } from 'react';
import HomePageInfo from '../HomePageInfo';
import HomePonente from '../HomePonente';
import HomePartners from '../HomePartners';
import SeccionInicio from '../SeccionInicio';
import HomePageContenido from '../HomePageContenido';
import NewsletterSubscribe from '../NewsletterSubscribe';
export default class Home extends Component{
    render(){
        return(
            <div className="contenido">
                <header className="site-header">
                        <SeccionInicio></SeccionInicio>
                </header>
            
                <HomePageInfo/>
                
                <HomePageContenido></HomePageContenido>
                <HomePonente></HomePonente>
                <HomePartners></HomePartners>
                <NewsletterSubscribe></NewsletterSubscribe>
            </div>
        );
    }
}