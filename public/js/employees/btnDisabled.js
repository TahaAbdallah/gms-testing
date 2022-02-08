document.addEventListener('DOMContentLoaded', () => {

    let myBtn = document.querySelectorAll('.btn');
    myBtn.forEach(function (btn) {

        btn.addEventListener('click', () => {
            myBtn.forEach(b => b.classList.remove('disabled'));
            btn.classList.add('disabled');
        });

    });

});