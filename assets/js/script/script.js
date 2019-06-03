(function($, root, undefined) {
    $(function() {

        if($('.your-class').length){
            $('.your-class').slick(
                {
                    infinite: true,
                    slidesToShow: 3.2,
                    slidesToScroll: 1,
                    focusOnSelect: true,
                    responsive: [
                        {
                            breakpoint: 600,
                            settings: {
                              slidesToShow: 2,
                              slidesToScroll: 2
                            }
                          },
                          {
                            breakpoint: 480,
                            settings: {
                              slidesToShow: 1,
                              slidesToScroll: 1
                            }
                          }
                    ]
                }
            );
        }

    });
})(jQuery, this);

(function($, root, undefined) {
  $(function() {

      if($('.variable-width').length){
          $('.variable-width').slick(
              {
                  infinite: true,
                  slidesToShow: 2.7,
                  slidesToScroll: 1,
                  centerMode: true,
                  responsive: [
                      {
                          breakpoint: 600,
                          settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                          }
                        },
                        {
                          breakpoint: 480,
                          settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                          }
                        }
                  ]
              }
          );
      }

  });
})(jQuery, this);



          