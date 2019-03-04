import React, {Component} from 'react';
import lupa from '../assets/images/lupa.png';
import alacena from '../assets/images/alacena.png';
import dulcemargarita from '../assets/images/logodulcemargarita.png';
export default class HomePartners extends Component{
    render(){
        return(
            <div class="homepage-regional-events">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div >
                                <header className="entry-header">
                                    <h2 className="entry-title-partner">Colaboradores</h2>
                                </header>

                                <div className="events-partners-logos flex flex-wrap justify-content-between align-items-center">
                                    <div className="event-partner-logo">
                                        <a href="#"><img src={lupa} alt=""/></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
    
}