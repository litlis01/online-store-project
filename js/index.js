$(function(){
  $('.slider-wrap').slick({
    slide: 'div',        //슬라이드 되어야 할 태그
    infinite : true,     //무한 반복 옵션     
    slidesToShow : 1,        // 한 화면에 보여질 컨텐츠 개수
    slidesToScroll : 1,        //스크롤 한번에 움직일 컨텐츠 개수
    speed : 800,     // 다음 버튼 누르고 다음 화면 뜨는데까지 걸리는 시간(ms)
    arrows : true,         // 옆으로 이동하는 화살표 표시 여부
    dots : true,         // 스크롤바 아래 점으로 페이지네이션 여부
    autoplay : true,            // 자동 스크롤 사용 여부
    autoplaySpeed : 2000,         // 자동 스크롤 시 다음으로 넘어가는데 걸리는 시간 (ms)
    pauseOnHover : true,        // 슬라이드 이동    시 마우스 호버하면 슬라이더 멈추게 설정
    vertical : false,        // 세로 방향 슬라이드 옵션
    prevArrow : "<button type='button' class='slick-prev'>Previous</button>",
    nextArrow : "<button type='button' class='slick-next'>Next</button>",
    draggable : true,     //드래그 가능 여부 
    responsive: [ // 반응형 웹 구현 옵션
      {  
        breakpoint: 450, //화면 사이즈 450px
        settings: {
          arrows : false,         // 옆으로 이동하는 화살표 표시 여부
        } 
      },
    ]

  });

  $('.center').slick({
    centerMode: true,
    centerPadding: '60px',
    slide: 'div',        //슬라이드 되어야 할 태그
    infinite : true,     //무한 반복 옵션     
    slidesToShow : 3,        // 한 화면에 보여질 컨텐츠 개수
    slidesToScroll : 1,        //스크롤 한번에 움직일 컨텐츠 개수
    speed : 800,     // 다음 버튼 누르고 다음 화면 뜨는데까지 걸리는 시간(ms)
    arrows : true,         // 옆으로 이동하는 화살표 표시 여부
    autoplay : true,            // 자동 스크롤 사용 여부
    autoplaySpeed : 2000,         // 자동 스크롤 시 다음으로 넘어가는데 걸리는 시간 (ms)
    pauseOnHover : true,        // 슬라이드 이동    시 마우스 호버하면 슬라이더 멈추게 설정
    vertical : false,        // 세로 방향 슬라이드 옵션
    prevArrow : "<button type='button' class='slick-prev'>Previous</button>",
    nextArrow : "<button type='button' class='slick-next'>Next</button>",
    draggable : true,     //드래그 가능 여부 
    responsive: [ // 반응형 웹 구현 옵션
    {  
      breakpoint: 450, //화면 사이즈 400px
      settings: {
        slidesToShow: 2,
        centerPadding: '10px',
        arrows : false,         // 옆으로 이동하는 화살표 표시 여부
      } 
    },
  ]
  });



    $('.slider2').slick({
      slide: 'div',        //슬라이드 되어야 할 태그
      infinite : true,     //무한 반복 옵션     
      slidesToShow : 2,        // 한 화면에 보여질 컨텐츠 개수
      slidesToScroll : 1,        //스크롤 한번에 움직일 컨텐츠 개수
      speed : 800,     // 다음 버튼 누르고 다음 화면 뜨는데까지 걸리는 시간(ms)
      arrows : true,         // 옆으로 이동하는 화살표 표시 여부
      autoplay : true,            // 자동 스크롤 사용 여부
      autoplaySpeed : 2000,         // 자동 스크롤 시 다음으로 넘어가는데 걸리는 시간 (ms)
      pauseOnHover : true,        // 슬라이드 이동    시 마우스 호버하면 슬라이더 멈추게 설정
      vertical : false,        // 세로 방향 슬라이드 옵션
      prevArrow : "<button type='button' class='slick-prev'>Previous</button>",
      nextArrow : "<button type='button' class='slick-next'>Next</button>",
      draggable : true,     //드래그 가능 여부 
      responsive: [ // 반응형 웹 구현 옵션
      {  
        breakpoint: 450, //화면 사이즈 450px
        settings: {
          arrows : false,         // 옆으로 이동하는 화살표 표시 여부
        } 
      },
    ]
    });

});



$(function(){
  $(window).resize(function(){

    var width = window.innerWidth;
    
    if(width < 450){
    
    $('.logotype img').attr('src', './images/symbol.svg')
    
    }
    
    else {$('.logotype img').attr('src', './images/logotype.svg');}
    
    }).resize();
});

$(function () {
  // ここにjQueryのプログラムを記述
  $('.icon').click(function(){
    $('.icon')
      .attr('src', './images/heart1.svg');
    $('.heart1')
      .animate({opacity:0.5}, 1000);
    $('.heart1').fadeOut(1500);
  });

});



