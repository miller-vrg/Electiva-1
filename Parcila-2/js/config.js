function save(){
    console.log("hello");
    var result ="<?php " +
    "guardar(" +
        "$id," +
        "$marca," +
        "$modelo,"+
        "$version,"+
        "$color,"+
        "$puestos,"+
        "$puertas,"+
       "$combustible,"+
        "$kilometros,"+
       "$cilindraje,"+
        "$categoria);?>";
    document.write(result);
    
} 
    