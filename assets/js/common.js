$( document ).ready(function() {
  $('body').addClass('ready');

  const scrollAnim = () => {
    if($(window).scrollTop() > 100){
      $('.header').addClass('white');
    } else {
      $('.header').removeClass('white');
    }
    $('section').map((index, block) => {
      let isShowClass = $(block).hasClass('show');
      let isSectionInWindow = $(block).offset().top - $(window).scrollTop() - $(window).height() / 4 * 3 > 0;
      if(!isShowClass && !isSectionInWindow){
        $(block).addClass('show');
      }
    });
  };

  $('.header-menu a[href^="#"]').click(function(e){
    e.preventDefault();
    $('.header-menu a').removeClass('active');
    $('#nav-icon3').removeClass('open');
    $(this).addClass('active');
    const el = $(this).attr('href').slice(1);
    document.getElementById(el).scrollIntoView({ behavior: 'smooth', block: 'start' });
  });

  $(window).scroll(function() {
    scrollAnim();
  });
  scrollAnim();
});

function getRandomInt(min, max) {
  return Math.floor(Math.random() * (max - min)) + min;
};

$('.svgAnimate').each(function(){
  $(this).attr('data-parallax', `{"y": 200, "smoothness": ${getRandomInt(1, 50)}}`);
});

$('#nav-icon3').click(function(){
	$(this).toggleClass('open');
});
