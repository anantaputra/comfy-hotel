var cc = true
var tf = true
var store = true

function creditCard(){
    if(cc){
        document.getElementById('credit-card-form').classList.remove('hidden')
        document.getElementById('credit-card-form').classList.add('flex')
        document.getElementById('bank-list').classList.add('hidden')
        document.getElementById('store-list').classList.add('hidden')
        cc = false
    } else {
        document.getElementById('credit-card-form').classList.add('hidden')
        document.getElementById('bank-list').classList.add('hidden')
        document.getElementById('store-list').classList.add('hidden')
        cc = true
    }
}

function transfer(){
    if(tf){
        document.getElementById('bank-list').classList.remove('hidden')
        document.getElementById('bank-list').classList.add('flex')
        document.getElementById('credit-card-form').classList.add('hidden')
        document.getElementById('store-list').classList.add('hidden')
        tf = false        
    } else {
        document.getElementById('bank-list').classList.add('hidden')
        document.getElementById('credit-card-form').classList.add('hidden')
        document.getElementById('store-list').classList.add('hidden')
        tf = true
    }
}

function storePay(){
    if(store){
        document.getElementById('store-list').classList.remove('hidden')
        document.getElementById('store-list').classList.add('flex')
        document.getElementById('bank-list').classList.add('hidden')
        document.getElementById('credit-card-form').classList.add('hidden')
        store = false
    } else {
        document.getElementById('store-list').classList.add('hidden')
        document.getElementById('bank-list').classList.add('hidden')
        document.getElementById('credit-card-form').classList.add('hidden')
        store = true
    }
}