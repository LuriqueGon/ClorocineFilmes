const sinopseLoader = () => {
    document.querySelectorAll('.sinopse').forEach((element, idx) => {
    let item = ""
    for(let i = 0 ; i<= 200; i++){
        if(element.textContent[i] == undefined){
            item += ''
        }else{
            item += element.textContent[i]
        }

        
    }
    document.querySelectorAll('.sinopse')[idx].textContent = `${item} ...`
})
}