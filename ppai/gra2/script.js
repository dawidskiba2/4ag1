var character = document.getElementById('character');

function jump(){
    if(character.classList == 'animate') {return}
    character.classList.add('animate');
    setTimeout(function(){
        character.classList.remove('animate');
    }, 300);
}