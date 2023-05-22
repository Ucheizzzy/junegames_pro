$(document).ready(function () {
  // alert('born ready')
  // owl carousel
  $('.hero-slider').owlCarousel({
    loop: true,
    margin: 0,
    items: 1,
    smartSpeed: 1000,
    navText: ['PREV', 'NEXT'],
    dots: false,
    nav: true,
    autoplay: true,
    autoplayTimeout: 7000,
    responsive: {
      0: {
        nav: true,
      },
      768: {
        nav: true,
      },
    },
  })

  $('.popular-slider').owlCarousel({
    loop: true,
    nav: false,
    items: 4,
    autoplay: true,
    autoplayTimeout: 4000,
    smartSpeed: 600,
    dots: true,

    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
        margin: 10,
      },
      1000: {
        items: 4,
        margin: 10,
        dots: true,
      },
    },
  })

  $('#team-member').owlCarousel({
    loop: true,
    nav: false,
    items: 3,
    autoplay: true,
    autoplayTimeout: 4000,
    smartSpeed: 600,
    dots: true,
    center: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
        margin: 10,
      },
      1000: {
        items: 3,
        margin: 10,
      },
    },
  })

  $('.subscribe-slider').owlCarousel({
    loop: true,
    nav: true,
    navText: ['PREV', 'NEXT'],
    dots: false,
    smartSpeed: 600,
    items: 1,
    margin: 25,
    autoplay: true,
    autoplayTimeout: 4000,
    responsive: {
      0: {
        nav: true,
      },
      768: {
        nav: true,
      },
    },
  })
})

// faq
//using selectors inside the element
const questions = document.querySelectorAll('.question')

questions.forEach(function (question) {
  const btn = question.querySelector('.question-btn')
  // console.log(btn);

  btn.addEventListener('click', function () {
    // console.log(question);

    questions.forEach(function (item) {
      if (item !== question) {
        item.classList.remove('show-text')
      }
    })

    question.classList.toggle('show-text')
  })
})

//scroll up functionality

$(window).on('load', function () {
  /*-- Preloader-Fade-Out-After-Load-Window --*/
  $('.preloader').fadeOut(500)
  $('body').append(
    '<a href="#" id="scrollUp"><i class="fa-solid fa-arrow-up"></i></a>'
  )
  $('#scrollUp').on('click', function () {
    $('body,html').animate(
      {
        scrollTop: 0,
      },
      500
    )
    return false
  })
})

/*-- Scroll-To-Top --*/
$(window).scroll(function () {
  if ($(this).scrollTop() >= 100) {
    // If page is scrolled more than 50px
    $('#scrollUp').addClass('active') // Fade in the arrow
  } else {
    $('#scrollUp').removeClass('active') // Else fade out the arrow
  }
})

var $el = $('.parallax-bg')
$(window).on('scroll', function () {
  var scroll = $(document).scrollTop()
  $el.css({
    'background-position': '50% ' + +0.4 * scroll + 'px',
  })
})

// subscribe animation
const containerEl = document.querySelector('.subscribe')

const plans = [
  'JGD To 8010 For Daily',
  'JGW To 8010 For Weekly',
  'JGM To 8010 For Monthly',
]

let planIndex = 0

let characterIndex = 0

updateText()

function updateText() {
  characterIndex++
  containerEl.innerHTML = `
    <h1>SMS <span style=''> ${plans[planIndex].slice(
      0,
      characterIndex
    )}</span></h1>
    `

  if (characterIndex === plans[planIndex].length) {
    planIndex++
    characterIndex = 0
  }

  if (planIndex === plans.length) {
    planIndex = 0
  }
  setTimeout(updateText, 400)
}
