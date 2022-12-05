
function addOne(id) {
    let currValue = document.getElementById(`cantidadRequerida${id}`)
    currValue.textContent = parseInt(currValue.textContent) + 1
}

function substractOne(id) {
    let currValue = document.getElementById(`cantidadRequerida${id}`)
    if (currValue.textContent != 0) {
        currValue.textContent = parseInt(currValue.textContent) - 1
    }
}

