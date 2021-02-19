'use strict'

/*
alert(`Your name is ${name} `);

function la () {
    alert(1);
}
la();

let objektas = {
    name: 5,
    vardas: "rig",
    potat: function(){return 5 + this.name}
}

alert(objektas.potat());

var myCar = new Object();
myCar.make = 'Ford';
myCar.model = 'Mustang';
myCar.year = 1969;
myCar.nowyear = 16 + myCar.year;

for(let i; i <=10; i++)
    {
        console.log(i);
    }




let arejus = [1, 2, 3, 4, 5, 6];


for(let i = 0; i < arejus.length; i++)
    {
        console.log(arejus[i]);

    }

function random (min, max)
{

    return Math.floor(Math.random() * (max - min + 1) - min);

}



let total_health = 100;

let health_potion = random(25, 50);

if (parseInt(Math.random() * 2) === 0)
    {

        total_health = total_health + health_potion;

    }
else if (parseInt(Math.random() * 2) === 1)
    {

        total_health = total_health + parseInt(health_potion/3);

    }

console.log(total_health);



    function countdown()
{

    for(let i = 0; i <= 3; i++)
        {
            alert(3 - i);

        }

}
let variantas = prompt("True ar False?", "" )

if (variantas === "true" || variantas === "True" || variantas === "Tiesa" || variantas === "tiesa")
{

    countdown();
    alert("Tu pasirinkai tiesa!");

}

else if(variantas === "false" || variantas === "False" || variantas === "melas" || variantas === "Melas")
    {

        countdown();
        alert("Tu pasirinkai mela!")

    }

else
    {

        alert("Pasirink galima atsakyma!")

    }
    
    
    let h1 = document.getElementById("myH1");
    
    h1.innerHTML = "LALALA";
    function keisti_spalva () {
        
                h1.style.color = "yellow";
        
        
            }
*/



let obj2 = {};


function tikrinti()
{
    let vardas = document.getElementById("name").value;
    let pavarde = document.getElementById("surname").value;
    let email = document.getElementById("email").value;
    let numeris = document.getElementById("number").value;
    let raides = new RegExp(/^[A-Za-z]+$/);
    let skaiciai = new RegExp(/^[0-9]+$/);
    let com = new RegExp(".com");
    let numer86 = new RegExp("86");
    /*let plus = "+";
    let numer370 = new RegExp(`${plus}370`);*/
    let eta = new RegExp("@");
    let valid = false;

    if (tikrinti_vardas(vardas, raides, valid), tikrinti_pavarde(pavarde, raides, valid), tikrinti_mailas(email, eta, com, valid), tikrinti_numeris(numeris, skaiciai, numer86, valid) === true)
    {

        let obj = new naujas_objektas(vardas, pavarde, email, numeris);
        accounts(obj, iskaicius(obj2), obj2);

    }

}

function naujas_objektas (vardas, pavarde, email, numeris)
{
    this.name = vardas;
    this.surname = pavarde;
    this.mail = email;
    this.number = numeris;



}

function tikrinti_vardas(vardas, raides, valid)
{

    if (raides.test(vardas) === false)
        {
            alert("Write a valid name");
            
            

        }
    else
    {

        valid = true;
        

    }
        return valid;


}
function tikrinti_pavarde(pavarde, raides, valid)
{
    if (raides.test(pavarde) === false)
        {

            alert("Write a valid surname");
            
        }

        else
            {
                valid = true;
                
            }
                return valid;
}
function tikrinti_mailas(email, com, eta, valid)
{

    if (com.test(email) === false || eta.test(email) === false)
        {

            alert("Write a valid Email");
            
        }

        else
            {
        
                valid = true;
                
        
            }
                return valid;

}
function tikrinti_numeris(numeris, skaiciai, numer86, valid)
{

    if (skaiciai.test(numeris) === false || numer86.test(numeris) === false /*|| numer370.test(numeris) === false*/)
        {
            alert("Write a valid number")
            
        }
        else
            {
        
                valid = true;
                
        
            }
                return valid;
        
}
function accounts(objektas, i, objektas2)
{

    objektas2[i] = objektas;



}

function iskaicius(objektas2)
{

    let i = Object.keys(objektas2).length;
    return i;

}