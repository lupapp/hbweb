import React, {Component} from 'react';
import {Link} from 'react-router-dom'

export default class FormInscripcionEmail extends Component{
   
    render(){
        return(
            <div className="cont">
                <h2 className="title-2">Quiero Asistir</h2>
                <form action="https://hectorbarreralopez.com/api/controller/inscripcionMail.php" method="_POST">
                    <input type="hidden" name="curso" value="1"/>
                    <input type="text" className="inputFormin" name="nombre" placeholder="Nombre completo"  />
                    <input type="text" className="inputFormin" name="documento"placeholder="Documento" />
                    <select  className="inputFormin" name="tipod" placeholder="Tipo de documento" >
                        <option value="CC">CC</option>
                        <option value="Extrangería">Extrangería</option>
                        <option valuer="Pasaporte">Pasaporte</option>
                    </select>
                    <input type="text" className="inputFormin" name="email" placeholder="Correo electrónico" />
                    <input type="text" className="inputFormin" name="celular" placeholder="Celular" />
                    <input type="submit" className="register" value="Inscribirme"/>
                </form>
                
                <br/>
                
               
               
                <div className="reg"></div>
                <div className="sig"></div>
            </div>
        );
    }
}