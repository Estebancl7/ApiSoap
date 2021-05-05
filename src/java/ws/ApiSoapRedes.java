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
     * This is a sample web service operation
     */
    @WebMethod(operationName = "ProcesarPago")
    public int ProcesarPago(@WebParam(name = "total") int total, @WebParam(name = "pago") int pago) {
        if(pago>=total){
            return pago-total;
        }else{
            return -1;
        }
    }

    /**
     * Web service operation
     */
    @WebMethod(operationName = "nombre")
    public String nombre(@WebParam(name = "nombre") String nombre) {
        //TODO write your implementation code here:
        String nombre2 = nombre.split(" ");
        largo = nombre2.length();
        for (int i=largo; i=>0; i--){
            return nombre2[i];
        }
        
    }
    
    /**
     * Web service operation
     */
    @WebMethod(operationName = "VerificadorRut")
    public int VerificadorRut(@WebParam(name = "Rut") int Rut) {
        //TODO write your implementation code here:
        int suman = 0;
        int invertido = 0;
        int resto = 0;
        int explo = 0; 
        int parteDecimal = 0;
        int parteDecimal2 = 0;
        while (Rut > 0 ){
            resto = Rut % 10;
            invertido = invertido * 10 + resto;
            Rut /= 10;
        } 
        int multi = 2;
        for(int  i=0 ; i<invertido.length();i++){
            if(multi == 8){
                multi = 2;
            }
            suman += multi * (invertido % 10);
            invertido /= 10;
            partedparteDecimal2 = invertido % 1;
            invertido = inombre - parteDecimal2;
            multi++;
        }
        explo = suman / 11;
        parteDecimal = explo % 1;
        explo = explo - parteDecimal;
        explo *= 11;
        explo = suman - explo;
        suman = 11 - explo;
        if (suman  == 10){
            return 'k';
        }else if(suman == 11){
            return 0;
        }else{
            return suman;
        }

    }
    


}
