document.querySelector('#your_info').classList.add('rounded-b-md')

function showYourInfo(){
    document.querySelector('#detail_your_info').style.display = 'block'
    document.querySelector('#your_info').classList.remove('rounded-b-md')
    document.querySelector('.expand-your').classList.add('hidden')
    document.querySelector('.show-your').classList.remove('hidden')
    document.querySelector('#detail_info').classList.add('hidden')
    document.querySelector('#detail').classList.add('rounded-b-md')
    document.querySelector('.expand-detail').classList.remove('hidden')
    document.querySelector('.show-detail').classList.add('hidden')
}

function showDetail(){
    document.querySelector('#detail_info').classList.remove('hidden')
    document.querySelector('#detail').classList.remove('rounded-b-md')
    document.querySelector('.expand-detail').classList.add('hidden')
    document.querySelector('.show-detail').classList.remove('hidden')
    document.querySelector('#detail_your_info').style.display = 'none'
    document.querySelector('#your_info').classList.add('rounded-b-md')
    document.querySelector('.expand-your').classList.remove('hidden')
    document.querySelector('.show-your').classList.add('hidden')
}

function nextInfo(){
    showYourInfo()
}

document.querySelector('#detail').addEventListener('click', function(){
    showDetail()
})
