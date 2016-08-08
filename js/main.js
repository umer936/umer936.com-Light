$(document).ready(function() {
    $('ul.tabs').tabs();
    // $('.s12').fadeOut('slow');
    $('.s12').fadeIn('slow');
});
$(document).ready(function() {
    $('.materialboxed').materialbox();
});
$(document).ready(function() {
    $('.materialboxed').materialbox();
});
$(document).ready(function() {
    $('.collapsible').collapsible();
});
$(document).on('click', '#contactbutton', function() {
    $('li .active').removeClass('active');
    $('a[href^="#contact"]').addClass('active');
});
$(document).on('click', '#themeswitcher', function() {
    $('.material-icons').toggleClass('md-dark').toggleClass('md-light');
    $('body').toggleClass('color2').toggleClass('color1');
    $('textarea').toggleClass('dark');
    $('.intro').toggleClass('blue').toggleClass('blue-grey');
    if ($('body').hasClass('color1')) {
        $('h5').css('color', 'rgba(0,0,0,0.87)');
        $('h6').css('color', 'rgba(0,0,0,0.87)');
        $('textarea').css('color', 'rgba(0,0,0,0.87)');
        $('.container').css('color', 'rgba(0,0,0,0.87)');
        $('#wordsforcoloring').text('Too bright for your eyes?');
        $('#colorword').text('dark');
    } else {
        $('h5').css('color', '#9e9e9e');
        $('h6').css('color', '#9e9e9e');
        $('textarea').css('color', '#9e9e9e');
        $('.container').css('color', '#9e9e9e');
        $('#wordsforcoloring').text('Nah, change it back');
        $('#colorword').text('light');
    }
});

var height = $('#header').outerHeight();
var sticky = document.querySelector('.sticky');
var origOffsetY = sticky.offsetTop;
function onScroll(e) {
    window.scrollY >= origOffsetY ? (sticky.classList.add('fixed'), $('body').css('padding-top', height)) : sticky.classList.remove('fixed');
}
document.addEventListener('scroll', onScroll);

var email = document.querySelector('.email')
  , auto = document.querySelector('.autosuffix')
  , popularEmails = ['gmail.com', 'googlemail.com', 'hotmail.com', 'yahoo.com', 'msn.com', 'aol.com']
  , itemSelected = 0
  , itemList = [];
window.addEventListener('keyup', function() {
    if (window.event.keyCode === 40) {
        // Down
        if (itemSelected === (itemList.length - 1)) {
            itemSelected = itemList.length - 1;
        } else {
            itemSelected += 1;
        }
    }
    if (window.event.keyCode === 38) {
        // Up
        if (itemSelected === 0) {
            return;
        } else {
            itemSelected -= 1;
        }
    }
    if (window.event.keyCode === 13) {
        // Enter
        email.value = itemList[itemSelected].textContent;
        auto.innerHTML = '';
    }
    for (var i = 0; i < itemList.length; i++) {
        // For loop through all items and add selected class if needed
        if (itemList[i].classList.contains('selected')) {
            itemList[i].classList.remove('selected');
        }
        if (itemSelected === i) {
            itemList[i].classList.add('selected');
        }
    }
    console.log(itemSelected, itemList);
});
email.addEventListener('keyup', function() {
    auto.innerHTML = '';
    if (email.value.match('@')) {
        // If the input has a @ in it
        var afterAt = email.value.substring(email.value.indexOf('@') + 1, email.value.length);
        var popularEmailsSub = [];
        for (var l = 0; l < popularEmails.length; l++) {
            popularEmailsSub.push(popularEmails[l].substring(0, afterAt.length))
        }
        if (afterAt == '') {
            for (var i = 0; i < popularEmails.length; i++) {
                auto.innerHTML += '<li>' + email.value + popularEmails[i] + '</li>';
            }
            itemList = document.querySelectorAll('.autosuffix li');
            itemList[0].classList.add('selected');
        } else if (!(afterAt == '')) {
            var matchedEmails = [];
            for (var k = 0; k < popularEmails.length; k++) {
                if (popularEmailsSub[k].match(afterAt)) {
                    matchedEmails.push(popularEmails[k]);
                }
            }
            for (var i = 0; i < matchedEmails.length; i++) {
                auto.innerHTML += '<li>' + email.value.substring(0, email.value.indexOf('@')) + '@' + matchedEmails[i] + '</li>';
            }
        }
        var itemsList = document.querySelectorAll('.autosuffix li');
        for (var j = 0; j < itemsList.length; j++) {
            itemsList[j].addEventListener('click', function() {
                email.value = this.textContent;
                auto.innerHTML = '';
            });
        }
    }
});
