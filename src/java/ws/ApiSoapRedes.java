/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ws;

import javax.jws.WebService;
import javax.jws.WebMethod;
import javax.jws.WebParam;

/**
 *
 * @author esteb
 */
@WebService(serviceName = "ApiSoapRedes")
public class ApiSoapRedes {

    /**
     * Web service operation
     * @param nombre
     * @return
     */
    @WebMethod(operationName = "nombre")
    public String[] nombre(@WebParam(name = "nombre") String nombre) {
        //TODO write your implementation code here:
        String[] nombre2 = nombre.split(" ");
        return nombre2;
        
    }
    
    /**
     * Web service operation
     * @param Rut
     * @return
     */
    @WebMethod(operationName = "VerificadorRut")
    public int VerificadorRut(@WebParam(name = "Rut") int Rut) {
        //TODO write your implementation code here:
        int suman = 0;
        int invertido = 0;
        int resto;
        int explo; 
        int parteDecimal;
        int parteDecimal2;
        int auxiliar = Rut;

        int multi = 2;
        String invertidostr = String.valueOf(Rut);
        for(int  i=0 ; i<invertidostr.length();i++){
            if(multi == 8){
                multi = 2;
            }
            suman += multi * (auxiliar%10);
            auxiliar /= 10;
            parteDecimal2 = auxiliar%1;
            auxiliar -= parteDecimal2;
            multi++;
        }
        explo = suman / 11;
        parteDecimal = explo % 1;
        explo = explo - parteDecimal;
        explo *= 11;
        explo = suman - explo;
        suman = 11 - explo;
        if(suman == 10){
            return 'k';
        }else if(suman == 11){
            return 0;
        }else{
            return suman;
        }            
    }



}


