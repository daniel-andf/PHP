/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var navDrawer = document.getElementsByClassName('msg')[0];
var navBtn = document.getElementsByClassName('submit-msg')[0];
var navDrawer2 = document.getElementsByClassName('search-form-title')[0];
var navBtn2 = document.getElementsByClassName('fa-search')[0];
var navDrawer3 = document.getElementsByClassName('primary-menu')[0];
var navBtn3 = document.getElementsByClassName('fa-bars')[0];
var navBtn4 = document.getElementsByClassName('menu-item-232')[0];


if (navBtn !== undefined){
    navBtn.addEventListener('click',function(){
	navDrawer.classList.toggle('msg-off');
    });
}

if (navBtn2 !== undefined){
    navBtn2.addEventListener('click',function(){
            navDrawer2.classList.toggle('search-off');
    });
}

if (navBtn3 !== undefined){
    navBtn3.addEventListener('click',function(){
            navDrawer3.classList.toggle('menu-off');
    });
}

if (navBtn4 !== undefined){
    navBtn4.addEventListener('click',function(){
            navDrawer3.classList.toggle('menu-off');
    });
}
