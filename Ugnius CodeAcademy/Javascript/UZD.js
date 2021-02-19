'strict'
let a = false;
function uzdspalva()
{

    let divai = document.querySelectorAll(".square");
    if(a === true)
        {           
            for (i = 0; divai.length > i; i++)
            {
                divai[i].style.backgroundColor = "white";
                document.body.style.background = "white";
                document.getElementsByClassName("start")[0].disabled = false;
            }
            a = false;
            return;
        }
    else if (a===false)
        {
            for (i = 0; divai.length > i; i++)
                {
                    let spa = String(spalva());

                    divai[i].style.backgroundColor = spa;
                    document.body.style.background = spa;

                }

                setTimeout(uzdspalva, 10);
        }
       
}

function random (min, max)
{

    let a = Math.floor(Math.random() * (max - min + 1) - min);
    return a;
}

function spalva ()
{

    let spal = `rgba(${random(0, 255)}, ${random(0, 255)}, ${random(0, 255)}, 0.8)`;
    console.log(spal);
    return spal;

}
function stop ()
{

    a = true;
    return a;

}
function disableBtn() {
    document.getElementsByClassName("start")[0].disabled = true;
}

function bendra ()
{
    uzdspalva();
    disableBtn();


}
