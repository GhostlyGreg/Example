$(function() {
	
// var str = document.getElementsByClassName("hasMana")
// var mana = $( str[0] ).text() ;
// var text = $( str[1] ).text() ;
// console.log( mana ) ;
// console.log( text ) ;

// Using jquery to change text to image 

//http://stackoverflow.com/questions/1144783/replacing-all-occurrences-of-a-string-in-javascript
// **** http://stackoverflow.com/questions/6212250/jquery-replacing-text-inside-html
// Making it work gloabaly
// http://stackoverflow.com/questions/1967119/why-does-javascript-replace-only-first-instance-when-using-replace




// Tap Symbol

$('.hasMana').html(function(index, oldhtml) {
	return oldhtml.replace(new RegExp("{T}", "g"), '<img class=mana src="images/mana/Tap.gif"> ' );
});

// Untap Symbol
$('.hasMana').html(function(index, oldhtml) {
	return oldhtml.replace(new RegExp("{Q}", "g"), '<img class=mana src="images/mana/Untap.gif"> ' );
});


// Blue Mana 
$('.hasMana').html(function(index, oldhtml) {
	return oldhtml.replace(new RegExp("{U}", "g"), '<img class=mana src="images/mana/Manau.gif"> ' );
});

// Red Mana 
$('.hasMana').html(function(index, oldhtml) {
	return oldhtml.replace(new RegExp("{R}", "g"), '<img class=mana src="images/mana/Manar.gif"> ' );
});

// Green Mana 
$('.hasMana').html(function(index, oldhtml) {
	return oldhtml.replace(new RegExp("{G}", "g"), '<img class=mana src="images/mana/Manag.gif"> ' );
});

// Black Mana 
$('.hasMana').html(function(index, oldhtml) {
	return oldhtml.replace(new RegExp("{B}", "g"), '<img class=mana src="images/mana/Manab.gif"> ' );
});

// White Mana 
$('.hasMana').html(function(index, oldhtml) {
	return oldhtml.replace(new RegExp("{W}", "g"), '<img class=mana src="images/mana/Manaw.gif"> ' );
});

// X Mana 
$('.hasMana').html(function(index, oldhtml) {
	return oldhtml.replace(new RegExp("{X}", "g"), '<img class=mana src="images/mana/Manax.gif"> ' );
});

// 0 Mana
$('.hasMana').html(function(index, oldhtml) {
	return oldhtml.replace(new RegExp( '\\{0}', "g"), '<img class=mana src="images/mana/Mana0.gif"> ' );
});

// 1 Mana
$('.hasMana').html(function(index, oldhtml) {
    return oldhtml.replace('\{1}', '<img class=mana" src="images/mana/Mana1.gif">');
});

// 2 Mana
$('.hasMana').html(function(index, oldhtml) {
    return oldhtml.replace('\{2}', '<img class=mana" src="images/mana/Mana2.gif">');
});

// 3 Mana
$('.hasMana').html(function(index, oldhtml) {
    return oldhtml.replace('\\{3}', '<img class=mana" src="images/mana/Mana3.gif">');
});

// 4 Mana
$('.hasMana').html(function(index, oldhtml) {
    return oldhtml.replace('\\{4}', '<img class=mana" src="images/mana/Mana4.gif">');
});

// 5 Mana
$('.hasMana').html(function(index, oldhtml) {
    return oldhtml.replace('\\{5}', '<img class=mana" src="images/mana/Mana5.gif">');
});

// 6 Mana
$('.hasMana').html(function(index, oldhtml) {
    return oldhtml.replace('\\{6}', '<img class=mana" src="images/mana/Mana6.gif">');
});

// 7 Mana
$('.hasMana').html(function(index, oldhtml) {
    return oldhtml.replace('\\{7}', '<img class=mana" src="images/mana/Mana7.gif">');
});

// 8 Mana
$('.hasMana').html(function(index, oldhtml) {
    return oldhtml.replace('\\{8}', '<img class=mana" src="images/mana/Mana8.gif">');
});

// 9 Mana
$('.hasMana').html(function(index, oldhtml) {
    return oldhtml.replace('\\{9}', '<img class=mana" src="images/mana/Mana1.gif">');
});

// 10 Mana
$('.hasMana').html(function(index, oldhtml) {
    return oldhtml.replace('\\{10}', '<img class=mana" src="images/mana/Mana10.gif">');
});

// 11 Mana
$('.hasMana').html(function(index, oldhtml) {
    return oldhtml.replace('\\{11}', '<img class=mana" src="images/mana/Mana11.gif">');
});

// 12 Mana
$('.hasMana').html(function(index, oldhtml) {
    return oldhtml.replace('\\{12}', '<img class=mana" src="images/mana/Mana12.gif">');
});

// 13 Mana
$('.hasMana').html(function(index, oldhtml) {
    return oldhtml.replace('\\{13}', '<img class=mana" src="images/mana/Mana13.gif">');
});

// 14 Mana
$('.hasMana').html(function(index, oldhtml) {
    return oldhtml.replace('\\{14}', '<img class=mana" src="images/mana/Mana14.gif">');
});

// 15 Mana
$('.hasMana').html(function(index, oldhtml) {
    return oldhtml.replace('\\{15}', '<img class=mana" src="images/mana/Mana15.gif">');
});

// 16 Mana
$('.hasMana').html(function(index, oldhtml) {
    return oldhtml.replace('\\{16}', '<img class=mana" src="images/mana/Mana16.gif">');
});

// 17 Mana
$('.hasMana').html(function(index, oldhtml) {
    return oldhtml.replace('\\{17}', '<img class=mana" src="images/mana/Mana16.gif">');
});

// 2/U Mana 
$('.hasMana').html(function(index, oldhtml) {
    return oldhtml.replace('\{2/U}', '<img class=mana" src="images/mana/Mana2u.png">');
});

// 2/R Mana
$('.hasMana').html(function(index, oldhtml) {
    return oldhtml.replace('\{2/R}', '<img class=mana" src="images/mana/Mana2r.png">');
});

// 2/G Mana
$('.hasMana').html(function(index, oldhtml) {
    return oldhtml.replace('\{2/G}', '<img class=mana" src="images/mana/Mana2g.png">');
});

// 2/B Mana
$('.hasMana').html(function(index, oldhtml) {
    return oldhtml.replace('\{2/B}', '<img class=mana" src="images/mana/Mana2b.png">');
});

// 2/W Mana
$('.hasMana').html(function(index, oldhtml) {
    return oldhtml.replace('\{2/W}', '<img class=mana" src="images/mana/Mana2w.png">');
});

// G/W Mana
$('.hasMana').html(function(index, oldhtml) {
	return oldhtml.replace(new RegExp("{G/W}", "g"), '<img class=mana src="images/mana/Managw.gif"> ' );
});


});