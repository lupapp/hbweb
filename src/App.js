import React, { Component } from 'react';
import './App.css';
import './assets/style.css';
import logo from './assets/images/logo.jpg'
import Countdown from './components/Countdown';
import HomePageContenido from './components/HomePageContenido';
import SimpleSlider from './components/Slider';
import Styled from 'styled-components';
const year =document.write(new Date().getFullYear());
const AppWrapper =Styled.div`
    display:flex;
    justify-center:center;
`;
class App extends Component {
  render() {
    return (
      <div className="App">
        <header className="site-header">
          <div className="header-bar">
              <div className="container-fluid">
                  <div className="row align-items-center">
                      <div className="col-10 col-lg-2 order-lg-1">
                          <div className="site-branding">
                              <div className="site-title">
                                  <a href="/"><img src={logo} alt="logo"/></a>
                              </div>
                          </div>
                      </div>

                      <div className="col-2 col-lg-7 order-3 order-lg-2">
                          <nav className="site-navigation">
                              <div className="hamburger-menu d-lg-none">
                                  <span></span>
                                  <span></span>
                                  <span></span>
                                  <span></span>
                              </div>

                              <ul>
                                  <li><a href="/">Home</a></li>
                                  <li><a href="/">About us</a></li>
                                  <li><a href="/">Events</a></li>
                                  <li><a href="/">News</a></li>
                                  <li><a href="/">Contact</a></li>
                              </ul>
                          </nav>
                      </div>

                      <div className="col-lg-3 d-none d-lg-block order-2 order-lg-3">
                          <div className="buy-tickets">
                              <a className="btn gradient-bg" href="/">Buy Tickets</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div className="swiper-container hero-slider">
            <div className="swiper-wrapper">
              <div className="swiper-slide header-bg" data-date="2018/05/01" >
                  <div className="hero-content">
                      <div className="container">
                          <div className="row">
                              <div className="col flex flex-column justify-content-center">
                                  <div className="entry-header">
                                      <div className="countdown flex align-items-center">
                                      </div>
                                      <Countdown></Countdown>
                                      <h2 className="entry-title">1 We have the best events. <br/>Get your tiket now!</h2>
                                  </div>

                                  <div className="entry-footer">
                                      <a className="btn gradient-bg" href="/">Order here</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>  
        </header>
        <AppWrapper>
            <SimpleSlider/>
        </AppWrapper>
        
        <HomePageContenido></HomePageContenido>
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

      </div>
    );
  }
}

export default App;
