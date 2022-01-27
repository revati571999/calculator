var arr=[];
let screen = document.getElementById('screen');
buttons = document.querySelectorAll('button');
let screenValue = '';
for (item of buttons) {
    item.addEventListener('click', (e) => {
        buttonText = e.target.innerText;
        // console.log('Button text is ', buttonText);
        if (buttonText == '^') {
            buttonText = '**';
            screenValue += buttonText;
            screen.value = screenValue;
        }
        else if (buttonText == 'C') {
            screenValue = "";
            screen.value = screenValue;
        }
        else if (buttonText == '=') {
            screen.value = eval(screenValue);
            his(screenValue,screen.value);
        }
        else {
            screenValue += buttonText;
            screen.value = screenValue;
        }

    })
}

function his(x,y){
    let ans=x + '=' + y;
    console.log(ans);
    arr.push(ans);
    var list=document.getElementById("history");
    var li=document.createElement("li");
    arr.forEach(function (val,ind){
        li.innerHTML=val;
        list.appendChild(li);
    })
}




