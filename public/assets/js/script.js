// js local storage check
function storageCheck() {
    if (typeof (Storage) !== "undefined") {
        return true;
    } else {
        alert('browser anda tidak support local storage!')
        return false;
    }
}

const listNav = document.querySelectorAll('.klik_menu');

// ajax navigators
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

// show content when refresh with local storage
if (storageCheck()) {
    if (localStorage.getItem('navigator') != null) {
        switch (localStorage.getItem('navigator')) {
            case 'home':
                navHome();
                break;
            case 'tentang':
                console.log('anu');
                navTentang();
                break;
            case 'sosmed':
                navSosmed();
                break;
            case 'tutorial':
                navTutorial();
                break;
            default:
                navHome();
                break;
        }
    }
}

function navHome() {
    var nav = 'home';
    listNav[0].className = 'klik_menu btn-active';
    listNav[1].className = 'klik_menu';
    listNav[2].className = 'klik_menu';
    listNav[3].className = 'klik_menu';

    const CSRF_TOKEN = $('meta[name="csrf_token"]').attr('content');

    $.ajax({
        url: '/home',
        type: 'post',
        data: {
            CSRF_TOKEN
        },
        success: function (data) {
            $('div.badan').html(data);
            if (storageCheck) {
                localStorage.setItem('navigator', nav);
            }
        },
    })
}

function navTentang() {
    var nav = 'tentang';
    listNav[0].className = 'klik_menu';
    listNav[1].className = 'klik_menu btn-active';
    listNav[2].className = 'klik_menu';
    listNav[3].className = 'klik_menu';

    const CSRF_TOKEN = $('meta[name="csrf_token"]').attr('content');

    $.ajax({
        url: '/tentang',
        type: 'post',
        data: {
            CSRF_TOKEN
        },
        success: function (data) {
            // console.log(data);
            $('div.badan').html(data);
            if (storageCheck) {
                localStorage.setItem('navigator', nav);
            }
        }
    })
}

function navSosmed() {
    var nav = 'sosmed';
    listNav[0].className = 'klik_menu';
    listNav[1].className = 'klik_menu';
    listNav[2].className = 'klik_menu';
    listNav[3].className = 'klik_menu btn-active';

    const CSRF_TOKEN = $('meta[name="csrf_token"]').attr('content');

    $.ajax({
        url: '/sosmed',
        type: 'post',
        data: {
            CSRF_TOKEN
        },
        success: function (data) {
            // console.log(data);
            $('div.badan').html(data);
            if (storageCheck) {
                localStorage.setItem('navigator', nav);
            }
        }
    })
}

function navTutorial() {
    var nav = 'tutorial';
    listNav[0].className = 'klik_menu';
    listNav[1].className = 'klik_menu';
    listNav[2].className = 'klik_menu btn-active';
    listNav[3].className = 'klik_menu';

    const CSRF_TOKEN = $('meta[name="csrf_token"]').attr('content');

    $.ajax({
        url: '/tutorial',
        type: 'post',
        data: {
            CSRF_TOKEN
        },
        success: function (data) {
            // console.log(data);
            $('div.badan').html(data);
            if (storageCheck) {
                localStorage.setItem('navigator', nav);
            }
        }
    })
}
