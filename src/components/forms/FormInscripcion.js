import React, {Component} from 'react';
import axios from 'axios';
export default class Forminscripcion extends Component{
    constructor(args){
        super(args);
        this.state={
            nombre:'',
            documento:'',
            tipod:'',
            email:'',
            celular:'',
            terminos:'',
            curso:''
        }
    }
    postPost({ nombre, documento, tipod, email, celular, terminos, curso }) {
        return axios({
          method: 'post',
          url: 'https://locarhost/api/controller/saveuser.php',
          data: {
            nombre,
            documento,
            tipod, 
            email,
            celular,
            terminos,
            curso
          }
        })
      }
    onChange(e){
        this.setState( {
            [e.target.name]:e.target.value
        })
    }
    /*onSubmit(){
        fetch(`http://hectorbarreralopez.com/api/`, {
            method: 'POST'
          })
          .then(res => res.json())
          .then(res => {
            if (res.success) { // exito
              alert('Se ha Inscrito');
            }
          });
    }*/
    handleSubmit = (e) => {
        e.preventDefault();
        console.log('enviado');
        this.postPost(this.state)
          .then((res) => console.log(res))
          .catch((err) => console.log(err));
      }
    render(){
        return(
            <div className="cont">
                <h2 className="title-2">Quiero Asistir</h2>
                <form action="./api/controller/inscripcionEmail.php" method="_POST">
                    <input type="hidden" name="curso" value="1"/>
                    <input type="text" className="inputFormin" name="nombre" placeholder="Nombre completo" onChange={this.onChange.bind(this)} />
                    <input type="text" className="inputFormin" name="documento"placeholder="Documento" onChange={this.onChange.bind(this)}/>
                    <select  className="inputFormin" name="tipod" placeholder="Tipo de documento" onChange={this.onChange.bind(this)}>
                        <option value="CC">CC</option>
                        <option value="Extrangería">Extrangería</option>
                        <option valuer="Pasaporte">Pasaporte</option>
                    </select>
                    <input type="text" className="inputFormin" name="email" placeholder="Correo electrónico" onChange={this.onChange.bind(this)}/>
                    <input type="text" className="inputFormin" name="celular" placeholder="Celular" onChange={this.onChange.bind(this)}/>
                    <div className="form-check">
                        <input className="form-check-input inputCheboxin" name="terminos" type="checkbox" value="accet" onChange={this.onChange.bind(this)} />
                        <label className="form-check-label labelCheckbox" htmlFor="defaultCheck1">
                            Terminos y condiciones <span className="linkVer">Ver</span>
                        </label>
                    </div>
                    <button type="submit" className="register">
                        <span>Inscribirme</span>
                    </button>
                </form>
                
                <br/>
                
               
                <div className="reg"></div>
                <div className="sig"></div>
            </div>
        );
    }
}