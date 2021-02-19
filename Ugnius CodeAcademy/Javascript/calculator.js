'strict'

let array =[];
let display_content = document.getElementsByClassName("display")[0];
let action;
let result;
function skaicius(e) {

    

     display_content.innerHTML = display_content.innerHTML + e.value;   
    
    
}



function opadd() {



            array.push(display_content.innerHTML);
            console.log(array);
            display_content.innerHTML = "";
            action = "plus";



}

function opsub() {
    
    array.push(display_content.innerHTML);
    console.log(array);
    display_content.innerHTML = "";
    action = "minus";

}

function opmul() {
    
    array.push(display_content.innerHTML);
    console.log(array);
    display_content.innerHTML = "";
    action = "multiply";

}

function opdiv() {
    
    array.push(display_content.innerHTML);
    console.log(array);
    display_content.innerHTML = "";
    action = "divide";

}

function opresult() {

            
            array.push(display_content.innerHTML);
            console.log(array);

            if (action === "plus")
                {
                    result = Number(array[0]) + Number(array[1]);
                    array = [];
                    display_content.innerHTML = result;



                }

            else if (action === "minus")
                {
                    result = Number(array[0]) - Number(array[1]);
                    array = [];
                    display_content.innerHTML = result;
                }
            else if (action === "multiply")
                {
                    result = Number(array[0]) * Number(array[1]);
                    array = [];
                    display_content.innerHTML = result;
                }
            else if (action === "divide")
                {
                    result = Number(array[0]) / Number(array[1]);
                    array = [];
                    display_content.innerHTML = result;

                }
}

function reset() {


    display_content.innerHTML = "";
    array = [];
}