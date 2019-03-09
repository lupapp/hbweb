import React, { Component } from 'react';
import './App.css';
import './assets/style.css';
import './assets/css/imagehover.css';
import Header from './components/HeaderHome';
//import Styled from 'styled-components';
import FooterHome from './components/FooterHome';
import Home from './components/Page/Home';
import {BrowserRouter as Router, Switch, Route} from 'react-router-dom';
import Facturacion from './components/Page/Facturacion';

/*const AppWrapper =Styled.div`
    display:flex;
    justify-center:center;
`;*/
class App extends Component {
  render() {
        return (
            <Router>
                <div className="App">
                    <Header></Header>
                    <Switch>
                        <Route path="/" exact component={Home}/>
                        <Route path="/datos-facturacion" component={Facturacion}/>
                    </Switch>
                    <FooterHome></FooterHome>
                </div>
            </Router>
        );
    }
}

export default App;
