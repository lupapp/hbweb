import React, {Component} from 'react';
import Facturacion from './Facturacion';
export default class Forminscripcion2 extends Component{
    constructor(args){
        super(args);
        this.state={
            nombre:'',
            documento:'',
            tipod:'',
            email:'',
            celular:'',
            terminos:'',
            curso:'',
            mensaje:''
        }
    }
    
    onChange(e){
        this.setState( {
            [e.target.name]:e.target.value
        })
    }
    mostrar(){
        document.getElementById('mensaje').style.display='block';
    }
    ocultar(){
        document.getElementById('mensaje').style.display='none';
    }
    handleOnSubmit(e){
        e.preventDefault();
        fetch('https://www.hectorbarreralopez.com/api/controller/saveuser.php', {
            method: 'post',
            body: JSON.stringify(this.state)
           }).then(res => {
               console.log(res.statusText);
               if(res.statusText=='OK'){
                this.mostrar();
                setTimeout(this.ocultar, 3000);
                this.setState( {
                    mensaje:'Su inscripción ha sido exitosa'
                });
               }
           })
           .catch(err => console.log(err));
           
    }
    
    render(){
        return(
            <div className="cont">
                <h2 className="title-2">{this.state.tipod} Quiero Asistir</h2>
                <form onSubmit={this.handleOnSubmit.bind(this)} method="_POST">
                    <input type="hidden" name="curso" value="1"/>
                    <input type="text" className="inputFormin" name="nombre" placeholder="Nombre completo" onChange={this.onChange.bind(this)} />
                    <input type="text" className="inputFormin" name="documento"placeholder="Documento" onChange={this.onChange.bind(this)}/>
                    <select  className="inputFormin" name="tipod" placeholder="Tipo de documento" onChange={this.onChange.bind(this)}>
                        <option value="CC">CC</option>
                        <option value="Extrangería">Extranjería</option>
                        <option valuer="Pasaporte">Pasaporte</option>
                    </select>
                    <input type="text" className="inputFormin" name="email" placeholder="Correo electrónico" onChange={this.onChange.bind(this)}/>
                    <input type="text" className="inputFormin" name="celular" placeholder="Celular" onChange={this.onChange.bind(this)}/>
                    <div className="row">
                        <div className="col-md-12">
                                <p className="parrafo-info pl-3 pr-3 ">Llene los datos de facturación si necesita que la factura salga a nombre de otra persona o empresa.</p>
                                <a className="btn btn-info" href="/" >Llenar datos de facturación</a>
                        </div>
                        <Facturacion></Facturacion>
                        <div className="col-md-12">
                            <div className="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" checked name="terminos"  id="inlineCheckbox1" value="accet" onChange={this.onChange.bind(this)}/>
                                <label class="form-check-label" htmlFor="inlineCheckbox1">Terminos y condiciones <span className="linkVer">Ver</span></label>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <div className="alert alert-success" id="mensaje">{this.state.mensaje}</div>
                    <button type="submit" className="register">
                        <span>Inscribirme</span>
                    </button>
                </form>
                
                
                
               
                <div className="reg"></div>
                <div className="sig"></div>
            </div>
        );
    }
}