const accordion = document.getElementsByClassName('visi-silat');

for (i = 0; i<accordion.length; i++){
    accordion[i].addEventListener('click', function(){
        this.classList.toggle('active')
    })
}

const minimizeIcon = document.getElementById("minimize-icon");
const menuIcon = document.getElementById("menu-icon");
const menuSosmed = document.getElementById("sosmed-icon");

minimizeIcon.addEventListener('click', () => {
    menuSosmed.classList.toggle("hidden");
    menuIcon.classList.toggle("hidden");
});

let judul = document.querySelector('.judul');

window.onscroll = function(){
    let Y = window=scrollY;

    judul.style.transform = 'translateY('+ Y/2.5 + 'px)';
}

var derivat = document.getElementById('gambar-derivat2');
var derivat1 = document.getElementById('gambar-derivat3');
var gambarderivat = 0;

function derivats()
{
    if(gambarderivat == 0)
    {
        derivat.style.opacity = '1';
        gambarderivat = 1;
    }
    else if (gambarderivat == 1)
    {
        derivat1.style.opacity = '1';
        gambarderivat = 2;
    }
    else
    {
        derivat.style.opacity = '0';
        derivat1.style.opacity = '0';
        gambarderivat = 0;
    }
}

var derivat2 = document.getElementById('gambar-derivat5');
var derivat3 = document.getElementById('gambar-derivat6');
var gambarderivats = 0;

function derivats1()
{
    if(gambarderivats == 0)
    {
        derivat2.style.opacity = '1';
        gambarderivats = 1;
    }
    else if (gambarderivats == 1)
    {
        derivat3.style.opacity = '1';
        gambarderivats = 2;
    }
    else
    {
        derivat2.style.opacity = '0';
        derivat3.style.opacity = '0';
        gambarderivats = 0;
    }
}

var grig = document.getElementById('gambar-grignard2');
var grigs = 0;

function grignard()
{
    if(grigs == 0)
    {
        grig.style.opacity = '1';
        grigs = 1;
    }
    else
    {
        grig.style.opacity = '0';
        grigs = 0;
    }
}

var grig1 = document.getElementById('gambar-grignard4');
var grigs1 = 0;

function grignard1()
{
    if(grigs1 == 0)
    {
        grig1.style.opacity = '1';
        grigs1 = 1;
    }
    else
    {
        grig1.style.opacity = '0';
        grigs1 = 0;
    }
}

var hidri = document.getElementById('hidri1');
var hidri1 = document.getElementById('hidri2');
var pembuatan = 0;

function paketan()
{
    if(pembuatan == 0)
    {
        hidri.style.opacity = '1';
        pembuatan = 1;
    }
    else if(pembuatan == 1)
    {
        hidri1.style.opacity = '1';
        pembuatan = 2;
    }
    else
    {
        hidri.style.opacity = '0';
        hidri1.style.opacity = '0';
        pembuatan = 0;
    }
}

var image = document.getElementById('gambar');
var image1 = document.getElementById('gambar1');
var image2 = document.getElementById('gambar2');
var image3 = document.getElementById('gambar3');
var image4 = document.getElementById('gambar4')
var opac = 1;

function fadeOut()
{
    if(opac == 1)
    {
        image1.style.opacity = '1';
        opac = 2;
    }
    else if(opac == 2)
    {
        image2.style.opacity = '1';
        opac = 3;
    }
    else if(opac == 3)
    {
        image3.style.opacity = '1';
        opac = 4;
    }
    else if(opac == 4)
    {
        image4.style.opacity = '1';
        opac = 5;
    }
    else
    {
        alert('Materi nya sudah selesai');
    }
}

function hideOut()
{
    if(opac == 5)
    {
        image4.style.opacity = '0';
        opac = 4;
    }
    else if(opac == 4)
    {
        image3.style.opacity = '0';
        opac = 3;
    }
    else if(opac == 3)
    {
        image2.style.opacity = '0';
        opac = 2;
    }
    else if(opac == 2)
    {
        image1.style.opacity = '0';
        opac = 1;
    }
}