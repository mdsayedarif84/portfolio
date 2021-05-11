




// Gallery javaScript start
    $('#img1').click( function (){
        let galleryImg1     =   $(this).attr('src');
        $('#galleryMainImage').attr('src',galleryImg1);
    });
    $('#img2').click( function (){
        let galleryImg1     =   $(this).attr('src');
        $('#galleryMainImage').attr('src',galleryImg1);
    });
    $('#img3').click( function (){
        let galleryImg1     =   $(this).attr('src');
        $('#galleryMainImage').attr('src',galleryImg1);
    });
    $('#img4').click( function (){
        let galleryImg1     =   $(this).attr('src');
        $('#galleryMainImage').attr('src',galleryImg1);
    });
    $('#img5').click( function (){
        let galleryImg1     =   $(this).attr('src');
        $('#galleryMainImage').attr('src',galleryImg1);
    });
// Gallery javaScript End

// signUp JavaScript start
    $('#firstName').click(function (){
        $('#firstNameError').text('FirstName Must Be 5 to 10 character ');
    });
    // $('#firstName').blur(function (){
    //     $('#firstNameError').text(' ');
    // });
    // $('#firstName').keyup(function (){
    //     let firstNameLength  =   $('#firstName').val().length;
    //     if (firstNameLength >=8 && firstNameLength <= 10 ){
    //         $('#firstNameError').text(' ');
    //     }else {
    //         $('#firstNameError').text('firstName should be');
    //     }
    // });
