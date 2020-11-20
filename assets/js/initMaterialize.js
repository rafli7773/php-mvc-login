const toasts = () => {
    const toastsGua = document.querySelector('.toasts-gua');
    if (toastsGua) {
        M.toast({
            html: toastsGua,
            classes: 'green'
        });
    }
}

const navbar = () => {
    document.addEventListener('DOMContentLoaded', function () {
        var elems = document.querySelectorAll('.sidenav');
        M.Sidenav.init(elems);
    });
}

const modal = () => {

    document.addEventListener('DOMContentLoaded', function () {
        var elems = document.querySelectorAll('.modal');
        M.Modal.init(elems);
    });
}

const select = () => {
    document.addEventListener('DOMContentLoaded', function () {
        var elems = document.querySelectorAll('select');
        M.FormSelect.init(elems);
    });
}

const tooltip = () => {
    document.addEventListener('DOMContentLoaded', function () {
        var elems = document.querySelectorAll('.tooltipped');
        M.Tooltip.init(elems);
        document.querySelectorAll('.tooltipped').forEach(elem => {
            var instance = M.Tooltip.getInstance(elem);
            instance.options.enterDelay = 1000;
        })
    });
}

toasts();
navbar();
modal();
select();
tooltip();