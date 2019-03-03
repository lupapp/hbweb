
import React, {Component} from 'react';
import logoFooter from '../assets/images/logoFooter.png'

export default class FooterHome extends Component{
    getYear(){
        let year = new Date().getFullYear();
        return year;
    }
    render(){
        return(
            <footer className="site-footer">
                <div className="container">
                    <div className="row">
                        <div className="col-12">
                            <figure className="footer-logo">
                                <a href="/"><img src={logoFooter} alt=""/></a>
                            </figure>
                            

                        
            Copyright &copy; {this.getYear()} todos los derechos reservados | by <i className="fa fa-heart-o" aria-hidden="true"></i> <a href="https://www.lupaweb.com" target="_blank">Lupa</a>

                            <div className="footer-social">
                                <ul className="flex flex-wrap justify-content-center align-items-center">
                                    <li><a href="/"><i className="fa fa-pinterest"></i></a></li>
                                    <li><a href="/"><i className="fa fa-linkedin"></i></a></li>
                                    <li><a href="/"><i className="fa fa-instagram"></i></a></li>
                                    <li><a href="/"><i className="fa fa-facebook"></i></a></li>
                                    <li><a href="/"><i className="fa fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        );
    }
}