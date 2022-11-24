$.each($('.btn-fav'), (idx, value) => {
    value.addEventListener('click', e =>{
        if(value.querySelector('i').textContent == 'favorite_border'){

            fetch(`../controller/favoritar.php?action=favoritar&id=${idx+1}`)
            value.querySelector('i').textContent = 'favorite'

        }else{
            fetch(`../controller/favoritar.php?action=desfavoritar&id=${idx+1}`)
            value.querySelector('i').textContent = 'favorite_border'

        }        
    })
})
