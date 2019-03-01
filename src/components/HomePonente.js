import React, { Component } from 'react';
export default class HomePonente extends Component{
    render(){
        return(
            <div className="homepage-next-events">
                <div className="container">
                    <div className="row">
                        <div className="next-events-section-header">
                            <h2 className="entry-title">Our next events</h2>
                            <p>Vestibulum eget lacus at mauris sagittis varius. Etiam ut venenatis dui. Nullam tellus risus, pellentesque at facilisis et, scelerisque sit amet metus. Duis vel semper turpis, ac tempus libero. Maecenas id ultrices risus. Aenean nec ornare ipsum, lacinia.</p>
                        </div>
                    </div>

                    <div className="row">
                        <div className="col-12 col-sm-6 col-md-4">
                            <div className="next-event-wrap">
                                <figure>
                                    <a href="#"><img src="images/next1.jpg" alt="1"/></a>

                                    <div className="event-rating">8.9</div>
                                </figure>

                                <header className="entry-header">
                                    <h3 className="entry-title">U2 Concert in Detroitt</h3>

                                    <div className="posted-date">Saturday <span>Jan 27, 2018</span></div>
                                </header>

                                <div className="entry-content">
                                    <p>Vestibulum eget lacus at mauris sagittis varius. Etiam ut venenatis dui. Nullam tellus risus.</p>
                                </div>

                                <footer className="entry-footer">
                                    <a href="#">Buy Tikets</a>
                                </footer>
                            </div>
                        </div>

                        <div className="col-12 col-sm-6 col-md-4">
                            <div className="next-event-wrap">
                                <figure>
                                    <a href="#"><img src="images/next1.jpg" alt="1"/></a>

                                    <div className="event-rating">7.9</div>
                                </figure>

                                <header className="entry-header">
                                    <h3 className="entry-title">TED Talk California</h3>

                                    <div className="posted-date">Saturday <span>Jan 27, 2018</span></div>
                                </header>

                                <div className="entry-content">
                                    <p>Eget lacus at mauris sagittis varius. Etiam ut ven enatis dui. Nullam tellus risus, pellentesque.</p>
                                </div>

                                <footer className="entry-footer">
                                    <a href="#">Buy Tikets</a>
                                </footer>
                            </div>
                        </div>

                        <div className="col-12 col-sm-6 col-md-4">
                            <div className="next-event-wrap">
                                <figure>
                                    <a href="#"><img src="images/next1.jpg" alt="1"/></a>

                                    <div className="event-rating">9.9</div>
                                </figure>

                                <header className="entry-header">
                                    <h3 className="entry-title">Ultra Music Miami</h3>

                                    <div className="posted-date">Saturday <span>Jan 27, 2018</span></div>
                                </header>

                                <div className="entry-content">
                                    <p>Lacus at mauris sagittis varius. Etiam ut venenatis dui. Nullam tellus risus, pellentesque at facili.</p>
                                </div>

                                <footer className="entry-footer">
                                    <a href="#">Buy Tikets</a>
                                </footer>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}