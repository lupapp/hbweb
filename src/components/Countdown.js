import React, { Component } from 'react';

export default class Countdown extends Component{
    
    getRemaintime = deadline =>{
        let now = new Date(),
        time = (new Date(deadline) - now + 1000)/1000,
        seconds = ('0' + Math.floor(time % 60)).slice(-2),
        minutes = ('0' + Math.floor(time / 60 % 60)).slice(-2),
        hours = ('0' + Math.floor(time / 3600 % 24)).slice(-2),
        days = ('0' + Math.floor(time / (3600*24)));
        console.log(Date());
        return{
            time,
            seconds,
            minutes,
            hours,
            days
        }
    }
    countDown =(deadline, final) =>{
        

        const timerUpdate= setInterval( () =>{
            let t = this.getRemaintime(deadline);
            const getDays =()=>{
                return {__html: t.days};
            }    
            if(t.time<=1){
                clearInterval(timerUpdate);
            }
        }, 1000)
        
    }
    
    render(){
        return(
            
            <div onLoad={this.countDown('Mon Feb 25 2020 22:35:53 GMT-0500', 'Actualización de ley de financiamento ya empezó')}  class="countdown flex align-items-center" id="countdown">
                <div class="countdown-holder flex align-items-baseline">
                    <span class="dday"  dangerouslySetInnerHTML={getDays()}/>
                    <label>Days</label>
                </div>

                <div class="countdown-holder flex align-items-baseline">
                    <span class="dhour" id="dhour"></span>
                    <label>Hours</label>
                </div>

                <div class="countdown-holder flex align-items-baseline">
                    <span class="dmin" id="dmin"></span>
                    <label>Minutes</label>
                </div>

                <div class="countdown-holder flex align-items-baseline">
                    <span class="dsec" id="dsec"></span>
                    <label>Seconds</label>
                </div>
            </div>
            
        );
        
    }

}