import React, { Component } from 'react';

export default class Countdown extends Component{
    constructor(){
        super();
        this.state={
            time:'',
            seconds:'',
            minutes:'',
            hours:'',
            days:''
        };
    }
    
    getRemaintime = deadline =>{
        let now = new Date(),
        time = (new Date(deadline) - now + 1000)/1000,
        seconds = ('0' + Math.floor(time % 60)).slice(-2),
        minutes = ('0' + Math.floor(time / 60 % 60)).slice(-2),
        hours = ('0' + Math.floor(time / 3600 % 24)).slice(-2),
        days = ( Math.floor(time / (3600*24)));
        return{
            time,
            seconds,
            minutes,
            hours,
            days
        }
    }
    
   
    render(){
        setInterval(()=>{
            let t = this.getRemaintime('Fri Mar 14 2019 24:00:00 GMT-0500');
            this.setState({
                time:t.time,
                seconds:t.seconds,
                minutes:t.minutes,
                hours:t.hours,
                days:t.days
            });
            if(t.time<=1){
                clearInterval();
            }
           
        }, 1000)
        return(
            
            <div  className="countdown flex align-items-center" id="countdown">
                <div className="countdown-holder flex align-items-baseline">
                    <span className="dday">{this.state.days}</span>
                    <label>Days</label>
                </div>

                <div className="countdown-holder flex align-items-baseline">
                    <span className="dhour" id="dhour">{this.state.hours}</span>
                    <label>Hours</label>
                </div>

                <div className="countdown-holder flex align-items-baseline">
                    <span className="dmin" id="dmin">{this.state.minutes}</span>
                    <label>Minutes</label>
                </div>

                <div className="countdown-holder flex align-items-baseline">
                    <span className="dsec" id="dsec">{this.state.seconds}</span>
                    <label>Seconds</label>
                </div>
            </div>
            
        );
        
    }

}