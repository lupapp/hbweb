import React, { Component } from 'react';
import london from '../assets/images/events-in-london.jpg';
import modern from '../assets/images/modern.jpg';
import img1 from '../assets/images/1.jpg';
import img2 from '../assets/images/2.jpg';
import img3 from '../assets/images/3.jpg';
import july from '../assets/images/check-july.png';
import festivals from '../assets/images/summer-festivals.jpg';
import img90 from '../assets/images/90.jpg';
import smoke from '../assets/images/smoke.jpg';
import festival from '../assets/images/summer-festival.jpg';
import autum from '../assets/images/autumn.jpg';

export default class HomePageContenido extends Component{
    render(){
        return(
            <div className="homepage-featured-events">
                <div className="container">
                    <div className="row">
                        <div className="col-12">
                            <div className="featured-events-wrap flex flex-wrap justify-content-between">
                                <div className="event-content-wrap positioning-event-1">
                                    <figure>
                                        <a href="/"><img src={img1} alt="1"/></a>
                                    </figure>

                                    <header className="entry-header">
                                        <h3 className="entry-title shadow-text">Conceptos básicos</h3>

                                    </header>
                                </div>

                                <div className="event-content-wrap positioning-event-2">
                                    <figure>
                                        <a href="/"><img src={modern} alt=""/></a>
                                    </figure>

                                    <header className="entry-header">
                                        <h3 className="entry-title">Street art fest</h3>

                                        <div className="posted-date">November 28</div>
                                    </header>
                                </div>

                                <div className="event-content-wrap positioning-event-3">
                                    <figure>
                                        <a href="/"><img src={img3} alt=""/></a>
                                    </figure>

                                    <header className="entry-header">
                                        <h3 className="entry-title">Anabelle in concert</h3>

                                        <div className="posted-date">August 28</div>
                                    </header>
                                </div>

                                <div className="event-content-wrap positioning-event-4 half">
                                    <figure>
                                        <a href="/"><img src={london} alt=''/></a>
                                    </figure>
                                </div>

                                <div className="event-content-wrap positioning-event-5 half">
                                    <figure>
                                        <a href="/"><img src={july} alt=""/></a>
                                    </figure>
                                </div>

                                <div className="event-content-wrap positioning-event-6 half">
                                    <figure>
                                        <a href="/"><img src={festivals} alt=""/></a>
                                    </figure>
                                </div>

                                <div className="event-content-wrap positioning-event-7">
                                    <figure>
                                        <a href="/"><img src={img90} alt=""/></a>
                                    </figure>

                                    <header className="entry-header">
                                        <h3 className="entry-title">90’s Disco Night</h3>

                                        <div className="posted-date">August 28</div>
                                    </header>
                                </div>

                                <div className="event-content-wrap positioning-event-8">
                                    <figure>
                                        <a href="/"><img src={img2} alt="1"/></a>
                                    </figure>

                                    <header className="entry-header">
                                        <h3 className="entry-title">Modern Ballet</h3>

                                        <div className="posted-date">August 25</div>
                                    </header>
                                </div>

                                <div className="event-content-wrap positioning-event-9">
                                    <figure>
                                        <a href="/"><img src={smoke} alt=""/></a>
                                    </figure>

                                    <header className="entry-header">
                                        <h3 className="entry-title">Smoke show</h3>

                                        <div className="posted-date">August 28</div>
                                    </header>
                                </div>

                                <div className="event-content-wrap positioning-event-10 half">
                                    <figure>
                                        <a href="/"><img src={festival} alt=""/></a>
                                    </figure>
                                </div>

                                <div className="event-content-wrap positioning-event-11 half">
                                    <figure>
                                        <a href="/"><img src={autum} alt=""/></a>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }

}