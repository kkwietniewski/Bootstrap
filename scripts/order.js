
function check(e,value)
{
    let unicode=e.charCode? e.charCode : e.keyCode;
    if (value.indexOf(".") != -1)if( unicode == 46 )return false;
    if (unicode!=8)if((unicode<48||unicode>57)&&unicode!=46)return false;
}
function checkLength(fieldId)
{
    let length = 0;
    if(fieldId.attributes.name.value == "nameSurname"){
        length = 25;
    }else if(fieldId.attributes.name.value == "routeNumber"){
        length = 25;
    }else if(fieldId.attributes.name.value == "postcode"){
        length = 5;
    }else if(fieldId.attributes.name.value == "city"){
        length = 15;
    }else if(fieldId.attributes.name.value == "telephone"){
        length = 9;
    }
    let field = fieldId;
    let fieldLength = field.value.length;
    if(fieldLength <= length){
        return true;
    }
    else
    {
        let str = field.value;
        str = str.substring(0, str.length - 1);
        field.value = str;
    }
}
