import React, {Component} from 'react';
//import Menu from './Menu';
import logo from '../assets/images/logo.jpg'
export default class HeaderHome extends Component{
    render(){
        return(
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
                      </div>

                      <div className="col-lg-3 d-none d-lg-block order-2 order-lg-3">
                         
                      </div>
                  </div>
              </div>
          </div>
        );
    }
}