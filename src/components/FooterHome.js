
import React, {Component} from 'react';
import logo from '../assets/images/logo.jpg'
const year =document.write(new Date().getFullYear());
export default class FooterHome extends Component{
    render(){
        return(
            <footer className="site-footer">
                <div className="container">
                    <div className="row">
                        <div className="col-12">
                            <figure className="footer-logo">
                                <a href="/"><img src={logo} alt=""/></a>
                            </figure>
                            <nav className="footer-navigation">
                                <ul className="flex flex-wrap justify-content-center align-items-center">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/">About us</a></li>
                                    <li><a href="/">Events</a></li>
                                    <li><a href="/">News</a></li>
                                    <li><a href="/">Contact</a></li>
                                </ul>
                            </nav>

                        
            Copyright &copy;{year} All rights reserved | This template is made with <i className="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" >Colorlib</a>

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