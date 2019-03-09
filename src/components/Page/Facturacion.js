import React, {Component} from 'react';
export default class Facturacion extends Component{
    render(){
        return(
            <div className="facturacion">
                <input type="hidden" name="curso" value="1"/>
                <input type="text" className="inputFormin" name="razonsocial" placeholder="Razón social"/>
                <input type="text" className="inputFormin" name="rut" placeholder="Nit o CC"/>
                <input type="text" className="inputFormin" name="direccion" placeholder="Dirección factura"/>
                <input type="text" className="inputFormin" name="telefono" placeholder="Teléfono factura"/>
            </div>
        );
    }
}