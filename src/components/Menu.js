import React, {Component} from 'react';
export default class Menu extends Component{
    render(){
        return(
            <nav className="site-navigation">
                <div className="hamburger-menu d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <ul>
                    <li><a href="/">Pagar</a></li>
                    <li><a href="/">Objetivo</a></li>
                    <li><a href="/">Experto</a></li>
                    <li><a href="/">Contenido</a></li>
                    <li><a href="/">News</a></li>
                    <li><a href="/">Contact</a></li>
                </ul>
            </nav>
        );
    }
}